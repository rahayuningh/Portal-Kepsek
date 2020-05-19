@extends('layouts.main_layout')
@section('page-name') Biodata {{ $page }} @endsection
@section('content')
<div class="row" id="">
    <div class="col-12 grid-margin">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Biodata {{ $page }}</h2>
            <div class="card-body">
                {{-- CONTENT --}}
                <div class="row">
                    {{-- FOTO --}}
                    <div class="col-md-3 pb-10">
                        <div class="form-group text-center">
                            <img src="https://via.placeholder.com/150x200" alt="foto pegawai">
                        </div>
                    </div>

                    {{-- DATA GURU --}}
                    <div class=" col-md-9">
                        {{-- DATA DIRI --}}
                        <div class="form-group">
                            <h4>Data Diri</h4>
                            <hr>
                        </div>

                        {{-- DISESUAIKAN DARI SINI ############################### --}}
                        <div class="row label-bold">
                            {{-- KOLOM KIRI --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <p>{{ $civitas->nama }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <p>{{ $civitas->tempat_lahir }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <p>{{ $civitas->tanggal_lahir}}</p>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <p>@if ($civitas->jenis_kelamin==1)
                                        Laki-laki
                                        @else
                                        Perempuan
                                        @endif</p>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <p>{{ $religion->nama_agama }}</p>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Kotak Person</label>
                                    <p>
                                        nomor lorem <br>
                                        lorem@email.com
                                    </p>
                                </div> --}}
                            </div>
                            {{-- KOLOM KANAN --}}
                            @yield('right-column')
                        </div>
                        {{-- DISESUAIKAN SAMPAI SINI ############################### --}}


                        {{-- KETERANGAN TEMPAT TINGGAL --}}
                        {{-- <div class="form-group">
                            <h4>Keterangan Tempat Tinggal</h4>
                            <hr>
                        </div>
                        <div class="row label-bold">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Jalan</label>
                                    <p>NAMA JALAN</p>
                                </div>
                                <div class="form-group">
                                    <label>RT/RW</label>
                                    <p>001/003</p>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kelurahan/Desa</label>
                                    <p>NAMA DESA</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <p>NAMA KECAMATAN</p>
                                </div>
                                <div class="form-group">
                                    <label>Kabupaten/Kota</label>
                                    <p>NAMA KABUPATEN/DESA</p>
                                </div>
                                <div class="form-group">
                                    <label>PROVINSI</label>
                                    <p>NAMA PROVINSI</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
