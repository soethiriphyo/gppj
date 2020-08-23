<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Policies

class Claim extends Model
{
    protected $fillable = [
        'claimno', 'photo','amount','status','policy_id'
    ];

    

}
