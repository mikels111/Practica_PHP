<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table = 'likes';

     //Relación One to Many
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    //Relacion One to Many
    public function likes(){
        return $this->hasMany('App\Like');
    }

    //Relación de Muchos a Uno
    public function user(){
        //user_id es la columna que tiene Images
        return $this->belongsTo('App\User','user_id');
    }
}
