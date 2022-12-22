<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{

    public function entrar(){
        return view('home');
    }

    public function home(){
        return view('categorias');
    }


    public function categorias($categoria){
        if ($categoria == 'Cerveza') {
            return view('Cerveza',['categoria'=>$categoria]);
        }else{
            return view('Licor',['categoria'=>$categoria]);
        }
    }

}
