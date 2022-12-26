<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/img/blacklogo (1).png">
    @vite('resources/css/app.css')
    <title>Anime Slayer</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-100">
    {{-- NavBar --}}
    <nav class="relative container mx-auto p-6">
        {{-- Flex Container --}}
       <div class="flex items-center justify-between">
        {{-- Logo --}}
        <div class="pt-2 pl-3">
            <img src="/img/blacklogo (1).png" alt="logo">
        </div>
        {{-- Menu Items --}}
       <div class="hidden md:flex space-x-10">
          <a href="{{route('home')}}" class="hover:text-darkGrayishBlue">Home</a>
          <a href="{{route('home')}}#categories" class="hover:text-darkGrayishBlue">Categories</a>
          <a href="{{route('home')}}#about-us" class="hover:text-darkGrayishBlue">About Us</a>
          <a href="#footer" class="hover:text-darkGrayishBlue">Contact Us</a>
    @auth
          <a href="{{route('cart')}}" class="hover:text-darkGrayishBlue">Cart</a>
    @endauth
       </div>
       {{-- Button --}}
       
       <div class = "flex ">
        @auth
        <a href="#"
        class="hidden md:block p-3 px-6 pt-2 mr-3 text-white bg-brightRed rounded-full baseline hover:brightRedLight">
        {{auth()->user()->name}}</a>
        <form action = "{{route('logout')}}" method="post" class = "hidden md:block p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:brightRedLight">
            @csrf
        <button type="submit">Logout</button>
        </form>
        @endauth
        @guest
       <a href="{{route('login')}}"
       class="hidden md:block p-3 px-6 pt-2 mr-3 text-white bg-brightRed rounded-full baseline hover:brightRedLight">
       Sign in</a>
       <a href="{{ route('register') }}"
       class="hidden md:block p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:brightRedLight">
       Register</a>
       @endguest
       </div>
       </div>

    </nav>

    @yield('content')

            {{-- Footer --}}
            <footer id="footer" class="bg-veryDarkBlue">
                {{-- Flex Container --}}
                <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
                 {{-- Logo and social links container  --}}
                 <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
                   {{-- Logo --}}
                   <div>
                      <img src="/img/logowhite (1).png" alt="logo" class="h-8">
                   </div>
                   {{-- Social Links Container --}}
                   <div class="flex justify-center space-x-4">
                      {{-- link 1 --}}
                      <a href="#"> 
                         <img src="/img/instagram.png" alt="facebook" class="h-8">
                      </a>
                      {{-- link 2 --}}
                      <a href="#"> 
                         <img src="/img/pinterest.png" alt="facebook" class="h-8">
                      </a>
                      {{-- link 3 --}}
                      <a href="#"> 
                         <img src="/img/facebook.png" alt="facebook" class="h-8">
                      </a>
                      {{-- link 4 --}}
                      <a href="#"> 
                         <img src="/img/twitter.png" alt="facebook" class="h-8">
                      </a>
                   </div>
                 </div>
                 {{-- List Container --}}
                 <div class="flex justify-round space-x-32 ">
                     <div class="flex flex-col space-y-3 text-white">
                       <a href="#" class="hover:text-brightRed">Home</a>
                       <a href="#" class="hover:text-brightRed">Pricing</a>
                       <a href="#" class="hover:text-brightRed">Products</a>
                       <a href="#" class="hover:text-brightRed">About Us</a>
                     </div>
                     <div class="flex flex-col space-y-3 text-white">
                         <a href="#" class="hover:text-brightRed">Trending</a>
                         <a href="#" class="hover:text-brightRed">Community</a>
                         <a href="#" class="hover:text-brightRed">Our Deals</a>
                       </div>
                 </div>
                 {{-- Input Container --}}
                 <div class="flex flex-col justify-between">
                 <form>
                     <div class="flex space-x-3" >
                     <input type="text" class="flex-1 px-4 rounded-full focus:outline-none" placeholder="Updates in your inbox">
                     <button class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">
                         Go
                     </button>    
                 </div>
                     
                 </form>
                 </div>
                </div>
             </footer>
    
</body>

</html>
