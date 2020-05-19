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
                <form>
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
                                        <label>NIS</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Panggilan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <select id="tempat_lahir" type="tempat_lahir" name="tempat_lahir" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            <option value="">Aceh</option>
                                            <option value="">Bandung</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input name="" id="" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select id="tempat_lahir" type="tempat_lahir" name="tempat_lahir" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Laki-laki</option>
                                            <option value="">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select id="tempat_lahir" type="tempat_lahir" name="tempat_lahir" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Islam</option>
                                            <option value="">Budha</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- KOLOM KANAN --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NISN</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>NO KK</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>No HP/Telepon yang bisa dikontak</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat tinggal saat ini</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Anak Yatim/Piatu</label>
                                        <select id="tempat_lahir" type="tempat_lahir" name="tempat_lahir" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            <option value="">YATIM</option>
                                            <option value="">YATIM PIATU</option>
                                            <option value="">TIDAK</option>
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
                                        <select id="provinsi" type="" name="provinsi" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}Jenis Kelamin value="">Aceh</option>
                                            <option value="">Jawa Barat</option>
                                            <option value="">Jawa Tengah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <select id="kota" type="" name="kota" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Madura</option>
                                            <option value="">Bogor</option>
                                        </select>
                                    </div><div class="form-group">
                                        <label>Kecamatan</label>
                                        <select id="kecamatan" type="" name="kecamatan" class="form-control" required="required">
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
                                        <select id="kelurahan" type="" name="kelurahan" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Babakan</option>
                                            <option value="">Bojong</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Jalan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div><label>RT/RW</label></div>
                                        <div class="row pl-3">
                                            <input placeholder="RT" name="rt_rw" id="rt_rw" type="text" class="col-md-4 form-control">
                                            <div class="col-md-1"></div>
                                            <input placeholder="RW" name="rw" id="rw" type="text" class="col-md-4 form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- CATATAN PRESTASI --}}
                            <div class="form-group">
                                <h4>Catatan Prestasi</h4>
                                <hr>
                                <ol>
                                    <li>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                        ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
                                        Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum</li>
                                    <li>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                        ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
                                        Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
                                    ipsum</li>
                                </ol>
                                <div class="form-group">
                                    <input name="" id="" type="text" class="form-control">
                                    <button class="col-md-3 pl-0 pr-0 btn btn-primary">+Tambah Prestasi</button>
                                </div>
                            </div>

                            {{-- IDENTITAS AYAH --}}
                            <div class="form-group" style="background-color: #eee;">
                                <h4 class="mdi mdi-account-multiple p-2" style="">Identitas Ayah</h4>
                            </div>
                            <div class="row label-bold">
                                {{-- KOLOM KIRI --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input placeholder="Tempat Lahir" name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input placeholder="" name="" id="" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <select id="pendidikan" type="" name="pendidikan" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            <option value="">PAUD/Sederajat</option>
                                            <option value="">SD/Sederajat</option>
                                            <option value="">SMP/Sederajat</option>
                                            <option value="">SMA/Sederajat</option>
                                            <option value="">Sarjana</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kontak Person</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                </div>
                                {{-- KOLOM KANAN --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Kantor</label>
                                        <input name="" id="" type="content" row=3 class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan Perbulan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 style="font-weight: normal;">Keterangan Tempat Tinggal Ayah</h6>
                                <hr>
                            </div>
                            <div class="row label-bold">
                                {{-- KOLOM KIRI --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select id="provinsi" type="" name="provinsi" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}Jenis Kelamin value="">Aceh</option>
                                            <option value="">Jawa Barat</option>
                                            <option value="">Jawa Tengah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <select id="kota" type="" name="kota" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Madura</option>
                                            <option value="">Bogor</option>
                                        </select>
                                    </div><div class="form-group">
                                        <label>Kecamatan</label>
                                        <select id="kecamatan" type="" name="kecamatan" class="form-control" required="required">
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
                                        <select id="kelurahan" type="" name="kelurahan" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Babakan</option>
                                            <option value="">Bojong</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Jalan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div><label>RT/RW</label></div>
                                        <div class="row pl-3">
                                            <input placeholder="RT" name="rt_rw" id="rt_rw" type="text" class="col-md-4 form-control">
                                            <div class="col-md-1"></div>
                                            <input placeholder="RW" name="rw" id="rw" type="text" class="col-md-4 form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- IDENTITAS IBU --}}
                            <div class="form-group" style="background-color: #eee;">
                                <h4 class="mdi mdi-account-multiple p-2" style="">Identitas Ibu</h4>
                            </div>
                            <div class="row label-bold">
                                {{-- KOLOM KIRI --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input placeholder="Tempat Lahir" name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input placeholder="" name="" id="" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <select id="pendidikan" type="" name="pendidikan" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            <option value="">PAUD/Sederajat</option>
                                            <option value="">SD/Sederajat</option>
                                            <option value="">SMP/Sederajat</option>
                                            <option value="">SMA/Sederajat</option>
                                            <option value="">Sarjana</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kontak Person</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                </div>
                                {{-- KOLOM KANAN --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Kantor</label>
                                        <input name="" id="" type="content" row=3 class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan Perbulan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 style="font-weight: normal;">Keterangan Tempat Tinggal Ibu</h6>
                                <hr>
                            </div>
                            <div class="row label-bold">
                                {{-- KOLOM KIRI --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select id="provinsi" type="" name="provinsi" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}Jenis Kelamin value="">Aceh</option>
                                            <option value="">Jawa Barat</option>
                                            <option value="">Jawa Tengah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <select id="kota" type="" name="kota" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Madura</option>
                                            <option value="">Bogor</option>
                                        </select>
                                    </div><div class="form-group">
                                        <label>Kecamatan</label>
                                        <select id="kecamatan" type="" name="kecamatan" class="form-control" required="required">
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
                                        <select id="kelurahan" type="" name="kelurahan" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Babakan</option>
                                            <option value="">Bojong</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Jalan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div><label>RT/RW</label></div>
                                        <div class="row pl-3">
                                            <input placeholder="RT" name="rt_rw" id="rt_rw" type="text" class="col-md-4 form-control">
                                            <div class="col-md-1"></div>
                                            <input placeholder="RW" name="rw" id="rw" type="text" class="col-md-4 form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- IDENTITAS WALI --}}
                            <div class="form-group" style="background-color: #eee;">
                                <h4 class="mdi mdi-account-multiple p-2" style="">Identitas Wali</h4>
                            </div>
                            <div class="row label-bold">
                                {{-- KOLOM KIRI --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input placeholder="Tempat Lahir" name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input placeholder="" name="" id="" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <select id="pendidikan" type="" name="pendidikan" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            <option value="">PAUD/Sederajat</option>
                                            <option value="">SD/Sederajat</option>
                                            <option value="">SMP/Sederajat</option>
                                            <option value="">SMA/Sederajat</option>
                                            <option value="">Sarjana</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kontak Person</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                </div>
                                {{-- KOLOM KANAN --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Kantor</label>
                                        <input name="" id="" type="content" row=3 class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan Perbulan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 style="font-weight: normal;">Keterangan Tempat Tinggal Wali</h6>
                                <hr>
                            </div>
                            <div class="row label-bold">
                                {{-- KOLOM KIRI --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select id="provinsi" type="" name="provinsi" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}Jenis Kelamin value="">Aceh</option>
                                            <option value="">Jawa Barat</option>
                                            <option value="">Jawa Tengah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten/Kota</label>
                                        <select id="kota" type="" name="kota" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Madura</option>
                                            <option value="">Bogor</option>
                                        </select>
                                    </div><div class="form-group">
                                        <label>Kecamatan</label>
                                        <select id="kecamatan" type="" name="kecamatan" class="form-control" required="required">
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
                                        <select id="kelurahan" type="" name="kelurahan" class="form-control" required="required">
                                            <option disabled selected> --Pilih-- </option>
                                            {{--nilainya 1--}}
                                            <option value="">Babakan</option>
                                            <option value="">Bojong</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Jalan</label>
                                        <input name="" id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div><label>RT/RW</label></div>
                                        <div class="row pl-3">
                                            <input placeholder="RT" name="rt_rw" id="rt_rw" type="text" class="col-md-4 form-control">
                                            <div class="col-md-1"></div>
                                            <input placeholder="RW" name="rw" id="rw" type="text" class="col-md-4 form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <div class="row justify-content-end pt-6">
                        <div class="col-md-4 p-3"><button type="submit" class="btn btn-primary btn-block">Simpan</button></div>
                        <div class="col-md-4 p-3"><a type="button" class="btn btn-secondary btn-block" href="{{route('student')}}">Batal</a></div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
