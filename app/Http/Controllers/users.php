<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class users extends Controller
{
    public function mostrar()
    {
        return User::all();
    }
    public function store(Request $r)
    {
        $usuario=User::create($r->all());
      return $usuario;  
    }
    public function eliminar($id)
    {
        $delete=User::find($id);
        $delete->delete();

        return response()->json(200);
    }
    public function update($id)
    {
        $actu = User::find($id);
    $actu->name = 'enrique';
    $actu->save();
    return response()->json(200);
    }
}
