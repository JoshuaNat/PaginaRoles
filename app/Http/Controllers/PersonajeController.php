<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personajes.personajesIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personajes.personajesForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function show(Personaje $personaje)
    {
        return view('personajes.personajesShow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Personaje $personaje)
    {
        return view('personajes.personajesForm');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personaje $personaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personaje $personaje)
    {
        //
    }
}
