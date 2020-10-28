@extends('layouts.app')

@section('content')
<div class="flex-reserse sm:flex w-full">
        <!-- Right side -->
        <div class="w-full sm:w-2/3 p-3">
          @if($errors->any())
          {{ implode('', $errors->all('<div>:message</div>')) }}
      @endif
            <!-- Add book form -->
                <nav class="text-black font-bold my-8" aria-label="Breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                      <li class="flex items-center">
                        <a href="#" class="hover:underline">خانه</a>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                      </li>
                      <li class="flex items-center">
                        <a href="#" class="hover:underline">{{ $book->title }}</a>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                      </li>
                      <li>
                        <a href="#" class="hover:underline" class="text-gray-500" aria-current="page">نوشتن نقد</a>
                      </li>
                    </ol>
                  </nav>  

            <div class="flex flex-row">
                <div class="text-silver-700 text-center m-2">
                    <div class="relative aspect-ratio-book w-16">
                        <img src="{{ asset('images/books/extensive/'.$book->thumb) }}" alt="" class="absolute w-full h-full object-cover rounded-xl group-hover:shadow-lg">
                    </div>
                </div>
                <div class="flex flex-col text-silver-700 text-right m-2 justify-center">
                    <p class="text-brown-500 text-lg">{{ $book->title }}</p>
                    <p>فئودور داستایوفسکی</p>
                </div>
              </div>


            <div class="flex flex-col w-full text-sm md:text-base mb-5 pb-5 border-b text-silver-700">

                {!! Form::open(['route' => [ (isset($review) ? 'review.update' : 'review.store' ), isset($review) ? $review->id : $book->slug], 'files' => true]) !!}
                {!! Form::token() !!}
                  <input type="text"  name="book_id" value="{{ $book->id }}" placeholder="">
                  <input type="hidden" name="_method" value="{{ isset($review) ? 'PUT' : 'POST' }}">
                <div class="mx-auto mb-4 flex items-center">
                    <span class="ml-1">امتیاز من: </span>
                    @include('partials.rating', ['rating' => $review->rating ?? 0, 'slug' => $book->slug])
                </div>

                <div class="mx-auto mb-4 flex items-center">
                    <span class="ml-1">قفسه: </span>
                    <div class="form-group">
                      <select class="" name="shelf" id="">
                        <option value="to_read" {{isset($review) && $review->shelf == 'to_read' ? 'selected' : '' }}>برای خواندن</option>
                        <option value="reading" {{isset($review) && $review->shelf == 'reading' ? 'selected' : '' }}>در حال خواندن</option>
                        <option value="read" {{isset($review) && $review->shelf == 'read' ? 'selected' : '' }}>خوانده شده</option>
                      </select>
                    </div>
                </div>


                <div class=" mx-auto mb-4">
                    <span class="ml-1">در مورد کتاب چه فکر می‌کنید؟ </span>
                    <div class="trix-editor flex flex-col w-full">
                        <input type="hidden" value="{{ $review->body ?? "" }}" name="body" id="body" />
                        <trix input="body"  class="trix-content"></trix>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="spoiler" id="" value="spoiler">
                        این نقد شامل اطلاعات لودادنی داستان است
                      </label>
                    </div>
                </div>


                @error('title')
                    <div class="mx-auto mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-sm" role="alert">
                        {{-- <strong class="font-bold">Holy smokes!</strong> --}}
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @enderror


                <div  class="mb-6 flex items-end justify-end mx-auto">
                    {{ Form::submit('اضافه کردن کتاب', ['class' => 'text-white bg-green-500 hover:bg-green-600 rounded-lg py-2 px-3 mx-2']) }}
                    <a href="#" name="term" class="text-white bg-silver-500 hover:bg-silver-600 rounded-lg py-2 px-3">انصراف</a>
                </div>
                {!! Form::close() !!}
              </div>
            <!-- End of Add book form -->


            






        </div>
        <!-- End of right side -->

        <!-- Sidebar -->
        <div class="hidden sm:flex flex-col sm:w-1/3 p-3">


            {{-- <image-input></image-input>

            <p class="mt-1 text-silver-700">عکسی که از کتاب بارگزاری می‌کنید باید در اندازه ۵۰۰ در ۲۰۰ و دارای رزولوشن ۷۲ باشد.</p>
 --}}


        </div>
        <!-- End of sidebar -->
    </div>
@endsection


@section('footer-assets')
    <script type="text/javascript">
$(document).ready(function(){


$('#autocomplete').autocomplete({
    serviceUrl: "{{url('author/search')}}",
    onSelect: function (suggestion) {
        return {
            suggestions: $.map(suggestion, function(dataItem) {
                return { value: dataItem.first_name, data: dataItem.last_name };
            })
        };
        alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
    }
});


// $( "#employee_search" ).autocomplete({
//   source: function( request, response ) {
//     // Fetch data
//     $.ajax({
//       url:"{{url('author/search')}}",
//       type: 'get',
//       dataType: "json",
//       data: {
//          search: request.term
//       },
//       success: function( data ) {
//          response( data );
//       }
//     });
//   },
//   select: function (event, ui) {
//      // Set selection
//      $('#employee_search').val(ui.item.label); // display the selected text
//      $('#employeeid').val(ui.item.value); // save selected id to input
//      return false;
//   }
// });

});
    </script>
@endsection