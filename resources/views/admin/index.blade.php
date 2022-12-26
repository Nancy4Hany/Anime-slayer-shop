<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.header')
      <!-- partial -->
      @include('admin.body')
        <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
