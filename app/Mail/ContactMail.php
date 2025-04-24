<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $f_name;
    public $l_name;
    public $email;
    public $phone;
    public $profession;
    public $content;

    /**
     * Create a new message instance.
     */
    public function __construct($f_name,$l_name,$email,$phone,$profession,$content)
    {
        $this->f_name = $f_name;
        $this->l_name = $l_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->profession = $profession;
        $this->content = $content;
    }


    // public function build(){
    //     return $this->subject('New Contact Message From NextChapter')
    //                 ->view('mails.contact');
    // }



    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Message From NextChapter',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.contact',
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
