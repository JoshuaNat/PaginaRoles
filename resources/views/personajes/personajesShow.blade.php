@extends('layouts.windmill')
@section('contenido')

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Datos del personaje.
</h2>

<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    href="{{ route('personaje.index') }}">
        Regresar
    </a>
</h4>

<div class="grid gap-6 mb-8 md:grid-cols-2">
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
        {{ $personaje->Nombre }}
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
            <ul>
                <li>Edad: {{ $personaje->Edad }}</li>
                <li>Genero: {{ $personaje->Genero }}</li>
                <li>Personalidad: {{$personaje->Personalidad}}</li>
                <li>Historia: {{$personaje->Historia}}</li>
                <li>Extras: {{$personaje->Extras}}</li>
            </ul>
        </p>
    </div>

    <form action="{{ route('personaje.destroy', $personaje) }}" method="POST">
        @csrf
        @method('DELETE')
        <input input class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        type="submit" value="Eliminar">
    </form>

    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
          Agregar Historias
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
            <form action="{{ route('personaje.agregaHistoria', $personaje) }}" method="POST">
                @csrf
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Ha participado en
                    </span>
                    <select name="historia_id[]"
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" multiple="">
                    @foreach ($historias as $historia)
                        <option value = "{{ $historia->id }}" {{array_search($historia->id, $personaje->historias->pluck('id')->toArray()) !== false ? 'selected' : ''}}>{{ $historia->Nombre }}</option>
                    @endforeach  
                    </select>
                  </label>

                  <input input class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                  type="submit" value="Vincular">
            </form>
        </p>
      </div>
    
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
          Lista de Historias
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
            <ul>
                @foreach ($personaje->historias as $historia)
                    <li>{{ $historia->Nombre }}</li>
                @endforeach
            </ul>
        </p>
      </div>
</div>

@endsection