<?php

namespace App\Http\Controllers;

use App\Shelf;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->form_validation($request);

        $item = Shelf::firstOrCreate(['book_id' => $data['book_id'], 'user_id'=> $data['user_id']]);
        $item->shelf = $data['shelf'];
        $item->update();
        dd($item);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shelf  $shelf
     * @return \Illuminate\Http\Response
     */
    public function show(Shelf $shelf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shelf  $shelf
     * @return \Illuminate\Http\Response
     */
    public function edit(Shelf $shelf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shelf  $shelf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shelf $shelf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shelf  $shelf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shelf $shelf)
    {
        //
    }



    // Thanks to Mikey for this clean validation
    private function form_validation(Request $request)
    {
        return $request->validate([
            'user_id' => ['exists:users,id', 'required'],
            'book_id' => ['exists:books,id', 'required'],
            'shelf' => ['in:read,to_read,reading', 'required']
            // 'rating' => ['between:0,5', 'numeric', 'present']
        ]);
    }
}
