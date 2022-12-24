<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/HP-style.css">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- NavBar --}}
    <nav class="relative container mx-auto p-6">
        {{-- Flex Container --}}
       <div class="flex items-center justify-between">
        {{-- Logo --}}
        <div class="pt-2 pl-3">
            <img src="/img/transparentlogo (1).png" alt="logo">
        </div>
        {{-- Menu Items --}}
       <div class="flex space-x-6">
          <a href="#">Product</a>
          <a href="#">About Us</a>
          <a href="#">Cart</a>
          <a href="#">Contact Us</a>
          <a href="#">About Us</a>
       </div>
       </div>
    </nav>
</body>
</html>