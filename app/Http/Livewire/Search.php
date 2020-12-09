<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Book;
use App\Author;

class Search extends Component
{
    public $searchTerm = '';

    public function render()
    {
        $term = '%' . $this->searchTerm . '%';
        
        return view('livewire.search', [
            'books' => Book::when(!empty($this->searchTerm) , function ($query) use($term){
                return $query->where('title', 'LIKE', $term)->take(3)->get();
                }),
            'authors' => Author::when(!empty($this->searchTerm) , function ($query) use($term){
                return $query->whereRaw("concat(first_name, ' ', last_name) like '{$term}' ")->take(3)->get();
                }),
        ]);
    }
}
