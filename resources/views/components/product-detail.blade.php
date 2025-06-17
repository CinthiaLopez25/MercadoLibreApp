@php
  $stock = $product->stock;
  $print_stock = $product->stock > 10 ?
            $product->stock - ($product->stock % 10):
            $product->stock - 1;
@endphp

<section class="product-detail gap-5 w-5/6 p-8 rounded-md bg-box">
  <div class="col-span-2">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto rounded-sm" />
  </div>
  <div class="col-span-2">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto" />
  </div>
  <div class="flex flex-col gap-4 px-2 py-4">
    <h2 class="text-2xl font-bold">{{ $product->name }}</h2>
    <p class="text-3xl text-transparent-black-300 font-light">$ {{ number_format($product->price, 2) }}</p>
    <p class="font-bold">Lo que tienes que saber de este producto</p>
    <p class="text-gray-500">{{ $product->description }}</p>
  </div>
  <div class="flex flex-col gap-2 p-4 border rounded-md">
    @if ($product->free_shipping)
      <p class="text-green-500">Llega gratis mañana</p>
    @endif
    @if ($stock > 0)
      <p class="text-green-500">Stock disponible</p>
      <p class="flex flex-wrap"><span class="text-nowrap text-sm font-medium text-transparent-black-100">Almacenado y enviado por </span><span class="flex w-fit align-middle gap-1 text-green-500"><img class="w-5" src="{{ Vite::image('green-lightning.png') }}"/>Full</span></p>
    @endif


    <form class="flex flex-col gap-2" onsubmit="handleFormSubmit(event)" action="{{ route('purchase.store') }}" method="post">
      @csrf
      <input hidden type="text" value="0" name="cart"/>
      <input hidden type="number" value="{{ $product->id }}" name="product" id="productInput"/>
      <span>Cantidad:
        <select id="units" class="p-2.5 py-0 rounded-md text-sm font-bold text-gray-900" name="amount">
          @for ($i = 0; $i < $stock && $i < 6; $i++)
            @php
              $selected = false;
              $cantidad = $i + 1;

              if($i == 0){
                $selected = true;
              }
            @endphp

            <option {{ $selected ? 'selected' : ''}} value="{{ $cantidad }}">{{ $cantidad . (($cantidad == 1) ? ' unidad' : ' unidades') }}</option>
          @endfor
        </select>
        <span>(+{{ $print_stock }} disponibles)</span>
      </span>
      <button id="purchaseBtn" type="submit" class="product-button bg-blue-700 text-slate-200">Comprar Ahora</button>
      <button id="cartBtn" type="submit" class="product-button bg-slate-200 text-blue-700">Agregar al carrito</button>
    </form>
  </div>


</section>
<div id="modal" class="justify-center items-center absolute top-0 left-0 w-screen h-screen bg-modal hidden">
  <div class="flex flex-col gap-10 px-12 py-16 rounded-lg bg-box">
    <span class="font-bold text-center">¿Quieres ir a tu carrito?</span>
    <div class="flex gap-4">
      <a href="{{ route('cart.show') }}" class="product-button w-fit py-2 bg-blue-700 text-slate-200">Ir a mi carrito</a>
      <button onclick="toggleModal()" class="product-button w-fit py-2 bg-slate-200 text-blue-700">Seguir comprando</a>
    </div>
  </div>
</div>

<script>
  function handleFormSubmit(e){
    const isPurchase = document.getElementById('purchaseBtn') == e.submitter;

    if(isPurchase){
      return;
    }
    e.preventDefault();

    let URL = 'http://127.0.0.1:8000/product';

    const productInput = document.getElementById('productInput');
    const unitsSelect = document.getElementById('units');
    const csrf = document.getElementsByName('_token')[0].value;

    const productId = productInput.value;
    const amount = unitsSelect.selectedOptions[0].value
    let data = {
      'product': productId,
      amount
    }
    const generateFetch= async () => {
      const response = fetch(URL,{
        method: 'POST',
        headers:{
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrf
        },
        redirect: "follow",
        body: JSON.stringify(data)
      }).then(async response => {
        response = await response.text()
        try{
          return JSON.parse(response);
        }catch{
          console.log(response);
        }
      })
      .then(data => {
        const spanAmount = document.getElementById('amountItems');
        spanAmount.classList.remove('hidden')
        spanAmount.innerText = data > 9 ? "9+" : data;

        if(!isPurchase){
          toggleModal();
        }
      })

      const responseData = await response;
      if(!responseData)
        return;

      if(responseData.redirected && responseData.url.includes('/login'))
        location.href = responseData.url;
    }

    generateFetch();
  }

  function toggleModal() {
    const modal = document.getElementById('modal');

    modal.classList.toggle('hidden');
    modal.classList.toggle('flex');
  }
</script>
