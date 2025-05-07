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
