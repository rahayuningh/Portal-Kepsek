@extends('layouts.main_layout')
@section('page-name') Data Inventaris @endsection
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
                        data-toggle="modal" href="#TambahData">
                        <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
                        Tambah Data Inventaris
                    </a>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-center">Pencarian</h4>
                <form class="form-sample">
                    <div class="row">
                        {{-- KOLOM Gedung --}}
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
                        {{-- RUANGAN --}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Ruangan</label>
                                    <select class="form-control col-sm-12" required id="search-room">
                                        <option disabled selected> --Pilih-- </option>
                                        @foreach ($ruangan as $r)
                                        <option value="{{$r->id}}"> {{$r->nama_ruangan}}</option>
                                        @endforeach
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

            <h5 class="card-title text-center"> Hasil Pencarian <br> Gedung {A} Ruang {Kelas 1B} </h5>

            {{-- TABEL UTAMA --}}
            <div class="table pb-3 pt-3">
                <table id="inventory-data-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th> Jenis Inventaris </th>
                            <th> Kode Inventaris </th>
                            <th> Tanggal Mulai Pakai </th>
                            <th> Status Kelayakan </th>
                            <th> Ruangan </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($inventaris>0)
                            @foreach($inventaris as $invent)
                            <tr>
                                <td>{{$invent->jenis_inventaris}}</td>
                                <td>{{$invent->kode_inventaris}}</td>
                                <td>{{$invent->tgl_mulai_pakai}}</td>
                                <td>{{$invent->status_kelayakan}}</td>
                                <td>{{$invent->jenis_ruangan_id}}</td>
                                <td class="p-0 text-center">
                                    <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                        align="center" title="Edit" href="#Edit/{{$inventaris->id}}">
                                        <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="" type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                        onclick="return confirm('Yakin hapus data?')">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <h3> Tidak Ada inventaris yang ada di database silahkan tambah data invent</h3>
                        @endif
                        {{--<tr>
                           <td>Meja Lipat</td>
                            <td>021B</td>
                            <td>23/04/2020</td>
                            <td>Tidak Layak</td>
                            <td>Ruang Kelas 1A</td>
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
                        </tr>--}}
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
            <form action="inventaris" method="post">
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    {{-- Jenis Inventaris --}}
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
                            Inventaris</label>
                        <div class="col-md-6">
                            <select id="jenis_inventaris" type="jenis_inventaris" name="jenis_inventaris"
                                class="form-control" required data-val="true"
                                data-val-required="Pilih Jenis Inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                {{--seharusnya diisi dengan nama inventaris yang ada kalo nggak ada bikin baru--}}
                                @if($jenis_inventaris>0)
                                    @foreach($jenis_inventaris as $jenis_i)      
                                        <option>{{$jenis_i->nama_jenis_inventaris}}</option>
                                    @endforeach
                                @else
                                    <h3>tidak ada jenis inventaris yang tersedia silahkan ketik nama inventaris baru maka 
                                        akan langsung ditambahkan ke database</h3>
                                @endif
                            </select>
                        </div>
                    </div>
                    {{-- Kode Inventaris --}} 
                    <div class="form-group row">
                        <label for="kode_inventaris" class="col-md-4 col-form-label text-md-right">Kode Inventaris</label>
                        <div class="col-md-6">
                            <input name="kode_inventaris" id="kode_inventaris" type="text" class="form-control">
                        </div>
                    </div>
                    {{-- Tanggal Mulai Pakai --}}
                    <div class="form-group row">
                        <label for="tgl_mulai_pakai" class="col-md-4 col-form-label text-md-right">Tanggal Mulai Pakai</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="date" name="tgl_mulai_pakai" id="tgl_mulai_pakai" class="form-control datepicker"
                                    placeholder="dd/mm/yyyy">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Status Kelayakan --}}
                    <div class="form-group row">
                        <label for="status_kelayakan" class="col-md-4 col-form-label text-md-right">Status Kelayakan</label>
                        <div class="col-md-6">
                            <select id="status_kelayakan" type="semester" name="status_kelayakan" class="form-control"
                                required="required" data-validation-required-message="Silahkan pilih status kelayakan inventaris.">
                                <option disabled selected> --Pilih-- </option>
                                {{--nilainya 1--}}    
                                <option value="1">Layak</option>
                                <option value="0">Rusak</option>
                            </select>
                        </div>
                    </div>
                    {{-- Gedung --}}
                    {{--<div class="form-group row">
                        <label for="gedung_id" class="col-md-4 col-form-label text-md-right">Gedung</label>
                        <div class="col-md-6">
                            <select id="gedung_id" type="semester" name="gedung_id" class="form-control"
                                required="required" data-validation-required-message="Pilih gedung tempat inventaris">
                                <option disabled selected> --Pilih-- </option>
                                @if($bulidings>0)
                                    @foreach($buildings as $building)
                                        <option value="{{$inventaris-">{{$building->nama_gedung}}</option>
                            </select>
                        </div>
                    </div>
                    --}}
                    {{-- Ruangan --}}
                    <div class="form-group row">
                        <label for="semester" class="col-md-4 col-form-label text-md-right">Ruangan</label>
                        <div class="col-md-6">
                            <select id="ruangan_pemilik_id" type="semester" name="ruangan_pemilik_id" class="form-control"
                                required="required" data-validation-required-message="Pilih semester.">
                                <option disabled selected> --Pilih-- </option>
                                @if($inventaris>0)
                                    @foreach($inventaris as $in)
                                        <option value="{{$inventaris->ruangan_pemilik_id}}">{{$in->ruangan_pemilik_id}}</option>
                                {{--<option>Ruang B</option>--}}
                                    @endforeach
                                @else
                                    <option>silahkan input ruangan baru untuk inventaris ditaruh.</option>
                                @endif
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

{{-- WINDOW EDIT DATA --}}
<div id="Edit/{inventaris}" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Inventaris</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/inventaris/{inventaris}/update" method="post">
                @method("patch")
                {{ csrf_field() }}
                {{-- FIELD --}}
                <div class="modal-body">
                    {{-- Jenis Inventaris --}}
                    $inventaris=Inventaris::findOrFail($id)
                    <div class="form-group row">
                        <label for="jenis_inventaris" class="col-md-4 col-form-label text-md-right">Jenis
                            Inventaris</label>
                        <div class="col-md-6">
                            <input type="text" name="jenis_inventaris" class="form-control" value="{{$inventaris->jenis_inventaris}}">
                        </div>
                    </div>
                    {{-- Kode Inventaris --}}
                    <div class="form-group row">
                        <label for="kode_inventaris" class="col-md-4 col-form-label text-md-right">Kode Inventaris</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="{{$inventaris->kode_inventaris}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_mulai_pakai" class="col-md-4 col-form-label text-md-right">Tanggal Mulai Pakai</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="tgl_mulai_pakai" id="tgl_mulai_pakai" class="form-control datepicker"
                                    placeholder="dd/mm/yyyy" value="{{$inventaris->tgl_mulai_pakai}}">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_kelayakan" class="col-md-4 col-form-label text-md-right">Status Kelayakan</label>
                        <div class="col-md-6">
                            <select id="status_kelayakan"type="semester" name="status_kelayakan" class="form-control"
                                required="required" data-validation-required-message="status_kelayakan">
                                <option disabled selected> --Pilih-- </option>
                                <option value="{{$inventaris->status_kelayakan}}">Layak</option>
                                {{--<option>Rusak</option>
                                    --}}
                            </select>
                        </div>
                    </div>
                    {{--<div class="form-group row">
                        <label for="semester" class="col-md-4 col-form-label text-md-right">Gedung</label>
                        <div class="col-md-6">
                            <select id="semester" type="semester" name="semester" class="form-control"
                                required="required" data-validation-required-message="Pilih semester.">
                                <option disabled selected> --Pilih-- </option>
                                <option selected>Gedung A</option>
                                <option>Gedung B</option>
                            </select>
                        </div>
                    </div>--}}
                    <div class="form-group row">
                        <label for="ruangan_id" class="col-md-4 col-form-label text-md-right">Ruangan</label>
                        <div class="col-md-6">
                            <input id="ruangan_id" type="text" name="ruangan_id" class="form-control" value="{{$inventaris->ruangan_id}}" required="required">
                                
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
@section('script')
<script src="{{ asset('assets/js/data/inventory-data.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#inventory-data-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
