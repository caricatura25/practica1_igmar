<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{   
    public function comentarios()
    {
        return $this->hasMany('App\comentarios');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id', 'titulo', 'contenido',
    ];
}
