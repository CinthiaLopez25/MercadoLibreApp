<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show()
    {
        $categories = $this->getCategories();
        $products = Product::with('category')->get();

        return view('products', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function showProduct($id)
    {
        $product = Product::with('category')->findOrFail($id);

        return view('product', [
            'product' => $product,
        ]);
    }

    public function showProductsByName($name)
    {
        $nameQuery = '%'.$name.'%';
        $products = Product::where('name', 'ILIKE', $nameQuery)->get();

        $categories = $this->getCategories();

        return view('search', [
            'products' => $products,
            'categories' => $categories,
            'search' => $name
        ]);
    }

    public function showProductsByNameCategory($name, $category)
    {
        $nameQuery = '%'.$name.'%';
        $products = Product::where('name', 'ILIKE', $nameQuery)
            ->where('id_category', $category)
            ->get();

        $categories = $this->getCategories();

        return view('search', [
            'products' => $products,
            'categories' => $categories,
            'search' => $name,
            'categorySelected' => $category
        ]);
    }

    private function getCategories()
    {
        // Solo categorías que tienen productos asociados
        return Category::has('product')->get();
    }
}
