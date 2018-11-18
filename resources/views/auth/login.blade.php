@extends('layouts.app')

@section('content')
<div class="container login">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="login-block">
        <h3>Have an Account?</h3>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group row">
            <div class="col-md-8 offset-md-2">
              <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-8 offset-md-2">
              <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <button type="submit" class="btn btn-primary">
              {{ __('Login') }}
          </button>
        </form>
        </div>
      </div>       
        </div>
    </div>
</div>
@endsection
