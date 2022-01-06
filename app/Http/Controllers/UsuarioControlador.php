<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class UsuarioControlador extends Controller
{
    // public function __contruct(){
    //     $this->middleware('primeiro');
    // }

    public function index()
    {
        Log::debug([UsuarioControlador::class,'index']);
        return '<h3>Lista de usuarios</h3>'.
            '<ul>' .
                '<li>João</li>' .
                '<li>Fernandes 2</li>' .
                '<li>Cezar</li>' .
            '</ul>';
    }
}
