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
            <img src="/img/blacklogo (1).png" alt="logo">
        </div>
        {{-- Menu Items --}}
       <div class="hidden md:flex space-x-10">
          <a href="#" class="hover:text-darkGrayishBlue">Product</a>
          <a href="#" class="hover:text-darkGrayishBlue">About Us</a>
          <a href="#" class="hover:text-darkGrayishBlue">Cart</a>
          <a href="#" class="hover:text-darkGrayishBlue">Contact Us</a>
          <a href="#" class="hover:text-darkGrayishBlue">About Us</a>
       </div>
       {{-- Button --}}
       <a href="#"
       class="hidden md:block p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:brightRedLight">
       Sign in</a>
       </div>
    </nav>
    {{-- Hero Section --}}
    <section id="hero">
        {{-- Flex Container --}}
        <div class="container flex flex-col-reverse md:flex-row item-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
            {{-- Left Items --}}
            <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                    Bring EveryOne together for better products!
                </h1>
              <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                Now you can make your own designs and print it on whatever product you wish! Enjoy!
              </p>
              <div class="flex justify-center md:justify-start">
                <a href="#"
                  class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:brightRedLight">
                  Get Started</a>
              </div>
            </div>
             {{-- Images right side --}}
             <div class="md:w-1/2">
               <img src="/img/kolo-f-kolo.png" alt="image1">
             </div>
        </div>
    </section>
    {{-- Features Section --}}
    <section id="featuers">
        <div class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row">
           {{-- What's Different --}}
            <div class="flex flex-col space-y-12 md:1/2">
           <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
            What's Different About Anime Slayer?
           </h2>
           <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            Animation in Japan began in the early 20th century, when filmmakers started to experiment with techniques pioneered in France, Germany, the United States, and Russia.
           </p>
         </div>
         
          {{-- Number List --}}
         <div class="flex flex-col space-y-8 md:w1/2">
             {{-- Item 1 --}}
             <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
               {{-- Heading of items --}}
              <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                <div class="flex items-center space-x-2">
                    <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                      01
                    </div>
                    <h3 class="text-base font-bold md:mb-4 md:hidden">
                        Anime differs from other forms of animation by its art styles
                    </h3>
                </div>
              </div>
              <div>
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                    Anime differs from other forms of animation by its art styles
                </h3>
                <p class="text-darkGrayishBlue ">
                    he body proportions of human anime characters
                     tend to accurately reflect the proportions 
                     of the human body in reality. 
                </p>
              </div>
             </div>
              {{-- Item 2 --}}
              <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                {{-- Heading of items --}}
               <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                 <div class="flex items-center space-x-2">
                     <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                       02
                     </div>
                     <h3 class="text-base font-bold md:mb-4 md:hidden">
                         Anime differs from other forms of animation by its art styles
                     </h3>
                 </div>
               </div>
               <div>
                 <h3 class="hidden mb-4 text-lg font-bold md:block">
                     Anime differs from other forms of animation by its art styles
                 </h3>
                 <p class="text-darkGrayishBlue ">
                     he body proportions of human
                      anime characters tend to accurately
                       reflect the proportions of the human body in reality. 
                 </p>
               </div>
              </div>
               {{-- Item 3 --}}
             <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                {{-- Heading of items --}}
               <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                 <div class="flex items-center space-x-2">
                     <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                       03
                     </div>
                     <h3 class="text-base font-bold md:mb-4 md:hidden">
                         Anime differs from other forms of animation by its art styles
                     </h3>
                 </div>
               </div>
               <div>
                 <h3 class="hidden mb-4 text-lg font-bold md:block">
                     Anime differs from other forms of animation by its art styles
                 </h3>
                 <p class="text-darkGrayishBlue ">
                     he body proportions of human anime characters tend to
                      accurately reflect the proportions 
                      of the human body in reality. 
                 </p>
               </div>
              </div>
         </div>
        </div>
    </section>
    {{-- Testimonial  --}}
    <section id="testimonials">
        {{-- Container --}}
        <div class="max-w-6xl mx-auto mt-32 text-center">
           {{-- Heading --}}
            <h2 class="text-4xl font-bold text-center">
                What's Trending..
            </h2>
            {{-- Testimonial Container --}}
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
              {{-- Card 1 --}}
              <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3">
               <img src="/img/trending1.png" class="w-32 -mt-14" alt="shoes trending">
               <h5 class="text-lg font-bold">Shoes Anime</h5>
               <p class="text-sm text-darkGrayieshBlue text-left">
                A common anime character design convention is exaggerated eye size. 
                The animation of characters with large eyes
                 in anime can be traced back 
                 to Osamu Tezuka, who was deeply 
                influenced by such early animation characters
                 as Betty Boop, who was drawn with disproportionately
                  large eyes.
               </p>
            </div>
             {{-- Card 2 --}}
             <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3">
                <img src="/img/trending2.png" class="w-32 -mt-14" alt="tshirt trending">
                <h5 class="text-lg font-bold">T-shirt Anime</h5>
                <p class="text-sm text-darkGrayieshBlue text-left">
                 A common anime character design convention is exaggerated eye size. 
                 The animation of characters with large eyes
                  in anime can be traced back 
                  to Osamu Tezuka, who was deeply 
                 influenced by such early animation characters
                  as Betty Boop, who was drawn with disproportionately
                   large eyes.
                </p>
             </div>
             {{-- Card 3 --}}
             <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3">
                <img src="/img/trending3.png" class="w-32 -mt-14" alt="tshirt trending">
                <h5 class="text-lg font-bold">Bag Anime</h5>
                <p class="text-sm text-darkGrayieshBlue text-left">
                    Hair in anime is often unnaturally lively and colorful
                    or uniquely styled. The movement of hair in anime is
                    exaggerated and "hair action" is used to emphasize
                    the action and emotions of
                    characters for added visual effect.
                </p>
             </div>
            </div>
            {{-- Button --}}
            <div class="my-16">
                <a href="#"
                class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:brightRedLight">
                See More</a>
            </div>
        </div>
    </section>
    {{-- CTA Section --}}
    <section class="bg-brightRed" id="CTA">
        {{-- Flex Container --}}
        <div class="container flex flex-col items-center justify-between px-6 py-24 ax-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
         {{-- Heading --}}
         <h2 class="text-5xl font-bold leading-tight text-center text-white md:max-w-xl md:text-left">
            Customize Your Product!
         </h2>
         {{-- Button --}}
         <div>
         <a href="#"
                class="p-3 px-6 pt-2 text-brightRed bg-white rounded-full baseline hover:bg-gray-900 shadow-2xl">
                Go To Products</a>
         </div>
        </div>
    </section>
</body>
</html>