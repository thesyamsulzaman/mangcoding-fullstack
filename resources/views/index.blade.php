@extends('layouts.base')
@section('title', 'Mangcoding Store - Homepage')

@section('content')

@include('partials.navbar')

<section class="container pt-8 pb-28 flex flex-col items-center lg:flex-row">
  <div class="space-y-8 flex-1">
    <span class="btn rounded">Mangcoding Store</span>
    <h1 class="text-7xl font-bold leading-none relative">
      Get the right Furniture For your
      <span class="relative home">Home</span>
    </h1>
    <p class="text-xl text-gray-500">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
    </p>
    <a href="/shop" class="btn inline-block"> Shop Now</a>
  </div>

  <div class="flex space-x-4 flex-1 hidden lg:flex">
    <img class="w-full" src="./assets/chair-1.png" alt="">
    <img class="relative -bottom-14 w-full" src="./assets/chair-2.png" alt="">
  </div>
</section>


<section class="bg-[#212121] py-24">
  <div class="container flex flex-col space-y-5 lg:space-y-0 lg:space-x-5 lg:flex-row">
    <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
      <img src="./assets/trophy.svg" alt="">
      <div class="text-white space-y-1">
        <h3 class="font-bold text-base">High Quality</h3>
        <p class="text-sm">Material is Strong</p>
      </div>
    </div>

    <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
      <img src="./assets/protection.svg" alt="">
      <div class="text-white space-y-1">
        <h3 class="font-bold text-base">Warranty Protection</h3>
        <p class="text-sm">Over 3 years</p>
      </div>
    </div>

    <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
      <img src="./assets/shipping.svg" alt="">
      <div class="text-white space-y-1">
        <h3 class="font-bold text-base">Free Shipping</h3>
        <p class="text-sm">Order $100 Minimum</p>
      </div>
    </div>

    <div class="border-2 border-white flex flex-1 items-center justify-center py-6 px-3 space-x-6 ">
      <img src="./assets/support.svg" alt="">
      <div class="text-white space-y-1">
        <h3 class="font-bold text-base">24 / 7 Support</h3>
        <p class="text-sm">Dedicated Support</p>
      </div>
    </div>
  </div>
</section>

<div class="container py-20">
  <span class="text-yellow-500 text-xl">Explore</span>
  <div class="flex justify-between items-center w-full">
    <h3 class="text-5xl font-semibold">Categories</h3>
    <a href="/categories" class="btn outlined inline-block">See More</a>
  </div>

  <div class="mt-8 flex flex-col space-y-5 lg:flex-row lg:space-x-5 lg:space-y-0">

    @foreach($categories as $category)

    <div class="flex-1 flex space-x-8 relative rounded
      @if ($loop->first)
        bg-[#BEDDE2]
      @endif

      @if ($loop->last)
        bg-[#DEEFE9]
      @endif
    ">
      <img src="{{ url('/uploads/'.$category->photo) }}" class="self-end hidden md:block" alt="">

      <div class="max-w-[387px] space-y-4 py-8">
        <h3 class="font-bold text-4xl">{{ $category->name }}</h3>
        <p class="text-xl text-gray-500">{{ $category->description }}</p>
        <a href="/shop/search?category={{ $category->name }}" class="btn inline-block">Buy Now</a>
      </div>
    </div>

    @endforeach
  </div>
</div>

<div class="container py-20">
  <span class="text-yellow-500 text-xl">Have a look at</span>
  <div class="flex justify-between items-center w-full">
    <h3 class="text-5xl font-semibold">
      Our Best Seller Product
    </h3>
    <a href="/shop" class="btn outlined inline-block">See More</a>
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
</div>

<section class="container py-20 flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center">
  <img src="./assets/workspace.png" class="w-full flex-1" alt="">
  <div class="flex-1 space-y-6">
    <h2 class="text-6xl font-bold">Simple Wooden Table</h2>
    <p class="text-gray-500">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque harum quaerat animi ipsa blanditiis repellat
      nesciunt similique! Tenetur, dolorum nihil facere voluptate sunt aliquam eligendi dolorem non culpa,
      exercitationem ducimus.
    </p>

    <div class="flex justify-between items-center">
      <a href="" class="btn inline-block"> Buy Now</a>
      <p class="font-bold text-3xl">$1,300</p>
    </div>
  </div>
</section>


<section class="banner container relative mt-5 mb-20 bg-[#DEEFE9] min-h-[400px] flex items-center justify-center">
  <img src="./assets/lamp.png" alt="" class="absolute top-0 left-0">

  <img src="./assets/curly.png" class="absolute" alt="">

  <div class="flex items-center justify-center flex-col space-y-3 relative z-40 p-6">
    <h2 class="text-4xl font-bold">Find Furniture Now</h2>
    <p class="text-gray-500 text-lg">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor erat sapien
      faucibus lectus,
    </p>
    <a href="" class="btn inline-block">Order Now</a>
  </div>

  <img src="./assets/chair-left.png" alt="" class="absolute bottom-0 right-0">

</section>

@include('partials.footer')

@endsection