@php
  $productAmount = $product->pivot->item_amount;
  $stock = $product->stock;
@endphp

<div class="cart-product h-28 p-2 bg-box">
  <section class="flex items-center justify-self-center">
    <img src="{{ $product->image_url }}" class="h-full"/>
  </section>
    @csrf
    <input hidden type="text" value="1" name="cart"/>
    <input hidden type="text" name="product[]" value="{{ $product->id }}">
    <section class="flex flex-col justify-around">
      <h2 class="w-full">{{ $product->name }}</h2>
      {{--Mostrar el precio del producto --}}
    <p class="text-sm text-black font-semibold">
      Precio: ${{ number_format($product->price, 2) }}
    </p>

      <div class="flex gap-6">
        <button type="submit" class="cart-button">Eliminar</button>
        <button name="purchaseBtn" type="submit" class="cart-button">Comprar</button>
      </div>
    </section>
    <section class="flex">
      <select name="amount[]" class="py-0 rounded-md text-sm font-bold text-gray-900" id="units">
      @for ($i = 0; $i < $stock && $i < 6; $i++)
        @php
          $selected = false;
          $cantidad = $i + 1;

          if($cantidad == $productAmount){
            $selected = true;
          }
        @endphp

        <option {{ $selected ? 'selected' : ''}} value="{{ $cantidad }}">{{ $cantidad . (($cantidad == 1) ? ' unidad' : ' unidades') }}</option>
      @endfor
      @if($productAmount > 6)
          <option selected value="{{ $productAmount }}">{{ $productAmount }} unidades</option>
      @endif
      </select>
    </section>
</div>
