
<div class="rounded shadow-md my-2 relative pin-t pin-l">
    <ul class="list-reset">
      <li class="p-2"><input class="border-2 rounded h-8 w-full" wire:model="searchTerm"><br></li>
      
      @foreach ($books as $book)
      <li>
          <a href="{{ route('book.show', $book->slug) }}">{{ $book->title }}</a>
      </li>
  @endforeach
    </ul>
</div>