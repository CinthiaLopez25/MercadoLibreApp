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
      <x-product-card :product="$product"></x-product-card>
    @endforeach
  </div>
</section>
