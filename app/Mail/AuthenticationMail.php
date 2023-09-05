<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AuthenticationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $credentioal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($credentioal)
    {
        $this->credentioal = $credentioal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Login Credentials ')->view('credentioal');
    }
}
