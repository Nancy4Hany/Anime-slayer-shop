@extends('layouts.navBar')
@section('content')
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<div class="h-screen bg-gray-300">
	<div class="py-12">
	
    <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
        <div class="md:flex ">
            <div class="w-full p-4 px-5 py-5">

            	<div class="md:grid md:grid-cols-3 gap-2 ">

            		<div class="col-span-2 p-5">

            			<h1 class="text-xl font-medium ">Shopping Cart</h1>

            			@foreach($cart->items as $product)
						<div class="flex justify-between items-center mt-6 pt-6">
            				<div class="flex  items-center">
            					<img src="{{ asset($product['images'][0]['image']??"img/default-thumbnail.jpg")}}" width="60" class="rounded-full ">

            					<div class="flex flex-col ml-3">
            						<span class="md:text-md font-medium">{{$product['title']}}</span>
            						<span class="text-xs font-light text-gray-400">#{{$product['id']}}</span>
            						
            					</div>

            					
            				</div>

            				<div class="flex justify-center items-center">
            					
            					<div class="pr-8 flex ">
            						<a href="{{route('decrease_quantity',$product['id'])}}">
            							<button class="font-semibold">-</button>
									</a>
            						<input readonly type="text" class="focus:outline-none bg-gray-100 border h-6 w-8 rounded text-sm px-2 mx-2" value="{{$product['quantity']}}">
            						<a href="{{route('add_to_cart',$product['id'])}}">
										<button class="font-semibold">+</button>
									</a>
            					</div>

            					<div class="pr-8 ">
            						
            						<span class="text-xs font-medium">${{$product['discount_price']*$product['quantity']}}</span>
            					</div>
            					<div>
            						<i class="fa fa-close text-xs font-medium"></i>
            					</div>
            						<a href="{{route('delete_item_from_cart',$product['id'])}}">
									<svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
								  </svg>
								</a>
								  
            				</div>
            				
            			</div>
						@endforeach

            			<div class="flex justify-between items-center mt-6 pt-6 border-t"> 
            				<div class="flex items-center">
            					<i class="fa fa-arrow-left text-sm pr-2"></i>
            					<a href="#"><div class="text-md font-medium text-blue-500"> Continue Shopping </div></a>
            				</div>

            				<div class="flex justify-center items-end">
            					<span class="text-sm font-medium text-gray-400 mr-1">Subtotal:</span>
            					<span class="text-lg font-bold text-gray-800 "> ${{$total}}</span>
            					
            				</div>
            				
            			</div>       			
            		</div>
            		<div class=" p-5 bg-gray-800 rounded overflow-visible">

            			<span class="text-xl font-medium text-gray-100 block pb-3">Card Details</span>

            			<span class="text-xs text-gray-400 ">Card Type</span>

            			<div class="overflow-visible flex justify-between items-center mt-2">

            				<div class="rounded w-52 h-28 bg-gray-500 py-2 px-4 relative right-10">

            					<span class="italic text-lg font-medium text-gray-200 underline">VISA</span>

            					<div class="flex justify-between items-center pt-4 ">
            						
            						<span class="text-xs text-gray-200 font-medium">****</span>
            						<span class="text-xs text-gray-200 font-medium">****</span>
            						<span class="text-xs text-gray-200 font-medium">****</span>
            						<span class="text-xs text-gray-200 font-medium">****</span>

            					</div>

            					<div class="flex justify-between items-center mt-3">
             						
            						<span class="text-xs  text-gray-200">Giga Tamarashvili</span>
            						<span class="text-xs  text-gray-200">12/18</span>
            					</div>


            					
            				</div>
            				<div class="flex justify-center  items-center flex-col">

            					<img src="https://img.icons8.com/color/96/000000/mastercard-logo.png" width="40" class="relative right-5" />
            					<span class="text-xs font-medium text-gray-200 bottom-2 relative right-5">mastercard.</span>
            					
            				</div>
            				
            			</div>




            			<div class="flex justify-center flex-col pt-3">
            				<label class="text-xs text-gray-400 ">Name on Card</label>
            				<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="Giga Tamarashvili">
            			</div>


            			<div class="flex justify-center flex-col pt-3">
            				<label class="text-xs text-gray-400 ">Card Number</label>
            				<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="****     ****      ****      ****">
            			</div>




            			<div class="grid grid-cols-3 gap-2 pt-2 mb-3">

            				<div class="col-span-2 ">

            					<label class="text-xs text-gray-400">Expiration Date</label>
            					<div class="grid grid-cols-2 gap-2">

            						<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="mm">
            						<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="yyyy">
            						
            					</div>


            					
            				</div>

            				<div class="">
            					<label class="text-xs text-gray-400">CVV</label>
            					<input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="XXX">
            					
            				</div>
            				
            			</div>

                        <button class="h-12 w-full bg-blue-500 rounded focus:outline-none text-white hover:bg-blue-600 ">Pay On Delivery</button><br><br>
            			<button class="h-12 w-full bg-blue-500 rounded focus:outline-none text-white hover:bg-blue-600">Check Out</button>

            		</div>	
            	</div> 
           </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection