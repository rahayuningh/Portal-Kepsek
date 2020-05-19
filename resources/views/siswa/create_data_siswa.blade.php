@extends('layouts.main_layout')
@section('page-name') Input Data Siswa @endsection
@section('icon') mdi-account-multiple @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- BIODATA --}}
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Input Data Siswa</h2>
            <div class="card-body">
                {{-- CONTENT --}}
                <form action="{{ route('student.create.submit') }}" method="POST">
                    @csrf
                    <div class="row">
                        {{-- FOTO --}}
                        <div class="col-md-3 pb-10">
                            <div class="form-group text-center">
                                <img src="https://via.placeholder.com/150x200" alt="foto siswa">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-inverse-primary p-2">Choose file...</button>
                            </div>
                        </div>

                        {{-- DATA SISWA --}}
                        <div class="col-md-9">
                            {{-- DATA DIRI --}}
                            <div class="form-group" style="background-color: #eee;">
                                <h4 class="mdi mdi-account-multiple p-2" style="">Data Diri</h4>
                            </div>
                            <div class="row label-bold">
                                {{-- KOLOM KIRI --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="name" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input name="tempat_lahir" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="tanggal_lahir" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="1">Laki-laki</option>
                                            <option value="0">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="agama" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            @foreach ($religions as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_agama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- KOLOM KANAN --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NISN</label>
                                        <input name="nisn" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Keaktifan</label>
                                        <select name="status_aktif" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            <option value="1">Aktif</option>
                                            <option value="0">Non-aktif</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kelas 1</label>
                                        <select name="kelas_1" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">
                                                {{ $class->tahun->tahun_ajaran.' - '.$class->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kelas 2</label>
                                        <select name="kelas_2" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">
                                                {{ $class->tahun->tahun_ajaran.' - '.$class->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kelas 3</label>
                                        <select name="kelas_3" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">
                                                {{ $class->tahun->tahun_ajaran.' - '.$class->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- KETERANGAN TEMPAT TINGGAL --}}
                            <div class="form-group">
                                <h6 style="font-weight: normal;">Keterangan Tempat Tinggal</h6>
                                <hr>
                            </div>
                            <div class="row label-bold">
                                {{-- KOLOM KIRI --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select id="provinsi" type="" name="wilayah" class="form-control"
                                            required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            @foreach ($regions as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_daerah }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <select id="kota" type="" name="kota" class="form-control" required="required"
                                            disabled>
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Madura</option>
                                            <option value="">Bogor</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select id="kecamatan" type="" name="kecamatan" class="form-control"
                                            required="required" disabled>
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Babakan</option>
                                            <option value="">Bojong</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- KOLOM KANAN --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Kelurahan/Desa</label>
                                        <select id="kelurahan" type="" name="kelurahan" class="form-control"
                                            required="required" disabled>
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Babakan</option>
                                            <option value="">Bojong</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Jalan</label>
                                        <input name="" id="" type="text" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <div><label>RT/RW</label></div>
                                        <div class="row pl-3">
                                            <input placeholder="RT" name="rt_rw" id="rt_rw" type="text"
                                                class="col-md-4 form-control" disabled>
                                            <div class="col-md-1"></div>
                                            <input placeholder="RW" name="rw" id="rw" type="text"
                                                class="col-md-4 form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- @include('siswa.extra-biodata') --}}

                        </div>
                    </div>

                    <hr>
                    <div class="row justify-content-end pt-6">
                        <div class="col-md-4 p-3"><button type="submit"
                                class="btn btn-primary btn-block">Simpan</button></div>
                        <div class="col-md-4 p-3"><a type="button" class="btn btn-secondary btn-block"
                                href="{{route('student')}}">Batal</a></div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
