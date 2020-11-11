<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $appends = ['isSubscribedTo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }


    public function achievements()
    {
        return $this->belongsToMany(Achievement::class, 'user_achievements')->withTimestamps();
    }

    public function experience()
    {
        return $this->hasOne(Experience::class);
    }


    // All the relationships regarding book reviews go here:


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function want_to_read_list()
    {
        return $this->reviews()->where('shelf', 'to_read');
    }


    public function read_list()
    {
        return $this->reviews()->where('shelf', 'read');
    }


    public function reading_list()
    {
        return $this->reviews()->where('shelf', 'reading');
    }

    public function subscribers()
    {
        return $this->morphedByMany('App\User', 'subscribable','subscriptions');
    }

    public function subscriptions()
    {
        return $this->morphMany(Subscription::class, 'subscribable');
    }
    
    
    public function subscribeUser($userId = null)
    {
        $this->subscriptions()->create([
            'user_id' => $userId ?: auth()->id()
        ]);
    }


    public function unsubscribeUser($userId = null)
    {
        $this->subscriptions()->where('user_id', $userId ?: auth()->id())->delete();
    }



    public function getIsSubscribedToAttribute()
    {
        return $this->subscriptions()->where('user_id', auth()->id())->exists();
    }
}
