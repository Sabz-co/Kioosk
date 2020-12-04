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


<nav class="bg-gray-800 fixed w-full top-0 main-header" :class="{ 'scrolled': !view.atTopOfPage }" >
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between transition duration-500 ease-in-out"  v-bind:class="view.navbarHeightClass">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button id="mobile-icon" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
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
          <div class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto rounded-full" src="{{ asset('images/logo.jpg') }}" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto rounded-full" src="{{ asset('images/logo.jpg') }}" alt="Workflow">
          </div>
          @livewire('search')

        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: bell -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>
  
          <!-- Profile dropdown -->
          {{-- <profile-dropdown/> --}}
          <navbar/>

        </div>
      </div>
    </div>
  
    <!--
      Mobile menu, toggle classes based on menu state.
  
      Menu open: "block", Menu closed: "hidden"
    -->
    <div id="mobile-menu" class="hidden">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900">داشبورد</a>
        <a href="{{ route('genre.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">کتب</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">نویسندگان</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">ناشران</a>
      </div>
    </div>
  </nav>
  <div style="padding-top:64px;" class="bg-white"></div>

{{-- <nav id="header" class="w-full">

    <!--Nav-->
    <div class="relative w-full top-0 border-b border-grey-light">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-1">
        <div class="pr-4 flex items-center">
          <img src="{{ asset('images/logo.jpg') }}" class="rounded-full w-10" alt="">
        </div>

        <div class="pl-4">
          <button id="nav-toggle" class="block lg:hidden flex items-center px-3 py-2 border rounded text-grey border-grey-dark hover:text-black hover:border-purple appearance-none focus:outline-none">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
          </button>
        </div>

        <div class="w-20 lg:flex  lg:content-center lg:justify-start lg:w-1/2 hidden lg:block mt-2 lg:mt-0 z-20 bg-gray-300" id="nav-content">

          <ul class="list-reset lg:flex justify-end items-center">
             <li class="mr-3 py-2 lg:py-0">
                <a href="/home"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    خانه
                </a>
            </li>

            <li class="mr-3 py-2 lg:py-0">
                <a href="{{ route('my-books', Auth::user()->id) }}"
                    class="mt-4 hidden lg:inline-block py-1 px-2 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 ml-3 xl:ml-5">
                    کتاب‌های من
                </a>    
            </li>

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

        <div class=" lg:flex lg:content-center lg:justify-end lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">

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

     <div class="absolute z-10 w-full hidden bg-white" id="search-content">
      <div class="container mx-auto py-4 text-black shadow-xl">
        <input id="searchfield" type="search" placeholder="جستجو کنید ..." autofocus="autofocus" class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">
      </div>
      <ul>
          <li>
              میوه بهشتی
          </li>
          <li>چیپس</li>
      </ul>

    </div> 
    @livewire('search')
  </nav> --}}