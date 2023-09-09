<?php

namespace App\Mail;

use App\Models\Mouton;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactPourMoutonMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public Mouton $mouton, public array $data)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Pour Mouton Mail',
        );
    }

    /**
     * Get the message content definition.
     *//*
    public function content(): Content
    {
        return new Content(
            view: 'emails.mouton.contactMouton',
        );
    }*/

    public function build()
    {
        return $this->subject('Bienvenue sur notre site')
                    ->view('emails.mouton.contactMouton'); // Le nom de la vue pour le contenu de l'e-mail
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
