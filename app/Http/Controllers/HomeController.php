<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('index', ['products' => Products::all()]);
  }

  public function detail($id)
  {
    return view('detail', ['product' => Products::find($id), 'products' => Products::all()]);
  }

  public function shop()
  {
    return view('shop', ['products' => Products::all()]);
  }
}
