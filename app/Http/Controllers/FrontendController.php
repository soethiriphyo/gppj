<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

	public function car($value='')
	{
		return view('frontend.car');
	}

	public function life($value='')
	{
		return view('frontend.life');
	}

	public function health($value='')
	{
		return view('frontend.health');
	}

	public function fire($value='')
	{
		return view('frontend.fire');
	}

	public function bike($value='')
	{
		return view('frontend.bike');
	}

	public function commercial($value='')
	{
		return view('frontend.commercial');
	}
	public function vehicle($value='')
	{
		return view('frontend.vehicle');
	}
	public function firec($value='')
	{
		return view('frontend.firec');
	}
	public function crime($value='')
	{
		return view('frontend.crime');
	}
	public function building($value='')
	{
		return view('frontend.building');
	}

	
	
}
