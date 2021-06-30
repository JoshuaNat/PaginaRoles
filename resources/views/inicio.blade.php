@extends('layouts.windmill')
@section('contenido')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Inicio.
</h2>
<p class="mb-8 text-gray-600 dark:text-gray-400">
    El proposito de esta pagina es servir como un registro de los personajes de un grupo de Rol del que formo parte.

    Presionando el nombre de un personaje puedes ver los datos de este así como los roles de los que forma parte.
  </p>
  <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    href="{{ route('historia.index') }}">
        Ver Roles
    </a>
</h4>
@endsection