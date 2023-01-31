<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view("categories.create");
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
      'description' => 'required',
    ]);

    $file = $request->file('photo');
    $file_name = time() . "_" . $file->getClientOriginalName();

    $upload_target = 'uploads';
    $file->move($upload_target, $file_name);

    $validated = [
      'name' => $request->input('name'),
      'description' => $request->input('description'),
      'photo' => $file_name,
    ];

    Category::create($validated);

    return redirect(route('admin'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function show(Category $category)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function edit(Category $category)
  {
    return view('categories.edit', [
      'category' => $category,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $category)
  {
    $request->validate([
      'name' => 'required|string',
      'description' => 'required',
      'photo' => 'sometimes|file|image|mimes:jpeg,png,jpg'
    ]);

    $validated = [
      'name' => $request->input('name'),
      'description' => $request->input('description'),
    ];

    if ($request->hasFile('photo')) {
      File::delete('uploads/' . $category->photo);
      $file = $request->file('photo');
      $file_name = time() . "_" . $file->getClientOriginalName();

      $upload_target = 'uploads';
      $file->move($upload_target, $file_name);
      $validated["photo"] = $file_name;
    }

    $category->update($validated);

    return redirect(route('admin'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    File::delete('uploads/' . $category->photo);
    Category::destroy($category->id);
    return redirect("admin");
  }
}
