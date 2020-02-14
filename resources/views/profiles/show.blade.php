@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="flex flex-col sm:flex-row w-full">
        <div class="w-full sm:w-2/3 lg:w-3/4 p-2">

            <div class="flex items-center my-4 border-b pb-2">
                <h1 class="text-lg">کتاب‌های افزوده شده توسط {{ $user->name }}</h1>
                <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
            </div>

            <div class="flex flex-wrap justify-start">
                @foreach ($user->books() as $added_book)
                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                    <a href="">
                        <img src="{{ asset('images/books/2.jpg') }}" alt="" class="w-full lg:h-56 object-cover rounded-xl group-hover:shadow-lg">
                        <h4 class="text-brown font-bold text-base lg:text-lg xl:text-xl mt-2">ملت عشق </h4>
                        <p class="text-sm">الیف شافتاک</p>
                    </a>
                </div>                    
                @endforeach
            </div>

            <div class="flex items-center my-4 border-b pb-2">
                <h1 class="text-lg">فعالیت‌های {{ $user->name }}</h1>
                <a href="#" class="text-brown rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
            </div>

            <div class="flex flex-col items-center my-4 border-b pb-2">
                @foreach ($activities as $activity)
                    @include("profiles.activities.{$activity->type}")
                @endforeach
            </div>


            <div class="font-sans">
                <div class="bg-white  mx-auto my-8 border border-grey-light rounded-lg overflow-hidden">
                  <div class="flex flex-wrap no-underline text-black h-64 overflow-hidden">
                    <div class="w-3/4 h-full">
                      <img class="block pr-px w-full h-full" src="https://pbs.twimg.com/media/DRKabGUW0AA4yzH.jpg:large" alt=""
                        style="object-fit: cover;">
                    </div>
                    <div class="w-1/4 h-full">
                      <div class="bg-grey-darkest mb-px h-32">
                        <img class="block w-full h-full" src="https://pbs.twimg.com/media/DRKabdIX0AAN-Pa.jpg" alt=""
                        style="object-fit: cover;">
                      </div>
                      <div class="bg-grey-darkest h-32">
                        <img class="block w-full h-full" src="https://pbs.twimg.com/media/DRKacEZWkAAg0-l.jpg" alt=""
                        style="object-fit: cover;">
                      </div>
                    </div>
                  </div>
                  <div class="flex pt-4 px-4">
                    <div class="w-16 mr-2">
                      <img class="p-2 rounded rounded-full"
                        src="https://scontent-frt3-1.cdninstagram.com/t51.2885-19/s150x150/22638783_1031626323645160_6412994168498421760_n.jpg">
                    </div>
                    <div class="px-2 pt-2 flex-grow">
                      <header>
                        <a href="#" class="text-black no-underline">
                          <span class="font-medium">Rathes Sachchithananthan</span>
                          <span class="font-normal text-grey">@rathes</span>
                        </a>
                        <div class="text-xs text-grey flex items-center my-1">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-4 w-4 mr-1 feather feather-calendar">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                          </svg>
                          <span>2 hours ago</span>
                        </div>
                      </header>
                      <article class="py-4 text-grey-darkest">
                        Lorem ipsum sit dolor et amet et cetera og quandum morales.
                      </article>
                      <footer class="border-t border-grey-lighter text-sm flex">
                        <a href="#" class="block no-underline text-blue flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-thumbs-up h-6 w-6 mr-1 stroke-current">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                          </svg>
                          <span>Liked</span>
                        </a>
                        <a href="#" class="block no-underline text-black flex px-4 py-2 items-center hover:bg-grey-lighter">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle h-6 w-6 mr-1">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                          </svg>
                          <span>Reply</span>
                        </a>
                      </footer>
                    </div>
                  </div>
                </div>

              </div>

              


        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="h-16  w-full sm:w-1/3 lg:w-1/4 p-2">
            <div>
                <div class="text-center mb-4 pb-2">
                    <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-silver-200">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full" alt="">
                        <h2 class="font-bold text-black my-2">الیف شافتاک</h2>
                        <h3 class="mb-2">تهران، ایران</h3>

                        <a href="#" class="my-2 mx-auto w-full sm:w-5/6 rounded-lg bg-brown border border-transparent hover:text-brown hover:border-brown hover:bg-silver-100 text-white py-1 px-2 lg:px-6">دنبال کردن</a>
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
