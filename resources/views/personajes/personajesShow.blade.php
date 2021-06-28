@extends('layouts.windmill')
@section('contenido')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Datos de {{ $personaje->Nombre }}
</h2>

<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    href="{{ route('personaje.index') }}">
        Regresar
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
            <th class="px-4 py-3">Nombre</th>
            <th class="px-4 py-3">Edad</th>
            <th class="px-4 py-3">Genero</th>
            <th class="px-4 py-3">Personalidad</th>
            <th class="px-4 py-3">Historia</th>
            <th class="px-4 py-3">Extras</th>

            </tr>
        </thead>
        <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                    {{ $personaje->id }}
                </div>
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $personaje->Nombre }} 
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $personaje->Edad }} 
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $personaje->Genero }} 
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $personaje->Personalidad }} 
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $personaje->Historia }} 
            </td>
            <td class="px-4 py-3 text-sm">
                {{ $personaje->Extras }} 
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>


    <form action="{{ route('personaje.destroy', $personaje) }}" method="POST">
        @csrf
        @method('DELETE')
        <input input class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        type="submit" value="Eliminar">
    </form>

@endsection