<nav class="bg-gray-menu w-full top-0 main-header h-menu"  > {{-- :class="{ 'scrolled': !view.atTopOfPage } --}} 
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between"  v-bind:class="view.navbarHeightClass">
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
            <a href="{{ route('homepage') }}">
              <img class="h-8 w-auto rounded-full" src="{{ asset('images/logo.jpg') }}" alt="Workflow">
            </a>
          </div>
          @livewire('search')

        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

          <button class="bg-gray-menu p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: bell -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>
          <a href="#" class="bg-gray-menu flex items-center p-1 mr-3 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" >
            <i class="far fa-plus-square text-xl rounded-full"></i>
          </a>
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


@if (Route::currentRouteName() === 'book.show' && isset($book))
<div class=" hidden lg:block">
  <nav class="bg-blue-100 w-full top-0 book-navbar fixed hidden" >
    <div class="max-w-6xl mx-auto px-2 sm:px-4 lg:px-6">
      <div class="relative flex items-center justify-between text-gray-700"  v-bind:class="view.navbarHeightClass">
        <div class="absolute inset-y-0 right-0 font-bold flex items-center">
          <!-- Mobile menu button-->
          <h4>{{ $book->title }}</h4>
          @if ($book->author()->first())
          <div class="mr-4">
            <span class="text-sm">اثر {{ $book->author()->first()->fullName }}</span>
          </div>              
          @endif

          <div class="mr-4">
            @include('partials.rated', ['rating' => $book->reviews()->avg('rating')])
          </div>
        </div>
        <div class="absolute inset-y-0 left-0 font-bold flex items-center">
          <!-- Mobile menu button-->
          <a href="#toTop" class="hover:text-gray-900 scrollToTop">
            <i class="fas fa-arrow-up border p-2 rounded-full"></i>
          </a>
        </div>
  
      </div>
    </div>
  </nav>
</div>
<div style="padding-top:64px;" class="bg-white page-padding"></div>

@endif
