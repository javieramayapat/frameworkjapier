<?php

namespace App\Http;

class Request
{
    protected $segments;
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
        $this->controller = empty($this->segments[1])
            ? 'Home'
            : $this->segments[1];
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
        $this->method = empty($this->segments[2])
            ? 'index'
            : $this->segments[2];
    }

    /**
     * Función para obtener el path absoluto del controlador.
    */
    public function getController()
    {
        $controller = ucfirst($this->controller);
        return "App\Http\Controllers\\{$controller}Controller";
    }

    /**
     * Función para obtener el método cargado.
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Función encargada de disparar un controlador
     * para servirle una respuesta al usuario.
     */
    public function send()
    {
        $controller = $this->getController();
        $method = $this->getMethod();

        $response =  call_user_func([
            new $controller,
            $method
        ]);

        $response->send();
    }
}
