<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personas;
use Illuminate\Validation\ValidationException;
class PersonasController extends Controller
{
    public function mostrar()
    {
        return personas::all();
    }
    public function insertar(Request $r)
    {
        $insertar=new personas();
        $insertar->nombre = $r ->input('nombre');
        $insertar->apellido = $r ->input('apellido');
        $insertar->correo = $r ->input('correo');
        $insertar->edad = $r ->input('edad');
        $insertar->genero = $r -> input('genero');
        $insertar->save();
        return response()->json($r,200);  
    }
    public function eliminar($id)
    {
        $delete=personas::find($id);
        $delete->delete();
        return response()->json(200);
    }
    public function update(Request $refresh, $id)
    {
    $actu = personas::find($id);
    $actu->nombre = $refresh ->input('nombre');
    $actu->apellido = $refresh ->input('apellido');
    $actu->correo = $refresh ->input('correo');
    $actu->edad = $refresh ->input('edad');
    $actu->genero = $refresh ->input('genero');
    $actu->save();
    return response()->json(200);
    }
    public function registroT(Request $request)
    {
        $request->validate([
        'email'=>'requiered|email'
        ,'password'=>'required'
        ,'name'=>'required']);
        $personas = new personas();
        $personas ->nombre = $request->name;
        $personas ->apellidos = $request->apellidos;
        $personas ->correo = $request->email;
        $personas ->edad = $request->edad;
        $personas ->genero = $request->genero;
        $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = Hash::make($request->email);
        if($user->save())
        return response()->json($personas,201);
        return abort(400,"Error al generar registro");
    }
}
