@extends('layouts.auth')

@section('content')

{{-- FORM RESET IN --}}
<h4>RESET PASSWORD</h4>

<form method="POST" action="{{ route('password.update') }}">
  @csrf
  {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}

  {{-- EMAIL/USERNAME --}}
  <div class="form-group">
    <input id="email" type="email" placeholder="Email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>


  {{-- NEW PASSWORD --}}
  <div class="form-group">
    <input id="password" type="password" placeholder="Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  {{-- CONFIRM PASSWORD --}}
  <div class="form-group">
    <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password"placeholder="Password">
  </div>

  {{-- RESET BUTTON --}}
  <div class="mt-3">
    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="/confirm-reset">Reset</button>
  </div>

</form>

@endsection