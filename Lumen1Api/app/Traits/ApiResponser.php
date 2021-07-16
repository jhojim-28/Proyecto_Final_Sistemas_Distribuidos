<?php

namespace App\Traits;

use Illuminate\Http\Response;  //Codigos de estado de http

trait ApiResponser
{
    /**
     * Respuesta exitosa
     * @param  string|array $Dato
     * @param  int $Code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }

    /**
     * Respuesta erronea 
     * @param  string $Mensaje
     * @param  int $Code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

}