<?php

namespace App\Mail;

use App\Models\Campaign;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CampaignMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Creamos las instancias públicas para que estén disponibles en la vista de blade.
     */
    public function __construct(public Campaign $campaign, public Subscriber $subscriber)
    {
        //
    }

    /**
     * Definimos el asunto y el remitente del correo.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->$campaign->asunto,
            from: new Address('no-reply@dominio.com', 'Dominio com')
        );
    }

    /**
     * Definimos la vista y los datos adicionales.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.campaign',
            with: [
                'content' => $this->campaign->contenido,
                'subscriberName' => $this->subscriber->nombre
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
