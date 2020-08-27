<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillable = [
        'voucherno','orderdate','status','note','total','duration','user_id',
    ];
}
