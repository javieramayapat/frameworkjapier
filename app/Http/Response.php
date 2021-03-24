<?php

namespace App\Http;

class Response
{
    //La respuesta puede ser de tipo: Array,Json, Pdf
    protected $view; 

    public function __construct($view)
    {
        //home, contact, index
        $this->view = $view;
    }

    // Obtener la vista de respuesta
    public function getView()
    {
        return $this->view;
    }

    /**
     * Función encargada de renderizar las vistas de nuestro programa.
     */
    public function send()
    {
        // Obtengo la vista 
        $view = $this->getView();

        // Obtener el contendio que se pintara a en la vista.
        $content = file_get_contents(__DIR__ . "../../views/$view.php");

        // Plantilla base para renderizar contenido.
        require __DIR__ . "../../views/layout.php";
    }

}