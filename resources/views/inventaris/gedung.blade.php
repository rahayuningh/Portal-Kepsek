@extends('layouts.main_layout')
@section('page-name') Data Gedung @endsection
@section('icon') mdi-archive @endsection
@section('content')
{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Data Gedung</h2>
            {{-- ADD RECORD BUTTON --}}
            <div class="row p-2">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        data-toggle="modal" href="#TambahData">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambah Gedung
                    </a>
                </div>
            </div>
            {{-- TABEL UTAMA --}}
            <div class="table pb-3 pt-3">
                <table id="building-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Gedung</th>
                            <th>Kode Gedung</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1
                        @endphp
                        @foreach($buildings as $building)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$building->nama_gedung}}</td>
                            <td>{{$building->kode_gedung}}</td>
                            <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit{{$building->id}}">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="#deleteForm{{$building->id}}" type="button"
                                    class="btn btn-inverse-danger btn-icon p-2" title="Hapus" data-toggle="modal">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                        @php
                        $no++
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

            <form action="{{route('building.create')}}" method="post">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_gedung" class="col-md-4 col-form-label text-md-right">Nama Gedung</label>
                        <div class="col-md-6">
                            <input name="nama_gedung" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_gedung" class="col-md-4 col-form-label text-md-right">Kode Gedung</label>
                        <div class="col-md-6">
                            <input name="kode_gedung" type="text" class="form-control">
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

@foreach($buildings as $building)
{{-- WINDOW EDIT DATA --}}
<div id="Edit{{$building->id}}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Gedung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('building.update')}}" method="post">
                @method('put')
                {{ csrf_field() }}
                {{-- FIELD --}}
                <input type="number" name='id' value="{{$building->id}}" hidden>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_gedung" class="col-md-4 col-form-label text-md-right">Nama Gedung</label>
                        <div class="col-md-6">
                            <input name="nama_gedung" class="form-control" value="{{$building->nama_gedung}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_gedung" class="col-md-4 col-form-label text-md-right">Kode Gedung</label>
                        <div class="col-md-6">
                            <input name="kode_gedung" class="form-control" value="{{$building->kode_gedung}}">
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

{{-- WINDOW DELETE DATA --}}
<div id="deleteForm{{ $building->id }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Gedung </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('building.delete') }}" method="post">
                <div class="modal-body p-3" style="color: red">
                    @csrf
                    @method('DELETE')
                    <input type="number" value="{{ $building->id}}" name="id" hidden>
                    {{-- FIELD --}}
                    <h4 class="text-center">Yakin hapus data Gedung {{ $building->kode_gedung }} /
                        {{ $building->nama_gedung }} ?</h4>
                    <h4 class="text-center">Hal ini akan menghapus semua data ruangan, kebutuhan barang, dan inventaris
                        di gedung {{ $building->nama_gedung }}</h4>
                </div>
                {{-- BUTTON --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
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
        $('#building-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
