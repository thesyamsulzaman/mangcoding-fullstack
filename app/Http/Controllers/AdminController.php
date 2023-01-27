<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin', ['products' => Products::with('user')->latest()->get()]);
  }
}
