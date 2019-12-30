<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Socialite\Facades\Socialite;
use Tests\TestCase;
use Illuminate\Support\Str;
use Mockery;

class SocialiteTest extends TestCase
{
    /**
     * Basic Socialite Test
     *
     * This only checks to make sure things are working on Laravel side.
     * @see https://laracasts.com/discuss/channels/testing/testing-socialite
     * @return void
     */
    public function socialiteTest()
    {
      $abstractUser = Mockery::mock('Laravel\Socialite\Two\User');
      $abstractUser->shouldReceive('getId')
      ->andReturn(1234567890)
      ->shouldReceive('getEmail')
      ->andReturn(Str::random(10).'@gmail.com')
      ->shouldReceive('getNickname')
      ->andReturn('Pseudo')
      ->shouldReceive('getName')
      ->andReturn('Mohammad Hossein')
      ->shouldReceive('getAvatar')
      ->andReturn('https://en.gravatar.com/userimage');

      $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
      $provider->shouldReceive('user')->andReturn($abstractUser);

      Socialite::shouldReceive('driver')->with('google')->andReturn($provider);
      $this->get('/gauth/callback')->assertSee('/');
    }
}
