@extends('frontendtemplate')

@section('content')
<main class="register">
    <div class="container thumbnail">        
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                @csrf
                <h2>{{ __('Register Form') }}</h2>
                {{-- <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" name="user_photo" id="photo">                        
                    </div>
                </div> --}}
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label text-md-right">{{ __('Name') }}</label>
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
                    <label for="password" class="col-sm-3 control-label text-md-right">{{ __('Password') }}</label>
                    <div class="col-sm-9">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-sm-3 control-label text-md-right">{{ __('Confirm Password') }}</label>
                    <div class="col-sm-9">
                        <input iid="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="number" id="phone" placeholder="Phone" class="form-control" name="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nrc" class="col-sm-3 control-label">NRC</label>
                    <div class="col-sm-9">
                        <input type="text" id="nrc" placeholder="NRC" class="form-control" name="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" name="">
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
                </div> --}}
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
    
    </div>    
</main>
@endsection
