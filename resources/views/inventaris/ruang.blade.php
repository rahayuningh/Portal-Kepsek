@extends('layouts.main_layout')
@section('page-name') Data Ruangan @endsection
@section('script')
<script src="{{ asset('assets/js/inventory-data.js') }}"></script>
@endsection
@section('content')
{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center" style="background-color: green; color: white">Data Ruangan</h2>
            {{-- ADD RECORD BUTTON --}}
            <div class="row pl-3 pb-2">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        data-toggle="modal" href="#TambahData">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambah Ruangan
                    </a>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-center">Pencarian</h4>
                <form class="form-sample">
                    <div class="row">
                        <div class="col-md-4"></div>
                        {{-- KOLOM Gedung --}}
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Gedung</label>
                                    <select class="form-control" required>
                                        <option disabled selected> --Pilih-- </option>
                                        <option>Gedung A</option>
                                        <option>Gedung B</option>
                                        <option>Gedung C</option>
                                        <option>Gedung D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="search" class="btn btn-gradient-primary mr-2">Cari</button>
                    </div>
                </form>
            </div>

            {{-- TABEL UTAMA --}}
            <div class="table">
                <table id="summary" class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Kode Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Jenis Ruangan</th>
                            <th>Penanggung Jawab</th>
                            <th>Gedung</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>BUAI212</td>
                            <td>Ruang Kumpul A</td>
                            <td>Ruang Sarpras</td>
                            <td>Pak Jokowi</td>
                            <td>Gedung A</td>
                            <td>150</td>
                            <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="" type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    onclick="return confirm('Yakin hapus data?')">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>BIASD9</td>
                            <td>Ruang Kumpul B</td>
                            <td>Ruang Sarpras</td>
                            <td>Pak Muhidin</td>
                            <td>Gedung B</td>
                            <td>100</td>
                            <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="" type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    onclick="return confirm('Yakin hapus data?')">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

{{-- WINDOW TAMBAH DATA --}}
<div id="TambahData" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Masukkan Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" method="">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Gedung</label>
                        <div class="col-md-6">
                            <select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                <option>Gedung A</option>
                                <option>Gedung B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Nama Ruangan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kode Ruangan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
                            Ruangan</label>
                        <div class="col-md-6">
                            <select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                <option>Ruangan Kelas</option>
                                <option>Ruangan Sarpras</option>
                                <option>Ruangan Tendik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Penanggung
                            Jawab</label>
                        <div class="col-md-6">
                            <select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                <option>Pak Heru</option>
                                <option>Pak Agus</option>
                                <option>Bu Mitha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kapasitas</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control">
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

{{-- WINDOW EDIT DATA --}}
<div id="Edit" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Ruangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Gedung</label>
                        <div class="col-md-6">
                            <select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled> --Pilih-- </option>
                                <option selected>Gedung A</option>
                                <option>Gedung B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Nama Ruangan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="Ruangan Serbaguna A">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kode Ruangan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="ASDHA721">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
                            Ruangan</label>
                        <div class="col-md-6">
                            <select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled> --Pilih-- </option>
                                <option>Ruangan Kelas</option>
                                <option selected>Ruangan Sarpras</option>
                                <option>Ruangan Tendik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Penanggung
                            Jawab</label>
                        <div class="col-md-6">
                            <select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled> --Pilih-- </option>
                                <option>Pak Heru</option>
                                <option selected>Pak Agus</option>
                                <option>Bu Mitha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kapasitas</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" value="120">
                        </div>
                    </div>
                </div>
                {{-- BUTTON --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
