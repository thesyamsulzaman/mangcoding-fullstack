@extends('layouts.base')
@section('title', 'Mangcoding Store - Categories')

@section('content')

@include('partials.navbar')

<section class="relative container min-h-[440px] mt-8">
  <div class="flex justify-between items-center w-full">
    <h3 class="text-4xl font-semibold">Categories</h3>
  </div>

  <div class="grid my-8 gap-5 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($categories as $category)
    <div class="w-full relative bg-gray-700 min-h-[300px] 
      @if ($loop->first || $loop->index === 4)
        lg:row-span-2
      @endif

      @if ($loop->index === 3)
        lg:col-span-2
      @endif

      @if ($loop->last)
        lg:col-span-3
      @endif
    ">
      <img src="{{ url('/uploads/'.$category->photo) }}" class="absolute w-full h-full object-cover" alt="">
      <div class=" bg-slate-500 absolute inset-x-0 inset-y-0 opacity-60"></div>
      <div class="absolute bottom-1 left-1 text-white p-5 space-y-2">
        <h3 class="font-bold text-3xl">{{ $category->name }}</h3>
        <p class="text-md\ text-opacity-60">{{ $category->description }}</p>
        <a href="/shop/search?category={{ $category->name }}" class="btn inline-block">Buy Now</a>
      </div>
    </div>
    @endforeach
  </div>
</section>

@include('partials.footer')

@endsection