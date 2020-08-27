<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'user_id','email', 'phone','description','status','subcategory_id',
    ];

    // public function User($value='')
    // {
    // 	return $this->belongsTo('App\Subcategory');
    	
    // }

    // public function subcategory($value='')
    // {
    // 	return $this->belongsTo('App\Subcategory');
    	
    // }
}
