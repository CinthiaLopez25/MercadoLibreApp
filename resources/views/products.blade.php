<x-template>
  <x-header></x-header>
  <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
    <main class="flex flex-col items-center w-full p-6">
      @foreach ($categories as $category)
        @php
          $products_print = $products->where('id_category', $category->id);
        @endphp
        <x-product-box :categorie="$category->name" :products="$products_print"></x-product-box>
      @endforeach
    </main>
  </div>
</x-template>
