@extends('frontendtemplate')

@section('content')
<div class="container" style="padding-top: 130px">
	<img src="{{asset('frontend/assets/image/family20.jpg')}}" style="width: 100%; height: 30%">
</div>
<div class="container">

	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="intro">
				<h3>Nothing is Important than Life</h3>
				
				<p>Life Insurance is different from other insurance in the sense that, here, the subject matter of insurance is the life of a human being.
				The insurer will pay the fixed amount of insurance at the time of death or at the expiry of a certain period.
				</p>
				<p>This insurance provides protection to the family at the premature death or gives an adequate amount at the old age when earning capacities are reduced.
				Under personal insurance, a payment is made at the accident.
				The insurance is not only a protection but is a sort of investment because a certain sum is returnable to the insured at the death or the expiry of a period.
				</p>

			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6">
			<img src="{{asset('frontend/assets/image/home3.jpg')}}" style="width: 100%; height: 80%">
		</div>
	</div>
</div>
<div class="container">
	<div class="intro col-sm-12 col-md-6 col-lg-6">
		<h3>Features</h3>
		<p>Policyholder is the individual who pays the premium for the life insurance policy and signs a life insurance contract with a life insurance company.
		A premium is the cost the policyholder pays the life insurance company for covering his/her life.
		Maturity is the stage at which the policy term is completed and the life insurance contract ends.</p>
	</div>
	<div class="intro col-sm-12 col-md-6 col-lg-6">
		<h3>Core Benefits</h3>
		<p>
			Life insurance provides an infusion of cash for dealing with the adverse financial consequences of the insured’s death.</p>
			<p>Life insurance enjoys favorable tax treatment unlike any other financial instrument.</p>
			<p>Many life insurance policies are exceptionally flexible in terms of adjusting to the policyholder’s needs.</p> <p>The death benefit may be decreased at any time and the premiums may be easily reduced, skipped or increased.</p>
	</div>
	<input type="submit" value="Buy" class="btn btn-secondary" style="width: 20%">
</div>


@endsection