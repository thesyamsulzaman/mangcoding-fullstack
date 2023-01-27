<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view("products.create", [
      'categories' => Category::all()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'photo' => 'required|file|image|mimes:jpeg,png,jpg',
      'name' => 'required|string',
      'price' => 'required',
      'description' => 'required',
    ]);

    $file = $request->file('photo');
    $file_name = time() . "_" . $file->getClientOriginalName();

    $upload_target = 'uploads';
    $file->move($upload_target, $file_name);

    $validated = [
      'name' => $request->input('name'),
      'price' => $request->input('price'),
      'description' => $request->input('description'),
      'photo' => $file_name,
      'trait' => $request->input("trait"),
      'category_id' => $request->input('category_id'),
      'rate' => $request->input("rate"),
      'featured' => false
    ];

    $request->user()->products()->create($validated);

    return redirect(route('admin'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Products  $products
   * @return \Illuminate\Http\Response
   */
  public function show(Products $products)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Products  $products
   * @return \Illuminate\Http\Response
   */
  public function edit(Products $product)
  {
    return view('products.edit', [
      'product' => $product,
      'categories' => Category::all()
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Products  $products
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Products $product)
  {
    $request->validate([
      'name' => 'required|string',
      'price' => 'required',
      'description' => 'required',
      'photo' => 'sometimes|file|image|mimes:jpeg,png,jpg'
    ]);

    $validated = [
      'name' => $request->input('name'),
      'price' => $request->input('price'),
      'description' => $request->input('description'),
      'trait' => $request->input("trait"),
      'category_id' => $request->input('category_id'),
      'rate' => $request->input("rate"),
      'featured' => false
    ];

    if ($request->hasFile('photo')) {
      File::delete('uploads/' . $product->photo);
      $file = $request->file('photo');
      $file_name = time() . "_" . $file->getClientOriginalName();

      $upload_target = 'uploads';
      $file->move($upload_target, $file_name);
      $validated["photo"] = $file_name;
    }

    $product->update($validated);

    return redirect(route('admin'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Products  $products
   * @return \Illuminate\Http\Response
   */
  public function destroy(Products $product)
  {
    File::delete('uploads/' . $product->photo);
    Products::destroy($product->id);
    return redirect("admin");
  }
}
