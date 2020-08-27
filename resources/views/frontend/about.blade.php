@extends('frontendtemplate')

@section('content')
		
		<div id="site-content">

			<main class="main-content">

				<div class="page" style="padding-top: 150px">	

					<div class="fullwidth-block">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<h2 class="section-title">The history</h2>
									<p>Insurance has a history that dates back to the ancient world. Over the centuries, it has developed into a modern business of protecting people from various risks. The industry has been profitable for many years and has been an important aspect of private and public long-term finance.</p> 

									<p>Insurance is a way to manage your risk. When you buy insurance,you purchase protection against unexpected financial losses.The insurance company pays you or someone you choose if something bad happens to you. When you buy an insurance policy, part of your responsibility includes payinga fee called a premium. Some premiums are paid monthly, like health insurance.Others may be paid once or twice a year, like auto or homeowner’s insurance.
									The cost of your premium generally depends on how much of a risk you are to the
									insurance company. </p>

									<p>Life insurance provides financial security, peace of mind and is less expensive than you may think
									It’s important to secure coverage as early as possible because life insurance gets more expensive as you get older and your health changes</p>
								</div>
								<div class="col-sm-12 col-md-6">
									<img src="{{asset('frontend/assets/image/about.jpg')}}" style="width: 100%; height: 70%">
								</div>
							</div>
						</div> <!-- .container -->
					</div> <!-- .fullwidth-block -->
				</div> <!-- .page -->
			</main>			
		</div>
		<div class="container">
		<h2>Our Services</h2>
		<div class="row" style="padding-top: 30px; padding-left: 80px">
			<div class="col-sm-6 col-md-3">
				<img src="{{asset('frontend/assets/image/family9.jpg')}}" style="width: 160px; height: 160px; border-radius: 80%">
				<p><b>Life Insurance</b></p>
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="{{asset('frontend/assets/image/health1.jpg')}}" style="width: 160px; height: 160px; border-radius: 80%">
				<p><b>Helath Insurance</b></p>
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="{{asset('frontend/assets/image/about1.jpg')}}" style="width: 160px; height: 160px; border-radius: 80%">
				<p><b>Fire Insurance</b></p>
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="{{asset('frontend/assets/image/about2.jpg')}}" style="width: 160px; height: 160px; border-radius: 80%">
				<p><b>Vehicle Insurance</b></p>
			</div>
		</div>
		</div>
		{{-- <div class="container" style="padding-top: 20px">
			<div class="row mt-5">
			<div class="col-lg-4" style="padding-left: 50px">
				<h3>Our Core Values</h3>
				<ul>
					<li>Integrity</li>
					<li>Dedication</li>
					<li>Team Spirit</li>
					<li>Customer Centricity</li>
					<li>Respect & Courtesy</li>
					<li>Innovation</li>
				</ul>
			</div>
			<div class="col-lg-4">
				<h3>Our Vision</h3>
				<p>To become a leading Insurance Company in Myanmar Insurance Industry by fostering Industrial & Economic growth thereby improving quality of peoples’ lives.</p>	
			</div>
			<div class="col-lg-4">
				<h3>Our Mission</h3>
				<p>To help protect our customers from all kinds of peril by providing them with not only financial benefits but also peace of mind.</p>
			</div>
		</div> --}}
	</div>

@endsection