@extends('layouts.main-layout')
@section('page-name') Biodata Pegawai @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- BIODATA --}}
<div class="row" id="">
    <div class="col-12 grid-margin">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center" style="background-color: green; color: white">Biodata Pegawai</h2>
            <div class="card-body">
                {{-- CONTENT --}}
                <div class="row">
                    {{-- FOTO --}}
                    <div class="col-md-3 pb-10">
                        <div class="form-group text-center">
                            <img src="assets/images/faces/face1.jpg">
                        </div>
                    </div>

                    {{-- DATA SISWA --}}
                    <div class="col-md-9">
                        {{-- DATA DIRI --}}
                        <div class="form-group">
                            <h4>Data Diri</h4>
                            <hr>
                        </div>
                        <div class="row label-bold">
                            {{-- KOLOM KIRI --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <p>LOREM IPSUM</p>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <p>BOGOR</p>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <p>1 JANUARI 2000</p>
                                </div>              
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <p>LAKI-LAKI</p>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <p>ISLAM</p>
                                </div>
                            </div>
                            {{-- KOLOM KANAN --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <p>19870922 6111 45611</p>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <p>GURU (HONORER/TETAP)</p>
                                </div>
                                <div class="form-group">
                                    <label>Wali Kelas</label>
                                    <p>1A</p>
                                </div>
                                <div class="form-group">
                                    <label>Mengajar KBM</label>
                                    <ol>
                                        <li>IPA</li>
                                        <li>B.Indonesia</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        {{-- KETERANGAN TEMPAT TINGGAL --}}
                        <div class="form-group">
                            <h4>Keterangan Tempat Tinggal</h4>
                            <hr>
                        </div>
                        <div class="row label-bold">
                            {{-- KOLOM KIRI --}}
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
                            {{-- KOLOM KANAN --}}
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
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection