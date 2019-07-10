<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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


    public function ILikeThem() {
        return $this->belongsToMany('App\User', 'connection', 'from_id', 'to_id');
        // SELECT * FROM users JOIN connection on to_id=users.id WHERE from_id=$this->id
    }

    public function theyLikeMe() {
        return $this->belongsToMany('App\User', 'connection', 'to_id', 'from_id');
        // SELECT * FROM users JOIN connection on from_id=users.id WHERE to_id=$this->id
    }






    public function photos() {
        return $this->hasMany('App\Photo', 'user_id');
        // SELECT * FROM photos WHERE user_id = $this->id
    }
}
