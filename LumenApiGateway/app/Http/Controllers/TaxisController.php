<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\TaxisService;
use Illuminate\Http\Response;
use App\Services\AuthorService;

class TaxisController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the taxis service
     * @var TaxisService
     */
    public $taxisService;

    /**
     * The service to consume the author service
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaxisService $taxisService, AuthorService $authorService)
    {
        $this->taxisService = $taxisService;
        $this->authorService = $authorService;
    }

    /**
     * Recuperar y mostrar todos los taxis
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->taxisService->obtaintaxis());
    }

    /**
     * Crea una instancia de taxi
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorService->obtainAuthor($request->author_id);

        return $this->successResponse($this->taxisService->createTaxis($request->all()), Response::HTTP_CREATED);
    }

    /**
     * Obtener y mostrar una instancia de taxi
     * @return Illuminate\Http\Response
     */
    public function show($taxis)
    {
        return $this->successResponse($this->taxisService->obtainTaxi($taxis));
    }

    /**
     * actualizar una instancia de taxi
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $taxis)
    {
        return $this->successResponse($this->taxisService->editTaxis($request->all(), $taxis));
    }

    /**
     * borrar una instancia de taxi
     * @return Illuminate\Http\Response
     */
    public function destroy($taxis)
    {
        return $this->successResponse($this->taxisService->deleteTaxis($taxis));
    }

}
