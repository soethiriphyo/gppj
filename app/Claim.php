<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'name', 'photo','amount','status','policy_id'
    ];
}
