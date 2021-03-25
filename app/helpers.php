<?php

use App\Http\Response;

/**
 * Helper para saber que vista retornar.
 */
if (!function_exists('view')) {
    // Si la función no existe la creamos
    function view($view)
    {
        return new Response($view);
    }
}

/**
 * Helper para retornar la plantilla base de renderizado.
 */
if (!function_exists('viewPath')) {

    function viewPath($view)
    {
        return __DIR__ . "/../views/$view.php";
    }
}
