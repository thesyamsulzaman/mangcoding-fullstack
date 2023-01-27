@extends('layouts.base')
@section('title', 'Mangcoding Store - Homepage')

@section('content')

@include('partials.navbar')

<section class="bg-[url('/assets/bg-search.jpg')] relative flex items-center justify-center bg-no-repeat bg-cover bg-center min-h-[440px]">
  <div class=" bg-slate-400 absolute inset-x-0 inset-y-0 opacity-80"></div>
  <div class="z-50 w-full text-center">
    <h1 class="text-4xl text-white font-bold mb-5">Find a product of your choice</h1>
    <div class="flex bg-white h-full items-center space-x-3 w-full mb-4 border border-gray-400 p-4 max-w-[768px] mx-auto rounded-full ">
      <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
        <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)" fill="#070D13" />
      </svg>
      <input type="text" class="w-full border-none outline-none" placeholder="Search for Product Name ..." />
    </div>
  </div>

</section>

<section class="container pt-10 pb-20 mt-3 mb-10">
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