<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class TaxisService
{
    use ConsumesExternalService;

    /**
     * El uri base que se utilizará para consumir el servicio de  taxis service
     * @var string
     */
    public $baseUri;

    /**
     * El secret que se utilizará para consumir el servicio de taxis 
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.taxis.base_uri');
        $this->secret = config('services.taxis.secret');
    }

    /**
     * Obtiene la lista completa de los autores del servicio taxis
     * @return string
     */
    public function obtaintaxis()
    {
        return $this->performRequest('GET', '/taxis');
    }

    /**
     * Crea una instancia de autor utilizando el servicio de taxis service
     * @return string
     */
    public function createTaxis($data)
    {
        return $this->performRequest('POST', '/taxis', $data);
    }

    /**
     * Obtiene un solo autor del servicio de taxis service
     * @return string
     */
    public function obtainTaxi($taxis)
    {
        return $this->performRequest('GET', "/taxis/{$taxis}");
    }

    /**
     * Edita un solo autor del servicio de taxis service
     * @return string
     */
    public function editTaxis($data, $taxis)
    {
        return $this->performRequest('PUT', "/taxis/{$taxis}", $data);
    }

    /**
     * Eliminar un solo autor del servicio de taxis service
     * @return string
     */
    public function deleteTaxis($taxis)
    {
        return $this->performRequest('DELETE', "/taxis/{$taxis}");
    }

}
