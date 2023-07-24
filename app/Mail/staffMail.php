<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class staffMail extends Mailable
{
    use Queueable, SerializesModels;
    public $usermail;
    /**
     * Create a new message instance.
     */
    public function __construct($usermail)
    {
        $this->usermail=$usermail;
    }
    public function build(){
        return $this->markdown("dashboard.staff.mailtemplate")->subject(config("app.name").",Email");
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Staff Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email',
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
