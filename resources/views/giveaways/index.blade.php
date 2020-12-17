@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="flex flex-col sm:flex-row w-full">

        <div class="flex flex-col  sm:w-3/5 lg:w-2/3 p-2">
        {{-- Start of genre --}}

        <div class="w-full">
            <div class="flex flex-col items-start my-4 border-b pb-2">
                <h1 class="text-3xl">هدایا</h1>
                <h4>
                    جزو اولین خواننده‌های کتاب‌ها باشید. ناشران و نویسندگان کتاب‌هایشان را گاهاً حتی پیش از نشر برای اهدا اینجا قرار می‌دهند و کاربران می‌توانند برای برنده شدن اسم بنویسند. در پایان مهلت اهدا برندگان به صورت تصادفی انتخاب خواهند شد.
                </h4>
            </div>

            <div class="flex flex-wrap justify-start">
                @foreach ($giveaways as $giveaway)
                    <div class="flex flex-col md:flex-row border-b mb-4 w-full">
                        <div class="w-1/3 sm:w-1/5 md:w-1/6 p-1 mx-auto">
                            <div class="relative aspect-ratio-book">
                                <a href="{{ route('book.show', $giveaway->book->slug) }}">
                                    <img src="{{ asset($giveaway->book->cover) }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                </a>
                            </div>
                        </div>
                        <div class=" md:w-3/6 p-1 flex flex-col">
                            <a href="{{ route('book.show', $giveaway->book->slug) }}" class="hover:underline text-xl font-semibold">{{ $giveaway->book->title }}</a>
                            @if (!empty($giveaway->book->author->first()))
                                <a href="{{ route('author.show', $giveaway->book->author->first()->slug) }}" class="hover:underline">{{ $giveaway->book->author->first()->fullName }}</a>
                            @endif

                            <p>{{ $giveaway->book->description }}</p>
                        </div>

                        <div class="flex flex-col-reverse md:flex-col md:w-2/6 p-1">
                            <div class="mt-2 md:mt-0 md:mb-2 md:pb-2 flex">
                                <a href="#" class=" flex-none rounded-lg hover:bg-brown-500 border hover:border-transparent text-brown-500 border-brown-500 bg-silver-100 hover:text-white py-1 px-2  shadow hover:shadow-xl">ورود به رای‌گیری</a>

                            </div>
                            <h5 class="font-semibold">فرمت کتاب: <span class="font-normal">کاغذی</span></h5>
                            <h5 class="font-semibold">پایان زمان: <span class="font-normal">کاغذی</span></h5>
                            <h5 class="font-semibold">دسترسی: <span class="font-normal">کاغذی</span></h5>
                            <h5 class="font-semibold">تاریخ اهدا: <span class="font-normal">۱۸ شهریور</span></h5>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    
    </div>
        
        <!-- End of right side -->

        <!-- Sidebar -->

        <div class="w-full sm:w-2/5 lg:w-1/3 p-2">
            <div>
                <div class="text-center mb-4 pb-2 text-sm">
                    <div class="flex flex-col items-start justify-center p-3 rounded-xl bg-silver-200">
                        <h3 class="text-lg">بر اساس ژانر</h3>
                    </div>

                </div>
            </div>


        </div>
        <!-- End of sidebar -->
    </div>
@endsection
