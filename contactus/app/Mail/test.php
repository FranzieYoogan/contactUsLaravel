<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class test extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $userName;
     public $subject;
     public $content;
    

    public function __construct($userName, $subject, $content)
    {

        $this->userName = $userName;
        $this->subject = $subject;
        $this->content = $content;
       
    }

    /**
     * Get the content envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Its Franzie Here',
    //     );
    // }

    /**
     * Get the content content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contact',
            with: [ 'userName' => $this->userName, 'subject' => $this->subject, 'content' => $this->content]
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
