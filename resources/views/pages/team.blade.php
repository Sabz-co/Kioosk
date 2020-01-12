@extends('layouts.page')


@section('content')
        <!-- Right side -->
    <div class="flex flex-col sm:flex-row">
        <div class="w-full sm:w-2/3  p-2 text-black text-justify p-6 md:p-8 lg:p-10 sm:border-l">
            <h1 class="text-xl md:text-2xl lg:text-3xl mb-3 font-bold">می‌خواهید با سازندگان کیوسک ارتباط برقرار کنید؟</h1>


            <div class="flex flex-row justify-center">
                <div class=" text-center p-3 w-1/2 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-20 h-20 rounded-full mx-auto -mb-8  border-4  border-silver-200" alt="">
                    <div class="bg-gray-light rounded-t-xl p-2 pt-8">
                        <div class="text-center text-black my-3">
                            <p class="font-bold">امیرمسعود مهرابیان</p>
                            <p class="font-light">مهندس محصول</p>
                        </div>
                        <h6 class="text-brown text-right text-sm">گذشت در گذر زمان* ملکه مورچه‌ها و ۹ کتاب دیگر ...</h6>
                    </div> 
                    <div class="flex -mt-1 bg-brown rounded-b-xl p-2 text-white text-lg items-center justify-center">
                        <i class="fab fa-twitter    px-2 "></i>
                        <i class="fab fa-telegram    px-2 "></i>
                        <i class="fab fa-instagram   px-2  "></i>
                    </div>

                </div>

                <div class=" text-center p-3 w-1/2 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-20 h-20 rounded-full mx-auto -mb-8  border-4  border-silver-200" alt="">
                    <div class="bg-gray-light rounded-t-xl p-2 pt-8">
                        <div class="text-center text-black my-3">
                            <p class="font-bold">محمد ذکایی</p>
                            <p class="font-light">مدیر محصول</p>
                        </div>
                        <h6 class="text-brown text-right text-sm">گذشت در گذر زمان* ملکه مورچه‌ها و ۹ کتاب دیگر ...</h6>
                    </div> 
                    <div class="flex -mt-1 bg-brown rounded-b-xl p-2 text-white text-lg items-center justify-center">
                        <i class="fab fa-twitter    px-2 "></i>
                        <i class="fab fa-telegram    px-2 "></i>
                        <i class="fab fa-instagram   px-2  "></i>
                    </div>

                </div>

                <div class=" text-center p-3 w-1/2 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-20 h-20 rounded-full mx-auto -mb-8  border-4  border-silver-200" alt="">
                    <div class="bg-gray-light rounded-t-xl p-2 pt-8">
                        <div class="text-center text-black my-3">
                            <p class="font-bold">علیرضا حسن زاده</p>
                            <p class="font-light">طراح محصول</p>
                        </div>
                        <h6 class="text-brown text-right text-sm">گذشت در گذر زمان* ملکه مورچه‌ها و ۹ کتاب دیگر ...</h6>
                    </div> 
                    <div class="flex -mt-1 bg-brown rounded-b-xl p-2 text-white text-lg items-center justify-center">
                        <i class="fab fa-twitter    px-2 "></i>
                        <i class="fab fa-telegram    px-2 "></i>
                        <i class="fab fa-instagram   px-2  "></i>
                    </div>

                </div>


            </div>


        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="w-full sm:w-1/3 p-6 md:p-8 lg:p-10">
            <div class="border-b flex mb-1 pb-2">
                <div class="text-black flex items-baseline">

                    <i class="far fa-user"></i>
                    <h2 class="mr-1 font-bold">کیوسک</h2>
                </div>

            </div>

            <div class="flex flex-col">
                <a href="#" class="text-silver-800 hover:text-brown my-1">تماس با ما</a>
                <a href="#" class="text-silver-800 hover:text-brown my-1">درباره کیوسک</a>
                <a href="#" class="text-silver-800 hover:text-brown my-1">سازندگان</a>
                <a href="#" class="text-silver-800 hover:text-brown my-1">قوانین</a>
            </div>
        </div>
        <!-- End of sidebar -->
    </div>
@endsection
