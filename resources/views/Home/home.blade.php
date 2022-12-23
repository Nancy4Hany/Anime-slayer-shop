@extends('layouts.oldApp')

@section('content')
  <div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">Welcome to Our Anime Store!</h1>
    <p class="text-center text-gray-600 mb-8">Check out our latest products below:</p>
    <ul>
        {{-- @foreach ($products as $product) --}}
        <div class="container mx-auto px-4 grid grid-cols-4 gap-4 flex-row justify-between mb-5 p-[6px]">
        <li class="p-24  relative bg-white shadow-md rounded-lg overflow-hidden w-96 ">
            {{-- <img class="w-full" src="{{ $product->image_url }}" alt="{{ $product->name }}">  --}}
          <img class="w-96" src="./anime.jpg" alt="anime">
          <div class="px-6 py-4">
            {{-- <h2 class="font-bold text-lg mb-2">{{ $product->name }}</h2> --}}
            <h2 class="font-bold text-lg mb-2">anime t-shirt</h2>
            {{-- <p class="text-gray-700 text-base mb-2">{{ $product->description }}</p> --}}
            <p class="text-gray-700 text-base mb-2">it's a great anime t-shirt we all love it and you have to try it please buy it please buy it</p>
            {{-- <p class="font-bold text-xl mb-2 text-red-500">{{ $product->price }}</p> --}}
            <p class="font-bold text-xl mb-2 text-red-500">36 LE</p>
            {{-- <a href="/products/{{ $product->id }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Product</a> --}}
            <a href="/product" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Product</a>
          </div>
        </li>
        <li class=" p-24 relative bg-white shadow-md rounded-lg overflow-hidden w-96">
            {{-- <img class="w-full" src="{{ $product->image_url }}" alt="{{ $product->name }}">  --}}
          <img class="w-96" src="./anime.jpg" alt="anime">
          <div class="px-6 py-4">
            {{-- <h2 class="font-bold text-lg mb-2">{{ $product->name }}</h2> --}}
            <h2 class="font-bold text-lg mb-2">anime t-shirt</h2>
            {{-- <p class="text-gray-700 text-base mb-2">{{ $product->description }}</p> --}}
            <p class="text-gray-700 text-base mb-2">it's a great anime t-shirt we all love it and you have to try it please buy it please buy it</p>
            {{-- <p class="font-bold text-xl mb-2 text-red-500">{{ $product->price }}</p> --}}
            <p class="font-bold text-xl mb-2 text-red-500">36 LE</p>
            {{-- <a href="/products/{{ $product->id }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Product</a> --}}
            <a href="/product" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Product</a>
          </div>
        </li>
          <li class="p-24 relative bg-white shadow-md rounded-lg overflow-hidden w-96 ">
            {{-- <img class="w-full" src="{{ $product->image_url }}" alt="{{ $product->name }}">  --}}
          <img class="w-96" src="./anime.jpg" alt="anime">
          <div class="px-6 py-4">
            {{-- <h2 class="font-bold text-lg mb-2">{{ $product->name }}</h2> --}}
            <h2 class="font-bold text-lg mb-2">anime t-shirt</h2>
            {{-- <p class="text-gray-700 text-base mb-2">{{ $product->description }}</p> --}}
            <p class="text-gray-700 text-base mb-2">it's a great anime t-shirt we all love it and you have to try it please buy it please buy it</p>
            {{-- <p class="font-bold text-xl mb-2 text-red-500">{{ $product->price }}</p> --}}
            <p class="font-bold text-xl mb-2 text-red-500">36 LE</p>
            {{-- <a href="/products/{{ $product->id }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Product</a> --}}
            <a href="/product" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View Product</a>
          </div>
        </div>
        </li>
        {{-- @endforeach --}}
    </ul>
  </div>
  <div class="relative bg-gray-900 py-10">
    <div class="container mx-auto px-4">
      <div class="relative mx-auto max-w-3xl">
        <div class="flex items-center py-2">
          <img src="./anime.jpg" class="h-12 w-12 rounded-full mr-4" alt="Anime character">
          <div class="text-white">
            <h2 class="text-2xl font-bold leading-tight">Get the latest anime merchandise</h2>
            <p class="text-lg font-light leading-tight">Join our newsletter to stay updated on the latest anime releases and get access to exclusive deals and discounts on our products.</p>
          </div>
        </div>
        <form action="/subscribe" class="mt-4" method="POST">
          @csrf
          <input type="email" name="email" placeholder="Enter your email address" class="rounded-full py-2 px-4 text-gray-700 bg-gray-200 w-full">
          <button type="submit" class="mt-4 rounded-full py-2 px-4 bg-red-500 text-white font-bold hover:bg-red-600">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
@endsection
