<?php
  $stock = $product->stock > 10 ?
            $product->stock - ($product->stock % 10):
            $product->stock - 1;
?>

<section class="product-detail gap-5 w-5/6 p-8 rounded-md bg-box">
  <div class="col-span-2">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto rounded-sm" />
  </div>
  <div class="col-span-2">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto" />
  </div>
  <div class="flex flex-col gap-4 px-2 py-4">
    <h2 class="text-2xl font-bold">{{ $product->name }}</h2>
    <p class="text-3xl text-transparent-black-300 font-light">$ {{ number_format($product->price, 2) }}</p>
    <p class="font-bold">Lo que tienes que saber de este producto</p>
    <p class="text-gray-500">{{ $product->description }}</p>
  </div>
  <div class="flex flex-col gap-2 p-4 border rounded-md">
    @if ($product->free_shipping)
      <p class="text-green-500">Llega gratis mañana</p>
    @endif
    @if ($product->stock > 0)
      <p class="text-green-500">Stock disponible</p>
      <p class="flex flex-wrap"><span class="text-nowrap text-sm font-medium text-transparent-black-100">Almacenado y enviado por </span><span class="flex w-fit align-middle gap-1 text-green-500"><img class="w-5" src="{{ Vite::image('green-lightning.png') }}"/>Full</span></p>
    @endif


    <form class="flex flex-col gap-2" action="">
      <span>Cantidad:
        <select id="countries" class="p-2.5 border-0 text-sm font-bold text-gray-900">
          @if($stock < 6)
            @for ($i = 1; $i <= $stock; $i++)
              <option  selected value="$i">{{ $i . $i == 1 ? ' unidad' : 'unidades' }}</option>
            @endfor
          @else
            <option selected value="1">1 unidad</option>
            <option value="2">2 unidades</option>
            <option value="3">3 unidades</option>
            <option value="4">4 unidades</option>
            <option value="5">5 unidades</option>
            <option value="6">6 unidades</option>
          @endif
        </select>
        <span>(+{{ $stock }} disponibles)</span>
      </span>
      <button class="product-button bg-blue-700 text-slate-200">Comprar Ahora</button>
      <button class="product-button bg-slate-200 text-blue-700">Agregar al carrito</button>
    </form>
  </div>
</section>
