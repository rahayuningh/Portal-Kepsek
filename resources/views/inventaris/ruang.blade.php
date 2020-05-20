@extends('layouts.main_layout')
@section('page-name') Data Ruangan @endsection
@section('icon') mdi-archive @endsection
@section('content')
{{-- CONTENT 1--}}
{{-- TABEL UTAMA--}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Data Ruangan</h2>
            {{-- ADD RECORD BUTTON --}}
            <div class="row p-2">
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
                <form class="form-sample" method="post" action="#">
                    @csrf
                    <div class="row">

                        {{-- KOLOM Gedung --}}
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Gedung</label>
                                    <select class="form-control" required>
                                        <option disabled selected> --Pilih-- </option>
                                        @foreach($gedung as $ged)
                                        <option value="{{$ged->id}}">{{$ged->nama_gedung}}</option>
                                        @endforeach
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

            {{-- <h5 class="card-title text-center"> Hasil Pencarian <br> Gedung {A} </h5> --}}

            {{-- TABEL UTAMA --}}
            <div class="table pb-3 pt-3">
                <table id="room-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Kode Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Jenis Ruangan</th>
                            {{-- <th>Penanggung Jawab</th> --}}
                            {{-- <th>Gedung</th> --}}
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp

                        @foreach($rooms as $dat)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$dat->kode_ruangan }}</td>
                            <td>{{$dat->nama_ruangan }}</td>
                            <td>{{$dat->jenis_ruangan->nama_jenis_ruangan }}</td>
                            {{-- <td>{{$dat->pegawai->id }}</td> --}}
                            {{-- <td>{{$dat->gedung->nama_gedung }}</td> --}}
                            <td>{{$dat->kapasitas_orang }}</td>
                            <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit{{$dat['id']}}">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="#deleteForm{{ $dat['id'] }}" type="button"
                                    class="btn btn-inverse-danger btn-icon p-2" title="Hapus" data-toggle="modal">
                                    <i class="mdi mdi-delete"></i>
                                </a>
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

            <form action="{{route('room.create')}}" method="post">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_gedung" class="col-md-4 col-form-label text-md-right">Gedung</label>
                        <div class="col-md-6">
                            <select id="nama_gedung" type="nama_gedung" name="gedung_id" class="form-control" required
                                data-val="true" data-val-required="Pilih Jenis Inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                @foreach($gedung as $ged)
                                <option value="{{$ged->id}}">{{$ged->nama_gedung}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ruangan" class="col-md-4 col-form-label text-md-right">Nama Ruangan</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nama_ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_ruangan" class="col-md-4 col-form-label text-md-right">Kode Ruangan</label>
                        <div class="col-md-6">
                            <input type="text" name="kode_ruangan" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_ruangan" class="col-md-4 col-form-label text-md-right">Jenis
                            Ruangan</label>
                        <div class="col-md-6">
                            <select id="jenis_ruangan" type="jenis_ruangan" name="jenis_ruangan_id" class="form-control"
                                required data-val="true" data-val-required="Pilih Jenis Ruangan">
                                <option disabled selected> --Pilih-- </option>
                                @foreach($jenis_ruangan as $jenis)
                                <option value="{{$jenis->id}}">{{$jenis->kode}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_penanggung_jawab" class="col-md-4 col-form-label text-md-right">Penanggung
                            Jawab</label>
                        <div class="col-md-6">
                            <select id="nama_penanggung_jawab" type="nama_penanggung_jawab" name="penanggung_jawab_id"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                {{-- // @foreach($penanggung_jawab as $data_di)
                                // <option value="{{$data_di['penanggung_jawab_id']}}">
                                // {{$data_di['nama_responsible_person']}}</option>
                                // @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kapasitas" class="col-md-4 col-form-label text-md-right">Kapasitas</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" name="kapasitas_orang">
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
<div id="Edit{{$dat['id']}}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Ruangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{route('room.update')}}" method="post">
                @method('patch')
                {{ csrf_field() }}
                {{-- FIELD --}}
                <input type="number" value="{{$dat['id']}}" name="id" hidden>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="gedung_id" class="col-md-4 col-form-label text-md-right">Gedung</label>
                        <div class="col-md-6">
                            <select id="gedung_id" type="gedung_id" name="gedung_id" class="form-control" required
                                data-val="true" data-val-required="Pilih Gedung ">
                                <option disabled selected>--Pilih--</option>
                                @foreach($gedung as $ged)
                                @if($ged->id==$dat['gedung_id'])
                                <option value="{{$ged->id}}" selected>{{$ged->nama_gedung}} </option>
                                @else
                                <option value="{{$ged->id}}">{{$ged->nama_gedung}} </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_ruangan" class="col-md-4 col-form-label text-md-right">Nama Ruangan</label>
                        <div class="col-md-6">
                            <input type="text" value="{{$dat['nama_ruangan']}}" class="form-control"
                                name="nama_ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_ruangan" class="col-md-4 col-form-label text-md-right">Kode Ruangan</label>
                        <div class="col-md-6">
                            <input type="text" value="{{$dat['kode_ruangan']}}" name="kode_ruangan"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_ruangan" class="col-md-4 col-form-label text-md-right">Jenis
                            Ruangan</label>
                        <div class="col-md-6">
                            <select id="jenis_ruangan" type="jenis_ruangan" name="jenis_ruangan_id" class="form-control"
                                required data-val="true" data-val-required="Pilih Jenis Ruangan">
                                <option disabled selected> --Pilih-- </option>
                                @foreach($jenis_ruangan as $jenis_)
                                @if($jenis_->id==$dat['jenis_ruangan_id'])
                                <option value="{{$jenis_->id}}" selected>{{$dat['jenis_ruangan_inisial']}}</option>
                                @else
                                <option value="{{$jenis_->id}}">{{$dat['jenis_ruangan_inisial']}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penanggung_jawab" class="col-md-4 col-form-label text-md-right">Penanggung
                            Jawab</label>
                        <div class="col-md-6">
                            <select id="penanggung_jawab" type="penanggung_jawab" name="penanggung_jawab_id"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled> --Pilih-- </option>
                                @foreach($penanggung_jawab as $penanggung)
                                @if($penanggung->id==$dat['penanggung_jawab_id'])
                                <option value="{{$penanggung->id}}" selected>{{$dat['nama_responsible_person']}}
                                </option>
                                @else
                                <option value="{{$penanggung->id}}">{{$dat['nama_responsible_person']}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kapasitas" class="col-md-4 col-form-label text-md-right">Kapasitas</label>
                        <div class="col-md-6">
                            <input type="number" name='kapasitas_orang' class="form-control"
                                value="{{$dat['kapasitas']}}">
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

{{-- @foreach ($data_ruangan as $dat) --}}
{{-- WINDOW DELETE DATA --}}
{{-- <div id="deleteForm{{ $dat['id'] }}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Hapus Data Ruangan </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('room.delete') }}" method="post">
            @csrf
            @method('DELETE')
            <input type="number" value="{{ $dat['id'] }}" name="id" hidden>
            <div class="modal-body">
                <h4 class="text-center">Yakin hapus data Ruangan {{ $dat['kode_ruangan'] }} ?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-primary">Ya</button>
            </div>
        </form>
    </div>
</div>
</div> --}}
{{-- @endforeach --}}

@endsection
@section('script')
<script src="{{ asset('assets/js/inventory-data.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#room-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
