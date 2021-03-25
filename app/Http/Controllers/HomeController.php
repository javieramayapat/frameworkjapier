<?php

namespace App\Http\Controllers;
class HomeController
{
    /**
     * Podemos retornar una instancia de Response desde este controlador
     * debido a que Response contiene la logica necesaria para recibir 
     * como parámetro una vista y con su método send buscará la localización
     * de la misma y la retornará con la información solicitada por el usuario.
     */
    public function index()
    {
        return view ("home");
    }

    public function service()
    {
        return view("service");
    }

    public function contact()
    {
        return view ("contact");
    }
}
