@extends('frontendtemplate')

@section('content')
<main class="register">
    <div class="container thumbnail">        
            <form class="form-horizontal" role="form" method="POST" action="{{ route('claims.store') }}">
                @csrf
                <h2>{{ __('Claim Request Form') }}</h2>
                
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label text-md-right" >{{__('name')}}</label>
                    <div class="col-sm-9">
                       
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="user_name" value="{{$user->name}}" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label text-md-right">{{__('email')}}</label>
                    <div class="col-sm-9">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                               
                
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="number" id="phone" placeholder="Phone" class="form-control" name="phone">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label">Description</label>
                        <textarea class="col-sm-9" placeholder="description" name="description" class="form-control"></textarea>                    
                </div>
                <div class="form-group">
                		<label class="col-sm-3 control-label">Insurance Plan</label>
                		<select name="subcategory" class="form-control" >
                			<optgroup label="Choose Insurance Plan">
                				@foreach ($subcategories as $subcategory)
                					<option class="col-sm-9" value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                				@endforeach
                			</optgroup>
                		</select>
                </div>                
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        @role('customer')
                        <button type="submit" class="btn btn-primary btn-block">Claim</button>
                        @else
                        <button type="submit" class="btn btn-primary btn-block">Login to claim</button>
                        @endrole
                    </div>
                </div>
            </form> <!-- /form -->
    
    </div>    
</main>

@endsection