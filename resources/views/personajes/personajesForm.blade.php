@extends('layouts.windmill')
@section('contenido')
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Crear Personaje.
    </h2>

    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        href="{{ route('personaje.index') }}">
            Lista de personajes
        </a>
    </h4>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        @if(isset($personaje))
        <form action="{{ route('personaje.update', $personaje) }}" method="POST"> 
            @method('PATCH')
        @else
        <form action="{{ route('personaje.store') }}" method="POST">
        @endif

        @csrf

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                <input class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="Nombre" id="Nombre" value="{{ $personaje->Nombre ?? ''}}" />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Edad</span>
                <input class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="number" min="1" max="99" step="1" name="Edad" id="Edad" value="{{ $personaje->Edad ?? 18}}" />
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
              Genero
            </span>
            <select name="Genero" id="Genero"
              class="block mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
              <option selected="selected" value="Hombre">Hombre</option>
              <option value="Mujer">Mujer</option>
            </select>
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Personalidad</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="3"
              name="Personalidad"
              id="Personalidad"
            >{{ $personaje->Personalidad ?? 'Aqui va la personalidad'}}</textarea>
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Historia</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="3"
              name="Historia"
              id="Historia"
            >{{ $personaje->Historia ?? 'Aqui va la Historia'}}</textarea>
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Extras</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="3"
              name="Extras"
              id="Extras"
            >{{ $personaje->Extras ?? 'Aqui van los extras.'}}</textarea>
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">ID Creador:</span>
                <input class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="number" min="1" step="1" name="user_id" id="Creador" value="{{ $personaje->user_id ?? 1}}" />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">ID Rol:</span>
                <input class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="number" min="1" step="1" name="historia_id" id="Rol" value="{{ $personaje->historia_id ?? 1}}" />
        </label>

        <div>
            <input class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            type="submit" value="Guardar"/>
        </div>

        </form>
    </div>

        <input type="submit" value="Guardar" />
    </form>
@endsection