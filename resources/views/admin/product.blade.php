<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    @include('admin.css')
    <style type="text/css">
    .div_center{
        text-align: center;
    }
    </style>
</head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.header')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @if($errors->any())
                <div class="text-red-500">
                    <p><strong>Opps Something went wrong</strong></p>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('message'))
            <div class="bg-green-200 p-2 text-green-900">
                <button type="button" class="left-[96%] absolute z-10 cursor-pointer alert-del w-0.5 h-0.5 close pr-3 rounded-full text-red-500 bg-red-100 hover:bg-red-200" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}
            </div>

            <script>
                var alert_del = document.querySelectorAll('.alert-del');
                  alert_del.forEach((x) =>x.addEventListener('click', function () {
                      x.parentElement.classList.add('hidden');
                      })
                  );
          </script>

            @endif
            <div class="div_center">
                <h1 >Add Product</h1>
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                {{-- <input class="text-blue-500" type="text" name="category" placeholder="write category name">
                <input type="submit" class="rounded-lg w-12 h-10 border-2 border-blue-500" name="submit" value="Add"> --}}
                <div class="absolute top-[25%]">
                    <div class="mb-6">
                      <label for="email" class="text-left block mb-2 text-sm font-medium text-white">product title</label>
                      <input name="title" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5" placeholder="product title" required>
                    </div>
                </div>
                    <div class="absolute top-[35%]">
                    <div class="mb-6">
                        <label for="email" class="text-left block mb-2 text-sm font-medium text-white">product Price</label>
                        <input name="price" type="number" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5" placeholder="price" required>
                      </div>
                    </div>
                      <div class="absolute top-[45%]">
                      <div class="mb-6">
                        <label for="email" class="text-left block mb-2 text-sm font-medium text-white">Discount price</label>
                        <input name="discount_price" type="number" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5" placeholder="discount price" required>
                      </div>
                    </div>
                    <div class="absolute top-[55%]">
                        <div class="mb-6">
                          <label for="email" class="text-left block mb-1 text-sm font-medium text-white">Product Category</label>
                          <select name="category_id" class="text-gray-900 rounded " >
                            @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>

                         @endforeach

                              {{-- {{ $product->category_id}} --}}
                          </select>
                        </div>
                      </div>
                        <div class="absolute mb-6 left-[45%] top-[25%]">
                            <label for="product-description" class="text-left block mb-2 text-sm font-medium text-white">Product description</label>
                            <input name="description" type="text" id="product-description" class="text-left pb-[27%]  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5" placeholder="Product description" style="height: 150px; resize: vertical;" required>
                          </div>

                          <div class="absolute mb-6 left-[45%] top-[52%]">
                    <label class="text-left block mb-2 text-sm font-medium text-white" for="user_avatar">Upload file</label>
                    <input name="image" accept="image/*" multiple class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                          </div>

                        <div class="mb-4">
                    <button type="submit" class="absolute mb-24 bottom-[14%] left-[17.7%] justify-end text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                        </div>

            </form>
            </div>
        </div>
    </div>
        <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
