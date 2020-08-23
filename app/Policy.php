<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillable = [
        'name', 'photo','subcategory_id','duration'
    ];
}
