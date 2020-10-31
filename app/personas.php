<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    public function Users()
    {
        return $this->hasOne('App\User');
    }
    protected $fillable = [
        'nombre', 'apellido','correo','edad','genero',
    ];
}
