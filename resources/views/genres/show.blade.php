@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="flex flex-col sm:flex-row">

        <div class="flex flex-col  sm:w-3/5 lg:w-2/3 p-2">
        {{-- Start of genre --}}

        <div class="w-full">
            <div class="flex items-center my-4 border-b pb-2">
                <h1 class="text-lg">{{ $genre->name }}</h1>
                <a href="#" class="text-brown-500 rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
            </div>

            <div class="flex flex-wrap justify-start">
                @foreach ($genre->books as $book)
                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                    <a href="">
                        <img src="{{ asset($book->cover) }}" alt="" class="w-full lg:h-56 object-cover rounded-xl group-hover:shadow-lg">
                        <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">{{ $book->title }} </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>                    
                @endforeach


                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                    <a href="">
                        <img src="{{ asset('images/books/13.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl group-hover:shadow-lg">
                        <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                    <a href="">
                        <img src="{{ asset('images/books/4.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl group-hover:shadow-lg">
                        <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                    <a href="">
                        <img src="{{ asset('images/books/17.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl group-hover:shadow-lg">
                        <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                    <a href="">
                        <img src="{{ asset('images/books/3.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl group-hover:shadow-lg">
                        <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>
            </div>
        </div>
        {{-- End of genre --}}
    

    
    </div>
        
        <!-- End of right side -->

        <!-- Sidebar -->

        <div class="w-full sm:w-2/5 lg:w-1/3 p-2">
            <div>
                <div class="text-center mb-4 pb-2 text-sm">
                    <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-silver-200">
                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">قرن ده‌ام</a>
                            <a href="">قرن یازده‌ام</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">اکشن</a>
                            <a href="">رمانتیک</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">مذهبی</a>
                            <a href="">سیاسی</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">اجتماعی</a>
                            <a href="">خانوادگی</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">عاشقانه</a>
                            <a href="">رباتیک</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">پیشرفت شخصی</a>
                            <a href="">روانشناسی</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">روانپزشکی</a>
                            <a href="">پزشکی</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">قرن ده‌ام</a>
                            <a href="">قرن یازده‌ام</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">اکشن</a>
                            <a href="">رمانتیک</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">مذهبی</a>
                            <a href="">سیاسی</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">اجتماعی</a>
                            <a href="">خانوادگی</a>
                            
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">عاشقانه</a>
                            <a href="">رباتیک</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">پیشرفت شخصی</a>
                            <a href="">روانشناسی</a>
                        </div>

                        <div class="flex flex-row justify-between w-full mb-4">
                            <a href="">روانپزشکی</a>
                            <a href="">پزشکی</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- End of sidebar -->
    </div>
@endsection
