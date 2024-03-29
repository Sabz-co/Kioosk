<?php

namespace App\Http\Controllers;

use App\Giveaway;
use Illuminate\Http\Request;

class GiveawayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giveaways = Giveaway::all();
        return view('giveaways.index', compact('giveaways'));
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
        //
    }

    public function manageParticipations(Giveaway $giveaway) {
        if($giveaway->isParticipatededIn) {
            $giveaway->unparticipateUser();
        } else {
            $giveaway->participateUser();
        }
    }

    public function destroyParticipations(Giveaway $giveaway) {
        $giveaway->unparticipateUser();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Giveaway  $giveaway
     * @return \Illuminate\Http\Response
     */
    public function show(Giveaway $giveaway)
    {
        return view('giveaways.show', compact('giveaway'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Giveaway  $giveaway
     * @return \Illuminate\Http\Response
     */
    public function edit(Giveaway $giveaway)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Giveaway  $giveaway
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Giveaway $giveaway)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Giveaway  $giveaway
     * @return \Illuminate\Http\Response
     */
    public function destroy(Giveaway $giveaway)
    {
        //
    }
}
