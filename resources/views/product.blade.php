<x-template>
  <x-header></x-header>
  <main class="flex flex-col gap-3 px-96 py-10">
    <h3>{{ $product->category_name }}</h3>
    <x-product-detail :product="$product"></x-product-detail>
  </main>
</x-template>
