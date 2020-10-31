<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class users extends Controller
{
    public function mostrar()
    {
        return User::all();
    }
    public function insertar(Request $r)
    {
        $insertar=new User();
        $insertar->persona_id = $r ->input('persona_id');
        $insertar->name = $r ->input('name');
        $insertar->email = $r ->input('email');
        $insertar->password = Hash::make($r -> input('password'));
        $insertar->save();
        return response()->json($r,200);  
    }
    public function eliminar($id)
    {
        $delete=User::find($id);
        $delete->delete();
        return response()->json(200);
    }
    public function update(Request $refresh, $id)
    {
    $actu = User::find($id);
    $actu->name = $refresh ->input('name');
    $actu->email = $refresh ->input('email');
    $actu->password = Hash::make($refresh -> input('password'));
    $actu->save();
    return response()->json(200);
    }
}
