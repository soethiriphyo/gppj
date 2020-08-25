@extends('frontendtemplate')

@section('content')
<div class="container login thumbnail">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4" style="padding-top: 150px">
      <h2>Please log in</h2>

      <form method="post" action="{{ url('/auth/login') }}">
        {!! csrf_field() !!}

        <div class="form-group">
          <label for="InputEmail1">E-mail address</label>
          <input type="email" class="form-control" id="InputEmail1" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password" required>
        </div>

        <div class="checkbox">
            <label>
              <input type="checkbox" name="remember"> Remember me
            </label>
        </div>

        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>

        <p class="text-center">
          <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
        </p>

        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

      </form>
    </div>
  </div>
</div>
@endsection
