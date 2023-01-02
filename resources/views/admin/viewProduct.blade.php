<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                <h1 >Product</h1>
                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                <input class="text-blue-500" type="text" name="category" placeholder="write category name">
                <input type="submit" class="rounded-lg w-12 h-10 border-2 border-blue-500" name="submit" value="Add">
            </form>
            </div>



{{-- <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-blue-100"> --}}
      <div class="h-80 overflow-auto relative shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-blue-100">
        <thead class="text-xs text-white uppercase bg-slate-600">
            <tr>
                <th scope="col" class="py-3 pl-4  whitespace-nowrap text-left">
                   Product name
                </th>
                <th scope="col" class="py-3  whitespace-nowrap text-left">
                    Product description
                 </th>
                 <th scope="col" class="py-3  whitespace-nowrap text-left">
                    Product category
                 </th>
                 <th scope="col" class="py-3  whitespace-nowrap text-left">
                    Product Price
                 </th>
                 <th scope="col" class="py-3  whitespace-nowrap text-left">
                    Product Size
                 </th>
                 <th scope="col" class="py-3  whitespace-nowrap text-left">
                    Product image
                 </th>
                <th scope="col" class="py-3  whitespace-nowrap text-left">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @php
  $counter = 0;
@endphp

@foreach ($products as $data)

  <tr class="border-b border-slate-400 odd:bg-slate-500 even:bg-slate-600">
    <td scope="row" class="py-4 px-14 font-medium text-blue-50 whitespace-nowrap">
      {{$data->title}}
    </td>
    <td>
        {{$data->description}}
    </td>
    <td>
        {{$data->category->category_name}}
    </td>
    <td>
        {{$data->price}}
    </td>
    <td>
        {{implode(', ',$data->sizes->pluck('name')->toArray())}}
    </td>
    <td></td>
    <td class="py-4 px-0 w-22">
      <button class="text-green-900 hover:underline px-1">
        <i class="fas fa-edit"></i>
      </button>
      <button class="text-red-800 hover:underline px-1"><a onclick="return confirm('Are you sure you want to Delete this ?')" class="text-current no-underline" href="{{url('delete_category',$data->id)}}">
        <i class="fas fa-trash-alt"></i></a>
      </button>
      <button class="text-gray-800 hover:underline px-1">
        <i class="fas fa-eye"></i>
      </button>
    </td>
  </tr>
@endforeach

        </tbody>
    </table>
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
