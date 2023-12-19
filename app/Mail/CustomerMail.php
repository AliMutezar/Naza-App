<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $customerName;
    public $customerPhone;

    /**
     * Create a new message instance.
     */
    public function __construct($customerName, $customerPhone)
    {
        $this->customerName = $customerName;
        $this->customerPhone = $customerPhone;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(
                env('MAIL_FROM_ADDRESS', 'support@nazaconsults.com'),
                env('MAIL_FROM_NAME', 'Naza'),
            ),
            replyTo: [
                new Address('aamutezar@gmail.com', 'Info Naza Test'),
            ],
            subject: 'Lets Growth Together',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.contact',
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
