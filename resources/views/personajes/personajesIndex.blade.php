@extends('layouts.temp')
@section('contenido')
    <h1>Listado de personajes</h1>

    <p>
        <a href="{{ route('personaje.create') }}">Crear Personaje</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personajes as $personaje)
                <tr>
                    <td>{{ $personaje->id }}</td>
                    <td>
                        <a href="{{ route('personaje.show', $personaje->id) }}"> {{ $personaje->Nombre }} </a>
                    </td>
                    <td>
                        <a href="{{ route('personaje.edit', $personaje) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection