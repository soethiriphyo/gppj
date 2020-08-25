@extends('frontendtemplate')

@section('content')
<div class="container">
	<img src="{{asset('frontend/assets/image/fire.jpg')}}" style="width: 100%; height: 50%">
</div>
<div class="container">

	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6" style="padding-top: 200">
			<div class="intro">
				<h3>Have No ANXIETY of Fire</h3>
				
				<p>Fire can strike at any time, causing terrible damage to property and possessions, as well as taking an emotional toll. When dealing with the trauma of fire, the last thing you want to do is deal with its effects alone. You need a plan to recover, and that is where our fire insurance comes in.
				</p>
				<p>Fire insurance is the best way to protect you, your home and your possessions from the destructive effects of uncontrolled fire. Rather than cope with the financial challenges it causes by yourself, trust us to stand by your side. With great customer service and 24/7 claim lines, we are here to help, every step of the way.
				</p>

			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6">
			<img src="{{asset('frontend/assets/image/fire2.jpg')}}" style="width: 100%; height: 80%">
		</div>
	</div>
</div>
<div class="container">
	<div class="intro col-sm-12 col-md-6 col-lg-6">
		<h3>Features</h3>
		<p>In the case of damaging fire, the actual value of the property destroyed will be paid to you in full. You can also insure yourself against other natural disasters and perils that may affect your possessions and property. GGI Tokio Marine are quick to act and pay out promptly, meaning you will be able to start the process of recovery as soon as possible.</p>
	</div>
	<div class="intro col-sm-12 col-md-6 col-lg-6">
		<h3>Core Benefits</h3>
		
			<p>Covers loss of or damage to the property caused by fire.</p>
			<p>Covers loss of or damage to the property caused by water or any extinguishing agent.</p>
			<p>Covers damage to the property during the removal of property from the burning building.</p>
			<p>Covers damage caused by firefighters in order to prevent the spread of fire.</p>
	</div>
	<input type="submit" value="Buy" class="btn btn-secondary" style="width: 20%">
</div>


@endsection