@extends('layouts.main_layout')
@section('page-name') Jenis Inventaris @endsection
@section('icon') mdi-archive @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Jenis Inventaris</h2>
            {{-- ADD RECORD BUTTON --}}
            <div class="row pl-3 pb-2">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        data-toggle="modal" href="#TambahData">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambah Jenis Inventaris
                    </a>
                </div>
            </div>

            {{-- TABEL UTAMA --}}
            <div class="table pb-3 pt-3">
                <table id="type-inventory-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>Nama Jenis Inventaris</th>
                            <th>Kategori</th>
                            <th>Merk</th>
                            <th>Harga Satuan</th>
                            <th>Ukuran</th>
                            <th>Bahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                        <tr>
                            <td>{{ $type->nama_jenis_inventaris }}</td>
                            <td>
                                @switch($type->kategori)
                                @case(1)
                                Elektronika
                                @break
                                @case(2)
                                Furniture
                                @break
                                @case(3)
                                Alat Musik
                                @break
                                @case(4)
                                Buku
                                @break
                                @case(5)
                                Komputer
                                @break
                                @case(6)
                                Perkakas
                                @break
                                @case(7)
                                Kendaraan
                                @break
                                @case(8)
                                Mesin
                                @break
                                @default
                                Error
                                @endswitch
                            </td>
                            <td>{{ $type->merk }}</td>
                            <td>{{ $type->harga_satuan }}</td>
                            <td>{{ $type->ukuran }}</td>
                            <td>{{ $type->bahan }}</td>
                            <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit{{ $type->id }}">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    data-toggle="modal" href="#delete{{$type->id}}">
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
            <form action="{{ route('inventory.type.store') }}" method="POST">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Nama Jenis Inventaris</label>
                        <div class="col-md-6">
                            <input type="text" name="nama_jenis_inventaris" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Kategori</label>
                        <div class="col-md-6">
                            <select name="kategori" class="form-control" required="required"
                                data-validation-required-message="Pilih kategori">
                                <option disabled selected> --Pilih-- </option>
                                <option value="1">Elektronik</option>
                                <option value="2">Furniture</option>
                                <option value="3">Alat Musik</option>
                                <option value="4">Buku</option>
                                <option value="5">Komputer</option>
                                <option value="6">Perkakas</option>
                                <option value="7">Kendaraan</option>
                                <option value="8">Mesin</option>
                            </select>
                        </div>
                    </div>
                    {{-- Merk --}}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Merk</label>
                        <div class="col-md-6">
                            <input type="text" name="merk" class="form-control" required>
                        </div>
                    </div>
                    {{-- Harga Satuan --}}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Harga Satuan</label>
                        <div class="col-md-6">
                            <input type="number" name="harga_satuan" class="form-control" required>
                        </div>
                    </div>
                    {{-- Ukuran --}}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Ukuran</label>
                        <div class="col-md-6">
                            <input type="text" name="ukuran" class="form-control" required>
                        </div>
                    </div>
                    {{-- Bahan --}}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Bahan</label>
                        <div class="col-md-6">
                            <input type="text" name="bahan" class="form-control" required>
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

@foreach ($types as $type)
{{-- WINDOW DELETE DATA --}}
<div id="delete{{ $type->id }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('inventory.type.delete') }}" method="POST">
                {{ csrf_field() }}
                @method('DELETE')
                {{-- FIELD --}}
                <input type="number" value="{{ $type->id }}" name="id" hidden>
                <div class="form-group row p-3">
                    <div class="col-md-12 text-center" style="color: red;">
                        <h3>Yakin ingin menghapus jenis inventaris [{{ $type->nama_jenis_inventaris }}] ?</h3>
                        <h4>Hal ini juga akan menghapus semua data kebutuhan barang yang terhubung dengan
                            jenis inventaris ini dan menghapus semua data inventaris yang terhubung dengan data
                            kebutuhan barang tersebut</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- WINDOW EDIT DATA --}}
<div id="Edit{{ $type->id }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('inventory.type.update') }}" method="POST">
                <input type="number" name="id" value="{{ $type->id }}" hidden>
                {{ csrf_field() }}
                @method('PUT')
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Nama Jenis Inventaris</label>
                        <div class="col-md-6">
                            <input type="text" name="nama_jenis_inventaris" class="form-control"
                                value="{{ $type->nama_jenis_inventaris }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Kategori</label>
                        <div class="col-md-6">
                            <select name="kategori" class="form-control" required
                                data-validation-required-message="Pilih kategori">
                                <option disabled selected> --Pilih-- </option>
                                <option value="1" @if ($type->kategori==1)
                                    selected
                                    @endif>Elektronik</option>
                                <option value="2" @if ($type->kategori==2)
                                    selected
                                    @endif>Furniture</option>
                                <option value="3" @if ($type->kategori==3)
                                    selected
                                    @endif>Alat Musik</option>
                                <option value="4" @if ($type->kategori==4)
                                    selected
                                    @endif>Buku</option>
                                <option value="5" @if ($type->kategori==5)
                                    selected
                                    @endif>Komputer</option>
                                <option value="6" @if ($type->kategori==6)
                                    selected
                                    @endif>Perkakas</option>
                                <option value="7" @if ($type->kategori==7)
                                    selected
                                    @endif>Kendaraan</option>
                                <option value="8" @if ($type->kategori==8)
                                    selected
                                    @endif>Mesin</option>
                            </select>
                        </div>
                    </div>
                    {{-- Merk --}}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Merk</label>
                        <div class="col-md-6">
                            <input type="text" name="merk" class="form-control" value="{{ $type->merk }}" required>
                        </div>
                    </div>
                    {{-- Harga Satuan --}}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Harga Satuan</label>
                        <div class="col-md-6">
                            <input type="number" name="harga_satuan" class="form-control"
                                value="{{ $type->harga_satuan }}" required>
                        </div>
                    </div>
                    {{-- Ukuran --}}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Ukuran</label>
                        <div class="col-md-6">
                            <input type="text" name="ukuran" class="form-control" value="{{ $type->ukuran }}" required>
                        </div>
                    </div>
                    {{-- Bahan --}}
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Bahan</label>
                        <div class="col-md-6">
                            <input type="text" name="bahan" class="form-control" value="{{ $type->bahan }}" required>
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
<script>
    $(document).ready( function () {
        $('#type-inventory-table').DataTable({
        //   "searching": false
      });
    } );
</script>
@endsection
