<x-template>
  <x-header/>
  <main class="grid grid-cols-4 gap-8 py-4 px-16" style="grid-template-areas: 'side main main main';">
    <sidebar style="grid-area: side;">
    </sidebar>
    <section style="grid-area: main;">
      @foreach ($products as $product)
        <x-product-card :product="$product" />
      @endforeach
    </section>
  </main>
</x-template>
