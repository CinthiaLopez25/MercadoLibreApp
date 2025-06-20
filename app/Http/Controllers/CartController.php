<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
      $user = $request->user();
      $productId = $request->input('product');
      $amount = $request->input('amount');

      $cart = $user->cart()->first();
      $item_product = $cart->product()->where('products.id','=',$productId)->first()->pivot ?? null;
      if($item_product) {
        $amount += $item_product->item_amount;
        $cart->product()->updateExistingPivot($productId,[
          'item_amount' => $amount,
          'updated_at' => now()
        ]);
      }else {
        $cart->product()->attach($productId, ['item_amount' => $amount, 'created_at' => now()]);
      }

      $product_amount = $this->getProductsAmount($user);
      return response()->json($product_amount);
    }

    public function show(Request $request) {
      $user = $request->user();
      $cart = $user->cart()->first();
      $products = $cart->product()->get() ?? null;

      $total = 0;
      foreach ($products as $product) {
          $total += $product->price * $product->pivot->item_amount;
      }

      return view('cart', [
          'products' => $products,
          'total' => $total
      ]);
    }

    public function delete(Request $request) {
      $user = $request->user();
      $cart = $user->cart()->first();
      $productId = $request->input('product');
      $this->deleteProduct($user, $productId);
      $products = $cart->product()->get() ?? null;

      return view('cart', ['products' => $products]);
    }

    public static function getProductsAmount(User $user){
      $cart = $user->cart()->first();
      return $cart->product()->sum('item_amount');
    }

    public static function deleteProduct($user, $product) {
      $cart = $user->cart()->first();
      $item_product = $cart->product()->where('products.id','=',$product)->first()->pivot ?? null;
      if($item_product) {
        $item_product->delete();
      }
      return (bool)$item_product;
    }
}
