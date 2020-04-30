@extends('layouts.auth')

@section('content')

{{-- FORM RESET IN --}}
<h4 class="text-center">RESET PASSWORD FROM EMAIL</h4>
<h6 class="text-center font-weight-light">Pesan verifikasi akan dikirimkan ke alamat email yang Anda masukan.</h6>

<form class="pt-3">

  <div class="form-group">
    <input id="email" type="email" placeholder="Email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
  <div class="mt-3">
    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="/verification">Kirim</a>
  </div>

</form>
@endsection