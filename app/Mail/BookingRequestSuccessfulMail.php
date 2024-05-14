<?php

namespace App\Mail;

use App\Models\User;

use App\Models\Booking;

use App\Models\Hall;

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

    public $userName;

    public $booking;

    public $hallName;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Booking $booking)
    {
        $this->user=$user;
  
        $this->booking=$booking;

          // Fetch the hall name based on hall_id
          $this->hallName = Hall::findOrFail($booking->hall_id)->name;

           // Fetch the user name based on user_id in the booking table
          $this->userName = User::findOrFail($booking->user_id)->name;
        
        
  
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
                'hallName' => $this->hallName, // Pass the hall name to the markdown template
                
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
