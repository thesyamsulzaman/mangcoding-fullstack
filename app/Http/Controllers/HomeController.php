<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index()
  {
    return view('index', ['products' => Products::all(), 'categories' => Category::limit(2)->get()]);
  }

  public function detail($id)
  {
    return view('detail', ['product' => Products::find($id), 'products' => Products::all()]);
  }

  public function shop()
  {
    return view('shop', ['products' => Products::all()]);
  }

  public function search(Request $request)
  {
    $search = $request->search;
    $category = $request->category;

    $products = DB::select(
      "
      SELECT 
        products.* 
      FROM products
      JOIN categories ON categories.id = products.category_id
      WHERE 
          categories.name LIKE CONCAT( '%', :category_name, '%')
        OR
          products.name LIKE CONCAT( '%', :product_name, '%')
      ",
      ['category_name' => $category, 'product_name' => $search]
    );

    return view('shop', ['products' => $products]);
  }

  public function categories()
  {
    return view('categories', ['categories' => Category::all()]);
  }
}
