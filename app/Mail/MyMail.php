<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $bisnis;
    public $overview;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$bisnis,$overview)
    {
        //
        $this->email=$email;
        $this->bisnis=$bisnis;
        $this->overview=$overview;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('gopego550@gmail.com')
                    ->view('email.Request');
    }
}
