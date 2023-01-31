@extends('layouts.base')
@section('title', 'Admin - Add Category')

@section('content')
<div class="container">
  <div class="min-w-[450px] mt-26">
    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data" class="space-y-5 p-8">
      <h1 class="text-4xl">Category Management</h1>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      @include('partials.messages')

      <fieldset>
        <label for="name" class="block mb-2 text-sm font-medium">Category Name</label>
        <input name="name" class="form-control" placeholder="Enter name">

        @if ($errors->has('name'))
        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
        @endif
      </fieldset>

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