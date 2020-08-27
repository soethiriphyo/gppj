@extends('frontendtemplate')

@section('content')
<div class="container register">
	<div class="row">
          @foreach($subcategories as $subcategory)
          <div class="col-lg-2 col-md-6 mb-4 ml-3 img-thumbnail">
            <div class="card">
              <a href="#"><img class="card-img-top" src="{{asset($subcategory->photo)}}" alt="" class="img-fluid" width="100px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$subcategory->name}}</a>
                </h4>
                <h5>{{$subcategory->price}} MMK</h5>                
              </div>
              <div class="card-footer">
                <a href="{{route('checkoutpage')}}" class="btn btn-info buyplan" data-id="{{$subcategory->id}}" data-name="{{$subcategory->name}}" data-photo="{{asset($subcategory->photo)}}" data-price="{{$subcategory->price}}" >Buy</a>
                <a href="{{route('subcategories.show',$subcategory->id)}}" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>
          @endforeach     
  </div>
</div>
@endsection
@section ('script')


@endsection
