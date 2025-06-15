<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addProduct(Request $request){
      $user = $request->user();
      $productId = $request->input('product');
      $amount = $request->input('amount');

      $cart = $user->cart()->first();
      $item_product = $cart->product()->where('products.id','=',$productId)->first()->pivot ?? null;
      if($item_product) {
        $amount += $item_product->item_amount;
        $cart->product()->updateExistingPivot($productId,[
          'item_amount' => $amount
        ]);
      }else {
        $cart->product()->attach($productId, ['item_amount' => $amount]);
      }

      return redirect()->intended(route('products.show',['product'=> $productId]));
    }

    public static function getProductsAmount(User $user){
      $cart = $user->cart()->first();
      return $cart->product()->sum('item_amount');
    }
}
