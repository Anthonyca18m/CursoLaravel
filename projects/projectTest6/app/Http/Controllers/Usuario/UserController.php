<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user($nombre)
    {
        return "Usuario: " . $nombre;
    }

    public function user1($id)
    {
        return "Usuario Id: " . $id;
    }

    public function user2($id, $comentario)
    {
        return "Usuario Id: " . $id . "<br> Comentario: " . $comentario;
    }
}
