<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginaController extends Controller
{
    function preguntasFrecuentes (){
    	return view ('preguntasFrecuentes');
    }
}
