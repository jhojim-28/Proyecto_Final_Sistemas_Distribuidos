<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * Crea una nueva instancia de controlador
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index()//Retorna la lista de Autores por medio de eloquent
    {
        $authors = Author::all();

        return $this->successResponse($authors);
    }
    /**
     * Crea una instancia de Author
     * @return Illuminate\Http\Response
     */
    /**
     * Crea una instancia de Author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Reglas para los campos y en la peticion
        $rules = [
            'nombre' => 'required|max:255',
            'ubicacion' => 'required|max:255',
            'mpago' => 'required|max:255|in:tarjeta,efectivo',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);//201
    }

    /**
     * Devuelve un Author específico
     * @return Illuminate\Http\Response
     */
    public function show($author)
    {
        $author = Author::findOrFail($author);//Recive id y dice si encuentra o no

        return $this->successResponse($author);
    }

    /**
     * Actuliza la infomacion del Author existente
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        $rules = [
            'nombre' => 'max:255',
            'ubicacion' => 'max:255',
            'mpago' => 'max:255|in:tarjeta,efectivo',
        ];

        $this->validate($request, $rules);

        $author = Author::findOrFail($author);

        $author->fill($request->all());

        if ($author->isClean()) {
            return $this->errorResponse('Almenos un valor debe Cambiar', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $author->save();

        return $this->successResponse($author);

    }

    /**
     * Elimina un author existente
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {
        $author = Author::findOrFail($author);

        $author->delete();

        return $this->successResponse($author);
    }
}
