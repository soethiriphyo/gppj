@extends('frontendtemplate')

@section('content')

<main class="register">
    <div class="container thumbnail">        
            <form class="form-horizontal" role="form" method="POST" action="{{route('policyform.store')}}">
                @csrf
                <h2>{{ __('Policy Form') }}</h2>                

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label text-md-right">{{ __('Full Name') }}</label>
                    <div class="col-sm-9">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="nrc" class="col-sm-3 control-label text-md-right">{{ __('NRC Number') }}</label>
                    <div class="col-sm-9">
                        <input id="nrc" type="text" class="form-control @error('nrc') is-invalid @enderror" name="nrc" value="{{ old('nrc') }}" required autocomplete="nrc" autofocus>
                        @error('nrc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob" class="col-sm-3 control-label text-md-right">{{ __('Date of Birth') }}</label>
                    <div class="col-sm-9">
                        <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                        @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <div class="col-sm-9">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                        <input type="number" id="phone" placeholder="Phone" class="form-control" name="">
                    </div>
                </div>        
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline" >
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                        <label class="col-sm-3 control-label">Address</label>
                        <textarea class="col-sm-9" placeholder="Address" name=""></textarea>       
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label text-md-right">{{ __('Policy Name') }}</label>
                    <div class="col-sm-9">
                        <input id="pname" type="text" class="form-control @error('pname') is-invalid @enderror" name="pname" value="{{ old('pname') }}" required autocomplete="pname" autofocus>
                        @error('pname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label text-md-right">{{ __('Property Photos')}}</label>
                    <div class="col-sm-9">
                        <input type="file" name="user_photo" id="photo" multiple>                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
            </form> <!-- /form -->
    
    </div>    
</main>






  


	
@endsection
