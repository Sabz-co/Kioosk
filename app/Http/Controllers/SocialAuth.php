<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Providers\RouteServiceProvider;

use Socialite;

class SocialAuth extends Controller
{
    public function redirectToProvider()
    {
      return Socialite::driver('google')->redirect();  // TODO add phpdoc.
    }

    public function handleProviderCallback()
    {
      $gUser = Socialite::driver('google')->user();

      $user = $this->updateOrCreateUser($gUser);

      Auth::login($user, true); // Log the user in and remember them without password.
      return redirect(RouteServiceProvider::HOME);
    }

    private function updateOrCreateUser($user){
      $dbUser = User::updateOrCreate(
        ['email' => $user->getEmail()],
        ['name' => $user->getName()]
      );
      if(!$dbUser->email_verified_at) // Email needs to be verified once only.
      {
        $dbUser->email_verified_at = Carbon::now();
        $dbUser->save();
      }
      return $dbUser;
    }
}
