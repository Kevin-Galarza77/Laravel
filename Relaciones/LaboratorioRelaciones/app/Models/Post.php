<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // RELACION UNO A MUCHOS INVERSA

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // RELACION UNO A UNO POLIMORFICA
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    // RELACION UNO A MUCHOS POLIMORFICA
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    // RELACION MUCHOS A MUCHOS POLIMORFICA
    public function posts(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
