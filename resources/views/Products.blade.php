@extends('layouts.navBar')

@section('content')

<div>
   <h2 class="text-4xl font-bold text-center pt-6 pb-4 bg-gray-100">
     Products
 </h2>
 </div>
 
<section class="bg-gray-100  flex items-center justify-center pt-4 pb-4 space-x-3 space-y-4 flex-row">
      {{-- Products --}}
        @foreach ($Product as $Product)
   
         {{-- Card 3 --}}
         <div class="bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
          <img src="/img/bracelete.jpg" alt="bracelete" class="w-full h-full object-cover"> 
          <div class="p-5  flex flex-col gap-3">
           {{-- badge --}}
           <div class="flex items-center gap-2">
               <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
               <span  class="px-3 py-1 rounded-full text-xs bg-gray-100">offical store</span>
           </div>
           {{-- product title --}}
           <h2 class="font-semibold text-2xl overfolow-ellipsis overflow-hidden whitespace-nowrap">{{$Product->title}}</h2>
           {{-- Price --}}
           <div>
             <span class="text-xl font-bold">
              {{$Product->price}}
             </span>
             <div class="flex items-center gap-2 mt-1 ">
              <span class="text-sm line-through opacity-50">
                 {{$Product->discount_price}}
              </span>
              <span class="bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white">
                save  {{ ( ($Product->discount_price/$Product->price*100)-100)  }}%
              </span>
             </div>
           </div>

           {{-- Product Rating --}}
           <span class="flex items-center mt-1">
              <img src="/img/full-star (2).png" >
              <img src="/img/full-star (2).png" >
              <img src="/img/full-star (2).png" >
              <img src="/img/full-star (2).png" >
              <img src="/img/full-star (2).png" >
              <span class="text-xs ml-2 text-gray-500">200 rating</span>
           </span>
           {{-- Product Action --}}
           <div class="mt-5 flex gap-2">
              <button class="bg-yellow-500/80 hover:bg-yellow-500/90 px-6 py-2 rounded-md text-white font-medium tracking-wider transition">
                   Add to Cart
              </button>
              <button class="flex-grow flex justify-center items-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md">
                  <img src="/img/love_icon (2).png" alt="add to wishlist" class="opacity-50">
              </button>
              <button class="flex-grow flex justify-center items-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md">
               <img src="/img/eye_icon (1).png" alt="add to wishlist" class="opacity-50">
           </button>
          </div>
          </div>
     </div>
 
@endforeach
</section>
 @endsection
