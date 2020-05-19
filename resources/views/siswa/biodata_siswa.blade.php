@extends('layouts.main_layout')
@section('page-name') Biodata Siswa @endsection
@section('icon') mdi-account-multiple @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- BIODATA --}}
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Biodata Siswa</h2>
            <div class="card-body">
                {{-- CONTENT --}}
                <div class="row">
                    {{-- FOTO --}}
                    <div class="col-md-3 pb-10">
                        <div class="form-group text-center">
                            <img src="https://via.placeholder.com/150x200" alt="foto siswa">
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
                                {{-- <div class="form-group">
                                    <label>NIS</label>
                                    <p>0000000</p>
                                </div> --}}
                                <div class="form-group">
                                    <label>Nama</label>
                                    <p>{{ $civitas->nama }}</p>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Nama Panggilan</label>
                                    <p>LOREM</p>
                                </div> --}}
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <p>{{ $civitas->tempat_lahir }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <p>{{ $civitas->tanggal_lahir }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <p>
                                        @if ($civitas->jenis_kelamin)
                                        Laki-laki
                                        @else
                                        Perempuan
                                        @endif
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <p>{{ $religion->nama_agama }}</p>
                                </div>
                            </div>
                            {{-- KOLOM KANAN --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <p>{{ $student->nisn }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Asal Wilayah</label>
                                    <p>{{ $student->wilayah->nama_daerah }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Kelas 1</label>
                                    <p>{{ $student->kelas1->nama_kelas }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Kelas 2</label>
                                    <p>{{ $student->kelas2->nama_kelas }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Kelas 3</label>
                                    <p>{{ $student->kelas3->nama_kelas }}</p>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <p>Lorem</p>
                                </div>
                                <div class="form-group">
                                    <label>NO KK</label>
                                    <p>Lorem</p>
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <p>Lorem</p>
                                </div>
                                <div class="form-group">
                                    <label>No HP/Telepon yang bisa dikontak</label>
                                    <p>Lorem</p>
                                </div>
                                <div class="form-group">
                                    <label>Tempat tinggal saat ini</label>
                                    <p>Lorem</p>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <p>ANAK YATIM/ PIATU / YATIM PIATU/ TIDAK (lorem)</p>
                                </div> --}}
                            </div>
                        </div>

                        {{-- KETERANGAN TEMPAT TINGGAL --}}
                        {{-- <div class="form-group">
                            <h4>Keterangan Tempat Tinggal</h4>
                            <hr>
                        </div> --}}
                        {{-- <div class="row label-bold"> --}}
                        {{-- KOLOM KIRI --}}
                        {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Jalan</label>
                                    <p>Lorem</p>
                                </div>
                                <div class="form-group">
                                    <label>RT/RW</label>
                                    <p>Lorem</p>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kelurahan/Desa</label>
                                    <p>Lorem</p>
                                </div>
                            </div> --}}
                        {{-- KOLOM KANAN --}}
                        {{-- <div class="col-md-6">
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

                        {{-- CATATAN PRESTASI --}}
                        {{-- <div class="form-group">
                            <h4>Catatan Prestasi</h4>
                            <hr>
                            <ol>
                                <li>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
                                    Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum</li>
                                <li>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
                                    Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum</li>
                                <li>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
                                    Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum</li>
                                <li>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
                                    Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum</li>
                            </ol>
                        </div> --}}

                        {{-- IDENTITAS AYAH
                        <div class="form-group">
                            <h4>Identitas Ayah</h4>
                            <hr>
                        </div>
                        <div class="row label-bold">
                            {{-- KOLOM KIRI --}}
                        {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <p>NAMA AYAH</p>
                                </div>
                                <div class="form-group">
                                    <label>Tempat/Tanggal Lahir</label>
                                    <p>BOGOR, 1 JANUARI 1977</p>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <p>
                                        {NAMA JALAN} RT {00X} RW {00X}
                                        DESA/KELURAHAN {NAMA DESA/KELURAHAN}
                                        KECAMATAN {NAMA KECAMATAN}
                                        KABUPATEN {NAMA KABUPATEN}
                                        PROVINSI {NAMA PROVINSI}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan Terakhir</label>
                                    <p>(PAUD/SD/SMP/SMA)/SEDERAJAT</p>
                                </div>

                            </div> --}}
                        {{-- KOLOM KANAN --}}
                        {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kontak Person</label>
                                    <p>
                                        08xxxxxxxxxx<br>
                                        email@email.email
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <p>NAMA PEKERJAAN</p>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <p>NAMA JABATAN</p>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Kantor</label>
                                    <p>ALAMAT KANTOR</p>
                                </div>
                                <div class="form-group">
                                    <label>Penghasilan Perbulan</label>
                                    <p>Rp 2000,0000</p>
                                </div>
                            </div>
                        </div> --}}
                        {{-- IDENTITAS IBU --}}
                        {{-- <div class="form-group">
                            <h4>Identitas Ibu</h4>
                            <hr>
                        </div> --}}
                        {{-- <div class="row label-bold"> --}}
                        {{-- KOLOM KIRI --}}
                        {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <p>NAMA IBU</p>
                                </div>
                                <div class="form-group">
                                    <label>Tempat/Tanggal Lahir</label>
                                    <p>BOGOR, 1 JANUARI 1977</p>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <p>
                                        {NAMA JALAN} RT {00X} RW {00X}
                                        DESA/KELURAHAN {NAMA DESA/KELURAHAN}
                                        KECAMATAN {NAMA KECAMATAN}
                                        KABUPATEN {NAMA KABUPATEN}
                                        PROVINSI {NAMA PROVINSI}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan Terakhir</label>
                                    <p>(PAUD/SD/SMP/SMA)/SEDERAJAT</p>
                                </div>

                            </div> --}}
                        {{-- KOLOM KANAN --}}
                        {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kontak Person</label>
                                    <p>
                                        08xxxxxxxxxx<br>
                                        email@email.email
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <p>NAMA PEKERJAAN</p>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <p>NAMA JABATAN</p>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Kantor</label>
                                    <p>ALAMAT KANTOR</p>
                                </div>
                                <div class="form-group">
                                    <label>Penghasilan Perbulan</label>
                                    <p>Rp 2000,0000</p>
                                </div>
                            </div>
                        </div> --}}
                        {{-- IDENTITAS WALI --}}
                        {{-- <div class="form-group">
                            <h4>Identitas Wali</h4>
                            <hr>
                        </div> --}}
                        {{-- <div class="row label-bold"> --}}
                        {{-- KOLOM KIRI --}}
                        {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <p>NAMA WALI</p>
                                </div>
                                <div class="form-group">
                                    <label>Tempat/Tanggal Lahir</label>
                                    <p>BOGOR, 1 JANUARI 1977</p>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <p>
                                        {NAMA JALAN} RT {00X} RW {00X}
                                        DESA/KELURAHAN {NAMA DESA/KELURAHAN}
                                        KECAMATAN {NAMA KECAMATAN}
                                        KABUPATEN {NAMA KABUPATEN}
                                        PROVINSI {NAMA PROVINSI}
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan Terakhir</label>
                                    <p>(PAUD/SD/SMP/SMA)/SEDERAJAT</p>
                                </div>

                            </div> --}}
                        {{-- KOLOM KANAN --}}
                        {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kontak Person</label>
                                    <p>
                                        08xxxxxxxxxx<br>
                                        email@email.email
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <p>NAMA PEKERJAAN</p>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <p>NAMA JABATAN</p>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Kantor</label>
                                    <p>ALAMAT KANTOR</p>
                                </div>
                                <div class="form-group">
                                    <label>Penghasilan Perbulan</label>
                                    <p>Rp 2000,0000</p>
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
