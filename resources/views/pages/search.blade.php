@extends('layouts.app')

@section('content')
<div class="container">


            <!-- Right side -->
            <div class="flex flex-col sm:flex-row w-full">
                <div class="w-full sm:w-2/3 lg:w-3/4 p-2">
        
                    <div class="flex items-center my-4 pb-2">
                        <h1 class="text-2xl">جستجو </h1>
                    </div>

                    <div class="py-8">
                        <div class="bg-white flex items-center rounded-full shadow-xl">
                          <input value="{{ $term or '' }}" class="rounded-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="جستجو">
                          
                          <div class="">
                            <button class="bg-brown-500 text-white rounded-full p-4 hover:bg-brown-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                                <i class="fas fa-search text-base"></i>
                            </button>
                            </div>
                          </div>
                        </div>
                        <div class="bg-white flex items-center shadow-xl" id="tabs-id">
                            <div class="w-full">
                              <ul class="flex mb-0 list-none flex-wrap pt-3 flex-row">
                                <li class="">
                                  <a href="#" class="py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 font-medium border-blue-500" onclick="changeAtiveTab(event,'tab-books')">
                                    کتاب‌ها
                                  </a>
                                </li>
                                <li class="">
                                  <a href="#" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none" onclick="changeAtiveTab(event,'tab-authors')">
                                    <i class="fas fa-cog text-base mr-1"></i>  نویسندگان
                                  </a>
                                </li>
                                <li class="">
                                  <a href="#" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none" onclick="changeAtiveTab(event,'tab-publishers')">
                                    <i class="fas fa-briefcase text-base mr-1"></i>  ناشران
                                  </a>
                                </li>
                                <li class="">
                                    <a href="#" class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none" onclick="changeAtiveTab(event,'tab-users')">
                                      <i class="fas fa-briefcase text-base mr-1"></i>  کاربران
                                    </a>
                                  </li>
                              </ul>
                              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 rounded">
                                <div class="px-4 py-5 flex-auto">
                                  <div class="tab-content tab-space">
                                    <div class="block" id="tab-books">
                                        @forelse ($books as $book)
                                        <div class="flex flex-row mb-3">
                                            <div class="text-silver-700 text-center m-2">
                                                <div class="relative aspect-ratio-book w-16">
                                                    <img src="{{ asset($book->cover) }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                                </div>
                                            </div>
                                            <div class="flex flex-col text-silver-700 text-center m-2 justify-between">
                                                <div class="flex justify-between">
                                                    <p class="text-brown-500">{{ $book->title }}</p>
                                                </div>
                                                <div>
                                                    <h6>اریک فون دانیکن</h6>
                                                </div>
                                                <div>
                                                    @include('partials.rated', ['rating' => 4])
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <h5 class="text-xl">کتابی با این عبارت یافت نشد</h5>
                                        @endforelse
                                    
                                    </div>
                                    <div class="hidden" id="tab-authors">
                                        @forelse ($authors as $author)
                                        <div class="flex flex-row mb-4">
                                            <div class="text-silver-700 text-center m-2">
                                                <div class="relative aspect-ratio-book w-16">
                                                    <img src="{{ asset($author->avatar) }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                                </div>
                                            </div>
                                            <div class="flex flex-col text-silver-700 text-right m-2 justify-between">
                                                <div class="flex justify-between"> 
                                                    <p class="text-brown-500">{{ $author->fullName }}</p>
                                                </div>
                                                <div>
                                                    <h6>تهران، ایران</h6>
                                                </div>
                                                <div>
                                                    <h6>۲ کتاب</h6>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <h5 class="text-xl">نویسنده‌ای با این عبارت یافت نشد</h5>
                                        @endforelse
                                    </div>
                                    <div class="hidden" id="tab-publishers">
                                        <div class="flex flex-row mb-4">
                                            @forelse ($publishers as $publisher)
                                            <div class="flex flex-col text-silver-700 text-right m-2 justify-between">
                                                <div class="flex justify-between"> 
                                                    <p class="text-brown-500">{{ $publisher->title }}</p>
                                                </div>
                                                <div>
                                                    <h6>تهران، ایران</h6>
                                                </div>
                                                <div>
                                                    <h6>۲ کتاب</h6>
                                                </div>
                                            </div>
                                            @empty
                                            <h5 class="text-xl">ناشری با این عبارت یافت نشد</h5>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="hidden" id="tab-users">
                                        @forelse ($users as $user)
                                        <div class="flex flex-row mb-3">
                                            <div class="text-silver-700 text-center m-2">
                                                <div class="relative aspect-ratio-book w-16">
                                                    <img src="{{ asset($user->avatar) }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                                </div>
                                            </div>
                                            <div class="flex flex-col text-silver-700 text-right m-2 justify-between">
                                                <div class="flex justify-between">
                                                    <p class="text-brown-500">{{ $user->name }}</p>
                                                </div>
                                                <div>
                                                    <h6>تهران، ایران</h6>
                                                </div>
                                                <div>
                                                    <h6>۱۱ دوست</h6>
                                                </div>
                                                <div>
                                                    <h6>۲ کتاب</h6>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <h5 class="text-xl">کاربری با این عبارت یافت نشد</h5>
                                        @endforelse
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                </div>
                <!-- End of right side -->
        
                <!-- Sidebar -->
                <div class="w-full sm:w-2/5 lg:w-1/3 p-2">
                    <div>
                        <div class="text-center mb-4 pb-2 text-sm">
                            <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-silver-200">
                                
                                <div class="flex flex-row justify-between w-full mb-4">
                                        <a href="#"> تست</a>
                                </div>        
                            </div>
                        </div>
                    </div>
        
        
                </div>
                <!-- End of sidebar -->
            </div>


</div>


@endsection
