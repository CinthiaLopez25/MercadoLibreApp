<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

use function PHPUnit\Framework\isArray;

class PurchaseController extends Controller
{
  public function show(Request $request) {
    $products = $request->input('products');
    return view('purchase',[
      ['products' => $products]
    ]);
  }
    public function store(Request $request) {
      $user = $request->user();
      $products = is_null($request->input('products')) ? [] : $request->input('products');
      $isCartPurchase = (bool)$request->input('cart');

      if(!$products){
        $productsId = $request->input('product');
        $productsAmount =  $request->input('amount');
        if(is_array($productsId)){
          for($i = 0; $i < count($productsId); $i++) {
            array_push($products,
            [
              'id'=>$productsId[$i],
              'amount' => $productsAmount[$i]
            ]);
          }
        }else{
          array_push($products,
            [
              'id'=>$productsId,
              'amount' => $productsAmount
            ]);
        }
      }

      if(!isArray($products))
        return new BadRequestException('Se espera un arreglo', 402);

      $purchasedProducts = [];

      foreach($products as $productPurchase) {
        $purchase = new Purchase();
        $product = Product::find((int) $productPurchase['id']);
        if(!$product)
          return new BadRequestException('No existe el producto', 402);

        $purchase->item_amount = $productPurchase['amount'];
        $purchase->id_user = $user->id;
        $user->purchase()->save($purchase);
        $product->purchase()->save($purchase);
        if($isCartPurchase)
          CartController::deleteProduct($user, $product->id);
        array_push($purchasedProducts, ['purchase' => $purchase, 'product' => $product]);
      }

      return view('purchase', ['products' => $purchasedProducts]);
    }
}
