@extends('layouts.main_layout')
@section('page-name') Data Inventaris @endsection
@section('icon') mdi-archive @endsection
@section('content')
{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Data Inventaris</h2>

            {{-- ADD RECORD BUTTON --}}
            <div class="row p-2">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        href="{{ route('inventory.needs') }}">
                        <i class="mdi mdi-arrow-left btn-icon-prepend"></i>
                        Kembali ke Kebutuhan Barang
                    </a>
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        data-toggle="modal" href="#TambahData">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambah Data Inventaris
                    </a>
                </div>
            </div>

            {{-- search bar --}}
            {{-- <div class="card-body">
                <h4 class="card-title text-center">Pencarian</h4>
                <form class="form-sample" action="{{ route('inventory.search') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Gedung</label>
                                    <select class="form-control" required id="search-building">
                                        <option disabled selected> --Pilih-- </option>
                                        @foreach ($buildings as $building)
                                        <option value="{{ $building->id }}">{{ $building->nama_gedung }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Ruangan</label>
                                    <select class="form-control col-sm-12" required id="search-room" name="room_id">
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
            </div> --}}

            {{-- @if (isset($building_name) && isset($room_name))
            <h5 class="card-title text-center"> Hasil Pencarian <br> Gedung {{ $building_name }} <br> Ruang
                {{ $room_name }}
            </h5>
            @endif --}}

            {{-- title bar --}}
            <h3 class="text-center">
                Data Inventaris [{{ $need->jenisInventaris->nama_jenis_inventaris }}]
                <br> di ruangan <br>
                [{{ $need->ruangan->nama_ruangan }}]
            </h3>

            {{-- TABEL UTAMA --}}
            <div class="table pb-3 pt-3">
                <table id="inventory-data-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>Kode Inventaris</th>
                            <th>No Seri</th>
                            <th>Tanggal Terima</th>
                            <th>Status Kelayakan</th>
                            <th>Jenis Anggaran</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inventories as $inventory)
                        <tr>
                            <td>{{ $inventory->kode_inventaris }}</td>
                            <td>{{ $inventory->no_seri }}</td>
                            <td>{{ $inventory->tgl_terima }}</td>
                            <td>
                                @switch($inventory->anggaran)
                                @case("OP")
                                Operasional
                                @break
                                @case("HB")
                                Hibah
                                @break
                                @case("IF")
                                Infak
                                @break
                                @case("PP")
                                Program
                                @break
                                @default
                                Error
                                @endswitch
                            </td>
                            <td>
                                @switch($inventory->status_kelayakan)
                                @case(0)
                                Rusak
                                @break
                                @case(1)
                                Kurang Baik
                                @break
                                @case(2)
                                Baik
                                @break
                                @default
                                Error
                                @endswitch</td>
                            <td>{{ $inventory->keterangan }}</td>
                            <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" align="center"
                                    title="Edit" href="{{ route('inventory.update', ['id'=>$inventory->id]) }}">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="#deleteForm{{ $inventory->id }}" type="button"
                                    class="btn btn-inverse-danger btn-icon p-2" title="Hapus" data-toggle="modal">
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
            <form action="{{ route('inventory.store') }}" method="post">
                @csrf
                {{-- FIELD --}}
                <div class="modal-body">
                    {{-- Kebutuhan ID --}}
                    <input type="number" value="{{ $need->id }}" name="kebutuhan_id" hidden>
                    {{-- No Seri --}}
                    <div class="form-group row">
                        <label for="no_seri" class="col-md-4 col-form-label text-md-right">No
                            Seri</label>
                        <div class="col-md-6">
                            <input name="no_seri" type="text" class="form-control">
                        </div>
                    </div>
                    {{-- Tanggal Terima --}}
                    <div class="form-group row">
                        <label for="tgl_terima" class="col-md-4 col-form-label text-md-right">Tanggal
                            Terima</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="date" name="tgl_terima" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    {{-- Status Kelayakan --}}
                    <div class="form-group row">
                        <label for="status_kelayakan" class="col-md-4 col-form-label text-md-right">Status
                            Kelayakan</label>
                        <div class="col-md-6">
                            <select name="status_kelayakan" class="form-control" required
                                data-validation-required-message="Silahkan pilih status kelayakan inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                <option value="0">Rusak</option>
                                <option value="1">Kurang Baik</option>
                                <option value="2">Baik</option>
                            </select>
                        </div>
                    </div>
                    {{-- Jenis Anggaran --}}
                    <div class="form-group row">
                        <label for="anggaran" class="col-md-4 col-form-label text-md-right">Jenis Anggaran</label>
                        <div class="col-md-6">
                            <select name="anggaran" class="form-control" required
                                data-validation-required-message="Silahkan pilih jenis anggaran inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                <option value="OP">Operasional</option>
                                <option value="HB">Hibah</option>
                                <option value="IF">Infak</option>
                                <option value="PP">Program</option>
                            </select>
                        </div>
                    </div>
                    {{-- Keterangan --}}
                    <div class="form-group row">
                        <label for="keterangan" class="col-md-4 col-form-label text-md-right">Keterangan</label>
                        <div class="col-md-6">
                            <textarea name="keterangan" cols="30" rows="10"></textarea>
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

@foreach ($inventories as $inventory)
{{-- WINDOW DELETE DATA --}}
<div id="deleteForm{{ $inventory->id }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Inventaris</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('inventory.delete') }}" method="post">
                @csrf
                @method('DELETE')
                <input type="number" value="{{ $inventory->id }}" name="id" hidden>
                {{-- FIELD --}}
                <div class="modal-body text-center">
                    <h4>Yakin hapus data inventaris {{ $inventory->kode_inventaris }} ?</h4>
                    <small>Hal ini juga akan mengubah jumlah di data kebutuhan barang</small>
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
        $('#inventory-data-table').DataTable({
        //   "searching": false
      });
    } );
</script>
@endsection
