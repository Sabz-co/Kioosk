<div class="hidden sm:flex sm:mr-6 lg:w-1/2 lg:mx-auto">
  <div class="flex space-x-4 w-full">
    <div class="relative inline-block text-left lg:w-full">
      <div>
        <input autocomplete="off" id="searchfield"  wire:model="searchTerm" type="text" class=" transition duration-500 ease-in-out lg:w-full bg-gray-100 focus:bg-white px-3 py-2 rounded-md text-sm font-medium text-gray-300 focus:text-black focus:outline-none focus:b-1 " placeholder="جستجو">
      </div>
    
      <div class="origin-top-right lg:w-full absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
          @foreach ($books as $key => $book)
          {{-- @if ($key == 0)
            <h3 class="text-right px-4 py-2 text-brown-800">کتاب‌ها:</h3>
          @endif --}}
          <a  href="{{ route('book.show', $book->slug) }}" class="flex flex-row h-16 text-sm text-gray-700 hover:bg-brown-100 hover:text-gray-900">
            <div class="w-16">
              <img src="{{ asset($book->cover) }}" class="h-full object-cover mx-auto" alt="">
            </div>
            <div class="flex flex-col px-4 py-2 text-sm text-gray-700 hover:text-gray-900 flex-grow h-full justify-around text-right">
              <h4 class="text-lg text-bold">{{ $book->title }}</h4>
              @foreach ($book->author as $author)
                <span>{{ $author->fullName }}</span>
              @endforeach
            </div>
          </a>
          @endforeach
        @foreach ($authors as $key => $author)
        {{-- @if ($key == 0)
          <h3 class="text-right px-4 py-2 text-brown-800">نویسندگان:</h3>
        @endif --}}
          <a  href="{{ route('author.show', $author->slug) }}" class="flex flex-row h-16 text-sm text-gray-700 hover:bg-brown-100 hover:text-gray-900">
            <div class="w-16">
              <img src="{{ asset($author->avatar) }}" class="h-full object-cover mx-auto" alt="">
            </div>
            <div class="flex flex-col px-4 py-2 text-sm text-gray-700 hover:text-gray-900 flex-grow h-full justify-around text-right">
              <h4 class="text-lg text-bold">{{ $author->fullName }}</h4>

            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>

