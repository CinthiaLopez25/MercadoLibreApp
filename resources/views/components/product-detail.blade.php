<section class="grid grid-cols-10" style="grid-template-areas: 'side image image image detail detail detail price price price';">
  <div class="col-span-2" style="grid-area: side;">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto" />
  </div>
  <div class="col-span-2" style="grid-area: image;">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto" />
  </div>
  <div style="grid-area: detail;">

  </div>
  <div style="grid-area: price;">

  </div>
</section>
