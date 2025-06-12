<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addProduct(Request $request){
      $user = $request->user();
      $productId = $request->input('product');
      $amount = $request->input('amount');

      $cart = $user->cart()->get()->first();
      $item_product = $cart->product()->first()->pivot;
      if($item_product) {
        $amount += $item_product->item_amount;
        $cart->product()->updateExistingPivot($productId,[
          'item_amount' => $amount
        ]);
      }else {
        $cart->product()->attach($productId, ['item_amount' => $amount]);
      }

      session()->put('item_amount', $amount);

      return redirect()->intended(route('products.show',['product'=> $productId]));
    }
}
