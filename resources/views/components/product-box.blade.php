@php
  $random = (bool) rand(0, 1);
@endphp

<section class= "w-3/5 p-4 mb-6 rounded-md bg-box">
<!-- Título de sección -->
  <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-bold capitalize"> {{ $categorie }} </h2>
  </div>

  <!-- Contenedor de productos -->
  <div class="flex flex-nowrap gap-2 justify-start items-start overflow-x-auto">
    @foreach ($products as $product)
      <a class="flex flex-col gap-3 w-40 min-w-36 aspect-card group" href="#">
        <img src={{ $product->image_url  }} class="aspect-card-image">
        <p class="text-sm font-medium text-card group-hover:text-blue-500 mb-1"> {{ $product->name  }} </p>
        <div class="flex items-baseline gap-2">
            <span class="text-black font-medium text-2xl"> $ {{ $product->price }} </span>
        </div>
        @if($product->free_shipping)
          <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
        @endif
      </a>
    @endforeach
  </div>
</section>
