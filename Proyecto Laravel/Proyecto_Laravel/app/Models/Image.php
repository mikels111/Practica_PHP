<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';

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
        //user_id es la columna que tiene la tabla Images
        return $this->belongsTo('App\User','user_id');
    }
}
