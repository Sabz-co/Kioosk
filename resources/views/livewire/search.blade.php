

<div class="absolute z-10 w-full hidden bg-white" id="search-content">
    <div class="container mx-auto py-4 text-black shadow-xl">
      <input id="searchfield" type="search" placeholder="جستجو کنید ..."  wire:model="searchTerm" autofocus="autofocus" class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl" >
    </div>
    <ul>
      @foreach ($books as $book)
      <li>
          <a href="{{ route('book.show', $book->slug) }}">{{ $book->title }}</a>
      </li>
  @endforeach

  </div>