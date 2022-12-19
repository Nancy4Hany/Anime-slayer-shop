@extends('layouts.app')
@section('content')
 @vite('resources/css/app.css')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        @if (session('status'))
        {{session('status')}}
        @endif

        <form action= "{{route('login')}}" method ="post"> 
            @csrf

         <div class="mb-4">
            <label for="email" class="sr-only">email</label>
            <input type="text" name="email" id="email" placeholder="your email"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('email')border-red-500 @enderror" 
            value="{{old('email')}}">

               @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
         </div>

            <div class="mb-4">
            <label for="password" class="sr-only">password</label>
            <input type="password" name="password" id="password" placeholder="your password"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('password') border-red-500 @enderror" value=""> 
               @error('password')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror

        </div>
    
         <div>
            <button type="submmit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>

         </div>
        </form>

    </div>
</div>
@endsection