<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class SocialAuth extends Controller
{
    public function redirectToProvider()
    {
      return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
      $user = Socialite::driver('google')->stateless()->user();
      print($user->token);
      print($user->getName());
      print($user->getEmail());
      print($user->getAvatar());
    }
}
