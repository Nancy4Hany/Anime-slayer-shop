{{-- @extends('layouts.app') --}}
<x-app-layout>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>product Details</title>
       <style>

              #tshirt-div{
                  width: 452px;
                  height: 548px;
                  position: relative;
                  background-color: #fff;
              }
          </style>
    </head>
    <body>

      {{-- <div class="container mx-auto sm:px-4 max-w-full ">

            <span class="navbar-toggler-icon"></span>
          </button>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div> --}}


          <div class="container mx-auto sm:px-4" style="padding: 20px 5px;">
      {{-- <body class="bg-amber-200 relative"> --}}

          <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-3" style="max-width: auto;">
              <div class="flex-auto p-6">
              <div class="absolute left-1/2 -ml-0 w-0.5 h-full -top-0 bg-gray-300"></div>
          </body>
          {{-- {{product-name}} --}}
                <center><h4 class="absolute font-bold text-lg left-[830px]">product name</h4></center><br>
                {{-- <h5 class="absolute top-[15%] left-[830px] font-bold text-lg">Product</h5> --}}
                <div class="row" style="padding: 10px 0px;">
                    <div class="col-md-4">
                      {{-- #tshirt-div{
                          width: 452px;
                          height: 548px;
                          position: relative;
                          background-color: #fff;
                      } --}}
                        <div id="tshirt-div" class="bg-white relative w-96 h-120">
                            <!--
                                Initially, the image will have the background tshirt that has transparency
                                So we can simply update the color with CSS or JavaScript dinamically
                            -->
                            <div id= "tshirt-backgroundpicture">
                                <img id="tshirt-backgroundpicture0" src="./animetshirt.jpeg" />
                                {{-- <img id="tshirt-backgroundpicture1" src="./background_tshirt.png" width="" style="display: none"/>
                                <img id="tshirt-backgroundpicture2" src="./red.png" width="" style="display: none"/>
                                <img id="tshirt-backgroundpicture3" src="./blue.png" width=""  style="display: none;"/>
                                <img id="tshirt-backgroundpicture4" src="./green.png" width=""  style="display: none;"/> --}}
                            </div>
                            <div id="drawingArea" class="absolute z-10 w-48 h-96 left-24 top-12">
                            {{-- <div id="drawingArea" class="drawing-area"> --}}
                                <div class="relative select-none w-48 h-96">
                                    <canvas id="tshirt-canvas" width="250" height="400"></canvas>
                                </div>
                            </div>
                            {{-- <div class="absolute mb-4 font-semibold top-[10%] text-gray-900 left-[810px]">Color</div>
                            <div class=" absolute left-[790px] top-[18%] md:w-2/3 ">
                            <center>
                              <button type="button" class="shadow-sm bg-white hover:bg-gray-700  py-2 px-4 rounded" onclick="function0()"></button>
                              <button type="button" class="shadow-sm bg-black hover:bg-gray-700  py-2 px-4 rounded" onclick="function1()"></button>
                              <button type="button" class="shadow-sm bg-red-500 hover:bg-red-700 py-2 px-4 rounded" onclick="function2()"></button>
                              <button type="button" class="shadow-sm bg-blue-500 hover:bg-blue-700 py-2 px-4 rounded" onclick="function3()"></button>
                              <button type="button" class="shadow-sm bg-green-500 hover:bg-green-700  py-2 px-4 rounded" onclick="function4()"></button>
                            </center>
                          </div> --}}
                        </div>

                    </div>




                    <div class="md:w-1/3  left-2/3" >

                      <h3 class="underline absolute mb-4 font-semibold top-[11%] text-gray-900 left-[830px]">4.9</h3>
                      <h4 class=" absolute mb-4 font-regular top-[17%] text-gray-900 left-[830px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                          molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                          numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium</h4>
  <h3 class="absolute mb-4 font-semibold top-[31%] text-gray-900 left-[830px]">Size</h3>
  <ul class=" absolute left-[830px] top-[35%] items-center w-96 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex">
      <li class="w-24 border-b border-gray-200 sm:border-b-0 sm:border-r">
          <div class="flex items-center pl-3">
              <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
              <label for="vue-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900">S</label>
          </div>
      </li>
      <li class="w-24 border-b border-gray-200 sm:border-b-0 sm:border-r">
          <div class="flex items-center pl-3">
              <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
              <label for="react-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900">M</label>
          </div>
      </li>
      <li class="w-24 border-b border-gray-200 sm:border-b-0 sm:border-r">
          <div class="flex items-center pl-3">
              <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
              <label for="angular-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900">L</label>
          </div>
      </li>
      <li class="w-24 border-b border-gray-200 sm:border-b-0 sm:border-r">
          <div class="flex items-center pl-3">
              <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
              <label for="laravel-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900">XL</label>
          </div>
      </li>
      <li class="w-24">
          <div class="flex items-center pl-3">
              <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
              <label for="laravel-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900">XXL</label>
          </div>
      </li>
  </ul>

                            </div>
                            <div class="col-md-6">
                              <p class="absolute mb-4 font-semibold top-[45%] text-gray-900 left-[830px]">Quantity</p>
                             <input  class="absolute top-[50%] left-[830px]" type="number" class="form-control" id="inputPassword4" placeholder="Enter the Quantity">
                            </div>

                            <div class="col-12">
                              <br>
                              <center>
                                <button type="" class=" text-lg text-white font-bold absolute block appearance-none w-48 h-12 bg-blue-600 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg shadow-md leading-tight focus:outline-none focus:shadow-outline-blue left-[1300px] top-[88%] hover:bg-blue-700">Order Now</button>
                                <button type="" class=" text-lg text-blue-600 font-bold absolute block appearance-none w-48 h-12 bg-white border border-blue-600 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg shadow-md leading-tight focus:outline-none focus:shadow-outline-blue left-[1100px] top-[88%] hover:bg-gray-200">add to cart</button>
                              </center>
                            </div>
                          {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>




    <style>
      input[type="radio"]:checked + img {
        border-color: blue;
      }
      </style>
    <ul class=" absolute left-[220px] top-[76%] items-center w-96 text-sm font-medium text-gray-900 bg-white  sm:flex">
      <li class="relative inline-block mr-4">
          <label class="block w-20 h-20 rounded-lg overflow-hidden border cursor-pointer">
              <input checked type="radio" name="image" class="hidden" value="image3.jpg">
              <img src="./animetshirt.jpeg" alt="image3" class="w-full h-full rounded-lg hover:border-gray-600 border-2 border-gray-200">
            </label>
      </li>
      <li class="relative inline-block mr-4">
          <label class="block w-20 h-20 rounded-lg overflow-hidden border cursor-pointer">
              <input type="radio" name="image" class="hidden" value="image3.jpg">
              <img src="./animetshirtwhite.jpeg" alt="image3" class="w-full h-full rounded-lg hover:border-gray-600 border-2 border-gray-200">
            </label>
      </li>
      <li class="relative inline-block mr-4">
          <label class="block w-20 h-20 rounded-lg overflow-hidden border cursor-pointer">
              <input type="radio" name="image" class="hidden" value="image3.jpg">
              <img src="./animetshirtred.jpeg" alt="image3" class="w-full h-full rounded-lg hover:border-gray-600 border-2 border-gray-200">
            </label>
      </li>
      <li class="relative inline-block mr-4">
          <label class="block w-20 h-20 rounded-lg overflow-hidden border cursor-pointer">
              <input type="radio" name="image" class="hidden" value="image3.jpg">
              <img src="./animetshirtblue.jpeg" alt="image3" class="w-full h-full rounded-lg hover:border-gray-600 border-2 border-gray-200">
            </label>
      </li>
      <li class="relative inline-block mr-4">
          <label class="block w-20 h-20 rounded-lg overflow-hidden border cursor-pointer">
              <input type="radio" name="image" class="hidden" value="image3.jpg">
              <img src="./animetshirtgreen.jpeg" alt="image3" class="w-full h-full rounded-lg hover:border-gray-600 border-2 border-gray-200">
            </label>
      </li>
  </ul>





    </body>
  </x-app-layout>

