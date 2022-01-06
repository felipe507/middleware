<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioControlador extends Controller
{
    // public function __contruct(){
    //     $this->middleware('primeiro');
    // }

    public function index()
    {
        return '<h3>Lista de usuarios</h3>'.
            '<ul>' .
                '<li>João</li>' .
                '<li>Fernandes 2</li>' .
                '<li>Cezar</li>' .
            '</ul>';
    }
}
