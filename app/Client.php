<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['first_name', 'last_name', 'gender', 'age', 'city_state', 'phone', 'mobile'];
}
