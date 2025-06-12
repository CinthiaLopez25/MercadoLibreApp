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
      $cart->product()->attach($productId, ['item_amount' => $amount]);
    }
}
