@extends('layouts.main-layout')
@section('page-name') Tabel Siswa @endsection
@section('content')
                    {{-- CONTENT--}}
                    {{-- COMBINED TABLE --}}
                    <div class="row">

                        {{-- TAB BUTTON --}}
                        <div class="col-12 btn btn-group justify-content-center">
                            <div class="btn-group" style="width: 100%" role="group" aria-label="Basic example">
                                <button class="tab-link btn btn-outline-blue" style="border-color: #cacaca" onclick="openPage('DataSiswaPerTahun', this, '#FDD100')" id="defaultOpen">Tabel per Tahun Ajaran</button>
                                <button class="tab-link btn btn-outline-blue" style="border-color: #cacaca" onclick="openPage('DataSiswaPerWilayah', this, '#FDD100')" >Tabel per Wilayah</button>
                            </div>
                        </div>

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    {{-- TABEL PER TAHUN AJARAN --}}
                                    <div id="DataSiswaPerTahun" class="tab-content">
                                        {{-- KOLOM PENCARIAN --}}
                                        <div class="row">
                                            <div class="card-body">
                                                <form class="form-sample">
                                                    <div class="row justify-content-center">
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
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        {{-- TABEL HASIL PENCARIAN --}}
                                        <div class="row">
                                            <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center">TABEL {TAHUN AJARAN {2019/2020} SEMESTER {GANJIL}}</h5>
                                                    <h5 class="card-title text-center">{HASIL PENCARIAN}</h5>
                                                    <div class="col-md-12">
                                                    {{-- <div class="table-responsive"> --}}
                                                        <table id="" class="table table-responsive table-bordered">
                                                        {{-- <table id="searchTable" class="table table-bordered"> --}}
                                                            <thead class="text-center">
                                                                <tr>
                                                                    <th> Tahun Ajaran </th>
                                                                    <th> Kelas </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>

                                            </div>
                                        </div>
                                    </div>


                                    {{-- TABEL PER WILAYAH --}}
                                    <div id="DataSiswaPerWilayah" class="tab-content">
                                        {{-- KOLOM PENCARIAN --}}
                                        <div class="row">
                                            <div class="card-body">
                                                <form class="form-sample">
                                                    <div class="row justify-content-center">
                                                        {{-- KOLOM TAHUN AJARAN --}}
                                                        <div class="col-md-4">
                                                          <div class="form-group row">
                                                            <div class="text-center col-sm-12">
                                                              <label class="" for="tahun">Wilayah</label>
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
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        {{-- TABEL HASIL PENCARIAN --}}
                                        <div class="row">
                                            <div class="col-lg-12 grid-margin stretch-card">
                                            <div class="card">
                                                    <h5 class="card-title text-center">TABEL {TAHUN AJARAN {2019/2020} SEMESTER {GANJIL}}</h5>
                                                    <h5 class="card-title text-center">{HASIL PENCARIAN}</h5>
                                                <div class="card-body">
                                                    <div class="col-md-12">
                                                    {{-- <div class="table-responsive"> --}}
                                                        <table id="" class="table table-bordered">
                                                        {{-- <table id="searchTable" class="table table-bordered"> --}}
                                                            <thead class="text-center">
                                                                <tr>
                                                                    <th> Tahun Ajaran </th>
                                                                    <th> Kelas </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2019/2020 Semester Genap </td>
                                                                    <td>
                                                                        <a href="">Kelas 1A</a>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>                    


@endsection