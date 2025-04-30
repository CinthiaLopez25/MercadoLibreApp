<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show()
    {
        $categories = DB::table('categories')
          ->select( ['categories.id', 'categories.name'])
          ->whereIn('id',function ($query) {
              $query->select('id_category')
                ->from('products')
                ->groupBy('id_category')
                ->havingRaw('COUNT(*) > 0');
          })
          ->get();
        $products = DB::table('products')
          ->select(['products.id', 'products.image_url','products.name', 'products.price', 'products.free_shipping', 'products.id_category', 'categories.name as category_name'])
          ->join('categories', 'categories.id', '=', 'products.id_category')
          ->get();

        return view('products', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
