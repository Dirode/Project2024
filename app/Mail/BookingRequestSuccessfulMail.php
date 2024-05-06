<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingRequestSuccessfulMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $booking;
    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Booking $booking)
    {
        $this->user=$user;
        $this->booking=$booking;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking Request Successful Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.booking-request-successful-mail',
            with: [
                'user'=> $this->user,
                'booking'=> $this->booking,
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
