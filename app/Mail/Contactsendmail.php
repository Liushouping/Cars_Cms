<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactsendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $body;
    public $name;
    public $email;

    public function __construct($body, $name, $email)
    {
        //
        $this->body = $body;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact')
                    ->subject('CARGOBACK')
                    ->with([
                        'body' => $this->body,
                        'name' => $this->name,
                        'email' => $this->email,
                    ]);
    }
}


