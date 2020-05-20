@extends('pegawai.biodata_pegawai')
@section('right-column')
<div class="col-md-6">
    <div class="form-group">
        <label>NIK</label>
        <p>{{ $pegawai->nik }}</p>
    </div>
    <div class="form-group">
        <label>Jabatan</label>
        <p>{{ $tendik->jabatan }} {{ $tendik->bagian_pekerjaan }} @if ($pegawai->status_pegawai==1) Honorer @else Tetap
            @endif
        </p>
    </div>
    <div class="form-group">
        <label>Email</label>
        <p>{{ $pegawai->email }}</p>
    </div>
</div>
@endsection
