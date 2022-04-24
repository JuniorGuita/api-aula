<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @OA\Schema(
 *     title="Post",
 *     description="Descrição dos elementos do model Post",
 *     @OA\Xml(
 *         name="Post"
 *     )
 * )
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="bigint(20)",
     *     example=123
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="title",
     *      description="Título do Post",
     *      format="varchar(255)",
     *      example="Aconteceu hoje no Brasil"
     * )
     *
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *      title="Content",
     *      description="Conteúdo do Post",
     *      format="text",
     *      example="Aqui vai o conteúdo do post"
     * )
     *
     * @var string
     */
    public $content;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Data de criação do Post",
     *     example="2020-01-27 17:50:45",
     *     format="timestamp",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Data de atualização do Post",
     *     example="2020-01-27 17:50:45",
     *     format="timestamp",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;
}
