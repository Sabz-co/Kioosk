@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="flex flex-col sm:flex-row w-full">

        <div class="flex flex-col  sm:w-3/5 lg:w-2/3 p-2">
        {{-- Start of genre --}}

        <div class="w-full">
            <div class="flex items-center my-4 border-b pb-2">
                <h1 class="text-lg">آخرین کتاب‌ها</h1>
                <a href="#" class="text-brown-500 rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
            </div>

            <div class="flex flex-wrap justify-start">
                @foreach ($latestBooks as $latest)
                    <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                        <a href="{{ route('book.show', $latest->slug) }}"> 
                            <img src="{{ asset($latest->cover) }}" alt="" class="w-full lg:h-56 object-cover rounded-xl group-hover:shadow-lg">
                            <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">{{ $latest->title }} </h4>
                            @if($latest->author->first())
                                <div>
                                    <span class="text-sm">{{ $latest->author->first()->fullName}}</span>
                                </div>
                            @endif
                        </a>
                    </div>             
                @endforeach
            </div>
        </div>
        {{-- End of genre --}}
    
                {{-- Start of genre --}}

                <div class="w-full">
                    @foreach ($randomGenres as $randomGenre)
                        <div class="flex items-center my-4 border-b pb-2">
                            <h1 class="text-lg">{{ $randomGenre->name }}</h1>
                            <a href="{{ route('genre.show', $randomGenre->slug) }}" class="text-brown-500 rounded-full hover:bg-silver-200 hover:text-black px-2 mr-auto">دیدن همه</a>
                        </div>
                        <div class="flex flex-wrap justify-start">
                            @foreach (App\Book::withAnyTag([$randomGenre->slug])->inRandomOrder()->take(5)->get() as $book)
                                <div class="w-1/2 px-2 md:w-1/3 lg:w-1/4 xl:w-1/5 text-right mb-3 hover:grow group ">
                                    <a href="{{ route('book.show', $book->slug) }}"> 
                                        <img src="{{ asset($book->cover) }}" alt="" class="w-full lg:h-56 object-cover rounded-xl group-hover:shadow-lg">
                                        <h4 class="text-brown-500 font-bold text-base lg:text-lg xl:text-xl mt-2">{{ $book->title }} </h4>
                                        @if($book->author->first())
                                            <div>
                                                <span class="text-sm">{{ $book->author->first()->fullName}}</span>
                                            </div>
                                        @endif
                                    </a>
                                </div>
                            @endforeach
                        </div>

                    @endforeach
                </div>
                {{-- End of genre --}}
    
    </div>
        
        <!-- End of right side -->

        <!-- Sidebar -->

        <div class="w-full sm:w-2/5 lg:w-1/3 p-2">
            <div>
                <div class="text-center mb-4 pb-2 text-sm">
                    <div class="flex flex-col items-center justify-center p-3 rounded-xl bg-silver-200">
                        @foreach ($genres->chunk(2) as $twoGenres)
                        <div class="flex flex-row justify-between w-full mb-4">
                            @foreach ($twoGenres as $genre)
                                <a href="{{ route('genre.show', $genre->slug) }}"> {{ $genre->name }}</a>
                            @endforeach
                        </div>                            
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
        <!-- End of sidebar -->
    </div>
@endsection
