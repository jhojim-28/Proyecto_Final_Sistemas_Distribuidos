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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return taxis list
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $taxis = Taxis::all();

        return $this->successResponse($taxis);
    }

    /**
     * Create an instance of Taxis
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
     * Return an specific taxis
     * @return Illuminate\Http\Response
     */
    public function show($taxis)
    {
        $taxis = Taxis::findOrFail($taxis);

        return $this->successResponse($taxis);
    }

    /**
     * Update the information of an existing taxis
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
     * Removes an existing taxis
     * @return Illuminate\Http\Response
     */
    public function destroy($taxis)
    {
        $taxis = Taxis::findOrFail($taxis);

        $taxis->delete();

        return $this->successResponse($taxis);
    }
}
