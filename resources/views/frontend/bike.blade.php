@extends('frontendtemplate')

@section('content')
<div class="container" style="padding-top: 130px">
	<img src="{{asset('frontend/assets/image/bike.jpg')}}" style="width: 100%; height: 30%">
</div>
<div class="container">

	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="intro">
				<h3>Drive Safe. Drive Secure.</h3>
				<p>
				Our comprehensive motor vehicle insurance means you can drive safe in the knowledge that you are comprehensively protected. You can insure your own car, a car that you own jointly, as well as a rental vehicle.</p>
				<p>
				Our premium customer service, simple policies and 24/7 cover mean that the whole process is smooth and simple. We offer a great rate of return, and promise to pay out the full amount for the loss and damage of your vehicle. Don’t gamble on your vehicle – get motor insurance today.</p>

			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6">
			<img src="{{asset('frontend/assets/image/bike.jpg')}}" style="width: 100%; height: 400px">
		</div>
	</div>
</div>
<div class="container">
	<div class="intro col-sm-12 col-md-6 col-lg-6">
		<h3>Features</h3>
		<p>Our premium customer service, simple policies and 24/7 cover mean that the whole process is smooth and simple. We offer a great rate of return, and promise to pay out the full amount for the loss and damage of your vehicle. Don’t gamble on your vehicle – get motor insurance today.</p>
	</div>
	<div class="intro col-sm-12 col-md-6 col-lg-6">
		<h3>Core Benefits</h3>
		<p>
			Covers your own damage from accidents, collision, overturning, fire, self-ignition.</p>
			<p>Covers malicious acts perpetrated against your vehicle.Covers accidents caused by loading and unloading by road, rail, lift or elevator.</p>
			<p>Covers impact damage caused by falling objects (provided no convulsion of nature is involved), third party liability of death or bodily injuries.</p>
	</div>
	<input type="submit" value="Buy" class="btn btn-secondary" style="width: 20%">
</div>


@endsection