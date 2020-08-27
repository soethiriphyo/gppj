@extends('frontendtemplate')

@section('content')

<div class="col-lg-9 register">
		<h2>Your Insurance Plans</h2>	
		<div id="checkout_body">
			<div class="container my-5 text-center">
				<div class="row">
					<div class="offset-md-2 col-md-9">						
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No.</th>
										<th>Insurance Plan</th>
										<th>Photo</th>
										<th>Price</th>
										<th>Period Years</th>
										<th>Sub Total</th>
									</tr>
								</thead>
								<tbody>
										

								</tbody>
							</table>
						</div>
					</div>
					
					<div class="offset-md-2 col-md-9">
						<div class="form-group">
							<textarea class="form-control notes" placeholder="Notes"></textarea>						
						</div>

					</div>
					<div class="offset-md-2 col-md-5 text-left">
						<a href="{{route('homepage')}}" class="btn btn-outline-primary">Continue Shopping</a>
					</div>

					<div class="offset-md-2 col-md-3 text-left">
						@role('customer')				
						<a href="#" class="btn btn-outline-primary purchase">Buy</a><br>
						@else
						<a href='{{route('login')}}' class='btn btn-outline-info'>Login to Buy</a>
						@endrole						
					</div>
				</div>
			</div>
		</div>	
	</div>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}">
    
  </script>
@endsection
