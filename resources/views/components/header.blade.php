<header class="w-full text-sm mb-6 p-3 bg-yellow-300 not-has-[nav]:hidden">
    <div class=" ml-40 flex items-center gap-4">
        <!-- Imagen al lado del buscador -->
        <img src={{ Vite::image ('logo_large.webp') }} alt="Mercado Libre">

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
<div class="flex justify-evenly">
    <div
        onclick="document.getElementById('modal-cp').classList.remove('hidden')"
        class="flex items-center cursor-pointer">
        <img src="{{ Vite::image('location-pin.png') }}" alt="Ubicación" class="w-7 h-6 mb-2">
        <span">
            <p id="cp_envia" class="text-xs font-light leading-none text-transparent-black-100"></p>
            <p id="cp_codigo" class="text-sm font-light leading-none text-transparent-black-200"></p>
        </span>
    </div>

  <nav class="flex items-center gap-4" x-data="{ openCategories: false }">
    <div id="categorias" class="flex items-center relative h-full">
      <div id="categorias-link" class="flex items-center relative h-full">
        <span class="text-sm">Categorías</span>
        <img src="{{ Vite::image('down-arrow.png') }}" alt="Categorías" class="w-3 h-3">
      </div>
      <div id="categorias-dropdown"
        class="hidden absolute top-8 -left-2 w-56 py-5 bg-gray-800 shadow-md rounded-md z-10 transition-opacity duration-300 text-slate-200 before:content-[''] before:absolute before:-top-3 before:left-20 before:w-4 before:h-4 before:clip-path-triangle before:bg-gray-800"
      >
        <a href="#" class="block px-10 py-2 hover:hover:bg-blue-600 transition-colors duration-200">Vehiculos</a>
        <a href="#" class="block px-10 py-2 hover:bg-blue-600 transition-colors duration-200">Supermercado</a>
        <a href="#" class="block px-10 py-2 hover:hover:bg-blue-600 transition-colors duration-200">Tecnologia</a>
      </div>
    </div>
    <a href="#" class="cursor-pointer">Ofertas</a>
    <a href="#" class="cursor-pointer">Cupones</a>
    <a href="#" class="cursor-pointer">Supermercado</a>
    <a href="#" class="cursor-pointer">Moda</a>
    <a href="#" class="cursor-pointer">Mercado Play</a>
    <a href="#" class="cursor-pointer">Vender</a>
    <a href="#" class="cursor-pointer">Ayuda</a>

  </nav>
  <div class="flex items-center gap-4 text-nowrap">
    @if(auth()->check())
      <a href="#">Mi cuenta</a>
      <a href="#">Mi cuenta</a>
      <a href="#">Mis compras</a>
      <img src="{{ Vite::image('notification.png') }}"/>
      <img src="{{ Vite::image('shopping-cart.png') }}"/>
    @else
      <a href="#">Crear tu cuenta</a>
      <a href="#">Ingresa</a>
      <a href="#">Mis compras</a>
      <img class="w-6 h-5" src="{{ Vite::image('shopping-cart.png') }}"/>
    @endif
  </div>
</div>
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
        <form class="flex items-center gap-2" onsubmit="savePostalCode(event)">
            <div class="flex-1 relative">
                <input
                    type="text"
                    placeholder="Ingresar un código postal"
                    class="w-full border border-blue-400 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    name="postal_code"
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

  <div style="text-align: left;">
  <h2 style="font-size: 48px; font-weight: bold;">Ofertas</h2>
  </div>

<section class= "p-4 bg-red mb-6" style="background-color:rgb(243, 239, 239);">
  <!-- Título de sección -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-4xl font-bold"> Ofertas en celulares y accesorios </h2>
  </div>

  <!-- Contenedor de productos -->
  <div class="flex flex-wrap gap-8 justify-center">
    
    <!-- Producto 1 -->
    <div class="w-48">
    <div class="justify-center; margin: 5px;">
  <img src="https://http2.mlstatic.com/D_NQ_NP_2X_693146-CBT74076281448_012024-F-2-mica-de-cristal-templado-curvo-3d-para-samsung-s21-ultra-5.webp" alt="Producto 1" class="rounded-lg shadow-md mb-3">
  <p class="text-sm text-gray-700 mb-1"> 2 Mica De Cristal Templado Curvo 3d Para Samsung S21 Ultra 5 </p>
  <div class="flex items-baseline gap-2">
    <span class="text-gray-400 text-xs line-through"> Antes $295.95 </span>
    <span class="text-black font-bold text-lg"> Ahora $170.90 </span>
  </div>
  <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>

  <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
</div>
</div>

 <!-- Producto 2 -->
 <div class="w-48" >
 <div class="justify-center; margin: 5px;">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_928975-CBT50116832035_052022-F-tripode-de-aluminio-con-control-remoto-celular-camera-gopro.webp" alt="Producto 2" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1"> Tripode De Aluminio Con Control Remoto Celular. </p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through"> Antes $395.00 </span>
        <span class="text-black font-bold text-lg"> Ahora $190.00 </span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1"> Envío gratis ⚡ FULL </p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>

<!-- Producto 3 -->
<div class="w-48">
<div class="justify-center; margin: 5px;">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_753971-CBT81328517352_122024-F-protector-de-cargador-adaptador-para-iphone-tipo-c-dibujo-3d.webp" alt="Producto 3" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1"> Protector De Cargador Adaptador Para iPhone Tipo C Dibujo 3d. </p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through"> Antes $199.99 </span>
        <span class="text-black font-bold text-lg"> Ahora $99.00 </span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1"> Envío gratis ⚡ FULL </p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>
    
    <!-- Producto 4 -->
<div class="w-48">
<div class="justify-center; margin: 5px;">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_760082-MLA81960499439_012025-F.webp" alt="Producto 4" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1">Honor Magic7 Lite Jade Cyan 512 GB Con Audífonos de regalo. </p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through">Antes $9,999.00</span>
        <span class="text-black font-bold text-lg">Ahora $8,590.00</span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>
        <!-- Producto 5 -->
        <div class="w-48" >
        <div class="justify-center; margin: 5px;">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_909012-MLM77337386297_062024-F-audifonos-inalambricos-bluetooth-funda-protectora.webp" alt="Producto 5" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1"> Audífonos Inalámbricos Bluetooth + Funda Protectora. </p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through"> Antes $298.00 </span>
        <span class="text-black font-bold text-lg">Ahora $175.00</span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>
           <!-- Producto 6 -->
           <div class="w-48">
           <div class="justify-center; margin: 5px;">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_983694-MLM83185169963_032025-F-yeemovil-f22-telefono-celular-para-adultos-mayores-4g-telefono-plegable-con-botones-grandes-doble-pantalla-sos-boton-volumen-alto.webp" alt="Producto 6" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1"> Yeemovil F22 Teléfono Celular Para Adultos Mayores, 4g Teléfono Plegable Con Botones Grandes, Doble Pantalla, Sos Botón, Volumen Alto. </p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through"> Antes $1,999.00 </span>
        <span class="text-black font-bold text-lg"> Ahora $899.90 </span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>

  </div>
</section>

<div class="justify-center; margin: 5px;">

</div>

<!-- Contenedor general -->
<section class= "p-4 bg-red" style="background-color:rgb(243, 239, 239);">
  <!-- Título de sección -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-4xl font-bold">Ofertas relapango para tu baño</h2>
  </div>

  <!-- Contenedor de productos -->
  <div class="flex flex-wrap gap-8 justify-center">
    
    <!-- Producto 1 -->
    <div class="w-48">
    <div class="justify-center; margin: 5px;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC-E1bSHLLU-wC9icyN3bXHSNK9xtMBfDPhA&s" alt="Producto 1" class="rounded-lg shadow-md mb-3">
  <p class="text-sm text-gray-700 mb-1">Espejo Luz Led Touch Pared Tocador Baño Vestidor</p>
  <div class="flex items-baseline gap-2">
    <span class="text-gray-400 text-xs line-through">Antes $799</span>
    <span class="text-black font-bold text-lg">Ahora $479</span>
  </div>
  <p class="text-sm text-gray-600">en 24 meses de $29</p>
  <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
  <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
</div>
</div>

 <!-- Producto 2 -->
 <div class="w-48" >
 <div class="justify-center; margin: 5px;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpISC_sYfKSykQQFCOgYrq1BwvJpsrWZ-HIg&s" alt="Producto 2" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1">Lavabo de Cerámica Diseño elegante y minimalista.</p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through">Antes $795.50</span>
        <span class="text-black font-bold text-lg">Ahora $699</span>
      </div>
      <p class="text-sm text-gray-600">en 24 meses de $42</p>
      <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>

<!-- Producto 3 -->
<div class="w-48">
<div class="justify-center; margin: 5px;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMvTA1w6VtIiKLEZ9ovG6YcBXxc-zOED0dkQ&s" alt="Producto 3" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1">Toallero de Acero Inoxidable Resistente y fácil de instalar.</p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through">Antes $295.50</span>
        <span class="text-black font-bold text-lg">Ahora $199.00</span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>
    
    <!-- Producto 4 -->
<div class="w-48">
<div class="justify-center; margin: 5px;">
      <img src="https://cdn.homedepot.com.mx/productos/941874/941874-d.jpg" alt="Producto 4" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1">TINA CON HIDROMASAJE. </p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through">Antes $23,950.00</span>
        <span class="text-black font-bold text-lg">Ahora $15,990.00</span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>
        <!-- Producto 5 -->
        <div class="w-48" >
        <div class="justify-center; margin: 5px;">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_609610-MLU76507372704_052024-F.webp" alt="Producto 5" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1">6 Rollos Papel Higiénico Institucional Jumbo Hoja Doble Bio. </p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through">Antes $298.00</span>
        <span class="text-black font-bold text-lg">Ahora $199.00</span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>
           <!-- Producto 6 -->
           <div class="w-48">
           <div class="justify-center; margin: 5px;">
      <img src="https://http2.mlstatic.com/D_Q_NP_2X_610199-MLM49360616348_032022-E.webp" alt="Producto 6" class="rounded-lg shadow-md mb-3">
      <p class="text-sm text-gray-700 mb-1">Papel Higiénico Elite Color Doble Hoja 32 Rollos. </p>
      <div class="flex items-baseline gap-2">
        <span class="text-gray-400 text-xs line-through">Antes $175.00</span>
        <span class="text-black font-bold text-lg">Ahora $115.00</span>
      </div>
      <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
      <button class="bg-blue-100 text-blue-500 px-2 py-1 mt-2 rounded hover:bg-blue-200 font-bold text-sm flex items-center gap-1">
      🛒 Añadir al Carrito
    </button>
    </div>
    </div>

  </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const postalCode = consultarCookie();

        const categoriasDropdown = document.getElementById('categorias-dropdown');
        const categoriasLink = document.getElementById('categorias-link');
        const categorias = document.getElementById('categorias');

        const cp_envia = document.getElementById('cp_envia');
        const cp_codigo = document.getElementById('cp_codigo');

        cp_envia.innerText = postalCode ? "Enviar a" : "Ingresa tu";
        cp_codigo.innerText = postalCode ? postalCode : "código postal";

        categoriasLink.addEventListener('mouseenter', function(event) {
            event.preventDefault();
            categoriasDropdown.classList.remove('hidden');
        });

        categorias.addEventListener('mouseout', function(event) {
          const salio_dropdown = categorias != event.toElement && categoriasLink != event.toElement && categoriasDropdown != event.toElement; // Validamos que se salga del dropdown pero que no sea a la Categoría.

          const cambia_categoria = !categoriasDropdown.contains(event.toElement); // Se valida que se cambie entre Categorias.

          const cambia_link = !categoriasLink.contains(event.toElement); // Se valida que no se salga del texto de Categorias.

          if (cambia_categoria && cambia_link && salio_dropdown) {
              categoriasDropdown.classList.add('hidden');
          }
        });
    });

    function savePostalCode(event) {
        event.preventDefault();

        const postalCode = event.target[0].value;

        if (postalCode) {
          //Guarda el codigo postal en una cookie por un mes
          const date = new Date();
          date.setTime(date.getTime() + (30*24*60*60*1000)); // 30 días
          document.cookie = `postal_code=${postalCode}; path=/; expires=${date.toUTCString()}`;

          const cp_envia = document.getElementById('cp_envia');
          const cp_codigo = document.getElementById('cp_codigo');

          cp_envia.innerText = postalCode ? "Enviar a" : "Ingresa tu";
          cp_codigo.innerText = postalCode ? postalCode : "código postal";
          document.getElementById('modal-cp').classList.add('hidden');
        } else {
            alert('Por favor, ingresa un código postal válido.');
        }
    }

    function consultarCookie() {
        const name = "postal_code=";
        const decodedCookie = decodeURIComponent(document.cookie);
        const ca = decodedCookie.split(';');

        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>
