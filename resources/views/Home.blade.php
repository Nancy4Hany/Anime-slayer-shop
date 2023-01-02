@extends('layouts.navBar')

@section('content')
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
        <div class="container flex flex-col px-4 mx-auto mt-10 space-y-12 space-x-12 md:space-y-0 md:flex-row">
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
                        Anime Slayer differs from other anime store.
                    </h3>
                </div>
              </div>
              <div>
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                  Anime Slayer differs from other anime store.
                </h3>
                <p class="text-darkGrayishBlue ">
                    We offer customization to your products.
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
                         We sell different kinds of products
                     </h3>
                 </div>
               </div>
               <div>
                 <h3 class="hidden mb-4 text-lg font-bold md:block">
                  We sell different kinds of products
                 </h3>
                 <p class="text-darkGrayishBlue ">
                     he body proportions of human
                      anime characters tend to accurately
                       reflect the proportions of the human body in reality.
                     There vareity in our products such as tshirts, cover cases for mobiles
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
        <section id="about-us">
          {{-- Container --}}
          <div class="max-w-12xl mx-auto mt-32 text-center">
             {{-- Heading --}}
              <h2 class="text-4xl font-bold text-center">
                 About Us
              </h2>
              {{-- about us Container --}}
              <div class="flex w-full  mt-20 mb-24 md:flex-row md:space-x-6">
                {{-- Card 1 --}}
                <div class=" items-center flex-col flex p-12 m-auto space-y-12 rounded-lg bg-veryLightGray md:w-1/3">
                 <img src="/img/anime_boyz.jpg" class="w-43 -mt-20" alt="shoes trending">
                 <h5 class="text-lg font-bold">Anime Slayer</h5>
                 <p class="text-lg text-darkGrayieshBlue text-left">
                  A store called Anime Slayer offers anime-related cover cases, t-shirts, accessories, bags, and shoes.
                  Any changes you make to your own design are welcome!
                 </p>

              </div>
            </section>
    </section>
    {{-- CTA Section --}}
    <section class="bg-brightRed" id="CTA">
        {{-- Flex Container --}}
        <div class="container flex flex-col items-center justify-between px-6 py-24 ax-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
         {{-- Heading --}}
         <h2 class="text-5xl font-bold leading-tight text-center text-white md:max-w-xl md:text-left drop-shadow-lg shadow-black">
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
    <div>
      <h2 class="text-4xl font-bold text-center pt-6 pb-4 bg-gray-100">
        Choose a Category
    </h2>
    </div>
    <section id="categories" class="bg-gray-100  flex items-center justify-center pt-4 pb-4 space-x-3 space-y-4 flex-row">
      {{-- Products --}}
         {{-- Card 1 --}}
       <a href="{{route('Products')}}"> <div class="bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
             <img src="/img/shoes.jpg" alt="shoes" class="w-full h-full object-cover">
             <div class="p-5  flex flex-col gap-3">
              {{-- badge --}}
              <div class="flex items-center gap-2">
                  <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
                  <span  class="px-3 py-1 rounded-full text-xs bg-gray-100">offical store</span>
              </div>
              {{-- product title --}}
              <h2 class="font-semibold text-2xl overfolow-ellipsis overflow-hidden whitespace-nowrap">Shoes</h2>
             </div>
        </div></a>
        {{-- Card 2 --}}
       <a href="{{route('Products')}}"> <div class="bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
             <img src="/img/tshirts.jpg" alt="shoes" class="w-full h-full object-cover">
             <div class="p-5  flex flex-col gap-3">
              {{-- badge --}}
              <div class="flex items-center gap-2">
                  <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
                  <span  class="px-3 py-1 rounded-full text-xs bg-gray-100">offical store</span>
              </div>
              {{-- product title --}}
              <h2 class="font-semibold text-2xl overfolow-ellipsis overflow-hidden whitespace-nowrap">T-shirts</h2>
             </div>
        </div></a>
         {{-- Card 3 --}}
         <a href="{{route('Products')}}"><div class="bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
          <img src="/img/bracelete.jpg" alt="bracelete" class="w-full h-full object-cover">
          <div class="p-5  flex flex-col gap-3">
           {{-- badge --}}
           <div class="flex items-center gap-2">
               <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
               <span  class="px-3 py-1 rounded-full text-xs bg-gray-100">offical store</span>
           </div>
           {{-- product title --}}
           <h2 class="font-semibold text-2xl overfolow-ellipsis overflow-hidden whitespace-nowrap">Accessories</h2>
          </div>
     </div></a>
      {{-- Card 4 --}}
      <a href="{{route('Products')}}"><div class="bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
        <img src="/img/covercase2.jpg" alt="covercase" class="w-full h-full object-cover">
        <div class="p-5  flex flex-col gap-3">
         {{-- badge --}}
         <div class="flex items-center gap-2">
             <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
             <span  class="px-3 py-1 rounded-full text-xs bg-gray-100">offical store</span>
         </div>
         {{-- product title --}}
         <h2 class="font-semibold text-2xl overfolow-ellipsis overflow-hidden whitespace-nowrap">Phone Cases</h2>

        </div>
   </div></a>
    {{-- Card 5 --}}
    <a href="{{route('Products')}}"><div class="bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
      <img src="/img/bag.jpg" alt="covercase" class="w-full h-full object-cover">
      <div class="p-5  flex flex-col gap-3">
       {{-- badge --}}
       <div class="flex items-center gap-2">
           <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock ready</span>
           <span  class="px-3 py-1 rounded-full text-xs bg-gray-100">offical store</span>
       </div>
       {{-- product title --}}
       <h2 class="font-semibold text-2xl overfolow-ellipsis overflow-hidden whitespace-nowrap">Bag</h2>

      </div>
 </div></a>

 </section>

@endsection
