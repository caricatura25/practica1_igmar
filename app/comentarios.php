<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    public function post()
    {
        return $this->belongsTo('App\post');
    }
    protected $fillable = [
        'post_id', 'user_id','contenido',
    ];
}
