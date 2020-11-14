<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Book;

class Search extends Component
{
    public $searchTerm = '';

    public function render()
    {

        $term = '%' . $this->searchTerm . '%';
        
        return view('livewire.search', [
            'books' => Book::when(!empty($this->searchTerm) , function ($query) use($term){
                return $query->where('title', 'LIKE', $term);
                })
        ]);
    }
}
