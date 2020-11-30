@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="w-full sm:w-2/3 lg:w-3/4 p-2">
            


            
            <!-- Fellow readers -->
            @if ($currently_reading)
            <h1 class="text-xl mb-2">از کتاب‌هایی که شما مطالعه می‌کنید:</h1>

            <div class="flex bg-silver-200 flex-col md:flex-row rounded-lg text-sm md:text-base">
                <div class="mx-auto text-silver-700 text-center px-4 py-2 m-2 w-2/6 md:w-1/4 lg:w-1/5">
                    <div class="relative aspect-ratio-book w-full">
                        <img src="{{ asset($currently_reading->book->cover) }}" alt="" class="absolute h-full object-cover rounded-xl group-hover:shadow-lg">
                    </div>
                </div>
                <div class="flex flex-col flex-1 text-center p-4 m-2 items-center justify-between">
                    <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-right">
                            <h4 class="text-brown-500 font-bold text-lg">{{ $currently_reading->book->title }}
                                <!-- Rating Stars Box -->
                                @include('partials.rating', ['rating' => $currently_reading->rating, 'slug' => $currently_reading->book->slug])
                                {{-- End of rating stars box --}}
                            </h4>
                            <p class="text-sm text-center sm:text-right">الیف شافتاک</p>
                        </div>
                        <div class="bg-white text-black rounded-full py-1 px-2 is-persian">تاریخ شروع: {{\Morilog\Jalali\Jalalian::fromCarbon($currently_reading->created_at)->format('%d %B  %Y ')}}</div>
                    </div>
                    <div class=" flex flex-col lg:flex-row w-full " data-pages="{{ $currently_reading->book->page_count}}" data-review-id="{{ $currently_reading->id }}">
                        {!! Form::open(['route' => ['review.update', 1],'files' => true, 'class' => 'update-review-form flex w-full justify-between hidden']) !!}
                            {!! Form::token() !!}
                            <div class="flex items-center mb-6">
                                <div class="">
                                  <label class="block text-gray-500 text-right mb-0" for="pages">
                                    خوانده شده
                                  </label>
                                </div>
                                <div class="w-16 mx-2">
                                  <input name="pages" value="{{ $currently_reading->progress }}" class="bg-white appearance-none border-2 border-white rounded w-full p-1 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="pages" type="number" min="1" max="{{ $currently_reading->book->page_count }}">
                                </div>
                                <span >صفحه از {{ $currently_reading->book->page_count }} صفحه</span>
                              </div>
                              
                              <div class="flex items-center mb-6">
                                <div class="">
                                  <label class="block text-gray-500 text-right ml-2 mb-0" for="shelf">
                                    قفسه
                                  </label>
                                </div>
                                <div class="">
                                    <select name="shelf" class="block appearance-none w-full bg-white border border-white text-gray-700 p-1 rounded leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="grid-state">
                                        <option value="to_read" {{isset($currently_reading) && $currently_reading->shelf == 'to_read' ? 'selected' : '' }}>برای خواندن</option>
                                        <option value="reading" {{isset($currently_reading) && $currently_reading->shelf == 'reading' ? 'selected' : '' }}>در حال خواندن</option>
                                        <option value="read" {{isset($currently_reading) && $currently_reading->shelf == 'read' ? 'selected' : '' }}>خوانده شده</option>
                                      </select>
                                </div>
                              </div>

                        {!! Form::close() !!}
                    </div>

                    <div class="flex flex-col justify-between w-full items-center my-4">
                        <p class="text-silver-700 mr-auto is-persian">{{ $currently_reading->book->page_count }} صفحه</p>

                        <div class="progress-bar-wrapper">
                            <div class="progress-bar" style="width: {{ $currently_reading->percent }}%">{{ $currently_reading->percent }}%</div>
                          </div>
                    </div>


                    <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-right">
                            <h4 class=" is-persian">{{ $currently_reading->book->reviews()->count() }} نقد دارد</h4>
                        </div>
                        <a href="#" class="update-review hover:shadow sm:mr-auto text-silver-700 hover:text-brown-500 hover:bg-white p-1 rounded-lg sm:ml-4">بروز رسانی مطالعه</a>
                        <a href="#" class="save-review hover:shadow sm:mr-auto text-silver-700 hover:text-brown-500 hover:bg-white p-1 rounded-lg sm:ml-4 hidden">ذخیره</a>
                        <a href="#" class="hover:shadow text-silver-700 hover:text-brown-500 hover:bg-white p-1 rounded-lg">دیدن بقیه لیست</a>

                    </div>
                </div>
          </div>                
            
            @endif
            <!-- End of fellow readers -->
            <hr class="border my-5">
            <div class="flex items-center my-4">
                <h1 class="text-lg">کتاب برتر هفته</h1>
                <a href="#" class="text-brown-500 rounded-full hover:bg-silver-200 hover:text-black px-2 mr-2 hover:shadow ">دیدن همه</a>
            </div>

            <div class="flex flex-wrap justify-start">
                @foreach ($trending as $book)
                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                    <a href="{{ url($book->path) }}">
                        <div class="relative aspect-ratio-book">
                            <img src="{{ !empty($book->image) ? asset('images/books/thumbnail/' . $book->image) : asset('images/books/placeholder.png') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                        </div>
                        <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">{{ $book->title }} </h4>

                    </a>
                </div>                    
                @endforeach
            </div>


            {{-- Start of Timeline --}}

            <hr class="border my-5">

            <div class="flex items-center my-4">
                <h1 class="text-lg">آخرین اتفاقات</h1>
                <a href="#" class="text-brown-500 rounded-full hover:bg-silver-200 hover:text-black px-2 mr-2 hover:shadow ">دیدن همه</a>
            </div>

            <div class="flex flex-col items-center my-4 border-b pb-2">
                @foreach ($timeline as $date => $activity)
                    <h3 class="text-lg text-right font-bold ml-auto mb-4 mt-2 border-b is-persian">{{ $date }} </h3>
                    @foreach ($activity as $record)
                        @if (view()->exists("profiles.activities.{$record->type}"))
                            @include("profiles.activities.{$record->type}", ['activity' => $record, 'user' => $record->user])     
                        @endif
                    @endforeach
                @endforeach
            </div>
            {{-- added book card --}}
            {{-- <div class="flex flex-col justify-start text-sm sm:text-base mb-5">
                <div class="bg-white rounded-xl border p-4">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

                        <div class="flex flex-col mr-0 sm:mr-2 w-full">
                            <div class="flex flex-wrap justify-between">
                                <h3>محمد قمارباز، <span class="font-bold">قلعه حیوانات</span>  را به قفسه‌ی حال مطالعه‌ی خود اضافه کرد </h3>
                                <h6 class="text-silver-600">سه دقیقه پیش</h6>
                            </div>
                            <a href="#" class="text-brown-500 hover:text-yellow-700 my-2">دیدن این قفسه (۴۸ کتاب)</a>

                            <div class="flex flex-row">
                                <div class="text-silver-700 text-center m-2">
                                    <div class="relative aspect-ratio-book w-24">
                                        <img src="{{ asset('images/books/3.jpg') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                    </div>
                                </div>
                                <div class="flex flex-col text-silver-700 text-center m-2 justify-between">
                                    <div class="flex justify-between">
                                        <p class="text-brown-500">قمارباز</p>
                                        <p>۳۴ نقد</p>
                                    </div>
                                    <p>فئودور داستایوفسکی</p>
                                    <a href="#" class="rounded-lg bg-brown-500 border border-transparent hover:text-brown-500 hover:border-brown-500 hover:bg-white text-white p-2 shadow hover:shadow-xl">اضافه کردن به قفسه</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- End of added book --}}





            {{-- added book card --}}
            {{-- <div class="flex flex-col justify-start text-sm sm:text-base mb-5">
                <div class="bg-white rounded-xl border p-4">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

                        <div class="flex flex-col mr-2 mr-0 sm:mr-2 w-full">
                            <div class="flex flex-wrap justify-between">
                                <h3>سروناز برای <span class="font-bold">ملت عشق</span>  یک نقد نوشت </h3>
                                <h6 class="text-silver-600">پانزده دقیقه پیش</h6>
                            </div>
                            <a href="#" class="text-brown-500 hover:text-yellow-700 my-2">دیدن این نقد</a>

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
            </div> --}}
            {{-- End of added book --}}




            {{-- Rated book card --}}
            {{-- <div class="flex flex-col justify-start text-sm sm:text-base mb-5">
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
                                        <p class="text-brown-500">قمارباز</p>
                                        <p>۳۴ نقد</p>
                                    </div>
                                    <p>فئودور داستایوفسکی</p>
                                    <a href="#" class="rounded-lg bg-brown-500 border border-transparent hover:text-brown-500 hover:border-brown-500 hover:bg-white text-white p-2 shadow hover:shadow-xl">اضافه کردن به قفسه</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- End of rated book --}}





            <hr class="border my-5">

            <div class="flex items-center my-4">
                <h1 class="text-lg">نویسنده‌های برتر</h1>
                <a href="#" class="text-brown-500 rounded-full hover:bg-silver-200 hover:text-black px-2 mr-2 hover:shadow ">دیدن همه</a>
            </div>

            <div class="flex flex-wrap">
                @foreach ($authors as $author)
                <div class=" text-center p-3 w-1/2 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-20 h-20 rounded-full mx-auto -mb-8  border-4  border-silver-200" alt="">
                    <div class="bg-silver-200 rounded-xl p-2 pt-8">
                        <div class="text-center text-black my-3 is-persian">
                            <p>{{ $author->fullName }}</p>
                            <p>{{ $author->books()->count() }} کتاب</p>
                        </div>
                        <h6 class="text-brown-500 text-right text-sm">گذشت در گذر زمان* ملکه مورچه‌ها و ۹ کتاب دیگر ...</h6>
                    </div> 
                    <div class="flex my-1">
                        <a href="#" class="mx-auto w-full sm:w-5/6 rounded-lg bg-brown-500 border border-transparent hover:text-brown-500 hover:border-brown-500 hover:bg-silver-100 text-white py-1 px-2 shadow hover:shadow-xl">مشاهده پروفایل</a>
                    </div>
                </div>
                @endforeach
              </div>
        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="hidden sm:block sm:w-1/3 lg:w-1/4 p-2 text-xs md:text-sm lg:text-base">
            <div>
                <div class="text-center mb-4 pb-4">
                    <div class="flex items-center justify-center">
                        @foreach ($coreaders->take(3) as $key => $reader)
                        <img src="{{ $reader->owner->avatar }}" class="w-16 h-16 rounded-full {{ $key != 0 ? '-mr-4' : '' }}" alt="">

                        @endforeach
                        {{-- <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full -mr-4" alt=""> --}}
                        {{-- <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full -mr-4" alt=""> --}}
                    </div>
                    <h6 class="my-2 text-sm">{{ count($coreaders) }} نفر در حال مطالعه‌ی {{ $reader->book->title }} هستند.</h6>

                    {{-- <a href="#" class="mx-auto w-full sm:w-5/6 rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white py-1 px-2 lg:px-6 shadow hover:shadow-xl">دیدن تمام هم‌خوان‌ها</a> --}}
                </div>

                <div class="sticky top-0 bg-white">

                    @if (Auth::user()->read_list()->count() > 2)
                    <div class="border-b flex mb-1 pb-2">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="fas fa-check"></i>
                            <h2 class="mr-1">خوانده شده</h2>
                        </div>
                        <a href="{{ route('my-books', Auth::user()->id) }}" class="mr-auto text-brown-500 hover:bg-silver-200 rounded-full px-2 hover:text-black hover:shadow ">دیدن همه</a>
    
                    </div>
    
                    <div class="flex flex-row mb-6">
                        @foreach (Auth::user()->read_list()->take(3)->get() as $readBook)
                        <div class="w-1/3 p-1">
                            <a href="{{ route('book.show', $readBook->book->slug) }}">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset($readBook->book->cover) }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>                        
                    @endif

    
                    @if (Auth::user()->reading_list()->count() > 2)
                    <div class="border-b flex mb-1 pb-2">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="fas fa-book"></i>
                            <h2 class="mr-1">در حال خواندن‌ها</h2>
                        </div>
                        <a href="{{ route('my-books', Auth::user()->id) }}" class="mr-auto text-brown-500 hover:bg-silver-200 rounded-full px-2 hover:text-black hover:shadow ">دیدن همه</a>
                    </div>
    
                    <div class="flex flex-row mb-6"> 
                        @foreach (Auth::user()->reading_list()->take(3)->get() as $readingBook)
                        <div class="w-1/3 p-1">
                            <a href="{{ route('book.show', $readingBook->book->slug) }}">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset($readingBook->book->cover) }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>                        
                    @endif

    
                    <div class="border-b flex mb-1 pb-2">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="fas fa-star"></i>
                            <h2 class="mr-1">نشان شده</h2>
                        </div>
                        <a href="{{ route('my-books', Auth::user()->id) }}" class="mr-auto text-brown-500 hover:bg-silver-200 rounded-full px-2 hover:text-black hover:shadow ">دیدن همه</a>
    
                    </div>
    
                    <div class="flex flex-row mb-6">
                        @foreach (Auth::user()->want_to_read_list()->take(3)->get() as $wantToRead)
                        <div class="w-1/3 p-1">
                            <a href="{{ route('book.show', $wantToRead->book->slug) }}">
                                <div class="relative aspect-ratio-book w-full">
                                    <img src="{{ asset($wantToRead->book->cover) }}" alt="" class="hover:grow absolute w-full h-full object-cover rounded-lg group-hover:shadow-lg">
                                </div>
                            </a>
                        </div>
                        @endforeach
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
                    <div class="border-b mb-1 pb-2 hidden xl:flex">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="far fa-user"></i>
                            <h2 class="mr-1">شاید بشناسید</h2>
                        </div>
                        {{-- <a href="#" class="mr-auto text-brown-500 hover:bg-silver-200 rounded-full px-2 hover:text-black hover:shadow ">دیدن همه</a> --}}
    
                    </div>
    
                    <div class="flex-col hidden xl:block">
                        @foreach ($users as $randomUser)
                        <div class="flex flex-row items-center mb-4">
                            <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
                            <div class="mr-2">
                                <h6 class="text-black font-bold">{{ $randomUser->name }}</h6>
                                <span class="text-silver-600 is-persian">{{ $randomUser->subscriptions()->count() }} دنبال کننده</span>
                            </div>
                            <a href="#" class="mr-auto  rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white py-1 px-2  shadow hover:shadow-xl" id="subscribe-user" data-source-id="{{ $randomUser->id }}">{{ $randomUser->isSubscribedTo ? 'دنبال شده' : 'دنبال کردن' }}</a>
                        </div>                            
                        @endforeach
                    </div>
                    {{-- End of sticly --}}
                </div>


            </div>


        </div>
        <!-- End of sidebar -->
@endsection
