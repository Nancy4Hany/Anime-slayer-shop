<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <title>Posty</title>
    
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
<body>
        {{-- Footer --}}
        <footer class="bg-veryDarkBlue">
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

    @yield('footer')
</body>
</html>