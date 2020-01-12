@extends('layouts.app')

@section('content')
<div class="flex-reserse sm:flex w-full">
        <!-- Right side -->
        <div class="w-full sm:w-2/3 p-3">
            <!-- Add book form -->
            <div class="flex flex-col w-full text-sm md:text-base mb-5 pb-5 border-b text-silver-700">
                {!! Form::open(['route' => 'book.store']) !!}
                {!! Form::token() !!}
                <div class="w-5/6 sm:w-2/3 mx-auto mb-4">
                    <input type="text" name="title" class="bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 w-full" placeholder="عنوان">
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex">

                    <input type="text" class="collector" class="bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 w-full" placeholder="گردآورنده">
                    <div class="flex items-center">
                        <label class="inline-flex items-center mr-2 sm:mr-4 md:mr-6">
                          <input type="radio" class="form-radio" name="collectorType" value="author">
                          <span class="mr-1 sm:mr-2">نویسنده</span>
                        </label>
                        <label class="inline-flex items-center mr-2 sm:mr-4 md:mr-6">
                          <input type="radio" class="form-radio" name="collectorType" value="translator">
                          <span class="mr-1 sm:mr-2">مترجم</span>
                        </label>
                      </div>
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6">
                    {!! Form::select('publisher_id', $publishers, null, ['class' => 'bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 w-full']) !!}

                </div>


                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex flex-col md:flex-row">
                    <input type="text" name="isbn" class="mb-6 md:mb-0 bg-silver-300 w-auto md:w-1/2 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 " placeholder="ISBN">

                    <input type="text" name="publishYear" class="bg-silver-300 w-auto md:w-1/2 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 md:mr-3" placeholder="سال انتشار">
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex">
                    <input type="text" name="pages" class="w-full md:w-1/2 bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 " placeholder="تعداد صفحات">
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex flex-col">

                    <p class="mb-1">لطفاً حداقل ۳ تگ را برای کتاب وارد کنید تا کاربران بتوانند راحت‌تر آن را پیدا کنند</p>
                    <tag-input name="tags" :classes="'w-full'"></tag-input>
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex">
                
                <textarea name="description" id="" cols="30" rows="10" placeholder="توضیجی کوتاه در مورد کتاب" class="w-full bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2"></textarea>
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex sm:hidden">
                    <div class="flex w-full items-center justify-center rounded-lg bg-silver-300">
                        <label class="w-full flex flex-row p-2 items-center bg-white text-brown rounded-lg shadow-lg uppercase border border-brown cursor-pointer hover:bg-brown hover:text-white">
                            <svg class="w-6 h-6 ml-2 " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class=" text-small leading-normal">عکس جلد کتاب را انتخاب کنید</span>
                            <input type='file' class="hidden" />
                        </label>
                    </div>
                </div>

                <div  class="w-5/6 sm:w-2/3 mb-6 flex items-end justify-end mx-auto">
                    {{ Form::submit('اضافه کردن کتاب', ['class' => 'text-white bg-green-500 hover:bg-green-600 rounded-lg py-2 px-3 mx-2']) }}
                    <a href="#" class="text-white bg-silver-500 hover:bg-silver-600 rounded-lg py-2 px-3">انصراف</a>
                </div>
                {!! Form::close() !!}
              </div>
            <!-- End of Add book form -->


            







        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="hidden sm:flex flex-col sm:w-1/3 p-3">


            <image-input></image-input>

            <p class="mt-1 text-silver-700">عکسی که از کتاب بارگزاری می‌کنید باید در اندازه ۵۰۰ در ۲۰۰ و دارای رزولوشن ۷۲ باشد.</p>



        </div>
        <!-- End of sidebar -->
    </div>
@endsection
