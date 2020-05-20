@extends('layouts.main_layout')
@section('page-name') Kebutuhan Barang @endsection
@section('icon') mdi-archive @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Kebutuhan Barang</h2>
            {{-- ADD RECORD BUTTON --}}
            <div class="row pl-3 pb-2">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        data-toggle="modal" href="#TambahData">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambah Kebutuhan Barang
                    </a>
                </div>
            </div>

            {{-- Kolom Pencarian --}}
            <div class="card-body">
                <h4 class="card-title text-center">Pencarian</h4>
                <form class="form-sample" action="{{ route('inventory.needs.search') }}" method="POST">
                    @csrf
                    <div class="row">
                        {{-- KOLOM Gedung --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Gedung</label>
                                    <select class="form-control" id="search-building" name="building_id" required>
                                        <option disabled selected> --Pilih-- </option>
                                        @foreach ($buildings as $building)
                                        <option value="{{ $building->id }}">{{ $building->nama_gedung }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- RUANGAN --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Ruangan</label>
                                    <select class="form-control col-sm-12" id="search-room" name="room_id" required>
                                        <option disabled selected> --Pilih-- </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-gradient-primary mr-2">Cari</button>
                    </div>

                </form>
            </div>

            @if (isset($room_name)&&isset($building_name))
            <h5 class="card-title text-center">
                Hasil Pencarian <br> Gedung {{ $building_name }} <br> Ruang {{ $room_name }}
            </h5>
            @endif

            {{-- TABEL UTAMA --}}
            <div class="table pb-3 pt-3">
                <table id="needs-inventory-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>Ruangan</th>
                            <th>Jenis Inventaris</th>
                            <th>Jumlah</th>
                            <th>Baik</th>
                            <th>Kurang Baik</th>
                            <th>Rusak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($needs as $need)
                        <tr>
                            <td>{{ $need->ruangan->nama_ruangan }}</td>
                            <td>{{ $need->jenisInventaris->nama_jenis_inventaris }}</td>
                            <td>{{ $need->jumlah }}</td>
                            <td>{{ $need->baik }}</td>
                            <td>{{ $need->kurang_baik }}</td>
                            <td>{{ $need->rusak }}</td>
                            <td class="p-1 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit{{ $need->id }}">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a type="button" class="btn btn-inverse-info btn-icon p-2" align="center"
                                    title="Lihat Inventaris" href="{{ route('inventory', ['needId'=>$need->id]) }}">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    data-toggle="modal" href="#delete{{$need->id}}">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
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
            <form action="{{ route('inventory.needs.store') }}" method="POST">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="gedung" class="col-md-4 col-form-label text-md-right">Gedung</label>
                        <div class="col-md-6">
                            <select id="search-building2" name="building_id" class="form-control" required
                                data-val="true" data-val-required="Pilih Gedung">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($buildings as $building)
                                <option value="{{ $building->id }}">{{ $building->nama_gedung }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="semester" class="col-md-4 col-form-label text-md-right">Ruangan</label>
                        <div class="col-md-6">
                            <select id="search-room2" name="ruangan_id" class="form-control" required="required"
                                data-validation-required-message="Pilih Ruangan">
                                <option disabled selected> --Pilih-- </option>
                            </select>
                        </div>
                    </div>
                    {{-- Jenis Inventaris --}}
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
                            Inventaris</label>
                        <div class="col-md-6">
                            <select type="jenis_inventaris" name="jenis_inventaris_id" class="form-control" required
                                data-val="true" data-val-required="Pilih Jenis Inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->nama_jenis_inventaris }}</option>
                                @endforeach
                            </select>
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

@foreach ($needs as $need)
{{-- WINDOW DELETE DATA --}}
<div id="delete{{ $need->id }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('inventory.needs.delete') }}" method="POST">
                {{ csrf_field() }}
                @method('DELETE')
                {{-- FIELD --}}
                <input type="number" value="{{ $need->id }}" name="id" hidden>
                <div class="form-group row">
                    <div class="col-md-12 p-5 text-center" style="color: red;">
                        <h3>Yakin ingin menghapus kebutuhan barang {{ $need->jenisInventaris->nama_jenis_inventaris }}
                            di
                            Ruangan [{{ $need->ruangan->nama_ruangan }}] ?</h3>
                        <h4>Hal ini juga akan menghapus semua data inventaris yang terhubung dengan kebutuhan barang
                            ini.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- WINDOW EDIT DATA --}}
<div id="Edit{{ $need->id }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('inventory.needs.update') }}" method="POST">
                <input type="number" name="id" value="{{ $need->id }}" hidden>
                {{ csrf_field() }}
                @method('PUT')
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="semester" class="col-md-4 col-form-label text-md-right">Ruangan</label>
                        <div class="col-md-6">
                            <select name="ruangan_id" class="form-control" required="required"
                                data-validation-required-message="Pilih ruangan">
                                <option disabled> --Pilih-- </option>
                                @foreach ($rooms as $room)
                                <option value="{{ $room->id }}" @if ($room->id == $need->ruangan_id)
                                    selected
                                    @endif>
                                    {{ $room->gedung->nama_gedung . '/'.$room->nama_ruangan }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- Jenis Inventaris --}}
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
                            Inventaris</label>
                        <div class="col-md-6">
                            <select name="jenis_inventaris_id" class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled> --Pilih-- </option>
                                @foreach ($types as $type)
                                <option value="{{ $type->id }}" @if ($type->id == $need->jenis_inventaris_id)
                                    selected
                                    @endif>{{ $type->nama_jenis_inventaris }}</option>
                                @endforeach
                            </select>
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
@endforeach


@endsection
@section('script')
<script src="{{ asset('assets/js/data/inventory-data.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#needs-inventory-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
