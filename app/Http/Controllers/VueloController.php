<?php

namespace App\Http\Controllers;

use App\Models\Vuelos;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function mantenimiento(){
        return view('vuelos');
    }

    public function crear(){
        return view('nuevoVuelo');
    }

    public function mostrar(){
        $vueloss = Vuelos::all();
        return view('vuelos', compact('vuelos'));
    }
}
