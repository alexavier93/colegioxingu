<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrabalheConoscoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $mail = $this->subject('Trabalhe Conosco')
        ->replyTo($this->data['email'])
        ->markdown('mail.trabalhe')
        ->with('data', $this->data);

        if ($this->data['files']) {

            $file = $this->data['files'];

            $mail->attach($file->getRealPath(), [
                'as' => $file->getClientOriginalName(), 
                'mime' => $file->getMimeType()
            ]);
         
        }

        return $mail;
    }
}
