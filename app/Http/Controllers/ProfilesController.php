<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Activity;
use App\Shelf;

class ProfilesController extends Controller
{
    public function show(User $user){ 
        $activities = Activity::feed($user); 

        
        return view('profiles.show', compact('user', 'activities'));
    }

    public function showMyBooks(User $user){
        $shelf = Shelf::feed($user); 
        
        return view('profiles.show-my-books', compact('user', 'shelf'));
    }
}
