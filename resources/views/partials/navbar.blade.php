{{-- <div class="container mx-auto">
    <nav class="flex items-center justify-between flex-wrap py-2 h-16">
        <div class="flex items-center flex-shrink-0 text-white ml-6">
            <svg class="fill-current h-8 w-8 ml-2" width="54" height="54" viewBox="0 0 54 54"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
            </svg>
            <span class="hidden md:inline-block font-semibold text-xl tracking-tight lg:ml-6">کیوسک</span>
        </div>

        <div class="w-3/5 flex lg:flex-grow lg:items-center">
            <div class="text-sm flex items-center">
                <a href="/home"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    خانه
                </a>
                @if(Auth::user())
                <a href="{{ route('my-books', Auth::user()->id) }}"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    کتاب‌های من
                </a>                    
                @endif

                <a href="{{ url('genres') }}"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    کتب
                </a>
                <a href="#responsive-header"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    ناشران
                </a>
                <a href="#responsive-header"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    نویسندگان
                </a>
                <a href="#responsive-header"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    نقدها
                </a>
                <a href="#responsive-header"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    کاربران
                </a>
                <a href="#responsive-header"
                    class="mt-4 hidden lg:inline-flex py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
                <input
                    class="w-full lg:w-auto inline-block bg-gray-200 text-gray-700 border-transparent rounded px-3 py-2 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name" type="text" placeholder="جستجو" />


                    
            </div>
            <div class="flex items-center mr-auto">
                @if (Auth::guest())
                    
                @else
                <user-notifications></user-notifications>



                <a href="{{ route('book.create') }}" class="mt-4 hidden lg:inline-flex items-center justify-center rounded lg:mt-0 text-white hover:text-white hover:bg-gray-700 mr-3 xl:mr-5 border-2 border-white rounded-full h-8 w-8">
                    <i class="fas fa-plus"></i>
                </a>      
                <profile-dropdown/>
              
                @endif

            </div>
        </div>
        <div class="block lg:hidden mr-6">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
    </nav>
</div> --}}




<nav id="header" class="w-full">

    <!--Nav-->
    <div class="relative w-full top-0 border-b border-grey-light">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pr-4 flex items-center">
          <img src="{{ asset('images/logo.jpg') }}" class="rounded-full w-10" alt="">
        </div>

        <div class="pl-4">
          <button id="nav-toggle" class="block lg:hidden flex items-center px-3 py-2 border rounded text-grey border-grey-dark hover:text-black hover:border-purple appearance-none focus:outline-none">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
          </button>
        </div>

        <div class="w-full flex-grow lg:flex lg:flex-1 lg:content-center lg:justify-start lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">

          <ul class="list-reset lg:flex justify-end items-center">
            <li class="mr-3 py-2 lg:py-0">
                <a href="/home"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    خانه
                </a>
            </li>

            @if(Auth::user())
            <li class="mr-3 py-2 lg:py-0">
                <a href="{{ route('my-books', Auth::user()->id) }}"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    کتاب‌های من
                </a>    
            </li>
            @endif

            <li class="mr-3 py-2 lg:py-0">
                <a href="{{ url('genres') }}"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    کتب
                </a>
            </li>

            <li class="mr-3 py-2 lg:py-0">
                <a href="#responsive-header"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    ناشران
                </a>
            </li>


            <li class="mr-3 py-2 lg:py-0">
                <a href="#responsive-header"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    نویسندگان
                </a>
            </li>
            <li id="search-toggle" class="mr-3 py-2 lg:py-0 search-icon cursor-pointer">
                    <svg class="fill-current pointer-events-none text-white w-4 h-4 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                    </svg>
            </li>
          </ul>

        </div>

        <div class="w-full flex-grow lg:flex lg:flex-1 lg:content-center lg:justify-end lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">

            <ul class="list-reset lg:flex justify-end items-center">

                <li class="mr-3 py-2 lg:py-0">
                    <a href="{{ route('book.create') }}" class="mt-4 hidden lg:inline-flex items-center justify-center rounded lg:mt-0 text-white hover:text-white hover:bg-gray-700 mr-3 xl:mr-5 border-2 border-white rounded-full h-8 w-8">
                        <i class="fas fa-plus"></i>
                    </a>    
                  </li>
                @if(Auth::user())
                <li class="mr-3 py-2 lg:py-0">
                    <user-notifications></user-notifications>
                </li>

                <li class="mr-3 py-2 lg:py-0">
                    <profile-dropdown/>
                </li>
                @endif

            </ul>
  
          </div>

      </div>
    </div>

    <!--Search-->
    {{-- <div class="absolute z-10 w-full hidden bg-white" id="search-content">
      <div class="container mx-auto py-4 text-black shadow-xl">
        <input id="searchfield" type="search" placeholder="جستجو کنید ..." autofocus="autofocus" class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">
      </div>
      <ul>
          <li>
              میوه بهشتی
          </li>
          <li>چیپس</li>
      </ul>

    </div> --}}
    @livewire('search')
  </nav>