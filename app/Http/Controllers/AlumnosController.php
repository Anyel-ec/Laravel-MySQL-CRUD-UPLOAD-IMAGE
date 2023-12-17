<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Alumnos::all();
        return view('welcome', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumnos = new Alumnos();
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->direccion = $request->direccion;
        $alumnos->telefono = $request->telefono;
        $alumnos->fecha_nac = $request->fecha_nac;
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('uploads', 'public');
            $alumnos->imagen = $imagePath;
        }
        $alumnos->save();
        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumnos = Alumnos::find($id);
        return view('actualizar', compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumnos $alumnos, $id)
    {
        $alumnos = Alumnos::find($id);
        $alumnos->nombre = $request->nombre;
        $alumnos->apellido = $request->apellido;
        $alumnos->direccion = $request->direccion;
        $alumnos->telefono = $request->telefono;
        $alumnos->fecha_nac = $request->fecha_nac;
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('uploads', 'public');
            $alumnos->imagen = $imagePath;
        }
        $alumnos->save();
        return redirect()->route('alumno.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumnos $alumnos, $id)
    {
        $alumnos = Alumnos::find($id);
        $alumnos->delete();
        return redirect()->route('alumno.index');
    }
}
