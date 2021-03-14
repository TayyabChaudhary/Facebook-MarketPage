<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- Styles -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/3.0.16/svg.min.js" integrity="sha512-p3Tp2zn+wApBreZCgRkmMwnfpN8MUPXzzOihXx7iGYXqE7t6m9drY8HeyMeeFuDWiTFKrGUrq3jpbT0vX6zY/Q==" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    {{-- @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    </div>
@endif --}}
    <body class="antialiased">
<div class="NJDNJDNJ">
    <div class="flex">
<div class="sidebar">
<div class="flex justify-between">
    <h1 class="text-2xl font-bold">
        Marketplace
    </h1>
    <div class="NUSDHJFKJK rounded-full flex justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="30px" height="25px" viewBox="0 0 569.613 569.614" style="enable-background:new 0 0 569.613 569.614;" xml:space="preserve">
            <g>
                <g>
                    <path d="M371.49,563.638l113.052-65.854c5.26-3.063,9.088-8.094,10.64-13.975c1.555-5.888,0.701-12.148-2.359-17.405    l-30.769-52.807c4.789-6.524,9.083-13.115,12.972-19.918c3.893-6.799,7.405-13.84,10.606-21.275l61.114-0.221    c6.086-0.021,11.915-2.464,16.202-6.781c4.287-4.32,6.687-10.165,6.665-16.255l-0.48-130.833    c-0.024-6.089-2.464-11.919-6.784-16.206c-4.299-4.269-10.113-6.662-16.166-6.662c-0.03,0-0.062,0-0.089,0l-61.182,0.242    c-6.444-14.462-14.428-28.14-23.871-40.913l30.417-53.143c6.294-11.001,2.481-25.025-8.52-31.316L369.403,5.335    c-5.281-3.023-11.545-3.822-17.424-2.231c-5.872,1.598-10.872,5.462-13.892,10.747L307.665,67    c-15.766-1.662-31.653-1.613-47.363,0.144l-30.796-52.892c-3.063-5.263-8.094-9.091-13.975-10.646    c-5.884-1.551-12.148-0.704-17.408,2.359L85.068,71.823c-10.949,6.38-14.657,20.429-8.28,31.38l30.765,52.831    c-4.761,6.484-9.048,13.076-12.953,19.899c-3.904,6.824-7.417,13.855-10.6,21.255l-61.139,0.235    C10.187,197.472-0.046,207.785,0,220.456L0.48,351.29c0.024,6.086,2.463,11.919,6.784,16.206    c4.299,4.269,10.11,6.661,16.166,6.661c0.028,0,0.058,0,0.086,0l61.203-0.229c6.432,14.452,14.413,28.131,23.868,40.915    l-30.413,53.141c-3.023,5.284-3.825,11.548-2.231,17.423c1.597,5.872,5.462,10.872,10.747,13.896l113.535,64.977    c3.596,2.056,7.513,3.032,11.38,3.032c7.962,0,15.701-4.146,19.942-11.552l30.417-53.149c15.799,1.671,31.684,1.619,47.348-0.144    l30.799,52.89c3.066,5.26,8.094,9.088,13.978,10.643C359.967,567.552,366.23,566.705,371.49,563.638z M341.129,465.911    c-4.902-8.418-14.599-12.815-24.137-10.994c-20.588,3.935-42.174,3.999-63.128,0.202c-9.572-1.735-19.184,2.741-24.015,11.181    l-26.748,46.745l-73.694-42.18l26.75-46.741c4.832-8.439,3.819-19.006-2.521-26.371c-13.978-16.239-24.685-34.594-31.818-54.554    c-3.265-9.131-11.918-15.227-21.61-15.227c-0.027,0-0.058,0-0.085,0l-53.825,0.199l-0.315-84.937l53.819-0.205    c9.722-0.04,18.366-6.197,21.576-15.374c3.69-10.557,7.962-20.019,13.06-28.917c5.101-8.914,11.089-17.387,18.311-25.897    c6.294-7.417,7.225-17.993,2.334-26.396l-27.081-46.509l73.385-42.754l27.078,46.497c4.893,8.4,14.544,12.821,24.095,11.004    c20.716-3.911,42.317-3.978,63.189-0.19c9.557,1.753,19.189-2.742,24.019-11.178l26.753-46.744l73.697,42.179l-26.753,46.742    c-4.826,8.437-3.816,19,2.521,26.368c13.956,16.221,24.669,34.587,31.842,54.59c3.271,9.119,11.919,15.202,21.604,15.202    c0.031,0,0.062,0,0.092,0l53.789-0.214l0.315,84.927l-53.783,0.192c-9.712,0.037-18.351,6.182-21.569,15.347    c-3.746,10.654-8.023,20.131-13.082,28.975c-5.064,8.847-11.067,17.338-18.356,25.958c-6.271,7.418-7.194,17.978-2.305,26.368    l27.078,46.472l-73.391,42.749L341.129,465.911z"/>
                    <path d="M392.531,346.458c16.472-28.773,20.746-62.24,12.047-94.232s-29.342-58.685-58.115-75.151    c-18.761-10.74-40.05-16.417-61.562-16.417c-44.446,0-85.762,23.944-107.822,62.485c-33.994,59.404-13.327,135.39,46.071,169.386    c18.764,10.737,40.052,16.411,61.564,16.411C329.158,408.943,370.475,385.001,392.531,346.458z M352.696,323.658    c-13.902,24.293-39.955,39.385-67.985,39.385c-13.528,0-26.934-3.58-38.764-10.349c-37.433-21.426-50.456-69.312-29.033-106.751    c13.905-24.291,39.958-39.385,67.987-39.385c13.528,0,26.932,3.58,38.762,10.355c18.136,10.379,31.142,27.197,36.628,47.359    C365.771,284.435,363.075,305.524,352.696,323.658z"/>
                </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            </svg>
    </div>
</div>
<div class="NIJFJFK">
    <div class="absolute _sjfjik">
        <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" width="15px" height="15px" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>    </div>
    <form action="" method="post">
        <input type="search" name="" id="" class="_DJIDJOI rounded-full" placeholder="Search Marketplace ">
    </form>
</div>
<div class="MOLADKLDK">
    <nav class="KDLDKl">
        <ul class="flex pt-10">
            <div class="MIAJDKOPA rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Browser All</a>
            </li>
        </ul>
        <ul class="flex pt-6">
            <div class="MIAJDKOPA rounded-full flex justify-center items-center">
                <i class="fa fa-bell" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Nofitications</a>
            </li>
        </ul>
        <ul class="flex pt-6">
            <div class="MIAJDKOPA rounded-full flex justify-center items-center">
                <i class="fa fa-inbox" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Inbox</a>
            </li>
        </ul>
        <ul class="flex pt-6">
            <div class="MIAJDKOPA rounded-full flex justify-center items-center">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Cart</a>
            </li>
        </ul>
        <ul class="flex pt-6">
            <div class="MIAJDKOPA rounded-full flex justify-center items-center">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Your Account</a>
            </li>
        </ul>
    </nav>
</div>
<div class="pt-5 LIKKOIF">
    <button class="hover:bg-gray-400 outline-none w-full text-gray-800 flex justify-center font-bold py-2 px-4 rounded inline-flex items-center">
        <i class="fa fa-plus" aria-hidden="true"></i>
            <span class="pl-3">Create New Listing</span>
      </button>
</div>
<hr class="mt-4">
<div class="_OPDUD pt-2">
    <h2>
        Filter
    </h2>
    <p>
        Abbottabad within 60 kilometer
    </p>
</div>
<div class="miof_sikosf">
    <h2 class="pt-3">
        Catagories
    </h2>
</div>
<div class="NIJADOF">
    <nav>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Vechile</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Property Rentals</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Apparel</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Classifieds</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Electronics</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Entertainment</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Family</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Free Stuff</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Garden & Outdoor</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Hobbies</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Home Goods</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Home Improvement Supplies</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Home Sales</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Musical Instruments</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Office Supplies</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Pet Supplies</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Sporting Goods</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Toys & Games</a>
            </li>
        </ul>
        <ul class="NIKOD flex pt-4">
            <div class="NKISJFO rounded-full flex justify-center items-center">
                <i class="fa fa-gift" aria-hidden="true"></i>
            </div>
            <li class="pt-1">
                <a href="" class="font-bold pl-3 ">Groups</a>
            </li>
        </ul>
    </nav>
</div>
</div>
{{-- Side Bar Code End Here --}}
<div class="flex justify-center sorpope">
    <div class="NIDJOJODA">
<div class="flex justify-between po0f8">
    <div class="la9fjhi">
        <div class="carousel relative bg-white">
            <div class="carousel-inner relative overflow-hidden w-full">
              <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item absolute opacity-0" style="">
                    <div class="block h-full w-full text-white text-5xl text-center" style="background: rgba(0,0,0);">
                        <img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/p720x720/159363766_10158808744660743_133585527223756894_o.jpg?_nc_cat=110&ccb=1-3&_nc_sid=843cd7&_nc_eui2=AeGhDVEa16kWgVlThsYi4Gx1guz5oj7fAu2C7PmiPt8C7T3V6gyDnn_SxYZYSEm2YdvnNBEBvuGLz-pstaETaNUv&_nc_ohc=GbDIvrtYRX4AX9Vdeq_&_nc_ht=scontent.fisb5-1.fna&tp=6&oh=5575fb63426833bde4a730d1ff501368&oe=6074B9EC" alt="" class="MNIDJID" style="opacity: 0.3">
<div>
    <img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/p720x720/159363766_10158808744660743_133585527223756894_o.jpg?_nc_cat=110&ccb=1-3&_nc_sid=843cd7&_nc_eui2=AeGhDVEa16kWgVlThsYi4Gx1guz5oj7fAu2C7PmiPt8C7T3V6gyDnn_SxYZYSEm2YdvnNBEBvuGLz-pstaETaNUv&_nc_ohc=GbDIvrtYRX4AX9Vdeq_&_nc_ht=scontent.fisb5-1.fna&tp=6&oh=5575fb63426833bde4a730d1ff501368&oe=6074B9EC" alt="" class="MNIDJID" style="opacity: 1;width: 570px;
    height: 490px;
    position: absolute;
    top: 105px;" >

</div>
                    </div>
                </div>
                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                {{-- <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:100vh;">
                </div>
                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> --}}

                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-3" style="background: rgba(0,0,0);">
<img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/p720x720/159112577_10158808744685743_4280503250955622012_o.jpg?_nc_cat=108&ccb=1-3&_nc_sid=843cd7&_nc_eui2=AeFuXDAn8ycvUgPezdTEjslqNPO0CFBaw5M087QIUFrDkxgUwe_09WMfAAKaiuim4DvEmxyV1cPT18FjTBbtdAEQ&_nc_ohc=kYv3946NvKkAX8IoV7x&_nc_ht=scontent.fisb5-1.fna&tp=6&oh=64e551bf632522831c584587008b082d&oe=607315FE" alt="" style="opacity: 0.3" class="MNIDJID">
<div>
    <img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/p720x720/159112577_10158808744685743_4280503250955622012_o.jpg?_nc_cat=108&ccb=1-3&_nc_sid=843cd7&_nc_eui2=AeFuXDAn8ycvUgPezdTEjslqNPO0CFBaw5M087QIUFrDkxgUwe_09WMfAAKaiuim4DvEmxyV1cPT18FjTBbtdAEQ&_nc_ohc=kYv3946NvKkAX8IoV7x&_nc_ht=scontent.fisb5-1.fna&tp=6&oh=64e551bf632522831c584587008b082d&oe=607315FE" alt="" class="MNIDJID" style="opacity: 1;width: 570px;
    height: 490px;
    position: absolute;
    top: 105px;" >

</div>
</div>
                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">
                            <img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/p720x720/159363766_10158808744660743_133585527223756894_o.jpg?_nc_cat=110&ccb=1-3&_nc_sid=843cd7&_nc_eui2=AeGhDVEa16kWgVlThsYi4Gx1guz5oj7fAu2C7PmiPt8C7T3V6gyDnn_SxYZYSEm2YdvnNBEBvuGLz-pstaETaNUv&_nc_ohc=GbDIvrtYRX4AX9Vdeq_&_nc_ht=scontent.fisb5-1.fna&tp=6&oh=5575fb63426833bde4a730d1ff501368&oe=6074B9EC" alt="" width="30px" height="30px" class="rounded">
                        </label>
                    </li>
                    <li class="inline-block mr-3">
                        <img src="https://scontent.fisb5-1.fna.fbcdn.net/v/t1.0-9/p720x720/159112577_10158808744685743_4280503250955622012_o.jpg?_nc_cat=108&ccb=1-3&_nc_sid=843cd7&_nc_eui2=AeFuXDAn8ycvUgPezdTEjslqNPO0CFBaw5M087QIUFrDkxgUwe_09WMfAAKaiuim4DvEmxyV1cPT18FjTBbtdAEQ&_nc_ohc=kYv3946NvKkAX8IoV7x&_nc_ht=scontent.fisb5-1.fna&tp=6&oh=64e551bf632522831c584587008b082d&oe=607315FE" width="30px" height="30px" alt="" class="rounded">
                    </li>
                </ol>

            </div>
        </div>
    </div>
    <div class="BUDHOA9DJI absolute pt-3" style="right: 6pc;">
        <h1 class="font-bold text-2xl">
            2008 Vauxhall Astra
        </h1>
        <h3>
            £1,234
        </h3>
        <span style="font-size: 12px">
            Vehicles
        </span>
        <p style="font-size: 12px">
            Listed 5 days ago in Cambridge, England
        </p>
        <div class="inline-flex pt-4">
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <i class="fab fa-facebook-messenger"></i>                <span class="pl-1">Message</span>
              </button>
              <button class="bg-gray-300 ml-4 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded inline-flex items-center">
                <i class="fas fa-save"></i>              </button>
              <button class="bg-gray-300 ml-4 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded inline-flex items-center">
                <i class="fas fa-share"></i>              </button>
              <button class="bg-gray-300 ml-4 hover:bg-gray-400 text-gray-800 font-bold py-1 px-3 rounded inline-flex items-center">
                <i class="fas fa-ellipsis-h"></i>
                          </button>
        </div>
        <hr class="mt-2">
<div class="pt-2">
    <h3 class="font-bold">
        Seller's description
    </h3>
    <p class="text-sm pt-1">
        2008 Vauxhall Astra · Convertible · Driven <br> 100,000 kilometres
    </p>
    <p class="text-sm pt-2">
        Hi I’m not selling but am looking for...
    </p>
    <img src="https://external.fisb5-1.fna.fbcdn.net/static_map.php?region=PK&v=2012&osm_provider=2&size=328x120&language=en_US&scale=1&zoom=11&center=52.215270996094%2C0.1153564453125&circle=weight%3A2%7Ccolor%3A0x4D6AA47f%7Cfillcolor%3A0x4D6AA41c%7C52.215270996094%2C0.1153564453125%7C2k" width="300px" alt="" class="mt-3">
<div class="pt-2">
<h3 class="font-bold">
    Cambridge, England
</h3>
<p class="text-sm pt-3">
    Location is approximate
</p>
<hr class="mt-3">
<h3 class="font-bold text-sm pt-3">
    Seller Information
</h3>
<div class="inline-flex pt-3">
<img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/d8cdf37fe9408fcb8614bb5bf987544d-1612247948665/c6bb83b2-4ed1-4534-bec5-1485e4350cb1.jpg" alt="" width="40px" height="40px" class="rounded-full">
<h3 class="pl-3 font-bold text-sm pt-1">
    Tayy_Eb Chaudhary <br>
    Joined Facebook in 2021
</h3>

</div>

</div>
</div>
    </div>
</div>
    </div>
</div>

</div>
</div>
    </body>
</html>
