
            {{-- added review card --}}
            <div class="flex flex-col justify-start text-sm sm:text-base mb-5 w-full">
                <div class="bg-white rounded-xl border p-4">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-24 h-24 rounded-full mb-3 sm:mb-0" alt="">

                        <div class="flex flex-col mr-2 mr-0 sm:mr-2 w-full">
                            <div class="flex flex-wrap justify-between">
                                <h3>{{ $user->name }}   یک نظر افزود </h3>
                                
                                <h6 class="text-silver-600">{{ $activity->subject->created_at->diffForHumans() }}</h6>
                            </div>

                            <div class="flex flex-col">
                                <p class="text-silver-600 mb-3">
                                    {{ Strip_tags($activity->subject->body) }}                                    
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
            </div>
            {{-- End of added review --}}
