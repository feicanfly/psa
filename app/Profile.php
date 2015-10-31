<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'Profile';

    protected $fillable = ['name','user_id','avatar','gender','age','address'];
}
