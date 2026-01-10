<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email'     => 'required|email|string',
            'password'  => 'required|string'
        ]);

        $rememberme = $request->boolean('remember');

        if(Auth::attempt($validated, $rememberme)){
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'))->with('status', '¡Bienvenido de nuevo!');
        }

        return back()->withErrors(['email' => __('auth.failed')])->withInput($request->only('email'));
    }

    public function showRegisterForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $validated = $request->validated([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone'     => 'required|string|max:20',
            'password'  => 'required|string|min:8|confirmed'
        ]);

        Users::create([
            'name'          => $validated['name'],
            'email'         => $validated['email'],
            'phone_number'  => $validated['phone'],
            'password'      => Hash::make($validated['password'])
        ]);

        Auth::login($user);

        return redirect()->route('admin.dashboard')->with('success', '¡Cuenta creada con éxito! Bienvenido.');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    public function showFPForm(){
        return view('auth.forgot-password');
    }

    public function forgotPassword(Request $request){
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]); 
    }

    public function showRPForm($token){
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request){
        $request->validate([
            'token'     => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', 'Contraseña restablecida')
            : back()->withErrors(['email' => __($status)]);
    }
}
