@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="w-full sm:w-2/3 lg:w-3/4 p-2">
            <h1 class="text-xl mb-2">از کتاب‌هایی که شما مطالعه می‌کنید:</h1>
            <!-- Fellow readers -->
            <div class="flex bg-gray-200 flex-col md:flex-row rounded-lg text-sm md:text-base">
                <div class="text-gray-700 text-center px-4 py-2 m-2">
                    <img src="{{ asset('images/books/13.jpg') }}" alt="" class="w-24 lg:w-32 h-32 lg:h-48 object-cover rounded-xl mx-auto">
                </div>
                <div class="flex flex-col flex-1 text-center p-4 m-2 items-center justify-between">
                    <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-right">
                            <h4 class="text-brown font-bold text-lg">ملت عشق <i class="fas fa-star    "></i></h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </div>
                        <div class="bg-white text-black rounded-full py-1 px-2">تاریخ شروع: ۱۲ مرداد ۱۳۹۷</div>
                    </div>

                    <div class="flex flex-col justify-between w-full items-center my-4">
                        <p class="text-gray-700 sm:mr-auto">۸۰۳ صفحه</p>

                        <div class="progress-bar-wrapper">
                            <div class="progress-bar" style="width: 75%">75%</div>
                          </div>
                    </div>


                    <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-right">
                            <h4 class="">۵۹ نقد دارد</h4>
                        </div>
                        <a href="#" class="sm:mr-auto text-gray-700 hover:text-brown ml-4">بروز رسانی مطالعه</a>
                        <a href="#" class="text-gray-700 hover:text-brown">دیدن بقیه لیست</a>
                    </div>
                </div>
              </div>
            <!-- End of fellow readers -->

            <hr class="border my-5 border-gray-600">

            <div class="flex items-center my-4">
                <h1 class="text-lg">کتاب برتر هفته</h1>
                <a href="#" class="text-brown rounded-full hover:bg-gray-200 hover:text-black px-2 mr-2">مشاهدهٔ همه</a>
            </div>

            <div class="flex flex-wrap justify-between">
                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mx-auto mb-3">
                    <a href="">
                        <img src="{{ asset('images/books/13.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl hover:grow hover:shadow-lg">
                        <h4 class="text-brown font-bold text-base lg:text-lg">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mx-auto mb-3">
                    <a href="">
                        <img src="{{ asset('images/books/13.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl hover:grow hover:shadow-lg">
                        <h4 class="text-brown font-bold text-base lg:text-lg">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mx-auto mb-3">
                    <a href="">
                        <img src="{{ asset('images/books/13.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl hover:grow hover:shadow-lg">
                        <h4 class="text-brown font-bold text-base lg:text-lg">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mx-auto mb-3">
                    <a href="">
                        <img src="{{ asset('images/books/13.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl hover:grow hover:shadow-lg">
                        <h4 class="text-brown font-bold text-base lg:text-lg">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mx-auto mb-3">
                    <a href="">
                        <img src="{{ asset('images/books/13.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl hover:grow hover:shadow-lg">
                        <h4 class="text-brown font-bold text-base lg:text-lg">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mx-auto mb-3">
                    <a href="">
                        <img src="{{ asset('images/books/13.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl hover:grow hover:shadow-lg">
                        <h4 class="text-brown font-bold text-base lg:text-lg">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>
                
            </div>


        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="h-16  w-full sm:w-1/3 lg:w-1/4 p-2">
            <div class="bg-gray-300">
                تست
            </div>


        </div>
        <!-- End of sidebar -->
@endsection
