<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name', 'price','photo','category_id','description'
    ];
    
}
