<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Activity;

class ProfilesController extends Controller
{
    public function show(User $user){
        $activities = Activity::feed($user); 

        return $user->achievements;
        
        // return view('profiles.show', compact('user', 'activities'));
    }


}
