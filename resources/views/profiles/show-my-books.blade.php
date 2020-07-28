@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="flex flex-col sm:flex-row w-full">
        <div class="w-full sm:w-2/3 lg:w-3/4 p-2">

            <table class="table-auto">
                <thead>
                  <tr>
                    <th class="px-4 py-2">کاور</th>
                    <th class="px-4 py-2">عنوان</th>
                    <th class="px-4 py-2">نویسنده</th>
                    <th class="px-4 py-2">مترجم</th>
                    <th class="px-4 py-2">میانگین امتیاز</th>
                    <th class="px-4 py-2">امتیاز شما</th>
                    <th class="px-4 py-2">قفسه</th>
                    <th class="px-4 py-2">بررسی</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($shelf as $item)
                    <tr>
                        <td class="border px-4 py-2">
                            <img src="{{asset( $item->book->cover)}}" alt="">
                        </td>
                        <td class="border px-4 py-2">{{ $item->book->title }}</td>
                        <td class="border px-4 py-2">
                            @foreach ($item->book->author()->get() as $author)
                            {{ $author->fullName}}</td>

                            @endforeach
                            <td class="border px-4 py-2"></td>

                        <td class="border px-4 py-2">
                            {{ $item->avg('rating') }}
                        </td>
                        <td class="border px-4 py-2">
                            {{ $item->rating }}
                        </td>
                        <td class="border px-4 py-2">
                            {{ $item->shelf }}
                        </td>
                        <td class="border px-4 py-2">
                            {{ $item->review->body }}
                        </td>
                      </tr>                        
                    @endforeach

                </tbody>
              </table>
            

              


        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="h-16  w-full sm:w-1/3 lg:w-1/4 p-2">
            <div>
                <div class="text-center mb-4 pb-2">
                    <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-silver-200">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
                        <h2 class="font-bold text-black my-2">{{ $user->name }}</h2>
                        <h3 class="mb-2">تهران، ایران</h3>
                        @if ($user->id != auth()->id())
                            <subscribe-button :active="{{ json_encode($user->isSubscribedTo) }}"></subscribe-button>
                        @endif
                        {{-- <a href="#" class="my-2 mx-auto w-full sm:w-5/6 rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-silver-100 text-white py-1 px-2 lg:px-6">دنبال کردن</a> --}}
                        <div class="flex flex-row justify-around text-silver-700 w-full  mt-2">
                            <div>
                                <i class="fas fa-book    "></i>
                                ۲۷ دنبال کننده
                            </div>
                            <div>
                                <i class="fas fa-book    "></i>
                                ۹ کتاب
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" mb-4 pb-2 border-b text-silver-800">
                    <div class="flex items-baseline justify-end my-2">
                        <p class="ml-2">www.cheshmehpub.ir</p><i class="fas fa-globe    "></i> 
                    </div>
                    <div class="flex items-baseline justify-end my-2">
                        <p class="ml-2">021-24622890</p><i class="fas fa-phone    "></i> 
                    </div>
                </div>

                <div class="flex flex-wrap mb-4">
                    <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">علمی</a>
                    <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">تخیلی</a>
                    <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">رمان</a>
                    <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">ادبیات مقاومت</a>
                    <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">جنایی</a>

                    <a href="#" class="ml-2  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white px-2 mb-2 text-sm">داستان عاشقانه</a>
                </div>

                <div class="sticky top-0 bg-white">


                    <div class="border-b flex mb-1 pb-2 hidden xl:flex">
                        <div class="text-silver-600 flex items-baseline">
    
                            <i class="far fa-user"></i>
                            <h2 class="mr-1">شاید بشناسید</h2>
                        </div>
                        <a href="#" class="mr-auto text-brown hover:bg-silver-200 rounded-full px-2 hover:text-black">دیدن همه</a>
    
                    </div>
    
                    <div class="flex flex-col hidden xl:block">
                        <div class="flex flex-row items-center mb-4">
                            <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
    
                            <div class="mr-2">
                                <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                            </div>
                            <a href="#" class="mr-auto  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white py-1 px-2">دنبال کردن</a>
                        </div>
    
                        <div class="flex flex-row items-center mb-4">
                            <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
    
                            <div class="mr-2">
                                <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                            </div>
                            <a href="#" class="mr-auto  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white py-1 px-2">دنبال کردن</a>
                        </div>
    
                        <div class="flex flex-row items-center mb-4">
                            <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
    
                            <div class="mr-2">
                                <h6 class="text-black font-bold">حسین مهرنواز</h6>
                                <span class="text-silver-600">۲۳۷ دنبال کننده</span>
                            </div>
                            <a href="#" class="mr-auto  rounded-full hover:bg-brown border hover:border-transparent text-brown border-brown bg-silver-100 hover:text-white py-1 px-2">دنبال کردن</a>
                        </div>
    
    
                    </div>
                </div>


            </div>


        </div>
        <!-- End of sidebar -->
    </div>
@endsection
