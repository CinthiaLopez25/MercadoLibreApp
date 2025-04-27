<header class="w-full text-sm mb-6 p-3 bg-yellow-300 not-has-[nav]:hidden">
    <div class=" ml-40 flex items-center gap-4">
        <!-- Imagen al lado del buscador -->
        <img src={{ Vite::image('logo_large.webp') }} alt="Mercado Libre">
        
        <!-- Formulario de búsqueda -->
        <form class="flex w-full max-w-md" action="#" method="GET">
            <input 
                type="text" 
                name="search" 
                placeholder="Buscar productos, marcas y más..." 
                class="w-full p-2 rounded-l-lg border border-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">               
        </form>
    </div>
    <!-- Botón para abrir el modal -->
     <br>
<button 
    onclick="document.getElementById('modal-cp').classList.remove('hidden')" 
    class="ml-20 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
>
    dónde recibir tus compras
</button>

<!-- Modal para ingresar código postal -->
<div 
    id="modal-cp" 
    class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden"
>
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md relative">
        <!-- Botón cerrar -->
        <button 
            onclick="document.getElementById('modal-cp').classList.add('hidden')" 
            class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 text-2xl"
        >
            &times;
        </button>
        <h2 class="text-xl font-bold mb-2">Elige dónde recibir tus compras</h2>
        <p class="mb-4 text-gray-600 text-sm">
            Podrás ver costos y tiempos de entrega precisos en todo lo que busques.
        </p>
        <form class="flex items-center gap-2">
            <div class="flex-1 relative">
                <input 
                    type="text" 
                    placeholder="Ingresar un código postal"
                    class="w-full border border-blue-400 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
            </div>
            <button 
                type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition"
            >
                Usar
            </button>
        </form>
        <a href="#" class="text-blue-500 text-sm mt-2 inline-block hover:underline">No sé mi código</a>
    </div>
   
</div>

    @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4 ">
        </nav>
    @endif
   <!-- Incluye Alpine.js en tu head -->
<script src="//unpkg.com/alpinejs" defer></script>

<nav class="ml-40 flex justify-center space-x-6 mt-4 text-sm font-semibold relative" x-data="{ openCategories: false }">
  <!-- Categorías con menú desplegable -->
  <div class="relative group" @click.outside="openCategories = false">
    <div 
      class="hover:underline cursor-pointer" 
      @click="openCategories = !openCategories"
    >
      Categorías
    </div>
    
    <!-- Lista desplegable -->
    <div 
      class="hidden absolute top-full left-1/2 -translate-x-1/2 mt-2 w-40 bg-white shadow-md rounded-md z-10 transition-opacity duration-300"
      :class="{ 
        'hidden': !openCategories, 
        'block': openCategories, 
        'opacity-0': !openCategories, 
        'opacity-100': openCategories 
      }"
    >
      <a href="#" class="block px-4 py-2 hover:hover:bg-blue-200 hover:text-blue-600 transition-colors duration-200">Veiculos</a>
      <a href="#" class="block px-4 py-2 hover:bg-blue-200 hover:text-blue-600 transition-colors duration-200">Supermercado</a>
      <a href="#" class="block px-4 py-2 hover:hover:bg-blue-200 hover:text-blue-600 transition-colors duration-200">Tecnologia</a>
    </div>
  </div>

  <!-- Resto del menú -->
  <a href="#" class="hover:underline">Ofertas</a>
  <a href="#" class="hover:underline">Cupones</a>
  <a href="#" class="hover:underline">Supermercado</a>
  <a href="#" class="hover:underline">Vender</a>
  <a href="#" class="hover:underline">Crear tu cuenta</a>
  <a href="#" class="hover:underline">Ingresa</a>
  <a href="#" class="hover:underline">Mis compras</a>
  <i class="fas fa-shopping-cart hover:underline"></i>
</nav>

</header>

