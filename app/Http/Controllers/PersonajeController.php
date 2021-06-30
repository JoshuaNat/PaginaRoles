<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Models\Historia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$personajes = Personaje::all();
        $personajes = Auth::user()->personajes()->with('user:id,name')->get();
        return view('personajes.personajesIndex', compact('personajes'));
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
        $request->validate([
            'Nombre' => 'Required|String|Min:2|Max:30',
            'Edad' => 'Required|Integer|Numeric|gt:0',
            'Genero' => 'Required',
            'Personalidad' => 'Required|String|Max:255',
            'Historia' => 'Required|String|Max:255',
            'Extras' => 'Required|String|Max:255'
        ]);

        $request->merge(['user_id' => $request->user()->id]);

        Personaje::create($request->all());

        return redirect()->route('personaje.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function show(Personaje $personaje)
    {
        
        $historias = Historia::get();
        return view('personajes.personajesShow', compact('personaje', 'historias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Personaje $personaje)
    {

        return view('personajes.personajesForm', compact('personaje'));
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
        if (! Gate::allows('update-personaje', $personaje)) {
            abort(403);
        }

        $request->validate([
            'Nombre' => 'Required|String|Min:2|Max:30',
            'Edad' => 'Required|Integer|Numeric|gt:0',
            'Genero' => 'Required',
            'Personalidad' => 'Required|String|Max:255',
            'Historia' => 'Required|String|Max:255',
            'Extras' => 'Required|String|Max:255'
        ]);

        
        Personaje::where('id', $personaje->id)->update($request->except('_token', '_method'));

        return redirect()->route('personaje.show', $personaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personaje $personaje)
    {
        $this->authorize('delete', $personaje);
        $personaje->delete();

        return redirect()->route('personaje.index');
    }

    public function agregaHistoria(Request $request, Personaje $personaje)
    {  
        $this->authorize('vincular', $personaje);
        
        $personaje->historias()->sync($request->historia_id);

       return redirect()->route('personaje.show', $personaje);
    }
}
