

            {{-- added book card --}}
            <div class="flex flex-col justify-start text-sm sm:text-base mb-5 w-full">
                <div class="bg-white rounded-xl border p-4">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

                        <div class="flex flex-col mr-2 mr-0 sm:mr-2 w-full">
                            <div class="flex flex-wrap justify-between">
                                <h3>{{ $user->name }}، <span class="font-bold">{{ $activity->subject->title }}</span>  را به کیوسک اضافه کرد </h3>
                                <h6 class="text-silver-600">{{ $activity->subject->created_at->diffForHumans() }}</h6>
                            </div>
                        
                            <div class="flex flex-row">
                                <div class="text-silver-700 text-center m-2">
                                    <div class="relative aspect-ratio-book w-24">
                                        <img src="{{ asset($activity->subject->image_src ? $activity->subject->image_src : 'images/books/placeholder.png') }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                                    </div>
                                </div>
                                <div class="flex flex-col text-silver-700 text-center m-2 justify-between">
                                    <div class="flex justify-between">
                                        <p class="text-brown">{{ $activity->subject->title }}</p>
                                        <p>{{ $activity->subject->reviews()->count() }} نقد</p>
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

