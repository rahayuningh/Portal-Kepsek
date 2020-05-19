@extends('layouts.main_layout')
@section('page-name') Data Mata Pelajaran @endsection
@section('icon') mdi-library-books @endsection
@section('content')
{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Data Mata Pelajaran</h2>
            {{-- ADD RECORD BUTTON --}}
            <div class="row pl-3 pb-2">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        data-toggle="modal" href="#TambahData">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambah Mata Pelajaran
                    </a>
                </div>
            </div>
            {{-- TABEL UTAMA --}}
            <div class="table pb-3 pt-3">
                <table id="course-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Kode Mata Pelajaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($mata_pelajarans as $mapel)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $mapel->nama_mapel }}</td>
                            <td>{{ $mapel->kode_mapel }}</td>
                            <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit{{ $mapel['id'] }}">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="#" type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    onclick="event.preventDefault(); cek = confirm('Yakin hapus data?'); if (cek == true) {document.getElementById('delete-mapel-form{{ $mapel->id }}').submit();}">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                                <form id="delete-mapel-form{{ $mapel->id }}" action="{{ route('subject.delete') }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    <input type="number" value="{{ $mapel['id'] }}" name="id" hidden>
                                </form>
                            </td>
                            @php
                            $no++;
                            @endphp
                            @endforeach
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

            <form action="{{ route('subject.create') }}" method="POST">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Mata Pelajaran</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kode Mata Pelajaran</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="kode_mapel" name="kode_mapel">
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

@foreach ($mata_pelajarans as $mapel)
{{-- WINDOW DELETE DATA --}}
<div id="Delet{{ $mapel->id }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Mata Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('subject.update') }}" method="POST">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <input type="number" name="id" value="{{ $mapel->id}}" hidden>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Mata Pelajaran</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel"
                                value="{{ $mapel->nama_mapel}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kode Mata Pelajaran</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="kode_mapel" name="kode_mapel"
                                value="{{ $mapel->kode_mapel }}">
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

@foreach ($mata_pelajarans as $mapel)
{{-- WINDOW EDIT DATA --}}
<div id="Edit{{ $mapel->id }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Mata Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('subject.update') }}" method="POST">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <input type="number" name="id" value="{{ $mapel->id}}" hidden>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Mata Pelajaran</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel"
                                value="{{ $mapel->nama_mapel}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kode Mata Pelajaran</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="kode_mapel" name="kode_mapel"
                                value="{{ $mapel->kode_mapel }}">
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
<script src="{{ asset('assets/js/inventory-data.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#course-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
