<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    
    public function metodoInicio(){
        return view('welcome');
    }
    public function metodoFormulario(){
        return view('formulario');
    }
    public function metodoRecuerdo(){
        return view('recuerdos');
    }

    public function metodoGuardar(Request $req){
        echo"<p>";
            echo $req->path();
            echo $req->method();
        echo"</p>";
    }

}
