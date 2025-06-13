@php
  if($long){
    $class_a = "flex flex-col gap-3 min-w-36 aspect-card w-60";
    $class_p = "text-sm font-medium text-card mb-1";
  } else {
    $class_a = "flex flex-col gap-3 min-w-36 aspect-card w-40 group";
    $class_p = "text-sm font-medium text-card mb-1 group-hover:text-blue-500";
  }
@endphp

<a class="{{ $class_a }}" href="/product/{{ $product->id }}">
  <img src={{ $product->image_url  }} class="aspect-card-image">
  <p class="{{ $class_p }}"> {{ $product->name  }} </p>
  <div class="flex items-baseline gap-2">
      <span class="text-black font-medium text-2xl"> $ {{ $product->price }} </span>
  </div>
  @if($product->free_shipping)
    <p class="text-green-600 text-sm font-semibold mt-1">Envío gratis ⚡ FULL</p>
  @endif
</a>
