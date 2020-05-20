@extends('layouts.main_layout')
@section('page-name') Data Tenaga Pendidik @endsection
@section('icon') mdi-account-card-details @endsection
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Data Tenaga Pendidik</h2>
            {{-- BUTTON --}}
            <div class="row p-3">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        data-toggle="modal" href="#TambahDataTendik">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambah Data Tendik
                    </a>
                </div>


                <div class="table pb-3 pt-3">
                    <table id="tendik-table" class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th> Nama Tenaga Pendidik </th>
                                <th> NIK </th>
                                {{-- <th> Aksi </th> --}}
                            </tr>
                        </thead>

                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($tendiks as $tendik)
                            <tr>
                                <td>{{ $no }}</td>
                                <td><a
                                        href="{{ route('tendik.detail',['id'=>$tendik['id']]) }}">{{ $tendik['name'] }}</a>
                                </td>
                                <td>{{ $tendik['nik'] }}</td>
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

    {{-- MODAL CREATE TENDIK --}}
    {{-- WINDOW TAMBAH DATA --}}
    <div id="TambahDataTendik" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Masukkan Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('tendik.create') }}" method="post">
                    {{ csrf_field() }}
                    {{-- FIELD --}}
                    <div class="modal-body">
                        {{-- Nama --}}
                        <div class="form-group row">
                            <label for="nama_guru" class="col-md-4 col-form-label text-md-right">Nama</label>
                            <div class="col-md-6">
                                <input name="name" id="nama_guru" type="text" class="form-control" required>
                            </div>
                        </div>
                        {{-- Input Select option --}}
                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-md-4 col-form-label text-md-right">Tempat Lahir</label>
                            <div class="col-md-6">
                                <input name="tempat_lahir" id="nama_guru" type="text" class="form-control" required>
                            </div>
                        </div>
                        {{-- Tanggal Lahir --}}
                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="date" name="tanggal_lahir" id="tgl_lahir" class="form-control"
                                        placeholder="" required>
                                </div>
                            </div>
                        </div>
                        {{-- Jenis Kelamin --}}
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis
                                Kelamin</label>
                            <div class="col-md-6">
                                <select id="jenis_kelamin" type="" name="jenis_kelamin" class="form-control"
                                    required="required">
                                    <option disabled selected> --Pilih-- </option>
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
                                    @foreach ($religions as $item)
                                    <option value="{{$item->id}}">{{$item->nama_agama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- NIK --}}
                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>
                            <div class="col-md-6">
                                <input name="nik" id="nik" type="text" class="form-control" required>
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input name="email" id="nik" type="text" class="form-control" required>
                            </div>
                        </div>
                        {{-- Status Pegawai --}}
                        <div class="form-group row">
                            <label for="wali_kelas" class="col-md-4 col-form-label text-md-right">Status Pegawai</label>
                            <div class="col-md-6">
                                <select id="wali_kelas" type="" name="status_pegawai" class="form-control"
                                    required="required">
                                    <option disabled selected> --Pilih-- </option>
                                    <option value="0">Tetap</option>
                                    <option value="1">Honorer</option>
                                </select>
                            </div>
                        </div>
                        {{-- Jabatan --}}
                        <div class="form-group row">
                            <label for="jabatan" class="col-md-4 col-form-label text-md-right">Jabatan</label>
                            <div class="col-md-6">
                                <input name="jabatan" id="nik" type="text" class="form-control" required>
                            </div>
                        </div>
                        {{-- bagian Pekerjaan --}}
                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">Bagian Pekerjaan</label>
                            <div class="col-md-6">
                                <input name="bagian_pekerjaan" id="nik" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <hr>
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
        $('#tendik-table').DataTable({
        //   "searching": false
      });
    } );
    </script>
    @endsection
