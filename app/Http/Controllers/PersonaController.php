<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function listar()
    {
        return view("admin.persona.listar");
    }

    public function crear()
    {
        return view("admin.persona.nuevo");
    }

    public function guardar(Request $request)
    { 
        return $request;
    }

    public function mostrar($id)
    {
        return $id;
    }

    public function editar($id)
    {
        return "Editando $id";
    }

    public function modificar($id, Request $request)
    {
        return $request;
    }

    public function eliminar($id)
    {
        return "Eliminado $id";
    }
}
