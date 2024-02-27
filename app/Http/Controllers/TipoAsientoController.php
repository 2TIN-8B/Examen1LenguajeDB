<?php

namespace App\Http\Controllers;

use App\Models\TipoAsiento;
use Illuminate\Http\Request;

class TipoAsientoController extends Controller
{
    public function mantenimiento(){
        return view('tiposAsientos');
    }

    public function crear(){
        return view('agregarTipoAsiento');
    }

    public function mostrar(){
        $tipo_asientos = TipoAsiento::all();
        return view('tiposAsientos', compact('tipo_asientos'));
    }
}
