<x-template>
  <x-header long="true"></x-header>
  <main class="flex flex-col items-center mx-auto py-10">
    <h3 class="w-5/6 mb-2">{{ $product->category_name }}</h3>
    <x-product-detail :product="$product"></x-product-detail>
  </main>
</x-template>
