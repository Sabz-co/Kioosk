@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="w-full sm:w-2/3 lg:w-3/4 p-2">
            <h1 class="text-xl mb-2">از کتاب‌هایی که شما مطالعه می‌کنید:</h1>
            <!-- Fellow readers -->
            <div class="flex bg-silver-200 flex-col md:flex-row rounded-lg text-sm md:text-base">
                <div class="mx-auto text-silver-700 text-center px-4 py-2 m-2 w-2/6 md:w-1/4 lg:w-1/5">
                    <div class="relative aspect-ratio-book w-full">
                        <img src="{{ asset('images/books/13.jpg') }}" alt="" class="absolute h-full object-cover rounded-xl group-hover:shadow-lg">
                    </div>
                </div>
                <div class="flex flex-col flex-1 text-center p-4 m-2 items-center justify-between">
                    <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-right">
                            <h4 class="text-brown font-bold text-lg">ملت عشق 



  <!-- Rating Stars Box -->
  <div class='rating-stars text-right'>
    <ul id='stars' class="stars" data-rating="4" data-test='John'>
      <li class='star' title='خوب نبود' data-value='1'  data-source-type="book" data-source-id="3" data-source-slug="مارکتینگ-این-است">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='بد نبود' data-value='2'  data-source-type="book" data-source-id="3" data-source-slug="مارکتینگ-این-است">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='خوب بود' data-value='3'  data-source-type="book" data-source-id="3" data-source-slug="مارکتینگ-این-است">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='خیلی خوب بود' data-value='4'  data-source-type="book" data-source-id="3" data-source-slug="مارکتینگ-این-است">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='عالی بود' data-value='5'  data-source-type="book" data-source-id="3" data-source-slug="مارکتینگ-این-است">
        <i class='fa fa-star fa-fw'></i>
      </li>
    </ul>

    <ul id='stars' class="stars" data-rating="2">
        <li class='star' title='خوب نبود' data-value='1'  data-source-type="book" data-source-id="5" data-source-slug="بازیکن مخفی">
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='بد نبود' data-value='2'  data-source-type="book" data-source-id="5" data-source-slug="بازیکن مخفی">
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='خوب بود' data-value='3'  data-source-type="book" data-source-id="5" data-source-slug="بازیکن مخفی">
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='خیلی خوب بود' data-value='4'  data-source-type="book" data-source-id="5" data-source-slug="بازیکن مخفی">
          <i class='fa fa-star fa-fw'></i>
        </li>
        <li class='star' title='عالی بود' data-value='5'  data-source-type="book" data-source-id="5" data-source-slug="بازیکن مخفی">
          <i class='fa fa-star fa-fw'></i>
        </li>
      </ul>
  </div>
  
                                {{-- <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="fas fa-star text-yellow-500"></i>
                                <i class="far fa-star text-yellow-500"></i> --}}
                            
                            </h4>
                            <p class="text-sm text-center sm:text-right">الیف شافتاک</p>
                        </div>
                        <div class="bg-white text-black rounded-full py-1 px-2">تاریخ شروع: ۱۲ مرداد ۱۳۹۷</div>
                    </div>

                    <div class="flex flex-col justify-between w-full items-center my-4">
                        <p class="text-silver-700 mr-auto">۸۰۳ صفحه</p>

                        <div class="progress-bar-wrapper">
                            <div class="progress-bar" style="width: 75%">75%</div>
                          </div>
                    </div>


                    <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-right">
                            <h4 class="">۵۹ نقد دارد</h4>
                        </div>
                        <a href="#" class="hover:shadow sm:mr-auto text-silver-700 hover:text-brown hover:bg-white p-1 rounded-lg sm:ml-4">بروز رسانی مطالعه</a>
                        <a href="#" class="hover:shadow text-silver-700 hover:text-brown hover:bg-white p-1 rounded-lg">دیدن بقیه لیست</a>
                    </div>
                </div>
              </div>
            <!-- End of fellow readers -->
            <hr class="border my-5">

            <div class="flex items-center my-4">
                <h1 class="text-lg">کتاب برتر هفته</h1>
                <a href="#" class="hover:shadow text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-2 hover:shadow ">دیدن همه</a>
            </div>

            <div class="flex flex-wrap justify-start">

                @foreach ($trending as $book)
                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                    <a href="{{ url($book->path) }}">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ !empty($book->image) ? asset('images/books/thumbnail/' . $book->image) : asset('images/books/placeholder.png') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">{{ $book->title }} </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>                    
                @endforeach


                
            </div>



            {{-- Start of Timeline --}}

            <hr class="border my-5">

            <div class="flex items-center my-4">
                <h1 class="text-lg">آخرین اتفاقات</h1>
                <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-2 hover:shadow ">دیدن همه</a>
            </div>


            {{-- added book card --}}
            <div class="flex flex-col justify-start text-sm sm:text-base mb-5">
                <div class="bg-white rounded-xl border p-4">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

                        <div class="flex flex-col mr-0 sm:mr-2 w-full">
                            <div class="flex flex-wrap justify-between">
                                <h3>محمد قمارباز، <span class="font-bold">قلعه حیوانات</span>  را به قفسه‌ی حال مطالعه‌ی خود اضافه کرد </h3>
                                <h6 class="text-silver-600">سه دقیقه پیش</h6>
                            </div>
                            <a href="#" class="text-brown hover:text-yellow-700 my-2">دیدن این قفسه (۴۸ کتاب)</a>

                            <div class="flex flex-row">
                                <div class="text-silver-700 text-center m-2">
                                    <div class="relative aspect-ratio-book w-24">
                                        <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                    </div>
                                </div>
                                <div class="flex flex-col text-silver-700 text-center m-2 justify-between">
                                    <div class="flex justify-between">
                                        <p class="text-brown">قمارباز</p>
                                        <p>۳۴ نقد</p>
                                    </div>
                                    <p>فئودور داستایوفسکی</p>
                                    <a href="#" class="rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-white text-white p-2 shadow hover:shadow-xl">اضافه کردن به قفسه</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of added book --}}





            {{-- added book card --}}
            <div class="flex flex-col justify-start text-sm sm:text-base mb-5">
                <div class="bg-white rounded-xl border p-4">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

                        <div class="flex flex-col mr-2 mr-0 sm:mr-2 w-full">
                            <div class="flex flex-wrap justify-between">
                                <h3>سروناز برای <span class="font-bold">ملت عشق</span>  یک نقد نوشت </h3>
                                <h6 class="text-silver-600">پانزده دقیقه پیش</h6>
                            </div>
                            <a href="#" class="text-brown hover:text-yellow-700 my-2">دیدن این نقد</a>

                            <div class="flex flex-col">
                                <p class="text-silver-600 mb-3">نیروی عقلانی و عشق از مواد متفاوتی ساخته شده اند، نیروی عقلانی انسان ها را سردرگم می کند و هیچ خطری را نمی پذیرد، اما عشق تمام درهم پیچیدگی ها و آشفتگی ها را از بین می برد و خطر هرچیزی را می پذیرد. نیروی عقلانی همیشه محتاط است و نصیحت می کند. «از شور و شعف بیش از حد بر حذر باش»، حال آن که عشق می گوید. «آه مهم نیست! دل به دریا بزن!» نیروی عقلانی به راحتی با شکست مواجه نمی شود. در حالی که عشق می تواند بدون زحمت، خودش را به کلی ویران کند. اما گنج ها در میان ویرانه ها پنهان هستند. یک قلب شکسته، نهانگاه گنج هاست.</p>

                                <div class="flex flex-row text-silver-700 text-center m-2 justify-start">
                                    <div class="ml-4">
                                        <a href="#" class="hover:text-red-500">
                                            <i class="far fa-heart    "></i> ۸۵ 
                                        </a>
                                        
                                    </div>
                                    <div>
                                        <a href="#" class="hover:text-green-500">
                                            <i class="fas fa-reply    "></i> ۶۹ 
                                        </a>
                                        
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of added book --}}




            {{-- Rated book card --}}
            <div class="flex flex-col justify-start text-sm sm:text-base mb-5">
                <div class="bg-white rounded-xl border p-4">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

                        <div class="flex flex-col mr-2 mr-0 sm:mr-2 w-full">
                            <div class="flex flex-wrap justify-between">
                                <h3>سزاریوس به <span class="font-bold">خاطرات یک مغ</span> امتیاز داد</h3>
                                <h6 class="text-silver-600">سه دقیقه پیش</h6>
                            </div>
                            <div class="flex text-yellow-500 my-2 justify-center sm:justify-start">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="flex flex-row">
                                <div class="text-silver-700 text-center m-2">
                                    <div class="relative aspect-ratio-book w-24">
                                        <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                    </div>                                </div>
                                <div class="flex flex-col text-silver-700 text-center m-2 justify-between">
                                    <div class="flex justify-between">
                                        <p class="text-brown">قمارباز</p>
                                        <p>۳۴ نقد</p>
                                    </div>
                                    <p>فئودور داستایوفسکی</p>
                                    <a href="#" class="rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-white text-white p-2 shadow hover:shadow-xl">اضافه کردن به قفسه</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of rated book --}}





            <hr class="border my-5">

            <div class="flex items-center my-4">
                <h1 class="text-lg">نویسنده‌های برتر</h1>
                <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-2 hover:shadow ">دیدن همه</a>
            </div>

            <div class="flex flex-wrap">
                <div class=" text-center p-3 w-1/2 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-20 h-20 rounded-full mx-auto -mb-8  border-4  border-silver-200" alt="">
                    <div class="bg-silver-200 rounded-xl p-2 pt-8">
                        <div class="text-center text-black my-3">
                            <p>امیرمسعود مهرابیان</p>
                            <p>۵۹ کتاب</p>
                        </div>
                        <h6 class="text-brown text-right text-sm">گذشت در گذر زمان* ملکه مورچه‌ها و ۹ کتاب دیگر ...</h6>
                    </div> 
                    <div class="flex my-1">
                        <a href="#" class="mx-auto w-full sm:w-5/6 rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-silver-100 text-white py-1 px-2 shadow hover:shadow-xl">مشاهده پروفایل</a>
                    </div>
                </div>

                <div class=" text-center p-3 w-1/2 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-20 h-20 rounded-full mx-auto -mb-8  border-4  border-silver-200" alt="">
                    <div class="bg-silver-200 rounded-xl p-2 pt-8">
                        <div class="text-center text-black my-3">
                            <p>امیرمسعود مهرابیان</p>
                            <p>۵۹ کتاب</p>
                        </div>
                        <h6 class="text-brown text-right text-sm">گذشت در گذر زمان* ملکه مورچه‌ها و ۹ کتاب دیگر ...</h6>
                    </div> 
                    <div class="flex my-1">
                        <a href="#" class="mx-auto w-full sm:w-5/6 rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-silver-100 text-white py-1 px-2 shadow hover:shadow-xl">مشاهده پروفایل</a>
                    </div>
                </div>

                <div class=" text-center p-3 w-1/2 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-20 h-20 rounded-full mx-auto -mb-8  border-4  border-silver-200" alt="">
                    <div class="bg-silver-200 rounded-xl p-2 pt-8">
                        <div class="text-center text-black my-3">
                            <p>امیرمسعود مهرابیان</p>
                            <p>۵۹ کتاب</p>
                        </div>
                        <h6 class="text-brown text-right text-sm">گذشت در گذر زمان* ملکه مورچه‌ها و ۹ کتاب دیگر ...</h6>
                    </div> 
                    <div class="flex my-1">
                        <a href="#" class="mx-auto w-full sm:w-5/6 rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-silver-100 text-white py-1 px-2 shadow hover:shadow-xl">مشاهده پروفایل</a>
                    </div>
                </div>

                <div class=" text-center p-3 w-1/2 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-20 h-20 rounded-full mx-auto -mb-8  border-4  border-silver-200" alt="">
                    <div class="bg-silver-200 rounded-xl p-2 pt-8">
                        <div class="text-center text-black my-3">
                            <p>امیرمسعود مهرابیان</p>
                            <p>۵۹ کتاب</p>
                        </div>
                        <h6 class="text-brown text-right text-sm">گذشت در گذر زمان* ملکه مورچه‌ها و ۹ کتاب دیگر ...</h6>
                    </div> 
                    <div class="flex my-1">
                        <a href="#" class="mx-auto w-full sm:w-5/6 rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-silver-100 text-white py-1 px-2 shadow hover:shadow-xl">مشاهده پروفایل</a>
                    </div>
                </div>









              </div>


        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="hidden sm:block sm:w-1/3 lg:w-1/4 p-2 text-xs md:text-sm lg:text-base">
            <div>
                <div class="text-center mb-4 pb-4">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full -mr-4" alt="">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full -mr-4" alt="">
                    </div>
                    <h6 class="my-2 text-sm">سورنا و سه نفر دیگر در حال مطالعه‌ی ملت عشق هستند.</h6>

                    <a href="#" class="mx-auto w-full sm:w-5/6 rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white py-1 px-2 lg:px-6 shadow hover:shadow-xl">دیدن تمام هم‌خوان‌ها</a>
                </div>

                <div class="sticky top-0 bg-white">
                    <div class="border-b flex mb-1 pb-2">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="fas fa-check"></i>
                            <h2 class="mr-1">آخرین خوانده شده‌ها</h2>
                        </div>
                        <a href="#" class="mr-auto text-brown hover:bg-silver-200 rounded-full px-2 hover:text-black hover:shadow ">دیدن همه</a>
    
                    </div>
    
                    <div class="flex flex-row mb-6">
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/18.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/19.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/20.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                    </div>
    

                    <div class="border-b flex mb-1 pb-2">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="fas fa-book"></i>
                            <h2 class="mr-1">آخرین در حال خواندن</h2>
                        </div>
                        <a href="#" class="mr-auto text-brown hover:bg-silver-200 rounded-full px-2 hover:text-black hover:shadow ">دیدن همه</a>
    
                    </div>
    
                    <div class="flex flex-row mb-6">
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/21.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/22.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/23.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                    </div>
    
                    <div class="border-b flex mb-1 pb-2">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="fas fa-star"></i>
                            <h2 class="mr-1">آخرین نشان شده‌ها</h2>
                        </div>
                        <a href="#" class="mr-auto text-brown hover:bg-silver-200 rounded-full px-2 hover:text-black hover:shadow ">دیدن همه</a>
    
                    </div>
    
                    <div class="flex flex-row mb-6">
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/24.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/25.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset('images/books/26.jpg') }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="border-b flex mb-1 pb-2 hidden xl:flex">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="far fa-user"></i>
                            <h2 class="mr-1">شاید بشناسید</h2>
                        </div>
                        <a href="#" class="mr-auto text-brown hover:bg-silver-200 rounded-full px-2 hover:text-black hover:shadow ">دیدن همه</a>
    
                    </div>
    
                    <div class="flex flex-col hidden xl:block">
                        <div class="flex flex-row items-center mb-4">
                            <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
    
                            <div class="mr-2">
                                <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                            </div>
                            <a href="#" class="mr-auto  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white py-1 px-2  shadow hover:shadow-xl">دنبال کردن</a>
                        </div>
    
                        <div class="flex flex-row items-center mb-4">
                            <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
    
                            <div class="mr-2">
                                <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                            </div>
                            <a href="#" class="mr-auto  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white py-1 px-2  shadow hover:shadow-xl">دنبال کردن</a>
                        </div>
    
                        <div class="flex flex-row items-center mb-4">
                            <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
    
                            <div class="mr-2">
                                <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                            </div>
                            <a href="#" class="mr-auto  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white py-1 px-2  shadow hover:shadow-xl">دنبال کردن</a>
                        </div>
    
    
                    </div>
                    {{-- End of sticly --}}
                </div>


            </div>


        </div>
        <!-- End of sidebar -->
@endsection
