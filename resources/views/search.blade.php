<x-template>
  <x-header/>
  @foreach ($products as $product)
    <x-product-card :product="$product" />
  @endforeach
</x-template>
