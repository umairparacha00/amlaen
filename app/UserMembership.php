<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMembership extends Model
{
    protected $fillable = ['user_id', 'membership_id'];
}
