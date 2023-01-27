<header class="shadow-lg">
  <nav class="container relative flex py-5 items-center justify-between">
    <a href="/">
      <img src="{{ url('/assets/logo.svg') }}" alt="">
    </a>

    <div class="space-x-4 flex-1 ml-12 hidden md:block">
      <a href="/">Home</a>
      <a href="/shop">Shop</a>
      <a href="/categories">Categories</a>
    </div>

    <div class="flex items-center space-x-5 hidden md:flex">
      <a href="">
        <img src="./assets/cart.svg" alt="">
      </a>
      <a href="">
        <img src="./assets/search.svg" alt="">
      </a>

      @auth
      <a href="/admin" class="btn">Admin</a>
      @endauth

      @guest
      <a href="/login" class="btn">Login</a>
      @endguest
    </div>

    <a href="#" class="hamburger md:hidden">
      <img src="./assets/hamburger.svg" alt="">
    </a>

    <div class="popup transition-all translate-x-[-120%] absolute inset-x-0 top-10 border border-gray-300 bg-green-500 shadow-lg right-12 rounded-lg p-4 z-50 md:hidden">
      <div class="flex space-x-5">
        <div class="flex h-full items-center space-x-1 w-full mb-4 border border-gray-400 px-3 rounded-full">
          <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
            <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)" fill="#070D13" />
          </svg>
          <input type="text" class="w-full border-none" placeholder="Search ..." />
        </div>
        <a href="">
          <img src="./assets/cart.svg" alt="">
        </a>
      </div>

      <div class="space-y-4 flex flex-col">
        <a href="">Home</a>
        <a href="">About Us</a>
        <a href="">Shop</a>
        <a href="">Contact</a>
      </div>

      <div class="flex flex-col mt-4">
        <a href="" class="btn">Registration</a>
      </div>
    </div>
  </nav>
</header>