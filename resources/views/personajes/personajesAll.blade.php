@extends('layouts.windmill')
@section('contenido')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Lista de personajes.
    </h2>

    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        href="{{ route('personaje.create') }}">
            Crear Personaje
        </a>
    </h4>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
        <thead>
            <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
            <th class="px-4 py-3">ID</th>
            <th class="px-4 py-3">Creador</th>
            <th class="px-4 py-3">Nombre</th>
            </tr>
        </thead>
        <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($personajes as $personaje)
            <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                    {{ $personaje->id }}
                </div>
            </td>
            <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                    {{ $personaje->user->name }}
                </div>
            </td>
            <td class="px-4 py-3 text-sm">
                <div class="flex items-center text-sm">
                <a href="{{ route('personaje.show', $personaje->id) }}"> {{ $personaje->Nombre }} </a>
                </div>
            </td>


            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
@endsection