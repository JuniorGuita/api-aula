<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @OA\Get(
     *      path="/posts",
     *      tags={"Posts"},
     *      summary="Recupera a listagem de Posts",
     *      description="Retorna uma lista com todos os posts cadastrados na base.",
     *      @OA\Response(
     *          response=200,
     *          description="Sucesso"
     *       ),
     *     )
     */
    public function index()
    {
        return response()->json(Post::all());
    }
    
    /**
     * @OA\Post(
     *      path="/post",
     *      tags={"Posts"},
     *      summary="Insere um novo Post",
     *      description="Insere e retorna os dados do Post cadastrado",
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="content",
     *                     type="string"
     *                 ),
     *                 example={"title": "Título do Post", "content": "Conteúdo do Post"}
     *             )
     *         )
     *     ),
     *     @OA\Parameter(
     *          name="title",
     *          description="Título do Post",
     *          required=true,
     *          in="path",
     *      ),
     *      @OA\Parameter(
     *          name="content",
     *          description="Conteúdo do Post",
     *          required=true,
     *          in="path",
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Sucesso"
     *       ),
     * )
     */
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

    /**
     * @OA\Put(
     *      path="/post/{id}",
     *      tags={"Posts"},
     *      summary="Atualiza um Post existente",
     *      description="Atuliza um Post através de seu ID",
     *      @OA\Parameter(
     *          name="id",
     *          description="Post id",
     *          required=true,
     *          in="path",
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Sucesso"
     *       ),
     * )
     */
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

    /**
     * @OA\Delete(
     *      path="/post/{id}",
     *      tags={"Posts"},
     *      summary="Exclui um Post existente",
     *      description="Exclui o registro de um Post passando o ID",
     *      @OA\Parameter(
     *          name="id",
     *          description="Post id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Sucesso"
     *       ),
     * )
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();

        return response()->json([
            'message' => 'Arquivo apagado com sucesso!'
        ], Response::HTTP_ACCEPTED);
    }
}
