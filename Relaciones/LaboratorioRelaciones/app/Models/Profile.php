<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // RELACION UNO A UNO REVERSO
    public function user(){
        return $this->belongsTo(Profile::class);
    }
}
