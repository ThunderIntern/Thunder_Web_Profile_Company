<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class joinmail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $bidang;
    public $upload;
    public $letter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$bidang,$upload,$letter)
    {
        //
        $this->email=$email;
        $this->bidang=$bidang;
        $this->upload=$upload;
        $this->letter=$letter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('gopego550@gmail.com')
                    ->view('email.join');
    }
}
