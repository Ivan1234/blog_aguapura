<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Campaign;
use App\Jobs\SendCampaignJob;
use App\Mail\ConfirmSubscriptionMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class NewsLetterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns|unique:subscribers,email',
            'nombre' => 'required|string|min:3|regex:/^[a-zA-ZÀ-ÿ\s\'\.\-]+$/u'
        ],[
            'nombre.regex' => 'El nombre contiene caracteres no permitidos'
        ]);

        $subscriber = Subscriber::create([
            'email' => $validated['email'],
            'nombre' => $validated['nombre'],
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

    public function unsubscribe($token)
    {
        $subscriber = Subscriber::where('token', $token)->first();

        if(!$subscriber){
            return response()->view('newsletter.error', [
                'message' => 'Enlace de baja inválido'
            ], 404);
        }

        $subscriber->update([
            'confirmed' => false
        ]);

        $subscriber->delete();

        //Vista de despedida
        return view('newsletter.unsubscribed_success');
    }

    public function envioMasivo(Campaign $campaign)
    {
        try{
            //Se verifica que la campaña no haya sido ya enviada o este en proceso
            if($campaign->status === 'enviado' || $campaign->status === 'procesando'){
                return back()->with('error', 'Esta campaña ya ha sido enviada o esta en proceso.');
            }

            //Se actualiza el status a procesando, de esta forma el scheduler del kernel ya no lo tomará
            $campaign->update([
                'status'        => 'procesando',
                'scheduled_at'  => now()
            ]);

            //Despachar el job a la cola
            SendCampaignJob::dispatch($campaign);

            return back()->with('success', 'La campaña se ha puesto en cola y comenzará a enviarse en unos momentos');
        }catch(\Exception $e){
            $campaign->update([
                'status' => 'borrador'
            ]);

            Log::error("Error al intentar enviar la campaña {$campaign->id}: " . $e->getMessage());

            return back()->with('error', 'Ocurrió un error al intentar procesar el envío.');
        }
    }

    public function programarCampania(Request $request, Campaign $campaign)
    {
        $validated = $request->validate([
            'scheduled_at' => 'required|date|after:now'
        ]);

        $campaign->update([
            'status'        => 'programado',
            'scheduled_at'  => $validated['scheduled_at'] 
        ]);

        return back()->with('success', 'Campaña programada exitosamente para el' . $campaign->scheduled_at);
    }
}
