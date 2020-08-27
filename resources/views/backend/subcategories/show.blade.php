@extends('frontendtemplate')

@section('content')

	<div class="container-fluid" style="margin-top: 200px">
		<h2>Insurance Plan Detail</h2>


		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($subcategory->photo)}}" class="img-fluid" style="width: 500px;height: auto; padding-top: 20px;">
			</div>

			<div class="col-md-8 px-5 text-justify" style="padding-left: 100px">
				<h3 class="text-dark pt-2 mt-3">Name:{{$subcategory->name}}<span class="text-muted"> </span></h3>
				

				<h3 class="text-dark pt-2">Price:{{$subcategory->price}}<span class="text-muted"> </span></h3>
				<h3 class="text-dark pt-2">Description:{{$subcategory->description}}<span class="text-muted"></span> </h3>
				<a href="{{route('checkoutpage')}}" class="btn btn-info buyplan" data-id="{{$subcategory->id}}" data-name="{{$subcategory->name}}" data-photo="{{asset($subcategory->photo)}}" data-price="{{$subcategory->price}}" >Buy</a>
		</div>

@endsection