@extends('layouts.app')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Customize your own</title>
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
    @section('content')
    @vite('resources/css/app.css')
    {{-- <div class="container mx-auto sm:px-4 max-w-full ">

          <span class="navbar-toggler-icon"></span>
        </button>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div> --}}


  <div class="container" style="padding: 20px 5px;">
    <body class="bg-amber-200 relative">

      <div class="card mb-3" style="max-width: auto;">
          <div class="card-body">
            <div class="absolute left-1/2 -ml-0 w-0.5 h-full -top-0 bg-gray-300"></div>
        </body>
              <center><h4 class="absolute left-2/3 font-bold text-lg">Custom T-Shirt Design Tool</h4></center><br>
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
                              <img id="tshirt-backgroundpicture0" src="./white.png" />
                              <img id="tshirt-backgroundpicture1" src="./background_tshirt.png" width="" style="display: none"/>
                              <img id="tshirt-backgroundpicture2" src="./red.png" width="" style="display: none"/>
                              <img id="tshirt-backgroundpicture3" src="./blue.png" width=""  style="display: none;"/>
                              <img id="tshirt-backgroundpicture4" src="./green.png" width=""  style="display: none;"/>
                          </div>
                          <div id="drawingArea" class="absolute z-10 w-48 h-96 left-24 top-12">
                          {{-- <div id="drawingArea" class="drawing-area"> --}}
                              <div class="relative select-none w-48 h-96">
                                  <canvas id="tshirt-canvas" width="250" height="400"></canvas>
                              </div>
                          </div>
                          <div class="absolute mb-4 font-semibold top-[10%] text-gray-900 dark:text-white left-[810px]">Color</div>
                          <div class=" absolute left-[790px] top-[18%] md:w-2/3 ">
                          <center>
                            <button type="button" class="shadow-sm bg-white hover:bg-gray-700  py-2 px-4 rounded" onclick="function0()"></button>
                            <button type="button" class="shadow-sm bg-black hover:bg-gray-700  py-2 px-4 rounded" onclick="function1()"></button>
                            <button type="button" class="shadow-sm bg-red-500 hover:bg-red-700 py-2 px-4 rounded" onclick="function2()"></button>
                            <button type="button" class="shadow-sm bg-blue-500 hover:bg-blue-700 py-2 px-4 rounded" onclick="function3()"></button>
                            <button type="button" class="shadow-sm bg-green-500 hover:bg-green-700  py-2 px-4 rounded" onclick="function4()"></button>
                          </center>
                        </div>
                      </div>

                  </div>

                  <div class="col-md-4" style="padding: 2% 8%">


                      <!-- The select that will allow the user to pick one of the static designs -->
                      <style>
                        .select-avatar {
                        background-repeat: no-repeat;
                        background-position: right center;
                        background-size: 32px 32px;
                        }

                        #avatar-select {
                        background-size: 32px 32px;
                        background-position: right center;
                        }

                        #avatar-select option[data-image] {
                        background-image: url('./batman.png');
                        background-size: 32px 32px;
                        background-repeat: no-repeat;
                        background-position: left center;
                        padding-left: 40px;
                        }
                      </style>
                      {{-- <label for="tshirt-design">T-Shirt Logo:</label>
                      <select id="tshirt-design" class="bg-green-300  font-semibold p-2 rounded  inline-flex items-center">
                          <option class="bg-gray-200 hover:bg-gray-600  " value="">Select One of Our Logo</option>
                          <option class="bg-gray-200 hover:bg-gray-600  " value="./batman.png">option</option>
                      </select> --}}


                        <select name="avatar-select" id="tshirt-design" class="absolute left-[830px] top-[59%] block appearance-none w-96 bg-blue-200 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow-md leading-tight focus:outline-none focus:shadow-outline-blue">
                            <option class="bg-gray-200 hover:bg-gray-600  " value="">Select One of Our elements</option>
                            <option class="bg-gray-200 hover:bg-gray-600  " value="./batman.png">option</option>
                        <!-- Add more options here -->
                        </select>


                      <!-- The Select that allows the user to change the color of the T-Shirt -->
                      <br><br>
                      {{-- <label for="tshirt-text">T-Shirt Text:</label> --}}
                      <button type="button" id="tshirt-text" onclick="fun()" class="absolute left-[830px] top-[68%] block appearance-none w-96 bg-gray-200 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow-md leading-tight focus:outline-none focus:shadow-outline-blue">Add Text</button>
                      <br><br>

                      {{-- <label for="tshirt-custompicture">Upload Your Own Design:</label>
                      <input type="file" id="tshirt-custompicture" placeholder=""/> --}}
                  </div><div class="flex items-center justify-center w-96 ">
                    <label for="tshirt-custompicture" for="dropzone-file" class="absolute left-[830px] top-[78%] h-28 flex flex-col items-center justify-center w-96  border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>

                        </div>
                        <input id="tshirt-custompicture" id="dropzone-file"  type="file" class="hidden" />
                    </label>
                </div>



                  <div class="md:w-1/3  left-2/3" >


<h3 class="absolute mb-4 font-semibold top-[31%] text-gray-900 dark:text-white left-[830px]">Size</h3>
<ul class=" absolute left-[830px] top-[35%] items-center w-96 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="w-24 border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="vue-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">S</label>
        </div>
    </li>
    <li class="w-24 border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="react-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">M</label>
        </div>
    </li>
    <li class="w-24 border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="angular-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">L</label>
        </div>
    </li>
    <li class="w-24 border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="laravel-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">XL</label>
        </div>
    </li>
    <li class="w-24 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="laravel-checkbox-list" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">XXL</label>
        </div>
    </li>
</ul>

                          </div>
                          <div class="col-md-6">
                            <p class="absolute mb-4 font-semibold top-[45%] text-gray-900 dark:text-white left-[830px]">Quantity</p>
                           <input  class="absolute top-[50%] left-[830px]" type="number" class="form-control" id="inputPassword4" placeholder="Enter the Quantity">
                          </div>

                          <div class="col-12">
                            <br>
                            <center>
                              <button type="" class=" text-lg text-white font-bold absolute block appearance-none w-48 h-12 bg-blue-600 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg shadow-md leading-tight focus:outline-none focus:shadow-outline-blue left-[1300px] top-[88%] hover:bg-blue-700">Order Now</button>
                  </center>
                          </div>
                        {{-- </form> --}}
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!-- Include Fabric.js in the page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.3/fabric.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script>
            var y=null;
            let canvas = new fabric.Canvas('tshirt-canvas');

            function updateTshirtImage(imageURL){
                fabric.Image.fromURL(imageURL, function(img) {
                    img.scaleToHeight(300);
                    img.scaleToWidth(300);
                    canvas.centerObject(img);
                    canvas.add(img);
                    canvas.renderAll();
                });
            }

            // Update the TShirt color according to the selected color by the user
            // document.getElementById("tshirt-design").addEventListener("change", function(){
            //     document.getElementById("tshirt-backgroundpicture").style.filter = this.value;
            // }, false);

            // Update the TShirt color according to the selected color by the user
            document.getElementById("tshirt-design").addEventListener("change", function(){

                // Call the updateTshirtImage method providing as first argument the URL
                // of the image provided by the select
                y= (this.value);
                updateTshirtImage(this.value);
            }, false);

            function fun() {
                var x= prompt("Enter The Text:");
                var text = new fabric.IText(x, { left: 40, top: 100, color: y });
                canvas.add(text);
            }

            // When the user clicks on upload a custom picture
            document.getElementById('tshirt-custompicture').addEventListener("change", function(e){
                var reader = new FileReader();

                reader.onload = function (event){
                    var imgObj = new Image();
                    imgObj.src = event.target.result;

                    // When the picture loads, create the image in Fabric.js
                    imgObj.onload = function () {
                        var img = new fabric.Image(imgObj);

                        img.scaleToHeight(300);
                        img.scaleToWidth(300);
                        canvas.centerObject(img);
                        canvas.add(img);
                        canvas.renderAll();
                    };
                };

                // If the user selected a picture, load it
                if(e.target.files[0]){
                    reader.readAsDataURL(e.target.files[0]);
                }
            }, false);

            // When the user selects a picture that has been added and press the DEL key
            // The object will be removed !
            document.addEventListener("keydown", function(e) {
                var keyCode = e.keyCode;

                if(keyCode == 46){
                    console.log("Removing selected element on Fabric.js on DELETE key !");
                    canvas.remove(canvas.getActiveObject());
                }
            }, false);
            function function0() {
                document.getElementById("tshirt-backgroundpicture0").style.display="block";
                document.getElementById("tshirt-backgroundpicture1").style.display="none";
                document.getElementById("tshirt-backgroundpicture2").style.display="none";
                document.getElementById("tshirt-backgroundpicture3").style.display="none";
                document.getElementById("tshirt-backgroundpicture4").style.display="none";
            }

            function function1() {
                document.getElementById("tshirt-backgroundpicture0").style.display="none";
                document.getElementById("tshirt-backgroundpicture1").style.display="block";
                document.getElementById("tshirt-backgroundpicture2").style.display="none";
                document.getElementById("tshirt-backgroundpicture3").style.display="none";
                document.getElementById("tshirt-backgroundpicture4").style.display="none";
            }
            function function2() {
                document.getElementById("tshirt-backgroundpicture0").style.display="none";
                document.getElementById("tshirt-backgroundpicture1").style.display="none";
                document.getElementById("tshirt-backgroundpicture2").style.display="block";
                document.getElementById("tshirt-backgroundpicture3").style.display="none";
                document.getElementById("tshirt-backgroundpicture4").style.display="none";
            }
            function function3() {
                document.getElementById("tshirt-backgroundpicture0").style.display="none";
                document.getElementById("tshirt-backgroundpicture1").style.display="none";
                document.getElementById("tshirt-backgroundpicture2").style.display="none";
                document.getElementById("tshirt-backgroundpicture3").style.display="block";
                document.getElementById("tshirt-backgroundpicture4").style.display="none";
            }
            function function4() {
                document.getElementById("tshirt-backgroundpicture0").style.display="none";
                document.getElementById("tshirt-backgroundpicture1").style.display="none";
                document.getElementById("tshirt-backgroundpicture2").style.display="none";
                document.getElementById("tshirt-backgroundpicture3").style.display="none";
                document.getElementById("tshirt-backgroundpicture4").style.display="block";
            }
    </script>
  </body>
</html>


{{-- what can be added in the future
1. different products ( mugs, .. hoodies)
2. backside and frontside of the t-shirt
3. multiple text colors  --}}

   @endsection
