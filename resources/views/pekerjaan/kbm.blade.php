@extends('layouts.main_layout')
@section('page-name') KBM @endsection
@section('icon') mdi-library-books @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Kegiatan Belajar Mengajar</h2>
            {{-- ADD RECORD BUTTON --}}
            <div class="row p-3">
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
                <form class="form-sample" method="POST" action="#">
                    @csrf
                    <div class="row">
                        {{-- KOLOM TAHUN AJARAN --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Tahun Ajaran</label>
                                    <select class="form-control" required>
                                        <option disabled selected> --Pilih-- </option>
                                        @foreach ($years as $year)
                                        <option value="{{ $year->id }}">{{ $year->tahun_ajaran }}</option>
                                        @endforeach
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
                                        <option value="0">Ganjil</option>
                                        <option value="1">Genap</option>
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
            <div class="table pb-3">
                <table id="kbm-table" class="table table-bordered table-responsive">
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
                        @php
                        $no=1;
                        @endphp
                        @foreach ($kbms as $kbm)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $kbm['subject'] }}</td>
                            <td><a href="#">{{ $kbm['class']->kode_kelas }}</a></td>
                            <td>
                                <a href="{{ route('teacher.detail', ['id'=>$kbm['teacher_id']]) }}">
                                    {{ $kbm['teacher_name'] }}
                                </a>
                            </td>
                            <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#EditData{{ $kbm['id'] }}">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="#" type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    onclick="event.preventDefault(); cek = confirm('Yakin hapus data?'); if (cek ==  true) {document.getElementById('delete-kbm-form{{ $kbm['id'] }}').submit();}">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                                <form id="delete-kbm-form{{ $kbm['id'] }}" action="{{ route('kbm.delete') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    <input type="number" value="{{ $kbm['id'] }}" name="id" hidden>
                                </form>
                            </td>
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

            <form action="{{ route('kbm.create') }}" method="POST">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    {{-- MAPEL --}}
                    <div class="form-group row">
                        <label for="mapel" class="col-md-4 col-form-label text-md-right">Mata Pelajaran</label>
                        <div class="col-md-6">
                            <select id="mapel" type="mapel" name="mata_pelajaran_id" class="form-control"
                                required="required" data-validation-required-message="Pilih Mata Pelajaran.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->nama_mapel }}</option>
                                @endforeach
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>
                        <div class="col-md-6">
                            <select id="kelas" type="kelas" name="kelas_id" class="form-control" required="required"
                                data-validation-required-message="Pilih kelas.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->kode_kelas }}</option>
                                @endforeach
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaguru" class="col-md-4 col-form-label text-md-right">Guru Pengampu</label>
                        <div class="col-md-6">
                            <select id="namaguru" type="namaguru" name="guru_pengajar" class="form-control"
                                required="required" data-validation-required-message="Pilih Nama Guru.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($teachers as $teacher)
                                <option value="{{ $teacher['id'] }}">{{ $teacher['name'] }}</option>
                                @endforeach
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
                                <option value="0">Ganjil</option>
                                <option value="1">Genap</option>
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

@foreach ($kbms as $kbm)
{{-- WINDOW EDIT DATA --}}
<div id="EditData{{ $kbm['id'] }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('kbm.update') }}" method="POST">
                {{ csrf_field() }}
                <input type="number" value="{{ $kbm['id'] }}" name="id" hidden>
                {{-- FIELD --}}
                <div class="modal-body">
                    {{-- MAPEL --}}
                    <div class="form-group row">
                        <label for="mapel" class="col-md-4 col-form-label text-md-right">Mata Pelajaran</label>
                        <div class="col-md-6">
                            <select id="mapel" type="mapel" name="mata_pelajaran_id" class="form-control"
                                required="required" data-validation-required-message="Pilih Mata Pelajaran.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}" @if ($subject->id == $kbm['subject_id']) selected
                                    @endif>{{ $subject->nama_mapel }}</option>
                                @endforeach
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>
                        <div class="col-md-6">
                            <select id="kelas" type="kelas" name="kelas_id" class="form-control" required="required"
                                data-validation-required-message="Pilih kelas.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($classes as $class)
                                <option value="{{ $class->id }}" @if ($class->id == $kbm['class']->id)
                                    selected
                                    @endif>{{ $class->kode_kelas }}</option>
                                @endforeach
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaguru" class="col-md-4 col-form-label text-md-right">Guru Pengampu</label>
                        <div class="col-md-6">
                            <select id="namaguru" type="namaguru" name="guru_pengajar" class="form-control"
                                required="required" data-validation-required-message="Pilih Nama Guru.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($teachers as $teacher)
                                <option value="{{ $teacher['id'] }}" @if ($teacher['id']==$kbm['teacher_id']) selected
                                    @endif>{{ $teacher['name'] }}</option>
                                @endforeach
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
                                <option value="0" @if ($kbm['term']==0) selected @endif>Ganjil</option>
                                <option value="1" @if ($kbm['term']==1) selected @endif>Genap</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                {{-- BUTTON --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endforeach

@endsection
@section('script')
<script>
    $(document).ready( function () {
        $('#kbm-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection