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
     * Retrieve and show all the Taxis
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->taxisService->obtaintaxis());
    }

    /**
     * Creates an instance of taxi
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorService->obtainAuthor($request->author_id);

        return $this->successResponse($this->taxisService->createTaxis($request->all()), Response::HTTP_CREATED);
    }

    /**
     * Obtain and show an instance of taxi
     * @return Illuminate\Http\Response
     */
    public function show($taxis)
    {
        return $this->successResponse($this->taxisService->obtainTaxi($taxis));
    }

    /**
     * Updated an instance of taxi
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $taxis)
    {
        return $this->successResponse($this->taxisService->editTaxis($request->all(), $taxis));
    }

    /**
     * Removes an instance of taxi
     * @return Illuminate\Http\Response
     */
    public function destroy($taxis)
    {
        return $this->successResponse($this->taxisService->deleteTaxis($taxis));
    }

}
