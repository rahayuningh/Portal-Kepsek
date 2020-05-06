@extends('layouts.main_layout')
@section('page-name') Status Pekerjaan Guru @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- TABEL RINGKASAN --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center" style="background-color: green; color: white">TABEL RINGKASAN</h2>
            <div class="table">
                <table id="summary" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-left"> No </th>
                            <th> Kelas </th>
                            <th> Mata Pelajaran </th>
                            <th> Nama Guru </th>
                            <th> Nilai UTS </th>
                            <th> Nilai UAS </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td>
                                <a href="">Kelas 1A</a>
                            </td>
                            <td>Matematika</td>
                            <td>
                                <a href="">Morgan Mendel</a>
                            </td>
                            <td class="bg-success">SELESAI</td>
                            <td class="bg-danger">BELUM</td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td>
                                <a href="">Kelas 1B</a>
                            </td>
                            <td>Kimia</td>
                            <td>
                                <a href="">Rahayuning</a>
                            </td>
                            <td class="bg-info">PROGRESS</td>
                            <td class="bg-info">PROGRESS</td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td>
                                <a href="">Kelas 1C</a>
                            </td>
                            <td>Fisika</td>
                            <td>
                                <a href="">Muhammad Fakhri</a>
                            </td>
                            <td class="bg-danger">BELUM</td>
                            <td class="bg-danger">BELUM</td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td>
                                <a href="">Kelas 1A</a>
                            </td>
                            <td>Matematika</td>
                            <td>
                                <a href="">Nabil Ahmad</a>
                            </td>
                            <td class="bg-success">SELESAI</td>
                            <td class="bg-success">SELESAI</td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td>
                                <a href="">Kelas 1B</a>
                            </td>
                            <td>Kimia</td>
                            <td>
                                <a href="">Jovano</a>
                            </td>
                            <td class="bg-info">PROGRESS</td>
                            <td class="bg-info">PROGRESS</td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td>
                                <a href="">Kelas 1C</a>
                            </td>
                            <td>Fisika</td>
                            <td>
                                <a href="">Hafizh Haritsa</a>
                            </td>
                            <td class="bg-danger">BELUM</td>
                            <td class="bg-danger">BELUM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- CONTENT 2--}}
{{-- TABEL RINGKASAN --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center" style="background-color: green; color: white">TABEL UTAMA</h2>
            {{-- KOLOM PENCARIAN --}}
            <div class="row">
                <div class="card-body">
                    <h4 class="card-title text-center">Pencarian</h4>
                    <form class="form-sample">
                        <div class="row">
                            {{-- KOLOM TAHUN AJARAN --}}
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="text-center col-sm-12">
                                        <label class="" for="tahun">Tahun Ajaran</label>
                                        <select class="form-control" required>
                                            <option disabled selected> --Pilih-- </option>
                                            <option>2019/2020 Semester Genap</option>
                                            <option>2019/2020 Semester Ganjil</option>
                                            <option>2018/2019 Semester Genap</option>
                                            <option>2018/2019 Semester Ganjil</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- MATA PELAJARAN --}}
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="text-center col-sm-12">
                                        <label class="" for="tahun">Mata Pelajaran</label>
                                        <select class="form-control col-sm-12" required>
                                            <option disabled selected> --Pilih-- </option>
                                            <option>Matematika</option>
                                            <option>Fisika</option>
                                            <option>Kimia</option>
                                            <option>Biologi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- KELAS --}}
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="text-center col-sm-12">
                                        <label class="" for="tahun">Kelas</label>
                                        <select class="form-control" required>
                                            <option disabled selected> --Pilih-- </option>
                                            <option>1A</option>
                                            <option>1B</option>
                                            <option>1C</option>
                                            <option>2A</option>
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
                {{-- TABEL HASIL PENCARIAN --}}
                <div class="card-body">
                    <h5 class="card-title text-center">TABEL {TAHUN AJARAN {2019/2020} SEMESTER {GANJIL}}</h5>
                    <h5 class="card-title text-center">{HASIL PENCARIAN}</h5>
                    <div class="table">
                        <table id="summary2" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="text-left"> No </th>
                                    <th> Kelas </th>
                                    <th> Mata Pelajaran </th>
                                    <th> Nama Guru </th>
                                    <th> Nilai Harian </th>
                                    <th> Nilai UTS </th>
                                    <th> Nilai UAS </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td>
                                        <a href="">Kelas 1A</a>
                                    </td>
                                    <td>Matematika</td>
                                    <td>
                                        <a href="">Morgan Mendel</a>
                                    </td>
                                    <td class="bg-success">SELESAI</td>
                                    <td class="bg-success">SELESAI</td>
                                    <td class="bg-success">SELESAI</td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td>
                                        <a href="">Kelas 1B</a>
                                    </td>
                                    <td>Kimia</td>
                                    <td>
                                        <a href="">Rahayuning</a>
                                    </td>
                                    <td class="bg-info">PROGRESS</td>
                                    <td class="bg-info">PROGRESS</td>
                                    <td class="bg-info">PROGRESS</td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td>
                                        <a href="">Kelas 1C</a>
                                    </td>
                                    <td>Fisika</td>
                                    <td>
                                        <a href="">Muhammad Fakhri</a>
                                    </td>
                                    <td class="bg-danger">BELUM</td>
                                    <td class="bg-danger">BELUM</td>
                                    <td class="bg-danger">BELUM</td>
                                </tr>
                                <tr>
                                    <td> 4 </td>
                                    <td>
                                        <a href="">Kelas 1A</a>
                                    </td>
                                    <td>Matematika</td>
                                    <td>
                                        <a href="">Nabil Ahmad</a>
                                    </td>
                                    <td class="bg-success">SELESAI</td>
                                    <td class="bg-success">SELESAI</td>
                                    <td class="bg-success">SELESAI</td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td>
                                        <a href="">Kelas 1B</a>
                                    </td>
                                    <td>Kimia</td>
                                    <td>
                                        <a href="">Jovano</a>
                                    </td>
                                    <td class="bg-info">PROGRESS</td>
                                    <td class="bg-info">PROGRESS</td>
                                    <td class="bg-info">PROGRESS</td>
                                </tr>
                                <tr>
                                    <td> 6 </td>
                                    <td>
                                        <a href="">Kelas 1C</a>
                                    </td>
                                    <td>Fisika</td>
                                    <td>
                                        <a href="">Hafizh Haritsa</a>
                                    </td>
                                    <td class="bg-danger">BELUM</td>
                                    <td class="bg-danger">BELUM</td>
                                    <td class="bg-danger">BELUM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
