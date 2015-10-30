<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'Friends';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'friend_user_id'];

    public function friendProfile()
    {
        return $this->hasOne('App\Profile' , 'user_id', 'friend_user_id');
    }
}
