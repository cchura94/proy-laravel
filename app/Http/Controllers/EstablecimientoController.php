<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Establecimiento;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return DB::select("select * from establecimientos");
        //return DB::table("Establecimientos")->get();
        //$establecimientos = Establecimiento::get();
        $establecimientos = Establecimiento::paginate(4);
        //return response()->json($establecimientos, 200);

        //return view("admin.establecimiento.listar", ["establecimientos" => $establecimientos]);
        //return view("admin.establecimiento.listar")->with("establecimientos", $establecimientos);
        return view("admin.establecimiento.listar", compact("establecimientos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.establecimiento.nuevo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validación 
        $request->validate([
            "nombre" => "required|min:2|max:100",
            "telefono" => "required|regex:/^\d{5,12}?$/"
        ]);


        //Guardar establecimiento
        $est = new Establecimiento;
        $est->nombre = $request->nombre;
        $est->direccion = $request->direccion;
        $est->telefono = $request->telefono;
        $est->save();

        return redirect("/establecimiento");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $est = Establecimiento::find($id);
        return view("admin.establecimiento.editar", compact('est'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //Validación 
        $request->validate([
            "nombre" => "required|min:2|max:100",
            "telefono" => "required|regex:/^\d{5,12}?$/"
        ]);


        //Modificar establecimiento
        $est = Establecimiento::find($id);
        $est->nombre = $request->nombre;
        $est->direccion = $request->direccion;
        $est->telefono = $request->telefono;
        $est->save();

        return redirect("/establecimiento");
    }

    /**
     * Remove the specified resource frostorage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $est = Establecimiento::find($id);
        $est->delete();
        return redirect("/establecimiento");
    }
}
