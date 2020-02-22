@extends('layouts.app')

@section('content')
<div class="flex-reserse sm:flex">
        <!-- Right side -->
        <div class="w-full sm:w-2/3 lg:w-3/4 p-3">
            <!-- Book Info -->
            <div class="flex flex-col md:flex-row text-sm md:text-base border-b">
                <div class="text-silver-700 text-center sm:pl-4 py-2 my-2">
                    <img src="{{ $book->image_src ?  asset('images/books/extensive/'. $book->image_src) : asset('images/books/placeholder.png') }}" alt="" class="w-32 lg:w-40 h-40 lg:h-56 object-cover rounded-xl mx-auto">
                    <div class="mt-4">
                        <a href="#" class="w-full h-full rounded-lg p-2 bg-green-500 hover:bg-green-600 text-white hover:shadow-lg mt-4">افزودن به لیست</a>
                    </div>
                </div>
                <div class="flex flex-col flex-1 text-center py-2 pl-2 sm:pl-0 pr-2 sm:py-4 sm:pr-2 my-2 items-center justify-between">
                    <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-center sm:text-right">
                            <h4 class="text-brown font-bold text-2xl">{{ isset($book) ? $book->title : 'ملت عشق'}}                      
                            </h4>
                            @if (!isset($book))
                            <h4 class="text-brown font-bold text-xl">ُThe Love Nation                      
                            </h4>                                
                            @endif

                        </div>
                        <div class="views text-xs text-gray-400 mr-auto ml-2">
                            {{ $book->visits() }} بازدید
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="far fa-star text-yellow-500"></i>    
                        </div>
                    </div>

                    <div class="flex flex-row justify-between w-full items-center my-4 border-t border-b py-2 border-silver-400">
                        @if($book->author)
                        <div>
                            <h6>{{ $book->author->first_name . ' ' . $book->author->last_name}}</h6>

                        </div>
                        @endif

                        <div>
                            <h6>{{ $book->publisher()->exists() ?  $book->publisher->title : 'ناشر نامشخص' }}</h6>
                        </div>

                        <div>
                            <h6>ارسلان فسیحی</h6>
                        </div>
                    </div>

                    <div class="text-black text-justify my-3">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>

                    </div>
                    <div class="mr-auto">
                        <a href="#" class="text-lg text-blue-500 hover:text-blue-600 mr-auto font-bold">اطلاعات بیشتر </a>

                    </div>


                </div>
              </div>
            <!-- End of Book Info -->

            <div class="flex items-center my-4 pb-2 border-b ">
                <h1 class="text-lg text-brown font-bold">نقدهای این کتاب</h1>
                <div class="mr-auto flex items-center ">
                    <span>بر اساس</span>
                    <select name="" id="" class="rounded text-silver-700 bg-silver-100 mr-2">
                        <option value="">جدیدترین</option>
                        <option value="">قدیمی ترین</option>
                    </select>
                </div>
            </div>

            {{-- Review --}}
            {{-- <div class="mb-5 border-b flex flex-col">
                <div class="flex flex-row my-2 justify-start items-center">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full object-cover" alt="">
                    <h2 class="text-silver-600 font-bold text-lg mr-2">محسن رضابالا</h2>
                </div>

                <div class="flex flex-row my-2 justify-between items-center">
                    <h2 class="text-silver-800 font-bold text-xl mr-2">کتاب خوبی بود اما ...</h2>
                    <span class="text-silver-600">۳ روز پیش</span>
                    
                </div>

                <div class="flex flex-row my-2 justify-start text-justify">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        <a href="#" class="text-blue-400 hover:text-blue-500">مشاهده‌ی این نقد ...</a> 
                    </p>
                    
                </div>

                <div class="flex flex-row my-2 justify-end text-silver-700">
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
            </div> --}}
            {{-- End of review --}}



            @foreach ($book->reviews as $review)
            {{-- Review --}}
            <div class="mb-5 border-b flex flex-col">
                <div class="flex flex-row my-2 justify-start items-center">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full object-cover" alt="">
                    <h2 class="text-silver-600 font-bold text-lg mr-2">{{ $review->owner->name }}</h2>
                </div>

                {{-- <div class="flex flex-row my-2 justify-between items-center">
                    <h2 class="text-silver-800 font-bold text-xl mr-2">کتاب خوبی بود اما ...</h2>
                    <span class="text-silver-600">۳ روز پیش</span>
                    
                </div> --}}

                <div class="flex flex-row my-2 justify-start text-justify">
                    <p>
                        {!! $review->body !!}
                        <a href="#" class="text-blue-400 hover:text-blue-500">مشاهده‌ی این نقد ...</a> 
                    </p>
                    
                </div>

                <div class="flex flex-row my-2 justify-end text-silver-700">
                    <div class="ml-4">
                        <form action="/reviews/{{ $review->id }}/favorites" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="hover:text-red-500 cursor-pointer focus:outline-none" {{ $review->isFavorited() ? "disabled" : "" }}>
                            <i class="far fa-heart    "></i>  {{ $review->favorites()->count() }}
                        </button>
                        </form>
                        
                    </div>
                    <div>
                        <a href="#" class="hover:text-green-500">
                            <i class="fas fa-reply    "></i> ۶۹ 
                        </a>
                        
                    </div>
                </div>
            </div>
            {{-- End of review --}}                
            @endforeach



            <div class="flex flex-col">
                <div>
                    <a href="#" class="flex w-full text-black p-2 rounded-lg bg-silver-200 hover:bg-silver-300 items-center justify-center hover:shadow">نقدهای بیشتر</a>
                </div>
                {!! Form::open(['route' => 'review.store']) !!}
                {!! Form::token() !!}
                <div class="my-3 flex flex-row  items-start">
                    <img src="{{ asset('images/avatar.jpg') }}" class="hidden sm:flex w-16 h-16 rounded-full object-cover ml-2" alt="">
                    {!! Form::hidden('book_id', $book->id) !!}
                    <textarea class=" w-full bg-white focus:outline-none border border-silver-300 rounded-lg py-2 px-4 appearance-none leading-normal focus:shadow"  id="" cols="30" rows="10" name="body"></textarea>
                </div>

                <div class="flex justify-end">
                    {!! Form::submit('ثبت نقد', ['class' => 'mr-auto py-2 px-3 text-white bg-green-500 hover:bg-green-600 rounded-lg hover:shadow-lg']) !!}
                </div>

                {!! Form::close() !!}

            </div>
            







        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="flex sm:w-1/3 lg:w-1/4 p-3">
            <div class="">
                <div class="sticky top-0 bg-white">
                    <div class="border-b flex mb-1 py-2">
                        <div class="text-silver-800 flex items-baseline">
    
                            <h2 class="mr-1 font-bold">از همین نویسنده</h2>
                        </div>
                        <a href="#" class="mr-auto text-brown hover:bg-silver-200 rounded-full px-2 hover:text-black">دیدن همه</a>
    
                    </div>
    
                    <div class="flex flex-row mb-6 border-b mb-3 pb-3">
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <img src="{{ asset('images/books/16.jpg') }}" class="rounded-lg hover:grow" alt="">
                            </a>
                        </div>
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <img src="{{ asset('images/books/17.jpg') }}" class="rounded-lg hover:grow" alt="">
                            </a>
                        </div>
                        <div class="w-1/3 p-1">
                            <a href="#">
                                <img src="{{ asset('images/books/10.jpg') }}" class="rounded-lg hover:grow" alt="">
                            </a>
                        </div>
                    </div>


                    <div class=" flex mb-1 py-2">
                        <div class="text-silver-800 flex items-baseline ">
    
                            <h2 class="mr-1 font-bold">ژانر</h2>
                        </div>
    
                    </div>
                    <div class="flex flex-wrap mb-4 border-b pb-3 mb-3">
                        <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">علمی</a>
                        <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">تخیلی</a>
                        <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">رمان</a>
                        <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">ادبیات مقاومت</a>
                        <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">جنایی</a>
    
                        <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">داستان عاشقانه</a>
                    </div>
                    


                    {{-- End of sticly --}}
                </div>


            </div>


        </div>
        <!-- End of sidebar -->
    </div>
@endsection
