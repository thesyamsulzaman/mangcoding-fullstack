@extends('layouts.base')
@section('title', 'Admin - Add Product')

@section('content')
<div class="container">
  <div class="min-w-[450px] mt-26">
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="space-y-5 p-8">
      <h1 class="text-4xl">Product Management</h1>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      @include('partials.messages')

      <fieldset>
        <label for="name" class="block mb-2 text-sm font-medium">Product Name</label>
        <input name="name" class="form-control" placeholder="Enter name">

        @if ($errors->has('name'))
        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
        @endif
      </fieldset>

      <fieldset>
        <label for="price" class="block mb-2 text-sm font-medium">Price</label>
        <input name="price" type="number" class="form-control" placeholder="Enter Price">

        @if ($errors->has('price'))
        <span class="text-danger text-left">{{ $errors->first('price') }}</span>
        @endif
      </fieldset>

      <div class="grid grid-cols-3 gap-5">
        <fieldset>
          <label for="trait" class="block mb-2 text-sm font-medium">Trait</label>
          <input name="trait" type="text" class="form-control" placeholder="Enter Trait">

          @if ($errors->has('trait'))
          <span class="text-danger text-left">{{ $errors->first('trait') }}</span>
          @endif
        </fieldset>

        <fieldset>
          <label for="rate" class="block mb-2 text-sm font-medium">Rate</label>
          <input name="rate" min="0" max="5" maxlength="1" type="number" class="form-control" placeholder="Enter Rate, 0 - 5">

          @if ($errors->has('rate'))
          <span class="text-danger text-left">{{ $errors->first('rate') }}</span>
          @endif
        </fieldset>

        <fieldset>
          <label for="price" class="block mb-2 text-sm font-medium">Category</label>

          <select name="category_id" id="category" class="form-control">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
            @endforeach
          </select>

          @if ($errors->has('category_id'))
          <span class="text-danger text-left">{{ $errors->first('category_id') }}</span>
          @endif
        </fieldset>
      </div>

      <fieldset>
        <label for="description" class="block mb-2 text-sm font-medium">Description</label>
        <textarea name="description" id="description" rows="6" class="form-control" placeholder="Write Description"></textarea>

        @if ($errors->has('description'))
        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
        @endif
      </fieldset>

      <fieldset>
        <label for="photo" class="block mb-2 text-sm font-medium">Photo</label>
        <input type="file" name="photo" id="photo">

        @if ($errors->has('photo'))
        <span class="text-danger text-left">{{ $errors->first('photo') }}</span>
        @endif
      </fieldset>



      <button type="submit" class="btn btn-primary btn-md w-full">Save</button>
    </form>
  </div>
</div>
@endsection