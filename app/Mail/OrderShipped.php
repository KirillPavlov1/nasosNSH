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
    public $text;
    /**
     * Create a new message instance.
     * 
     * @return void
     */
    public function __construct($name, $phone, $text)
    {
        $this->name = $name;
        $this->phone = $phone;
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
                'text' => $this->text
            ]);
    }
}
