<x-template>
  <x-header></x-header>
  <main class="flex flex-col items-center gap-5 mx-auto py-10">
    <h2 class="font-bold text-2xl">¡Gracias por tu compra!</h2>
    <section class="w-4/6 p-8 rounded-md bg-box">
      @foreach($products as $product)
      <div class="flex justify-between items-center h-24 px-4">
        <img src="{{ $product['product']->image_url }}" class="h-full"/>
        <div class="flex flex-col justify-between py-5">
          <h3>{{ $product['product']->name }}</h3>
          <span>{{ $product['purchase']->item_amount }}</span>
        </div>
        <a class="product-button w-fit py-2 bg-blue-700 text-slate-200" href="{{ route('products.show', ['product' => $product['product']->id]) }}">Volver a comprar</a>
      </div>
      @endforeach
    </section>
  </main>
</x-template>


