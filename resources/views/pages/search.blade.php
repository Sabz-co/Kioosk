@extends('layouts.app')

@section('content')
<div class="container">


            <!-- Right side -->
            <div class="flex flex-col sm:flex-row w-full">
                <div class="w-full sm:w-2/3 lg:w-3/4 p-2">
        
                    <div class="flex items-center my-4 pb-2">
                        <h1 class="text-2xl">جستجو </h1>
                    </div>

                    <div class="py-8">
                        <div class="bg-white flex items-center rounded-full shadow-xl">
                          <input class="rounded-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="جستجو">
                          
                          <div class="">
                            <button class="bg-brown-500 text-white rounded-full p-4 hover:bg-brown-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                              icon
                            </button>
                            </div>
                          </div>
                        </div>
                      
                    <div class="bg-white pb-2">
                        <nav class="flex flex-col sm:flex-row">
                            <button class="py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500">
                                کتاب
                            </button><button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                                نویسنده
                            </button><button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                                نقل قول
                            </button><button class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none">
                                Tab 4
                            </button>
                        </nav>
                    </div>
                    <div class="flex flex-wrap justify-start">
                        @include('partials.book', ['rating' => 3])
                        @include('partials.book', ['rating' => 5])

                        @include('partials.book', ['rating' => 3])
                        @include('partials.book', ['rating' => 1])
                        @include('partials.book', ['rating' => 6])
                        @include('partials.book', ['rating' => 3])
                        @include('partials.book', ['rating' => 2])

                    </div>
                </div>
                <!-- End of right side -->
        
                <!-- Sidebar -->
                <div class="h-16  w-full sm:w-1/3 lg:w-1/4 p-2">
                    <div>
                        <div class="text-center mb-4 pb-2">
                            <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-silver-200">
                                <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
                                <h2 class="font-bold text-black my-2"></h2>
                                <h3 class="mb-2">تهران، ایران</h3>
                                {{-- <a href="#" class="my-2 mx-auto w-full sm:w-5/6 rounded-lg bg-brown-500 border border-transparent hover:text-brown-500 hover:border-brown-500 hover:bg-silver-100 text-white py-1 px-2 lg:px-6" id="subscribe-user" data-source-id="{{ $user->id }}">{{ $user->isSubscribedTo ? 'دنبال کردن' : 'دنبال شده' }}</a> --}}
        
                                    {{-- <subscribe-button :active="{{ json_encode($user->isSubscribedTo) }}"></subscribe-button> --}}
                                <div class="flex flex-row justify-around text-silver-700 w-full  mt-2">
                                    <div>
                                        <i class="fas fa-book    "></i>
                                        ۲۷ دنبال کننده
                                    </div>
                                    <div>
                                        <i class="fas fa-book    "></i>
                                        ۹ کتاب
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class=" mb-4 pb-2 border-b text-silver-800">
                            <div class="flex items-baseline justify-end my-2">
                                <p class="ml-2">www.cheshmehpub.ir</p><i class="fas fa-globe    "></i> 
                            </div>
                            <div class="flex items-baseline justify-end my-2">
                                <p class="ml-2">021-24622890</p><i class="fas fa-phone    "></i> 
                            </div>
                        </div>
        
                        <div class="flex flex-wrap mb-4">
                            <a href="#" class="ml-2  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">علمی</a>
                            <a href="#" class="ml-2  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">تخیلی</a>
                            <a href="#" class="ml-2  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">رمان</a>
                            <a href="#" class="ml-2  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">ادبیات مقاومت</a>
                            <a href="#" class="ml-2  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">جنایی</a>
        
                            <a href="#" class="ml-2  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">داستان عاشقانه</a>
                        </div>
        
                        <div class="sticky top-0 bg-white">
        
        
                            <div class="border-b flex mb-1 pb-2 hidden xl:flex">
                                <div class="text-silver-600 flex items-baseline">
            
                                    <i class="far fa-user"></i>
                                    <h2 class="mr-1">شاید بشناسید</h2>
                                </div>
                                <a href="#" class="mr-auto text-brown-500 hover:bg-silver-200 rounded-full px-2 hover:text-black">دیدن همه</a>
            
                            </div>
            
                            <div class="flex flex-col hidden xl:block">
                                <div class="flex flex-row items-center mb-4">
                                    <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
            
                                    <div class="mr-2">
                                        <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                        <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                                    </div>
                                    <a href="#" class="mr-auto  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white py-1 px-2">دنبال کردن</a>
                                </div>
            
                                <div class="flex flex-row items-center mb-4">
                                    <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
            
                                    <div class="mr-2">
                                        <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                        <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                                    </div>
                                    <a href="#" class="mr-auto  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white py-1 px-2">دنبال کردن</a>
                                </div>
            
                                <div class="flex flex-row items-center mb-4">
                                    <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
            
                                    <div class="mr-2">
                                        <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                        <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                                    </div>
                                    <a href="#" class="mr-auto  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white py-1 px-2">دنبال کردن</a>
                                </div>
            
            
                            </div>
                        </div>
        
        
                    </div>
        
        
                </div>
                <!-- End of sidebar -->
            </div>


</div>


@endsection