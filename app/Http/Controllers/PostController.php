<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function mostrar()
    {
        return Post::all();
    }
    public function insertar(Request $Request)
    {
        $variable=Post::create($Request->all());
        return $variable;
    }
    public function eliminar($id)
    {
        $delete=Post::find($id);
        $delete->delete();

        return response()->json(200);
    }
    public function update(Request $refresh, $id)
    {
        $actu = Post::find($id);
    $actu->titulo = $refresh ->input('titulo');
    $actu->contenido = $refresh ->input('contenido');
    $actu->save();
    return response()->json(200);
    }
    public function VerComentarios($id)
    {
        $resultado=Post::join('comentarios','comentarios.post_id','=','posts.id')->select('comentarios.*')->where('posts.id','=',$id)->get();
        return response()->json($resultado,200);
    }
}
