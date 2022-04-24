<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/** 
     * @OA\Info( 
     * version="1.0.0", 
     * title="Api para aula da Pós", 
     * description="Criação de uma Api com crud de Posts", 
     * @OA\Contact( 
     * email= "junior.siqueira.ti@gmail.com" 
     * ), 
     * @OA\License( 
     * name="Apache 2.0", 
     * url="http://www.apache.org/licenses/LICENSE-2.0.html" 
     * ) 
     * ) 
     * 
     * 
     * @OA\Tag(
     *     name="Posts",
     *     description="Endpoints da API de Posts"
     * )
     */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
