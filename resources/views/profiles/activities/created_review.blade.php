<div class="flex flex-col justify-start text-sm sm:text-base mb-5 w-full">
    <div class="bg-white rounded-xl border p-4">
        <div class="flex flex-col sm:flex-row items-center sm:items-start">
            <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

            <div class="flex flex-col mr-0 sm:mr-2 w-full">
                <div class="flex flex-wrap justify-between">
                    <h3>{{ $user->name }}، <span class="font-bold">{{ $activity->subject->book->title }}</span>  را به قفسه‌ی {{ $activity->subject->shelfTitle }} خود اضافه کرد </h3>
                    <h6 class="text-silver-600">{{ $activity->subject->created_at->diffForHumans() }}</h6>
                </div>
                @if (!empty($activity->subject->rating))
                @include('partials.rated', ['rating' => $activity->subject->rating])
                @endif
                {{-- <a href="#" class="text-brown-500 hover:text-yellow-700 my-2">دیدن این قفسه (۴۸ کتاب)</a> --}}
                @if (!$activity->subject->body)
                            <div class="flex flex-row">
                                <div class="text-silver-700 text-center m-2">
                                    <div class="relative aspect-ratio-book w-24">
                                        <img src="{{ asset($activity->subject->book->thumb ? 'images/books/thumbnail/'.$activity->subject->book->thumb : 'images/books/placeholder.png') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                    </div>
                                </div>
                                <div class="flex flex-col text-silver-700 text-center m-2 justify-between">
                                    <div class="flex justify-between">
                                        <a href="{{ route('book.show', $activity->subject->book->slug) }}" class="text-brown-500">{{ $activity->subject->book->title }}</a>
                                        <p>{{ $activity->subject->book->reviews()->count() }} نقد</p>
                                    </div>
                                    @if($activity->subject->book->author->first())
                                    <div>
                                        <h6>{{ $activity->subject->book->author->first()->fullName}}</h6>
                                    </div>
                                    @endif
                                    {{-- <a href="#" class="rounded-lg bg-brown-500 border border-transparent hover:text-brown-500 hover:border-brown-500 hover:bg-white text-white p-2 shadow hover:shadow-xl">اضافه کردن به قفسه</a> --}}
                                    @include('partials.shelves.list', ['book' => $activity->subject->book, 'list' => $activity->subject->book->reviews()->where('user_id', Auth::user()->id)->first()])
                                </div>
                              </div>                  
                @else
                <div class="flex flex-col">
                    <p class="text-silver-600 mb-3">
                        {{ Strip_tags($activity->subject->body) }}
                    </p>

                    <div class="flex flex-row text-silver-700 text-center m-2 justify-start">
                        <div class="ml-4">
                            @include('partials.like-button', 
                            ['type' => 'activity',  
                            'id' => $activity->id, 
                            'is_liked' => $activity->isFavorited(), 
                            'likes' => $activity->favorites()->count()])
                            
                        </div>
                    </div>
                  </div>
                @endif

            </div>
        </div>
    </div>
</div>



            {{-- added review card --}}
            {{-- <div class="flex flex-col justify-start text-sm sm:text-base mb-5 w-full">
                <div class="bg-white rounded-xl border p-4">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

                        <div class="flex flex-col mr-0 sm:mr-2 w-full">
                            <div class="flex flex-wrap justify-between">
                                <h3>{{ $user->name }} برای <span class="font-bold">{{ $activity->subject->book->title }}</span>  یک نقد نوشت </h3>
                                <h6 class="text-silver-600">{{ $activity->subject->created_at->diffForHumans() }}</h6>
                            </div>
                            <a href="{{route('review.show', $activity->subject->id)}}" class="text-brown-500 hover:text-yellow-700 my-2">دیدن این نقد</a>

                            <div class="flex flex-col">
                                <p class="text-silver-600 mb-3">
                                    {{ $activity->subject->body }}
                                </p>

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
            {{-- End of added review --}}
