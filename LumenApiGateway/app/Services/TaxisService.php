<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class TaxisService
{
    use ConsumesExternalService;

    /**
     * The base uri to be used to consume the taxis service
     * @var string
     */
    public $baseUri;

    /**
     * The secret to be used to consume the taxis service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.taxis.base_uri');
        $this->secret = config('services.taxis.secret');
    }

    /**
     * Get the full list of taxis from the taxis service
     * @return string
     */
    public function obtaintaxis()
    {
        return $this->performRequest('GET', '/taxis');
    }

    /**
     * Create an instance of taxis using the taxis service
     * @return string
     */
    public function createTaxis($data)
    {
        return $this->performRequest('POST', '/taxis', $data);
    }

    /**
     * Get a single taxis from the taxis service
     * @return string
     */
    public function obtainTaxi($taxis)
    {
        return $this->performRequest('GET', "/taxis/{$taxis}");
    }

    /**
     * Edit a single taxis from the taxis service
     * @return string
     */
    public function editTaxis($data, $taxis)
    {
        return $this->performRequest('PUT', "/taxis/{$taxis}", $data);
    }

    /**
     * Remove a single taxis from the taxis service
     * @return string
     */
    public function deleteTaxis($taxis)
    {
        return $this->performRequest('DELETE', "/taxis/{$taxis}");
    }

}
