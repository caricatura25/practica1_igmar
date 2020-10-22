<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentarios;

class ComentarioController extends Controller
{
    public function ver()
    {
        return comentarios::all();
    }
    public function poner(Request $r)
    {
        $comen=comentarios::create($r->all());
      return $comen;  
    }
    public function quitar($id)
    {
        $delete=comentarios::find($id);
        $delete->delete();
        return response()->json(200);
    }
    public function mejorar($id)
    {
        $actu = comentarios::find($id);
    $actu->contenido = ' ';
    $actu->save();
    return response()->json(200);
    }
}
