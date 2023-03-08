<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;
    public $remitente;

    public function __construct($data,$remitente)
    {
        $this->data = $data;    
        $this->remitente = $remitente;
    }

    public function build(){
        return $this->from('jimenezkev1040@gmail.com', env('MAIL_FROM_NAME'))
            ->view('test')
            ->subject('Titulo del Correo')
            ->with($this->data);
    }
}
