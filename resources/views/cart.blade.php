<x-template>
  <x-header long="true"/>
  <main class="flex justify-center py-10 w-full">
    <div class="flex flex-col gap-1 w-1/2 p-4">
      <form action="{{ route('purchase.store') }}" class="flex flex-col items-end gap-5 w-full" method="post" onsubmit="handleFormSubmit(event)" id="form">
        <div class="w-full">
          @foreach($products as $product)
            <x-cart-product :product="$product"></x-cart-product>
          @endforeach
        </div>
        <button id="purchaseBtn" class="product-button w-fit py-2 bg-blue-700 text-slate-200" type="submit">Realizar compra</button>
      </form>
    </div>
  </main>
</x-template>

<script>
  function handleFormSubmit(e) {
    let isPurchase = document.getElementById('purchaseBtn') == e.submitter;


    if(isPurchase){
      document.getElementsByName('cart')[0].value = 1
      return;
    }

    let isPurchaseIndividual = false;
    document.getElementsByName('purchaseBtn').forEach(btn => {
      if (btn == e.submitter)
      isPurchaseIndividual = true;
    });

    let URL = 'http://127.0.0.1:8000/';

    const productContainer = e.submitter.parentElement.parentElement.parentElement;
    let data;
    const form = productContainer.children;
    const csrf = form[1].value;
    const productInput = form[3];
    const unitsSelect = form[5].children[0];

    const productId = productInput.value;
    const amount = unitsSelect.selectedOptions[0].value

    if(isPurchaseIndividual) {
      document.getElementById('form').innerHTML = '';
      document.getElementById('form').appendChild(productContainer);
      return
    }else {
      URL += 'product/delete';
      data = {
        'product': productId
      };
    }
    e.preventDefault();





    const generateFetch= async () => {
      const response = fetch(URL,{
        method: 'POST',
        headers:{
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrf
        },
        redirect: "follow",
        body: JSON.stringify(data)
      });
      const responseData = await response;
      if(!responseData)
        return;

      if(responseData.redirected){
        location.href = responseData.url;
      }
      else {
        location.reload();
      }
    }

    generateFetch();
  }
</script>
