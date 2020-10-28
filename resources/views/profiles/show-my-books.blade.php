@extends('layouts.app')

@section('content')
        <!-- Right side -->
        <div class="flex flex-col sm:flex-row w-full">
        <div class="w-full p-2">

            <table class="table-auto">
                <thead>
                  <tr class="text-right border-b border-brown-500">
                    <th class="px-4 py-2">کاور</th>
                    <th class="px-4 py-2">عنوان</th>
                    <th class="px-4 py-2">نویسنده</th>
                    <th class="px-4 py-2">مترجم</th>
                    <th class="px-4 py-2">میانگین امتیاز</th>
                    <th class="px-4 py-2">امتیاز شما</th>
                    <th class="px-4 py-2">قفسه</th>
                    <th class="px-4 py-2">بررسی</th>
                    <th class="px-4 py-2"></th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($shelf as $item)
                    <tr>
                        <td class="border-b border-gray-100 px-2 py-4 w-32">
                            <div class="relative aspect-ratio-book">
                                <img src="{{asset( $item->book->cover)}}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                            </div>

                        </td>
                        <td class="border-b border-gray-100 px-2 py-4"> 
                            <a href="{{ route('book.show', $item->book->slug) }}" class="text-brown-500">{{ $item->book->title }}</a>
                        </td>
                        <td class="border-b border-gray-100 px-2 py-4">
                            @foreach ($item->book->author()->get() as $author)
                            {{ $author->fullName}}</td>

                            @endforeach
                            <td class="border-b border-gray-100 px-2 py-4"></td>

                        <td class="border-b border-gray-100 px-2 py-4">
                            {{ $item->avg('rating') }}
                        </td>
                        <td class="border-b border-gray-100 px-2 py-4">
                            {{ $item->rating }}
                        </td>
                        <td class="border-b border-gray-100 px-2 py-4">
                            {{ $item->shelfTitle }}
                        </td>
                        <td class="border-b border-gray-100 px-2 py-4 max-w-xs">
                            @if ($item->review)
                            <a href="{{ route('review.show',$item->review->id) }}">{{ $item->review->excerpt }}</a>

                                @else
                                <a href="#">نقدی بنویسید ...</a>

                            @endif
                        </td>
                        <td class="border-b border-gray-100 px-2 py-4 max-w-xs text-sm">
                        <a href="#" class="text-brown-500">نمایش</a>
                        <a href="#" class="text-brown-500">ویرایش</a>
                        <a href="#" class="text-brown-500">حذف</a>
                        </td>
                      </tr>                        
                    @endforeach

                </tbody>
              </table>
            

              


        </div>
        <!-- End of right side -->

    </div>
@endsection
