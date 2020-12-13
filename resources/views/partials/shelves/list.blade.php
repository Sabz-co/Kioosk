
<div class="">
  
    <div class="dropdown inline-block relative">
      
      <button class="inline-flex items-center w-full h-full rounded-lg p-2 bg-green-500 hover:bg-green-600 text-white hover:shadow-lg mt-4">
        <span class="mr-1">{{ $list ? $list->shelfTitle : 'افزودن به قفسه' }}</span>
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
      </button>
      <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-full">
        <li class="">
            {!! Form::open(['route' => 'review.store']) !!}
            {!! Form::token() !!}
            {!! Form::hidden('book_id', $book->id) !!}
            {!! Form::hidden('shelf', 'read') !!}
            {!! Form::submit('خوانده شده', ['class' => 'w-full rounded-t bg-brown-200 hover:bg-white py-1 px-2 block whitespace-no-wrap']) !!}
            {!! Form::close() !!}

        </li>
        <li class="">
            {!! Form::open(['route' => 'review.store']) !!}
            {!! Form::token() !!}
            {!! Form::hidden('book_id', $book->id) !!}
            {!! Form::hidden('shelf', 'reading') !!}
            {!! Form::submit('در حال خواندن', ['class' => 'w-full rounded-t bg-brown-200 hover:bg-white py-1 px-2 block whitespace-no-wrap']) !!}
            {!! Form::close() !!}

        </li>
        <li class="">
            {!! Form::open(['route' => 'review.store']) !!}
            {!! Form::token() !!}
            {!! Form::hidden('book_id', $book->id) !!}
            {!! Form::hidden('shelf', 'to_read') !!}
            {!! Form::submit('برای خواندن', ['class' => 'w-full rounded-t bg-brown-200 hover:bg-white py-1 px-2 block whitespace-no-wrap']) !!}
            {!! Form::close() !!}

        </li>
    </ul>
    </div>
  </div>