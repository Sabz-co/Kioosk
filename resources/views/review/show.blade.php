@extends('layouts.app')

@section('content')
<div class="flex-reserse sm:flex w-full">
        <!-- Main side -->
        <div class="w-full sm:w-5/6 md:w-4/5 mx-auto p-3">
            <!-- Book Info -->
            <div class="flex flex-col md:flex-row text-sm md:text-base">
                <div class="text-silver-700 text-center sm:pl-4 py-2 my-2">
                    <img src="{{ asset($review->book->cover) }}" alt="" class="w-32 lg:w-40 h-40 lg:h-56 object-cover rounded-xl mx-auto">
                    <div class="mt-4">
                        @include('partials.shelves.list', ['book' => $book, 'list' => Auth::user() ? App\Review::where([['user_id', '=', auth()->user()->id], ['book_id', '=',  $book->id]])->first() : null])
                    </div>
                </div>
                <div class="flex flex-col flex-1 my-2 items-center justify-between text-center lg:text-right">
                    {{-- <div class="flex flex-col sm:flex-row justify-between w-full items-center">
                        <div class="text-center sm:text-right">
                            <h4 class="text-black font-bold text-2xl">کتاب خوبی بود اما ...                        
                            </h4>
                        </div>
                        <h5 class="text-silver-600">۴ ماه پیش</h5>

                    </div> --}}

                    <div class="flex flex-row justify-center sm:justify-start  font-bold w-full items-center my-2 py-2 border-silver-400">
                        <div class="pl-4 text-brown-500">
                            <a href="{{ route('book.show', $review->book->slug) }}" class="text-xl">{{ $review->book->title }}</a>
                        </div>

                        @foreach ($review->book->authors as $author)
                        <div class="flex pr-2 mr-2 border-r text-silver-700 items-center">
                            <img src="{{ asset($author->avatar) }}" class="w-10 h-10 rounded-full object-cover" alt="">
                            <h6 class="text-sm mr-2">{{ $author->full_name }}</h6>
                        </div>                        
                        @endforeach
                    </div>

                    <div class="text-black text-justify my-3 w-full">
{!! $review->body !!}
                    </div> 
                    <div class="flex flex-row text-silver-700 text-center m-2 justify-start w-full" id="review">
                        <div class="ml-4">
                            @include('partials.like-button', 
                            ['type' => 'review', 
                            'id' => $review->id, 
                            'is_liked' => $review->isFavorited(), 
                            'likes' => $review->favorites()->count()])
                            
                        </div>
                        <div>
                            <a href="#" class="hover:text-green-500">
                                <i class="fas fa-reply"></i> <span class="is-persian">{{ $review->comments->count() }}</span>
                            </a>
                            
                        </div>
                    </div>

                    {{-- Comments section's title --}}
                    <div class="flex items-center my-5 py-2 border-t w-full ">
                        <h1 class="text-lg text-brown-500 font-bold">نظرهای این نقد</h1>
                        <div class="mr-auto flex items-center ">
                            <span>بر اساس</span>
                            <select name="" id="" class="rounded text-silver-700 bg-silver-100 mr-2">
                                <option value="">جدیدترین</option>
                                <option value="">قدیمی ترین</option>
                            </select>
                        </div>
                    </div>
                    {{-- End of title section --}}


                    @foreach ($review->comments as $comment)

                    <div class=" border-b border-gray-200 w-full flex flex-col  mb-5 pb-5">
                    {{-- Comment --}}
                    <div class="flex flex-row w-full items-start">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full mx-4" alt="">
                        <div class="flex flex-col text-right">
                            <p>
                                {{ $comment->body }}
                            </p>
                            <div class="flex flex-row text-silver-700 text-center justify-start w-full mt-4">
                                <div class="ml-4">
                                    @include('partials.like-button', 
                                    ['type' => 'comment', 
                                    'id' => $comment->id, 
                                    'is_liked' => $comment->isFavorited(), 
                                    'likes' => $comment->favorites()->count()])
                                    
                                </div>
                                {{-- <div>
                                    <a href="#" class="hover:text-green-500">
                                        <i class="fas fa-reply"></i> ۶۹ 
                                    </a>
                                    
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- End of comment --}}
                    {{-- @foreach ($comment->comments as $child_comment)
                    <div class="flex flex-row w-5/6 items-start mr-auto border-b mb-4 pb-2">
                        <img src="{{ asset('images/avatar.jpg') }}" class="w-16 h-16 rounded-full mx-4" alt="">
                        <div class="flex flex-col text-right">
                            <p>
                                {{ $child_comment->body }}
                            </p>
                            <div class="flex flex-row text-silver-700 text-center justify-start w-full mt-4">
                                <div class="ml-4">
                                    <a href="#" class="hover:text-red-500">
                                        <i class="far fa-heart"></i> ۸۵ 
                                    </a>
                                    
                                </div>
                                <div>
                                    <a href="#" class="hover:text-green-500">
                                        <i class="fas fa-reply"></i> ۶۹ 
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>      
                    @endforeach --}}
                </div>                  

                    {{-- End of comment --}}                        
                    @endforeach

                    {!! Form::open(['route' => 'comment.store', 'class' => 'w-full  border-b mb-4 pb-2']) !!}

                    <div class="flex flex-row w-full items-start">

                        {!! Form::token() !!}
                            <img src="{{ asset('images/avatar.jpg') }}" class="hidden sm:flex w-16 h-16 rounded-full object-cover ml-2" alt="">
                            {!! Form::hidden('model_id', $review->id) !!}
                            {!! Form::hidden('model', 'review') !!}
                            <textarea class=" w-full bg-white focus:outline-none border border-silver-300 rounded-lg py-2 px-4 appearance-none leading-normal focus:shadow"  id="" rows="10" name="body"></textarea>
                    </div>
                    <div class="flex justify-end my-2">
                        {!! Form::submit('ثبت نظر', ['class' => 'mr-auto py-2 px-3 text-white bg-green-500 hover:bg-green-600 rounded-lg hover:shadow-lg']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
              </div>
            <!-- End of Book Info -->








        </div>
        <!-- End of Main side -->


    </div>
@endsection
