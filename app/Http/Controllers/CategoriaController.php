<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return view("admin.categoria.listar");
    }

    public function create()
    {
        return view("admin.categoria.nuevo");
    }

    public function store(Request $request)
    {
        return $request;
    }

    public function show($id)
    {
        return $id;
    }

    public function edit($id)
    {
        return "Editando categoria $id";
    }

    public function update($id, Request $request)
    {
        return $request;
    }

    public function destroy($id)
    {
        return "Eliminando $id";
    }
}
