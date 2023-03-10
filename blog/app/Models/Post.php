<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // RELACION UNO A MUCHOS INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }


    // RELACION UNO A MUCHOS
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // RELACION UNO A UNO POLIMORFICA
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
    


}
