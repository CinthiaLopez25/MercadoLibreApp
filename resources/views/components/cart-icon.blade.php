@php
  $classSpan = 'absolute -top-1 ml-1 h-min text-xs bg-yellow-300 ';
  if($items <= 0){
    $classSpan .= 'hidden';
  }
  $items = $items > 9 ? "9+" : $items;

  $itemsSpan = "<span id=\"amountItems\" class=\"$classSpan\">". $items ."</span>";
@endphp

<a href="{{ route('cart.show') }}" class="flex justify-center relative">
  <img class="w-6 h-5" src="{{ Vite::image('shopping-cart.png') }}"/>
  {!! $itemsSpan !!}
</div>
