@extends('pegawai.biodata_pegawai')
@section('right-column')
<div class="col-md-6">
    <div class="form-group">
        <label>NIP</label>
        <p>LOREM NOMOR NIP</p>
    </div>
    <div class="form-group">
        <label>Jabatan</label>
        <p>@if ($pegawai->status_pegawai==1)
            Honorer
            @else
            Tetap
            @endif</p>
    </div>
    <div class="form-group">
        <label>Wali Kelas</label>
        <p><a href="{{ route('class.detail', ['id'=>$class->id]) }}">{{ $class->nama_kelas }}</a></p>

    </div>
    <div class="form-group">
        <label>Mengajar KBM</label>
        <ol>
            @foreach ($kbms as $kbm)
            <li>{{ $kbm->mataPelajaran->nama_mapel }}</li>
            @endforeach
        </ol>
    </div>
    <div class="form-group">
        <label>Email</label>
        <p>{{ $pegawai->email }}</p>
    </div>
</div>
@endsection
