<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // RELACION UNO A MUCHOS INVERSA

    private function user(){
        return $this->belongsTo(User::class);
    }

    // RELACION POLIMORFICA
    private function commentable(){
        return $this->morphTo();
    }



}
