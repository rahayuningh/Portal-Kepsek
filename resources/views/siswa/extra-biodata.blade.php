{{-- CATATAN PRESTASI --}}
<div class="form-group">
    <h4>Catatan Prestasi</h4>
    <hr>
    <ol>
        <li>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
            Lorem
            ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
            ipsum,
            Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
            Lorem
            ipsum</li>
        <li>Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
            Lorem
            ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem
            ipsum,
            Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum,
            Lorem
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
        </div>
        <div class="form-group">
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
        </div>
        <div class="form-group">
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
        </div>
        <div class="form-group">
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
