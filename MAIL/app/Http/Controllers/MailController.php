<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details=[
            'title' => 'Correo gmail Prueba 1',
            'body' => 'Este es un correo electronico de prueba usando el servidor SMTP'
        ];
        Mail::to("gabyscorrea@hotmail.es") -> send(new TestMail($details));
        return "Correo Electronico enviado con exito :D";
    }
}
