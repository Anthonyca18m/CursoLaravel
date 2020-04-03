<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function usuarioUnParametro($nombre = 'Invitado')
    {
        return 'Usuario : '. $nombre;
    }

    public function usuarioDosParametros($nombre, $comentario){
        return "Usuario: ".$nombre . "<br> Comentario: " . $comentario;
    }
}
