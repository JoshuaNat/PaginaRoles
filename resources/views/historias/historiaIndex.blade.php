@extends('layouts.windmill')
@section('contenido')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Lista de Roles
    </h2>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
        <thead>
            <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
            >
            <th class="px-4 py-3">Nombre</th>
            <th class="px-4 py-3">Descripcion</th>
            <th class="px-4 py-3">Genero</th>
            <th class="px-4 py-3">Estado</th>
            </tr>
        </thead>
        <tbody
            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($historias as $historia)
            <tr class="text-gray-700 dark:text-gray-400">

            <td class="px-4 py-3 text-sm">
                <div class="flex items-center text-sm">
                    {{ $historia->Nombre }}
                </div>
            </td>

            <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                    {{ $historia->Descripcion }}
                </div>
            </td>

            <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                    {{ $historia->Genero }}
                </div>
            </td>

            <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                    {{ $historia->Estado }}
                </div>
            </td>


            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
@endsection