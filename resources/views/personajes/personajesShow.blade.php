@extends('layouts.temp')
@section('contenido')
    <h1>Un personaje en particular</h1>

    <p>
        <a href="{{ route('personaje.index') }}">Lista de Personajes</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Personalidad</th>
                <th>Historia</th>
                <th>Extras</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $personaje->id }}</td>
                <td>{{ $personaje->Nombre }}</td>                    
                <td>{{ $personaje->Edad }}</td>
                <td>{{ $personaje->Genero }}</td>
                <td>{{ $personaje->Personalidad }}</td>
                <td>{{ $personaje->Historia }}</td>
                <td>{{ $personaje->Extras }}</td>
            </tr>
        </tbody>
    </table>

    <form action="{{ route('personaje.destroy', $personaje) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar">
    </form>

@endsection