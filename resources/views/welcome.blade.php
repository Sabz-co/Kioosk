<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}  |  @section('title') </title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                direction: rtl;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                padding: 0 25px;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Icon when menu is closed. -->
            <!--
              Heroicon name: menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Icon when menu is open. -->
            <!--
              Heroicon name: x
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="hidden sm:block sm:mr-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              @auth
              <a href="{{ url('/home') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium ml-4">خانه</a>
              <a href="{{ route('logout') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  خروج
              </a>
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          @else
              <a href="{{ route('login') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">ورود</a>
              @if (Route::has('register'))
                  <a href="{{ route('register') }}">ثبت نام</a>
              @endif
          @endauth
            </div>
          </div>
        </div>

      </div>
    </div>
  

  </nav>
        <div class="flex-center position-ref">
            {{-- @if (Route::has('login'))
                <div class="top-left links">
                    @auth
                        <a href="{{ url('/home') }}">خانه</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            خروج
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}">ورود</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">ثبت نام</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <div class="title my-8">
                    <img src="{{ asset('images/logotype.jpg') }}" class="w-48 mx-auto rounded-lg" alt="">
                </div>

                <div class="links font-dana">
                    <a href="https://laravel-news.com" class="text-lg hover:font-semibold transition-all transition-200 text-gray-800 font-normal hover:text-brown-500">کتاب‌ها</a>
                    <a href="https://blog.laravel.com" class="text-lg hover:font-semibold transition-all transition-200 text-gray-800 font-normal hover:text-brown-500">نویسندگان</a>
                    <a href="http://sabz-co.ir" class="text-lg hover:font-semibold transition-all transition-200 text-gray-800 font-normal hover:text-brown-500">ناشران</a>
                    <a href="https://github.com/Sabz-co/Kioosk" class="text-lg hover:font-semibold transition-all transition-200 text-gray-800 font-normal hover:text-brown-500">هدایا</a>
                </div>
            </div>



        </div>

        <div class="container mx-auto max-w-5xl">
            <div class="flex items-center my-4 font-dana">
                <h1 class="text-lg ">کتاب برتر هفته</h1>
                <a href="#" class="text-brown-500 mr-auto rounded-full hover:bg-silver-200 hover:text-black px-2 mr-2 hover:shadow ">دیدن همه</a>
            </div>

            <div class="flex flex-wrap justify-start">
                @foreach ($books as $book)
                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/6 text-right mb-3 hover:grow group ">
                    <a href="{{ url($book->path) }}">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ !empty($book->image) ? asset('images/books/thumbnail/' . $book->image) : asset('images/books/placeholder.png') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">{{ $book->title }} </h4>

                    </a>
                </div>                    
                @endforeach
            </div>
        </div>
    </body>
</html>
