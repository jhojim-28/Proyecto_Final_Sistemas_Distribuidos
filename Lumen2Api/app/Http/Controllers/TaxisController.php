<?php

namespace App\Http\Controllers;

use App\Models\Taxis;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaxisController extends Controller
{
    use ApiResponser;

    /**
     * crea una intancia del controlador
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retorna una lista de taxis
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $taxis = Taxis::all();

        return $this->successResponse($taxis);
    }

    /**
     * Crea una instacia para Taxis
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'destino' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'precio' => 'required|min:1',
            'author_id' => 'required|min:1',
        ];

        $this->validate($request, $rules);

        $taxis = Taxis::create($request->all());

        return $this->successResponse($taxis, Response::HTTP_CREATED);
    }

    /**
     * Devolve un taxis específico 
     * @return Illuminate\Http\Response
     */
    public function show($taxis)
    {
        $taxis = Taxis::findOrFail($taxis);

        return $this->successResponse($taxis);
    }

    /**
     * Actuliza la infomacion del taxis existente 
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $taxis)
    {
        $rules = [
            'destino' => 'max:255',
            'descripcion' => 'max:255',
            'precio' => 'min:1',
            'author_id' => 'min:1',
        ];

        $this->validate($request, $rules);

        $taxis = Taxis::findOrFail($taxis);

        $taxis->fill($request->all());

        if ($taxis->isClean()) {
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $taxis->save();

        return $this->successResponse($taxis);
    }

    /**
     * Elimina a taxis existente 
     * @return Illuminate\Http\Response
     */
    public function destroy($taxis)
    {
        $taxis = Taxis::findOrFail($taxis);

        $taxis->delete();

        return $this->successResponse($taxis);
    }
}
