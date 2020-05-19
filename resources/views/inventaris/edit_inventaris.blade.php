@extends('layouts.main_layout')
@section('page-name') Ubah Data Inventaris [{{ $inventaris->kode_inventaris}}]@endsection
@section('icon') mdi-archive @endsection
@section('content')
{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="row p-2">
                <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-inverse-primary btn-icon-text pl-0 p-2"
                        href="{{ route('inventory') }}">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Kembali ke Data Inventaris
                    </a>
                </div>
            </div>
            <form action="{{ route('inventory.update.submit') }}" method="post">
                @csrf
                @method('PUT')
                {{-- FIELD --}}
                <input type="number" name="id" value="{{ $inventaris->id }}" hidden>
                <div class="modal-body">
                    {{-- Gedung --}}
                    <div class="form-group row">
                        <label for="gedung_id" class="col-md-4 col-form-label text-md-right">Gedung</label>
                        <div class="col-md-4">
                            <select id="search-building" name="gedung_id" class="form-control" required="required"
                                data-validation-required-message="Pilih gedung tempat inventaris">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($buildings as $building)
                                <option value="{{ $building->id }}" @if ($building->id==$inventaris->ruangan->gedung_id)
                                    selected
                                    @endif>{{ $building->nama_gedung }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Ruangan --}}
                    <div class=" form-group row">
                        <label for="semester" class="col-md-4 col-form-label text-md-right">Ruangan</label>
                        <div class="col-md-4">
                            <select id="search-room" name="ruangan_pemilik_id" class="form-control" required="required"
                                data-validation-required-message="Pilih Ruangan.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($rooms as $room)
                                <option @if ($room->id==$inventaris->ruangan_pemilik_id)
                                    selected
                                    @endif value="{{ $room->id }}">{{$room->nama_ruangan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Jenis Inventaris --}}
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
                            Inventaris</label>
                        <div class="col-md-4">
                            <select type="jenis_inventaris" name="jenis_inventaris_id" class="form-control" required
                                data-val="true" data-val-required="Pilih Jenis Inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach ($inventory_types as $type)
                                <option value="{{ $type->id }}" @if ($type->id==$inventaris->jenis_inventaris_id)
                                    selected
                                    @endif>{{ $type->nama_jenis_inventaris }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- No Seri --}}
                    <div class="form-group row">
                        <label for="no_seri" class="col-md-4 col-form-label text-md-right">No
                            Seri</label>
                        <div class="col-md-4">
                            <input name="no_seri" type="text" class="form-control" value="{{ $inventaris->no_seri }}">
                        </div>
                    </div>

                    {{-- Tanggal Terima --}}
                    <div class="form-group row">
                        <label for="tgl_terima" class="col-md-4 col-form-label text-md-right">Tanggal
                            Terima</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="date" name="tgl_terima" class="form-control"
                                    value="{{ $inventaris->tgl_terima }}">
                            </div>
                        </div>
                    </div>

                    {{-- Status Kelayakan --}}
                    <div class="form-group row">
                        <label for="status_kelayakan" class="col-md-4 col-form-label text-md-right">Status
                            Kelayakan</label>
                        <div class="col-md-4">
                            <select name="status_kelayakan" class="form-control" required="required"
                                data-validation-required-message="Silahkan pilih status kelayakan inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                <option value="0" @if ($inventaris->status_kelayakan == 0)
                                    selected
                                    @endif>Rusak</option>
                                <option value="1" @if ($inventaris->status_kelayakan == 1)
                                    selected
                                    @endif>Kurang Baik</option>
                                <option value="2" @if ($inventaris->status_kelayakan == 2)
                                    selected
                                    @endif>Baik</option>
                            </select>
                        </div>
                    </div>

                    {{-- Jenis Anggaran --}}
                    <div class="form-group row">
                        <label for="jenis_anggaran" class="col-md-4 col-form-label text-md-right">Jenis Anggaran</label>
                        <div class="col-md-4">
                            <select name="anggaran" class="form-control" required="required"
                                data-validation-required-message="Silahkan pilih jenis anggaran inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                <option value="OP" @if ($inventaris->anggaran == "OP")
                                    selected
                                    @endif>Operasional</option>
                                <option value="HB" @if ($inventaris->anggaran == "HB")
                                    selected
                                    @endif>Hibah</option>
                                <option value="IF" @if ($inventaris->anggaran == "IF")
                                    selected
                                    @endif>Infak</option>
                                <option value="PP" @if ($inventaris->anggaran == "PP")
                                    selected
                                    @endif>Program</option>
                            </select>
                        </div>
                    </div>

                    {{-- Keterangan --}}
                    <div class="form-group row">
                        <label for="status_kelayakan" class="col-md-4 col-form-label text-md-right">Keterangan</label>
                        <div class="col-md-4">
                            <textarea name="keterangan" cols="30" rows="10">{{ $inventaris->keterangan }}</textarea>
                        </div>
                    </div>

                    {{-- BUTTON --}}
                    <div class="form-group row">
                        <div class="col-md-12 text-md-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/js/data/inventory-edit-data.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#building-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
