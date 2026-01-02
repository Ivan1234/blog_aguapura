<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Campaign;
use App\Mail\ConfirmSubscriptionMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class NewsLetterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $subscriber = Subscriber::create([
            'email' => $validated['email'],
            'token' => Str::uuid(),
        ]);

        Mail::to($subscriber->email)->queue(
            new ConfirmSubscriptionMail($subscriber)
        );

        return response()->json(['message' => 'Confirma tu correo']);
    }

    public function confirm($token)
    {
        $subscriber = Subscriber::where('token', $token)->firstOrFail();

        $subscriber->markAsConfirmed();

        return view('newsletter.confirmed');
    }

    public function store(Request $request)
    {   
        $validated = $request->validate([
            'asunto'        => 'required|string|max:255',
            'contenido'     => 'required',
            'schedule_at'   => 'nullable|date'
        ]);

        Campaign::create($validated);

        return back()->with('success', 'Campaña creada correctamente');
    }
}
