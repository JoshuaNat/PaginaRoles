@extends('layouts.temp')
@section('contenido')
    <h1>Formulario de personajes</h1>

    <p>
        <a href="{{ route('personaje.index') }}">Lista de Personajes</a>
    </p>

    @if(isset($personaje))
        <form action="{{ route('personaje.update', $personaje) }}" method="POST"> 
            @method('PATCH')
    @else
        <form action="{{ route('personaje.store') }}" method="POST">
    @endif

        @csrf

        <label for="Nombre">Nombre</label>
        <input name="Nombre" type="text" id="Nombre" value="{{ $personaje->Nombre ?? ''}}"/>
        <br /> 

        <label for="Edad">Edad</label>
        <input max="99" min="1" name="Edad" step="1" type="number" value="{{ $personaje->Edad ?? 18}}" id="Edad"/> 
        <br />

        <label for="Genero">Genero</label>
        <select name="Genero" id="Genero">
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
        <br /> 

        <label for="Personalidad"></label>
        <textarea cols="20" name="Personalidad" rows="5" id="Personalidad">{{ $personaje->Personalidad ?? 'Personalidad'}}</textarea>
        <br />

        <label for="Historia"></label>
        <textarea cols="20" name="Historia" rows="5" id="Historia">{{ $personaje->Historia ?? 'Historia'}}</textarea>
        <br />

        <label for="Extras"></label>
        <textarea cols="20" name="Extras" rows="5" id="Extras">{{ $personaje->Extras ?? 'Extras'}}</textarea>
        <br />

        <label for="Creador">Creador</label>
        <input max="99" min="1" name="user_id" step="1" type="number" value="{{ $personaje->user_id ?? 1}}" id="Creador"/> 
        <br />

        <label for="Rol">Rol</label>
        <input max="99" min="1" name="historia_id" step="1" type="number" value="{{ $personaje->historia_id ?? 1}}" id="Rol"/> 
        <br />

        <input type="submit" value="Guardar" />
    </form>
@endsection