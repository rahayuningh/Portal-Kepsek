@extends('layouts.auth')

@section('content')

{{-- FORM LOGIN/SIGN IN --}}
<h4></h4>
<h6 class="font-weight-light"></h6>
<form class="pt-3" method="POST" action="{{ route('login') }}">
    @csrf
    {{-- EMAIL --}}
    <div class="form-group">
        <input id="email" type="email" placeholder="Email"
            class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    {{-- PASSWORD --}}
    <div class="form-group">
        <input id="password" type="password" placeholder="Password"
            class="form-control @error('password') is-invalid @enderror" name="password" required
            autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    {{-- LOGIN BUTTON --}}
    <div class="mt-3">
        <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"> LOGIN
        </button>
    </div>
    @if (Route::has('register'))
    <div class="my-2 d-flex align-items-center">
        {{-- REGISTER --}}
        <p>Dont have account ? <a class="auth-link" href="{{ route('register') }}" target="_blank">Register</a></p>
    </div>
    @endif
</form>

@endsection
