@if ($errors->any())
<div class="min-w-0 p-4 text-white bg-red-600 rounded-lg shadow-xs">
    <h4 class="mb-4 font-semibold">
      Errores
    </h4>
    <p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </p>
</div>
@endif