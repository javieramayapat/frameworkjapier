<?php

namespace App\Http;

class Request
{
    protected $segment;
    protected $controller;
    protected $method;

    public function __construct()
    {
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);
        // var_dump($_SERVER['REQUEST_URI']);
        $this->setController();
        $this->setMethod();
    }

    /**
     * Cargar el controlador que vamosa utilizar.
     * 
     * Función encargada de setear la propiedad 
     * del controlador proveniente en el segmento
     * de la url, de no encontrarlo rediccionará 
     * al home del sistema.
     */
    public function setController()
    {
        $this->controller = empty($this->segment[1])
            ? 'Home'
            : $this->segment[1];
    }

    /**
     * Cargar la configuración que va a ejecutar mi controlador.
     * 
     * Función encargada de setear el parámetro uasado para 
     * la configuración del método a utilizar de mi controlador,
     * de no encontrarlos rediccionará a la función index.
     */
    public function setMethod()
    {
        $this->method = empty($this->segment[2])
            ? 'index'
            : $this->segment[2];
    }
}
