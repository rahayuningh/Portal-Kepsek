@extends('layouts.main_layout')
@section('page-name') KBM @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center" style="background-color: green; color: white">KEGIATAN BELAJAR MENGAJAR</h2>
            {{-- ADD RECORD BUTTON --}}
            <div class="row pl-3 pb-2">
                <div class="col-md-4">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        data-toggle="modal" href="#TambahData">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambahkan Data KBM
                    </a>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-center">Pencarian</h4>
                <form class="form-sample">
                    <div class="row">
                        {{-- KOLOM TAHUN AJARAN --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Tahun Ajaran</label>
                                    <select class="form-control" required>
                                        <option disabled selected> --Pilih-- </option>
                                        <option>2020/2021</option>
                                        <option>2019/2020</option>
                                        <option>2018/2019</option>
                                        <option>2017/2018</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- SEMESTER --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Semester</label>
                                    <select class="form-control col-sm-12" required>
                                        <option disabled selected> --Pilih-- </option>
                                        <option>Ganjil</option>
                                        <option>Genap</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
                            <th> Mata Pelajaran </th>
                            <th> Kelas </th>
                            <th> Nama Guru </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>Matematika</td>
                            <td><a href="">Kelas 1A</a></td>
                            <td><a href="">Morgan Mendel</a></td>
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
                            <td>Biologi</td>
                            <td><a href="">Kelas 1A</a></td>
                            <td><a href="">Morgan Mendel</a></td>
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
                    {{-- MAPEL --}}
                    <div class="form-group row">
                        <label for="mapel" class="col-md-4 col-form-label text-md-right">Mata Pelajaran</label>
                        <div class="col-md-6">
                            <select id="mapel" type="mapel" name="mapel" class="form-control" required="required"
                                data-validation-required-message="Pilih Mata Pelajaran.">
                                <option disabled selected> --Pilih-- </option>
                                <option>Matematika</option>
                                <option>Fisika</option>
                                <option>Biologi</option>
                                <option>Bahasa Indonesia</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>
                        <div class="col-md-6">
                            <select id="kelas" type="kelas" name="kelas" class="form-control" required="required"
                                data-validation-required-message="Pilih kelas.">
                                <option disabled selected> --Pilih-- </option>
                                <option>1A (2019/2020)</option>
                                <option>1B (2019/2020)</option>
                                <option>1C (2019/2020)</option>
                                <option>2A (2019/2020)</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaguru" class="col-md-4 col-form-label text-md-right">Guru Pengampu</label>
                        <div class="col-md-6">
                            <select id="namaguru" type="namaguru" name="namaguru" class="form-control"
                                required="required" data-validation-required-message="Pilih Nama Guru.">
                                <option disabled selected> --Pilih-- </option>
                                <option>Pak Budi</option>
                                <option>Bu Budi</option>
                                <option>Pak Kapang</option>
                                <option>Bu semlehoy</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="semester" class="col-md-4 col-form-label text-md-right">Semester</label>
                        <div class="col-md-6">
                            <select id="semester" type="semester" name="semester" class="form-control"
                                required="required" data-validation-required-message="Pilih semester.">
                                <option disabled selected> --Pilih-- </option>
                                <option>Ganjil</option>
                                <option>Genap</option>
                            </select>
                            <p class="help-block text-danger"></p>
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
                <h5 class="modal-title">Masukkan Data Terbaru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    {{-- MAPEL --}}
                    <div class="form-group row">
                        <label for="mapel" class="col-md-4 col-form-label text-md-right">Mata Pelajaran</label>
                        <div class="col-md-6">
                            <select id="mapel" type="mapel" name="mapel" class="form-control" required="required"
                                data-validation-required-message="Pilih Mata Pelajaran.">
                                <option disabled> --Pilih-- </option>
                                <option selected>Matematika</option>
                                <option>Fisika</option>
                                <option>Biologi</option>
                                <option>Bahasa Indonesia</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>
                        <div class="col-md-6">
                            <select id="kelas" type="kelas" name="kelas" class="form-control" required="required"
                                data-validation-required-message="Pilih kelas.">
                                <option disabled> --Pilih-- </option>
                                <option selected>1A (2019/2020)</option>
                                <option>1B (2019/2020)</option>
                                <option>1C (2019/2020)</option>
                                <option>2A (2019/2020)</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaguru" class="col-md-4 col-form-label text-md-right">Guru Pengampu</label>
                        <div class="col-md-6">
                            <select id="namaguru" type="namaguru" name="namaguru" class="form-control"
                                required="required" data-validation-required-message="Pilih Nama Guru.">
                                <option disabled> --Pilih-- </option>
                                <option selected>Pak Budi</option>
                                <option>Bu Budi</option>
                                <option>Pak Kapang</option>
                                <option>Bu semlehoy</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="semester" class="col-md-4 col-form-label text-md-right">Semester</label>
                        <div class="col-md-6">
                            <select id="semester" type="semester" name="semester" class="form-control"
                                required="required" data-validation-required-message="Pilih semester.">
                                <option disabled> --Pilih-- </option>
                                <option selected>Ganjil</option>
                                <option>Genap</option>
                            </select>
                            <p class="help-block text-danger"></p>
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
