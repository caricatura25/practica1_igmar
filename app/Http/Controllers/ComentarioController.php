<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentarios;

class ComentarioController extends Controller
{
    public function mostrar()
    {
        return comentarios::all();
    }
    public function insertar(Request $r)
    {
        $comen=comentarios::create($r->all());
      return $comen;  
    }
    public function eliminar($id)
    {
        $delete=comentarios::find($id);
        $delete->delete();
        return response()->json(200);
    }
    public function update(Request $refresh, $id)
    {
        $actu = comentarios::find($id);
    $actu->contenido = $refresh ->input('contenido');
    $actu->save();
    return response()->json(200);
    }
}
