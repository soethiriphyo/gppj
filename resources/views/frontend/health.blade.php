@extends('frontendtemplate')

@section('content')
<div class="container" style="padding-top: 130px">
	<img src="{{asset('frontend/assets/image/healthi1.jpg')}}" style="width: 100%; height: 30%">
</div>
<div class="container">

	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="intro">
				<h3>Safeguard your health</h3>
				
				<p>As the cost of healthcare rises across the world, it becomes more and more essential to insure you and your loved ones against disease and accident. For city dwellers, the rising cost of healthcare can be a stressful burden. Your company’s healthcare might seem like sufficient cover, but corporate policies are often insufficient in the scope of their protection.
				</p>
				<p>That is why it is prudent to cover yourself before accident or disease strikes, as these unpredictable events can have devastating consequences on your finances and standard of living. We can assist in multiple ways to help you manage and navigate if disaster strikes.
				</p>

			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6">
			<img src="{{asset('frontend/assets/image/healthi.jpg')}}" style="width: 100%; height: 80%">
		</div>
	</div>
</div>
<div class="container">
	<div class="intro col-sm-12 col-md-6 col-lg-6">
		<h3>Features</h3>
		<p>We offer financial protection against large medical bills incurred from sickness and accidents, as well as a lump sum payment in the event of miscarriage, allowing for recuperation and recovery free from financial stress and worry.</p>
	</div>
	<div class="intro col-sm-12 col-md-6 col-lg-6">
		<h3>Core Benefits</h3>
		<p>Health insurance covers essential health benefits critical to maintaining your health and treating illness and accidents.</p>
		<p>Health insurance protects you from unexpected, high medical costs.</p>
		<p>You pay less for covered in-network health care, even before you meet your deductible.
		</p>
	</div>
	<input type="submit" value="Buy" class="btn btn-secondary" style="width: 20%">
</div>


@endsection