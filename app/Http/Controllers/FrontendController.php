<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;

class FrontendController extends Controller
{
     public function home($value='')
	{
		return view('frontend.home');
	}

	 public function about($value='')
	{
		return view('frontend.about');
	}

	public function contact($value='')
	{
		return view('frontend.contact');
	}

	public function checkout($value='')
	{
		return view('frontend.checkout');
	}

	
	public function plans($value='')
	{
		$subcategories=Subcategory::all();
		return view('frontend.insuranceplans',compact('subcategories')); 
		

	}

	
	
}
