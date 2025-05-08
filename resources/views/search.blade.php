<x-template>
  <x-header :search="$search"/>
  <main class="grid grid-cols-4 gap-8 py-4 px-16" style="grid-template-areas: 'side main main main';">
    <sidebar style="grid-area: side;">
      <span class="flex flex-col mb-3">
        <h2 class="text-xl font-semibold text-gray-700">{{ $search }}</h2>
        <span class="text-gray-500 text-sm font-semibold">
          {{ $products->count() }} {{ Str::plural('producto', $products->count()) }}
        </span>
      </span>
      <div class="flex flex-col gap-1">
        <h3 class="text-lg">Categorias</h3>
        @foreach ($categories as $category)
          <a href="{{ route('productsBycategoy.show', ['product'=>$search,'category' => $category->id]) }}" class="text-gray-600 hover:text-gray-900">
            {{ $category->name }}
          </a>
        @endforeach
      </div>
    </sidebar>
    <section class="flex flex-wrap gap-3" style="grid-area: main;">
      @foreach ($products as $product)
        <div class="p-2 rounded-md bg-box">
          <x-product-card :product="$product" long="true"/>
        </div>
      @endforeach
    </section>
  </main>
</x-template>
