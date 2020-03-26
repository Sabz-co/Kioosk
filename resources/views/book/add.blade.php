@extends('layouts.app')

@section('content')
<div class="flex-reserse sm:flex w-full">
        <!-- Right side -->
        <div class="w-full sm:w-2/3 p-3">
            <!-- Add book form -->
            <div class="flex flex-col w-full text-sm md:text-base mb-5 pb-5 border-b text-silver-700">
                {!! Form::open(['route' => 'book.store','files' => true]) !!}
                {!! Form::token() !!}
                <div class="w-5/6 sm:w-2/3 mx-auto mb-4">
                    <input type="text" name="title" class="bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 w-full" placeholder="عنوان">
                </div>
                @error('title')
                    <div class="w-5/6 sm:w-2/3 mx-auto mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-sm" role="alert">
                        {{-- <strong class="font-bold">Holy smokes!</strong> --}}
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @enderror

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex">

                    <input type="text" id="author-search" name="collector" class="bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 w-full" placeholder="گردآورنده">
                    <div class="flex items-center">
                        <label class="inline-flex items-center mr-2 sm:mr-4 md:mr-6">
                          <input type="radio" class="form-radio" name="collectorType" value="author">
                          <span class="mr-1 sm:mr-2">نویسنده</span>
                        </label>
                        <label class="inline-flex items-center mr-2 sm:mr-4 md:mr-6">
                          <input type="radio" class="form-radio" name="collectorType" value="translator">
                          <span class="mr-1 sm:mr-2">مترجم</span>
                        </label>
                      </div>
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6">
                    {!! Form::select('publisher_id', $publishers, null, [ 'class' => 'bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 w-full']) !!}

                </div>


                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex flex-col md:flex-row">
                    <input type="text" name="isbn" class="mb-6 md:mb-0 bg-silver-300 w-auto md:w-1/2 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 " placeholder="ISBN">

                    <input type="text" name="publishYear" class="bg-silver-300 w-auto md:w-1/2 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 md:mr-3" placeholder="سال انتشار">
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex">
                    <input type="text" name="pages" class="w-full md:w-1/2 bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2 " placeholder="تعداد صفحات">
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex flex-col">

                    <p class="mb-1">لطفاً حداقل ۳ تگ را برای کتاب وارد کنید تا کاربران بتوانند راحت‌تر آن را پیدا کنند</p>
                    <tag-input name="tags" :classes="'w-full'"></tag-input>
                </div>

                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex flex-col">
                    <p class="mb-1">عکس جلد کتاب را انتخاب کنید</p>
                    <div class="form-group">
                      <label for=""></label>
                      <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId">
                    </div>
                    <small id="fileHelpId" class="form-text text-muted">نسبت عکس باید ۱ به ۱.۶ و اندازه آن حداکثر ۳۰۰ کیلوبایت باشد</small>

                </div>

                @error('image')
                    <div class="w-5/6 sm:w-2/3 mx-auto mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-sm" role="alert">
                        {{-- <strong class="font-bold">Holy smokes!</strong> --}}
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @enderror


                <div class="w-5/6 sm:w-2/3 mx-auto mb-6 flex">
                    <textarea name="description" id="" cols="30" rows="10" placeholder="توضیجی کوتاه در مورد کتاب" class="w-full bg-silver-300 rounded-lg focus:outline-none focus:bg-silver-200 focus:shadow-xl text-silver-700 focus:text-silver-800 p-2"></textarea>
                </div>
                @error('description')
                    <div class="w-5/6 sm:w-2/3 mx-auto mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-sm" role="alert">
                        {{-- <strong class="font-bold">Holy smokes!</strong> --}}
                        <span class="block sm:inline">{{ $message }}</span>
                    </div>
                @enderror

                <div id="remote">
    <!-- For defining autocomplete -->
    <input type="text" id='employee_search'>
    <input type="text" class="w-full h-12 bg-red-200" name="country" id="autocomplete"/>


    <!-- For displaying selected option value from autocomplete suggestion -->
    <input type="text" id='employeeid' readonly>
                  </div>
                <div  class="w-5/6 sm:w-2/3 mb-6 flex items-end justify-end mx-auto">
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