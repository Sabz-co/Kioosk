<?php

namespace App\Http\Controllers;

use App\Shelf;
use App\Book;
use App\User;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function __construct()
    {
        // Whether we'd want this to be behind "auth-wall" has not been discussed yet.
    }

    public function index()
    {
        
    }

    public function create()
    {

    }

    /**
     * Stores a new shelf item
     * 
     * This method is "unique-tolerant", meaning it will not raise an error in case
     * the item we're trying to create has already existed, although it does not 
     * touch existing items either. 
     */
    public function store(Request $request)
    {
        $data = $this->form_validation($request);
        $item = Shelf::firstOrCreate(['book_id' => $data['book_id'], 'user_id'=> $data['user_id']], $data);
        return [
            'id' => $item->id,
        ];
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update(Request $request)
    {
        
    }
    
    public function destroy()
    {

    }

    private function form_validation(Request $request)
    {
        return $request->validate([
            'user_id' => ['exists:users,id', 'required'],
            'book_id' => ['exists:books,id', 'required'],
            'shelf' => ['in:read,to_read,reading', 'required'],
            'rating' => ['between:0,5', 'numeric', 'present']
        ]);
    }
}
