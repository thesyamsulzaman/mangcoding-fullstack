@extends('layouts.base')
@section('title', 'Mangcoding Store - Homepage')

@section('content')

@include('partials.navbar')

<section class="container pt-8 flex flex-col items-start lg:flex-row lg:space-x-8">
  <img src="{{ url('/uploads/'.$product->photo) }}" class="h-full w-full flex-1 max-h-[420px] object-cover" alt="">

  <div class="flex-1 space-y-3">
    <span class="font-bold text-white bg-slate-600 p-1 rounded px-2">
      {{ $product->trait }}
    </span>

    <h1 class="text-4xl font-bold">{{ $product->name }}</h1>
    <p>
      {{ $product->description }}
    </p>

    <div class="flex items-center space-x-3">
      <p class="text-3xl font-semibold">$ {{ $product->price }}</p>
      <span class="flex text-gray-500">
        <img width="15" src="{{ url('/assets/star.svg') }}" class="mr-1" alt="">
        ({{ $product->rate }})
      </span>
    </div>

    <button class="btn">Buy Now</button>
  </div>
</section>

<section class="container py-20 mt-3 mb-10">
  <div class="flex justify-between items-center w-full">
    <h3 class="text-3xl font-semibold">
      Related Products
    </h3>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-28 gap-x-10 mt-10">
    @foreach($products as $product)
    <div class="relative">
      <img src="{{ url('/uploads/'.$product->photo) }}" class="h-full w-full" alt="">
      <div class="mt-3 space-y-2">
        <div class="flex justify-between">
          <a href="/detail/{{ $product->id }}" class="font-bold text-xl">{{ $product->name }}</a>
          <span class="font-bold text-xl">$ {{ $product->price }}</span>
        </div>
        <div class="flex justify-between">
          <p class="text-lg text-gray-500">{{ $product->trait }}</p>
          <p class="flex text-gray-500">
            <img width="15" src="{{ url('/assets/star.svg') }}" class="mr-1" alt="">
            ({{ $product->rate }})
          </p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

@include('partials.footer')

@endsection