<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;
    public $text;
    /**
     * Create a new message instance.
     * 
     * @return void
     */
    public function __construct($name, $phone, $email, $text)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('насосыНШ.рф')
            ->view('email.recall', [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'text' => $this->text
            ]);
    }
}
