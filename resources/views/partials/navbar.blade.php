<div class="container mx-auto">
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



                    {{-- <div class="rounded shadow-md my-2 relative pin-t pin-l">
                        <ul class="list-reset">
                          <li class="p-2"><input class="border-2 rounded h-8 w-full"><br></li>
                          <li><p class="p-2 block text-black hover:bg-grey-light cursor-pointer">
                              USA
                              <svg class="float-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M6.61 11.89L3.5 8.78 2.44 9.84 6.61 14l8.95-8.95L14.5 4z"/></svg>
                          </p></li>
                          <li><p class="p-2 block text-black hover:bg-grey-light cursor-pointer">Montenegro</p></li>
                        </ul>
                    </div> --}}

                    
            </div>
            <div class="flex items-center mr-auto">
                @if (Auth::guest())
                    
                @else
                <user-notifications></user-notifications>
                {{-- <a href="#responsive-header"
                    class="mt-4 hidden lg:inline-flex items-center p-1 rounded lg:mt-0 text-gray-200 hover:text-white hover:bg-gray-700 mr-3 xl:mr-5  -ml-1">
                    <span class="ml-2 flex items-center justify-center  rounded bg-brown-500 border border-transparent border-brown-500 text-white px-2 text-sm">۲۳</span>

                    <i class="fa fa-bullhorn"></i>
                </a> --}}



                <a href="{{ route('book.create') }}" class="mt-4 hidden lg:inline-flex items-center justify-center rounded lg:mt-0 text-white hover:text-white hover:bg-gray-700 mr-3 xl:mr-5 border-2 border-white rounded-full h-8 w-8">
                    <i class="fas fa-plus"></i>
                </a>      
                <profile-dropdown/>
              
                @endif



                {{-- <a href="#"
                    class="hidden lg:inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white">پروفایل
                    کاربری</a> --}}
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
</div>