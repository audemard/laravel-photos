<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
    protected $table = "photos";


    public function user() {
        return $this->belongsTo('App\User', 'user_id');
        // SELECT * FROM users WHERE id=$this->user_id
    }
}
