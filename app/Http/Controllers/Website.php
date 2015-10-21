<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Website extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Documento de ejemplo';
        $requierejs = ['app/website'];

        $args = compact('requierejs','titulo');
        return view('welcome',$args);
    }

    public function acceso()
    {
        $titulo = 'Iniciar sesión';
        $requierejs = ['app/website'];
        $args = compact('requierejs','titulo');
        return view('website.acceso',$args);
    }
}
