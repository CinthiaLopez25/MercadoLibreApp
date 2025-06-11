@php
  $itemsSpan = "";
  $items = $items > 9 ? "9+" : $items;
  if($items > 0){
    $itemsSpan = "<span class=\"absolute -top-1 ml-1 h-min text-xs bg-yellow-300\">". $items ."</span>";
  }
@endphp

<div class="flex justify-center relative">
  <img class="w-6 h-5" src="{{ Vite::image('shopping-cart.png') }}"/>
  {!! $itemsSpan !!}
</div>
