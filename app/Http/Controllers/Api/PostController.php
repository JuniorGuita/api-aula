<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    
    public function index()
    {
        return response()->json(Post::all());
    }
    
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return response()->json([
            'post' => $post
        ], Response::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return response()->json([
            'post' => $post
        ], Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();

        return response()->json([
            'message' => 'Arquivo apagado com sucesso!'
        ], Response::HTTP_ACCEPTED);
    }
}
