<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class Website
 * Controlador solo del sitio web.
 * @package App\Http\Controllers
 */
class Website extends Controller
{

    /**
     * Vista principal del sitio
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $titulo     = 'Documento de ejemplo';
        $requierejs = ['app/website'];

        $args = compact('requierejs','titulo');
        return view('welcome',$args);
    }

    /**
     *
     */
    public function comoFunciona()
    {

    }

    /**
     *
     */
    public function precios()
    {

    }

    /**
     *
     */
    public function preguntas()
    {

    }

    /**
     * Vista de inicio de sesión
     * @return \Illuminate\View\View
     */
    public function acceso()
    {
        $titulo     = 'Iniciar sesión';
        $requierejs = ['app/website'];

        $args = compact('requierejs','titulo');
        return view('website.acceso',$args);
    }

    /**
     *
     */
    public function reclutamiento()
    {

    }
}
