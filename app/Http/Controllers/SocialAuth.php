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
    /**
    * Uses the information set in config/services.php to redirect user to social login page.
    *
    * @see config\services.php Configuration for this function.
    * @return HttpResponse Redirects to provider.
    */
    public function redirectToProvider()
    {
      return Socialite::driver('google')->redirect();
    }

    /**
    * Handles the data sent back by the provider, creates or updates a local user.
    *
    * Information about user including their Id, Nickname, Name, Email and Avatar
    * can be received through all [supported] providers.
    * @see https://laravel.com/docs/6.x/socialite#retrieving-user-details
    * @return HttpResponse Redirect to the home set in RouteServiceProvider.
    */
    public function handleProviderCallback()
    {
      $gUser = Socialite::driver('google')->user();

      $user = $this->updateOrCreateUser($gUser);

      Auth::login($user, true); // Log the user in and remember them without password.
      return redirect(RouteServiceProvider::HOME);
    }

    /**
    * Using the App\User model, creates a user with given OAuth information.
    *
    * Only email and name provided through Oauth are currently saved / updated.
    * At this stage, this function REQUIRES the App\User model to allow for
    * creation of user accounts with no passwords.
    *
    * @throws Illuminate\Database\QueryException if the database doesn't allow for passwords to be null.
    * @return object Retrieved (and saved) model of the given user.
    */
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

    public function __construct()
    {
      $this->middleware('guest');
    }
}
