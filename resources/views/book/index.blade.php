@extends('layouts.app')

@section('content')


        <!-- left side -->
        <div class="flex flex-col sm:flex-row w-full">
                    <!-- Sidebar -->
        <div class="hidden sm:block w-full sm:w-1/4 lg:w-1/5 p-2">
            <div>

                <div class="flex items-center my-4">
                    <h5>ژانرها</h5>
                </div>



                <div class="flex flex-row justify-between mb-4">
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">علمی</a>
                    </div>
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">تخیلی</a>
                    </div>
                </div>

                <div class="flex flex-row justify-between mb-4">
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">قرن دهم</a>
                    </div>
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">قرن یازدهم</a>
                    </div>
                </div>

                <div class="flex flex-row justify-between mb-4">
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">کلاسیک</a>
                    </div>
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">فانتزی</a>
                    </div>
                </div>

                <div class="flex flex-row justify-between mb-4">
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">وحشتناک</a>
                    </div>
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">شعر نو</a>
                    </div>
                </div>

                <div class="flex flex-row justify-between mb-4">
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">مدیریتی</a>
                    </div>
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">شاهنامه‌خوانی</a>
                    </div>
                </div>

                <div class="flex flex-row justify-between mb-4">
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">زبان خارجی</a>
                    </div>
                    <div class="flex-1 text-right">
                        <a href="#" class="mb-2 text-sm text-brown">آموزشی</a>
                    </div>
                </div>




            </div>


        </div>
        <!-- End of sidebar -->
        <div class="w-full sm:w-3/4 lg:w-4/5 p-2">
            <div class="flex items-center my-4 pb-2">
                <h1 class="text-2xl font-bold">کاوش میان کتاب‌ها</h1>
            </div>

            {{-- Start of category --}}
            <div class="category pb-4">
                <div class="flex items-center my-4">
                    <h5>انتشارات جدید در خاطره و زندگی‌نامه</h5>
                    <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
                </div>
    
                <div class="flex flex-wrap justify-start border-b">
                   
                <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                    <a href="#">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ asset('images/books/1.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>
    
    
                <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                    <a href="#">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ asset('images/books/2.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                    <a href="#">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>
                <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                    <a href="#">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                    <a href="#">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ asset('images/books/4.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>

                <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                    <a href="#">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ asset('images/books/5.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>
                </div>
    
            </div>
            {{-- End of category --}}

            {{-- Start of category --}}
            <div class="category pb-4">
                <div class="flex items-center my-4">
                    <h5>انتشارات جدید در خاطره و زندگی‌نامه</h5>
                    <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
                </div>
    
                <div class="flex flex-wrap justify-start border-b">
                   
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/10.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>

                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/11.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>

                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/12.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>

                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/13.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>

                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/14.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>

                    
                </div>
    
            </div>
            {{-- End of category --}}


            {{-- Start of category --}}
            <div class="category pb-4">
                <div class="flex items-center my-4">
                    <h5>این ماه منتشر شده</h5>
                    <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
                </div>
    
                <div class="flex flex-wrap justify-start border-b">
                   
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/19.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/18.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/17.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/16.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/15.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
                </div>
    
            </div>
            {{-- End of category --}}



            


            {{-- Start of category --}}
            <div class="category pb-4">
                <div class="flex items-center my-4">
                    <h5>امسال منتشر شده</h5>
                    <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
                </div>
    
                <div class="flex flex-wrap justify-start border-b">
                   
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/21.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/22.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/23.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/24.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/25.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>


                </div>
    
            </div>
            {{-- End of category --}}



            


            {{-- Start of category --}}
            <div class="category pb-4">
                <div class="flex items-center my-4">
                    <h5>محبوب‌های این هفته</h5>
                    <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
                </div>
    
                <div class="flex flex-wrap justify-start border-b">
                   
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/31.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/32.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/33.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/34.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
    
    
                    <div class="w-1/2 px-2 sm:w-1/3 md:w-1/4 lg:w-1/5 xl:w-1/6  text-right mb-3 hover:grow group ">
                        <a href="#">
                            <div class="relative aspect-ratio-book">
                                <img src="{{ asset('images/books/35.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>
                            <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                            <p class="text-sm">الیف شافتاک</p>
                        </a>
                    </div>
                </div>
    
            </div>
            {{-- End of category --}}



            
        </div>
        <!-- End of left side -->


    </div>
@endsection
