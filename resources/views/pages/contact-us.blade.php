@extends('layouts.page')


@section('content')
        <!-- Right side -->
    <div class="flex flex-col sm:flex-row">
        <div class="w-full sm:w-2/3  p-2 text-black text-justify p-6 md:p-8 lg:p-10 sm:border-l">
            <h1 class="text-xl md:text-2xl lg:text-3xl mb-3 font-bold">سوال، نظر یا پیشنهادی دارید؟</h1>
            

            <div class="flex flex-col justify-center">

                <div class="w-full mx-auto mb-6 flex flex-col">
                    <label for="" class="mb-1 md:mb-2">موضوع</label>
                    <select name="subject" class="ml-auto h-10 bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2" id="">
                        <option value="1">مقدار اول</option>
                        <option value="2">مقدار دوم</option>
                        <option value="3">مقدار سوم</option>

                    </select>
                </div>
                <div class="w-full mx-auto mb-6 flex flex-col">
                    <label for="" class="mb-1 md:mb-2">نام شما</label>
                    <input type="text" class="w-full h-10 bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 " placeholder="علیرضا حسن زاده">
                </div>

                <div class="w-full mx-auto mb-6 flex flex-col">
                    <label for="" class="mb-1 md:mb-2">ایمیل شما</label>
                    <input type="email" class="ltr w-full h-10 bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 " placeholder="example@email.com">
                </div>


                <div class="w-full mx-auto mb-6 flex flex-col">
                    <label for="" class="mb-1 md:mb-2">پیام شما</label>
                    <textarea name="body" id="" class="w-full bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2" cols="30" rows="7"></textarea>
                </div>

                <div class="w-full mx-auto mb-6 flex flex-col">
                    <a href="#" class="mr-auto px-3 rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-silver-100 text-white py-1 px-2 shadow hover:shadow-xl">فرستادن</a>

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
