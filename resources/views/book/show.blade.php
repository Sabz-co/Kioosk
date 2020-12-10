@extends('layouts.app')

@section('content')
<div class="flex-reserse sm:flex">
        <!-- Right side -->
        <div class="w-full sm:w-2/3 lg:w-3/4 p-3">
            <!-- Book Info -->
            <div class="flex flex-col md:flex-row text-sm md:text-base">
                <div class="text-silver-700 text-center sm:pl-4 py-2 my-2">
                    <img src="{{ $book->thumb ?  asset('images/books/extensive/'. $book->thumb) : asset('images/books/placeholder.png') }}" alt="" class="w-32 lg:w-40 h-40 lg:h-56 object-cover rounded-xl mx-auto">
                    {{-- <div class="mt-4">
                        <a href="#" class="w-full h-full rounded-lg p-2 bg-green-500 hover:bg-green-600 text-white hover:shadow-lg mt-4">افزودن به لیست</a>
                    </div> --}}

                    @include('partials.shelves.list', ['book' => $book, 'list' => $on_list])
                </div>
                <div class="flex flex-col flex-1 text-center py-2 pl-2 sm:pl-0 pr-2 sm:py-4 sm:pr-2 my-2 items-center justify-between">
                    <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-center sm:text-right">
                            <h4 class="text-brown-500 font-bold text-2xl">{{ isset($book) ? $book->title : 'ملت عشق'}}                      
                            </h4>
                            @if (!isset($book))
                            <h4 class="text-brown-500 font-bold text-xl">ُThe Love Nation                      
                            </h4>                                
                            @endif

                        </div>
                        <div class="views text-xs text-gray-400 mr-auto ml-2">
                            {{ $book->visits() }} بازدید
                        </div>
                            @include('partials.rating', ['rating' => $book->reviews()->avg('rating'), 'slug' => $book->slug])
                    </div>

                    <div class="flex flex-row justify-between w-full items-center my-4 border-t border-b py-2 border-silver-400">


                        <div>
                            <h6>{{ $book->publisher()->exists() ?  $book->publisher->title : 'ناشر نامشخص' }}</h6>
                        </div>

                        @if($book->author->first())
                        <div>
                            <h6>{{ $book->author->first()->fullName}}</h6>
                        </div>
                        @endif
                        
                        {{-- <div>
                            @foreach ($book->authors as $author)
                            <a href="{{ route('author.show', $author->slug) }}">{{ $author->fullName }}</a>
                            @endforeach
                            
                        </div> --}}
                    </div>

                    <div class="text-black text-justify my-3">
                        @if ($book->description)
                            {!! $book->description !!}
                            @else
                                <p>هنوز توضیحاتی برای این کتاب ثبت نشده. با کلیک برروی این لینک توضیحات این کتاب را اضافه نموده و به در کامل‌تر شدن اطلاعات این مجموعه همکاری کنید.</p>
                        @endif
                        

                    </div>
                        {{-- <a href="#" class="text-lg text-blue-500 hover:text-blue-600 mr-auto font-bold">اطلاعات بیشتر </a> --}}
                        <div class="flex items-center justify-center w-full mb-6">
                            <div class="flex-col text-right w-full">
                                <div class="toggalable hidden">


                                    @if (!empty($book->publisher) && !empty($book->publish_year))
                                        <p>منتشر شده در سال ۱۳۹۷ توسط <a href="#">نشر چشمه</a></p>
                                            @elseif(!empty($book->publisher))
                                                <p>منتشر شده توسط <a href="#">نشر چشمه</a></p>
                                    @endif
                                <div class="flex flex-col">
                                    <div class="flex flex-row">
                                        <div class="w-1/4 text-brown-600" >
                                            عنوان اصلی
                                        </div>
                                        <div class="flex-1">
                                        {{ $book->title }}
                                        </div>
                                    </div>
                                    @if (!empty($book->isbn))
                                    <div class="flex flex-row">
                                        <div class="w-1/4 text-brown-600" >
                                            شابک
                                        </div>
                                        <div class="flex-1">
                                            {{ $book->isbn }}
                                        </div>
                                    </div>                                        
                                    @endif
                                    @if (!empty($book->page_count))
                                    <div class="flex flex-row">
                                        <div class="w-1/4 text-brown-600" >
                                            تعداد صفحات
                                        </div>
                                        <div class="flex-1 is-persian">
                                            {{ $book->page_count }} صفحه
                                        </div>
                                    </div>                                        
                                    @endif
                                    @if(!empty($book->author))
                                    <div class="flex flex-row">
                                        <div class="w-1/4 text-brown-600" >
                                            نویسنده
                                        </div>
                                        <div class="flex-1">
                                            <ul>
                                                @foreach ($book->authors as $author)
                                                <li>
                                                    <a href="{{ route('author.show', $author->slug) }}">{{ $author->full_name }}</a>
                                                </li>
                                                @endforeach

                                            </ul>

                                        </div>
                                    </div>
                                    @endif
                                    <div class="flex flex-row">
                                        <div class="w-1/4 text-brown-600" >
                                            مترجم
                                        </div>
                                        <div class="flex-1">
                                            <a href="#">ناصر حقیقت‌جو</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <a href="#" class="show-more text-brown-600 hover:text-brown-700 hover:underline">اطلاعات بیشتر...</a>

                            </div>
                            
                            
                          </div>


                </div>
              </div>


              @if($on_list)
              <div class="mb-6">
                <div class="flex items-center my-4 pb-2 border-b ">
                    <h1 class="text-lg text-brown-500 font-bold">پیشرفت خوانش</h1>
                </div>

                <div class="flex flex-col w-full">
                    <div class="flex flex-row w-full">
                        <div class="w-32">
                            نقد بر
                        </div>
                        <div class="">
                            {{ $book->title }}
                        </div>
                    </div>

                    <div class="flex flex-row w-full my-1">
                        <div class="w-32">
                            امتیاز شما
                        </div>
                        <div class="">
                            @include('partials.rating', ['rating' => $on_list->rating, 'slug' => $book->slug])
                        </div>
                    </div>

                    <div class="flex flex-row w-full my-1">
                        <div class="w-32">
                            قفسه
                        </div>
                        <div class="">
                            {{ $on_list->shelfTitle }}
                        </div>
                    </div>

                    <div class="flex flex-row w-full my-1">
                        <div class="w-32">
                            نقد
                        </div>
                        <div class="flex items-center">
                            @if ($on_list->body)
                                {!! $on_list->excerpt !!} <a href="{{ route('review.edit', $on_list->id) }}"  class="text-brown-500 text-lg hover:bg-silver-200 rounded-full px-2 hover:text-black">ویرایش</a>
                                @else
                                <a href="{{ route('review.edit', $on_list->id) }}"  class="text-brown-500 text-lg hover:bg-silver-200 rounded-full px-2 hover:text-black">نقدی بنویسید</a>
                            @endif
                        </div>
                    </div>
                </div>
              </div>



              @endif
            <!-- End of Book Info -->

            <div class="flex items-center my-4 pb-2 border-b mb-6"  id="book-reviews">
                <h1 class="text-lg text-brown-500 font-bold">نقدهای این کتاب</h1>
                <div class="mr-auto flex items-center ">
                    <span>بر اساس</span>
                    <select name="" id="" class="rounded text-silver-700 bg-silver-100 mr-2">
                        <option value="">جدیدترین</option>
                        <option value="">قدیمی ترین</option>
                    </select>
                </div>
            </div>


            @if (Auth::user() && !$on_list)
            <div class="flex flex-row mb-4">
                <div class="text-silver-700 text-center">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full object-cover" alt="">
                </div>
                <div class="flex flex-col text-silver-700 text-center m-2 justify-between">
                    <div class="flex justify-between">
                        <h4 class="text-lg text-black">{{ Auth::user()->name }}، برای کتاب {{ $book->title }} نقدی بنویسید</h4>
                    </div>
                    <div class="flex flex-row">
                        <a href="{{ route('review.create', [$book->slug]) }}" class="text-brown-500 text-lg hover:bg-silver-200 rounded-full px-2 hover:text-black">نوشتن نقد</a>                        
                    </div>

                </div>
              </div>
            @endif


            @foreach ($book->fullReviews as $review)
            {{-- Review --}}
            <div class="mb-5 border-b flex flex-col">
                <div class="flex flex-row my-2 justify-start items-center">
                    <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full object-cover" alt="">
                    <h2 class="text-silver-600 font-bold text-lg mr-2">{{ $review->owner->name }}</h2>
                    @include('partials.rated', ['rating' => $review->rating])
                </div>

                {{-- <div class="flex flex-row my-2 justify-between items-center">
                    <h2 class="text-silver-800 font-bold text-xl mr-2">کتاب خوبی بود اما ...</h2>
                    <span class="text-silver-600">۳ روز پیش</span>
                    
                </div> --}}

                <div class="flex flex-row my-2 justify-start text-justify items-end">
                    <p>
                        {!! $review->body !!}
                        <a href="{{ $review->path() }}" class="text-blue-400 hover:text-blue-500">مشاهده‌ی این نقد ...</a> 
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


            {{-- <div class="trix-content"></div>
            <div class="flex flex-col">
                <div>
                    <a href="#" class="flex w-full text-black p-2 rounded-lg bg-silver-200 hover:bg-silver-300 items-center justify-center hover:shadow">نقدهای بیشتر</a>
                </div>
                {!! Form::open(['route' => 'review.store']) !!}
                {!! Form::token() !!}
                <div class="my-3 flex flex-row  items-start">
                    <img src="{{ asset('images/avatar.jpg') }}" class="hidden sm:flex w-16 h-16 rounded-full object-cover ml-2" alt="">
                    {!! Form::hidden('book_id', $book->id) !!}
                    <div class="trix-editor flex flex-col w-full">
                        <input type="hidden"  name="body" id="body" />
                        <trix input="body" class="trix-content"></trix>
                    </div>
                </div>

                <div class="flex justify-end">
                    {!! Form::submit('ثبت نقد', ['class' => 'mr-auto py-2 px-3 text-white bg-green-500 hover:bg-green-600 rounded-lg hover:shadow-lg']) !!}
                </div>

                {!! Form::close() !!}

            </div> --}}
            







        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="flex sm:w-1/3 lg:w-1/4 p-3">
            <div class="w-full">
                <div class="sticky top-0 bg-white">

                    <div class="w-full flex mb-1 py-2">
                        <div class="text-silver-800 flex items-baseline ">
    
                            <h2 class="mr-1 font-bold">هم‌رسانی</h2>
                        </div>
    
                    </div>

                    {!! 
                        Share::currentPage(null, ['class' => 'fa-2x'], '<ul class=\'border-b pb-3 mb-3 flex flex-row justify-between\'>', '</ul>')
                        ->twitter($book->title .' اثر امیرمسعود مهرابیان. @Kioosk')
                        ->whatsapp()
                        ->reddit()
                        ->telegram()
                         !!}


                    @if (!empty($book->author->first()) && $book->author->first()->books->count() > 3)
                    <div class="border-b flex mb-1 py-2">
                        <div class="text-silver-800 flex items-baseline">
                            <h2 class="mr-1 font-bold">از همین نویسنده</h2>
                        </div>
                        <a href="{{ route('author.show',$book->author->first()->slug ) }}" class="mr-auto text-brown-500 hover:bg-silver-200 rounded-full px-2 hover:text-black">دیدن همه</a>
                    </div>
    
                    <div class="flex flex-row border-b mb-3 pb-3">
                        @foreach ($book->author->first()->books->take(3)->where('book_id', '!=', $book->id) as $item)
                        <div class="w-1/3 p-1">
                            <a href="{{ $item->slug }}">
                                <img src="{{ asset($item->cover) }}" class="rounded-lg hover:grow" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>                        
                    @endif



                    <div class="w-full flex mb-1 py-2">
                        <div class="text-silver-800 flex items-baseline ">
    
                            <h2 class="mr-1 font-bold">ژانر</h2>
                        </div>
    
                    </div>

                    <div class="flex flex-wrap border-b pb-3 mb-3 justify-between">
                        @foreach ($book->tags as $tag)
                        <a href="#" class="rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">{{ $tag->name }}</a>

                        @endforeach
                        {{-- <a href="#" class="rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">تخیلی</a>
                        <a href="#" class="rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">رمان</a>
                        <a href="#" class="rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">ادبیات مقاومت</a>
                        <a href="#" class="rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">جنایی</a>
    
                        <a href="#" class="rounded-full hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white px-2 mb-2 text-sm">داستان عاشقانه</a> --}}
                    </div>
                    


                    {{-- End of sticly --}}
                </div>


            </div>


        </div>
        <!-- End of sidebar -->
    </div>
@endsection
