@extends('layouts.main_layout')
@section('page-name') Data Guru @endsection
@section('icon') mdi-account-card-details @endsection
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Data Guru</h2>
            {{-- BUTTON --}}
            <div class="row p-3">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                    data-toggle="modal" href="#TambahDataGuru">
                    <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                    Tambah Data Guru
                </a>
            </div>

            <div class="table pb-3 pt-3">
                <table id="teacher-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>NIK</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $no }}</td>
                            <td><a
                                    href="{{ route('teacher.detail',['id'=>$teacher['id']]) }}">{{ $teacher['name'] }}</a>
                            </td>
                            <td>{{ $teacher['nik'] }}</td>
                            {{-- <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="" type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    onclick="return confirm('Yakin hapus data?')">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td> --}}
                        </tr>
                        @php
                        $no++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- MODAL CREATE GURU --}}
{{-- WINDOW TAMBAH DATA --}}
<div id="TambahDataGuru" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Masukkan Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="inventaris" method="post">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    {{-- Nama --}}
                    <div class="form-group row">
                        <label for="nama_guru" class="col-md-4 col-form-label text-md-right">Nama</label>
                        <div class="col-md-6">
                            <input name="nama_guru" id="nama_guru" type="text" class="form-control">
                        </div>
                    </div>
                    {{-- Input Select option --}}
                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">Tempat Lahir</label>
                        <div class="col-md-6">
                            <select id="tempat_lahir" type="tempat_lahir" name="tempat_lahir" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="">Aceh</option>
                                <option value="">Bandung</option>
                            </select>
                        </div>
                    </div>
                    {{-- Tanggal Lahir --}}
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Jenis Kelamin --}}
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
                        <div class="col-md-6">
                            <select id="jenis_kelamin" type="" name="jenis_kelamin" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="1">Laki-laki</option>
                                <option value="0">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    {{-- Agama --}}
                    <div class="form-group row">
                        <label for="agama" class="col-md-4 col-form-label text-md-right">Agama</label>
                        <div class="col-md-6">
                            <select id="agama" type="" name="agama" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="0">Islam</option>
                                <option value="1">Budha</option>
                                <option value="2">Hindu</option>
                                <option value="3">Kristen</option>
                                <option value="4">Katholik</option>
                            </select>
                        </div>
                    </div>
                    {{-- Kontak Person --}}
                    <div class="form-group row">
                        <label for="kontak_person" class="col-md-4 col-form-label text-md-right">Kontak Person</label>
                        <div class="col-md-6">
                            <input name="kontak_person" id="kontak_person" type="text" class="form-control">
                        </div>
                    </div>
                    {{-- NIP --}}
                    <div class="form-group row">
                        <label for="nip" class="col-md-4 col-form-label text-md-right">NIP</label>
                        <div class="col-md-6">
                            <input name="nip" id="nip" type="text" class="form-control">
                        </div>
                    </div>
                    {{-- Jabatan --}}
                    <div class="form-group row">
                        <label for="jabatan" class="col-md-4 col-form-label text-md-right">Jabatan</label>
                        <div class="col-md-6">
                            <select id="jabatan" type="" name="jabatan" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="1">Tetap</option>
                                <option value="0">Honorer</option>
                            </select>
                        </div>
                    </div>
                    {{-- Wali Kelas --}}
                    <div class="form-group row">
                        <label for="wali_kelas" class="col-md-4 col-form-label text-md-right">Wali Kelas</label>
                        <div class="col-md-6">
                            <select id="wali_kelas" type="" name="wali_kelas" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="">VIIA</option>
                                <option value="">IXB</option>
                            </select>
                        </div>
                    </div>
                    {{-- Mengajar --}}
                    <div class="form-group row">
                        <label for="mengajar" class="col-md-4 col-form-label text-md-right">Mengajar</label>
                        <div class="col-md-6">
                            <select id="mengajar" type="" name="mengajar" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="">Matematika</option>
                                <option value="">Biologi</option>
                            </select>
                        </div>
                    </div>
                    {{--Tempat Tinggal --}}
                    <div class="form-group row">
                        <label for="provinsi" class="col-md-4 col-form-label text-md-right">Provinsi</label>
                        <div class="col-md-6">
                            <select id="provinsi" type="" name="provinsi" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}Jenis Kelamin value="">Aceh</option>
                                <option value="">Jawa Barat</option>
                                <option value="">Jawa Tengah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kota" class="col-md-4 col-form-label text-md-right">Kabupaten/Kota</label>
                        <div class="col-md-6">
                            <select id="kota" type="" name="kota" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="">Madura</option>
                                <option value="">Bogir</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-md-4 col-form-label text-md-right">Kecamatan</label>
                        <div class="col-md-6">
                            <select id="kecamatan" type="" name="kecamatan" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="">Babakan</option>
                                <option value="">Bojong</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelurahan" class="col-md-4 col-form-label text-md-right">Kelurahan/Desa</label>
                        <div class="col-md-6">
                            <select id="kelurahan" type="" name="kelurahan" class="form-control" required="required">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}
                                <option value="">Babakan</option>
                                <option value="">Bojong</option>
                            </select>
                        </div>
                    </div>
                    {{-- Jalan, RT/RW--}}
                    <div class="form-group row">
                        <label for="jalan" class="col-md-4 col-form-label text-md-right">Jalan</label>
                        <div class="col-md-6">
                            <input name="jalan" id="jalan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rt_rw" class="col-md-4 col-form-label text-md-right">RT/RW</label>
                        <div class="col-md-3">
                            <input name="rt_rw" id="rt_rw" type="text" class="form-control">
                        </div>
                        <div class="pt-3">/</div>
                        <div class="col-md-3">
                            <input name="rw" id="rw" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                {{-- BUTTON --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready( function () {
        $('#teacher-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
