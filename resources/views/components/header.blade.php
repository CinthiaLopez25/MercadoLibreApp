@php
  use App\View\Components\CartIcon;

  $cartIcon = null;
  $authIcons = '';
  $amountItems = 0;

  if(auth()->check()){
    $amountItems = session()->get('amountItems');

    $authIcons =
      "<a href=\"#\">Mi cuenta</a>
      <a href=\"#\">Mis compras</a>
      <a href=\"#\">Favoritos</a>
      <img src=\"".Vite::image('notification.png')."\"/>";
  }else {
    $authIcons =
      "<a href=\"". route('register') ."\">Crear tu cuenta</a>
      <a href=\"". route('login') ."\">Ingresa</a>
      <a href=\"#\">Mis compras</a>
      ";
  }

  $cartIcon = new CartIcon($amountItems);
  $renderCart = Blade::renderComponent($cartIcon);

  $authIcons .= $renderCart;

@endphp

<header class="w-full text-sm p-3 bg-yellow-300 not-has-[nav]:hidden">
    <div class=" ml-40 flex items-center gap-4">
        <!-- Imagen al lado del buscador -->
        <a href="{{ route('home') }}">
          <img src={{ Vite::image('logo_large.webp') }} alt="Mercado Libre">
        </a>

        @if ($long)
        <!-- Formulario de búsqueda -->
          <form class="flex w-full max-w-md" id="searchForm" onsubmit="searchProducts(event)">
              <input
                  type="text"
                  name="search"
                  placeholder="Buscar productos, marcas y más..."
                  value="{{ $search }}"
                  class="w-full p-2 rounded-l-lg border border-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
          </form>
        @endif

    </div>
  @if ($long)
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
        {!! $authIcons !!}
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
  @endif
</header>

@if ($long)
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

      function searchProducts(event) {
        event.preventDefault();

        const nameProduct = event.target[0].value.trim();
        const url = `${window.location.origin}/products/${encodeURIComponent(nameProduct)}`;
        if (nameProduct) {
          window.location.href = url;
        }
      }
  </script>
@endif
