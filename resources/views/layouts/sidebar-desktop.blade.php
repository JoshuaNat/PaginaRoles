<aside
class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
>
<div class="py-4 text-gray-500 dark:text-gray-400">
  <a
    class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
    href="#"
  >
    Puro Rol
  </a>
  <ul class="mt-6">
    <li class="relative px-6 py-3">
      <!-- Active items have the snippet below -->
      <!-- <span
        class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
        aria-hidden="true"
      ></span> -->

      <!-- Add this classes to an active anchor (a tag) -->
      <!-- text-gray-800 dark:text-gray-100 -->
      <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="../index.html"
      >
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
          ></path>
        </svg>
        <span class="ml-4">Inicio</span>
      </a>
    </li>
  </ul>

  <ul>
    <li class="relative px-6 py-3">
      <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="../modals.html"
      >
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
          ></path>
        </svg>
        <span class="ml-4">Personajes</span>
      </a>
    </li>
    <li class="relative px-6 py-3">
      <a
        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
        href="{{ route("personaje.index") }}"
      >
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
        <span class="ml-4">Mis personajes</span>
      </a>
    </li>
  </ul>
  @guest  
    <div class="px-6 my-6">
      <a
        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        href="{{ route('register') }}">
        Crear Cuenta
        <span class="ml-2" aria-hidden="true">+</span>
      </a>
    </div>
  @endguest
</div>
</aside>