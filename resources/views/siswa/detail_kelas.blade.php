@extends('layouts.main_layout')
@section('page-name') Detail Kelas @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- DAFTAR SISWA --}}
<div class="row" id="">
    <div class="col-md-4 grid-margin">
        <div class="card">
            {{-- FILTER --}}
            <h2 class="text-center" style="background-color: green; color: white">Daftar Kelas</h2>
            <h4 class="card-title text-center">Pencarian</h4>
            <form class="form-sample">
                <div class="row">
                    <div class="col-md-2"></div>
                    {{-- KOLOM Gedung --}}
                    <div class="col-md-8">
                        <div class="form-group row">
                            <div class="text-center col-sm-12">
                                <label class="" for="tahun">Tahun Ajaran</label>
                                <select class="form-control" required>
                                    <option disabled selected> --Pilih-- </option>
                                    <option>2019/2020</option>
                                    <option>2018/2019</option>
                                    <option>2017/2018</option>
                                    <option>2016/2017</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </form>
            {{-- KELAS --}}
            <div class="text-center col-sm-12">
                <div>
                    <label class="" for="kelas">Kelas</label>
                </div>
                <div>
                    <div class="" onclick="openPage('empty', this, '')" id="defaultOpen"></div>
                    <button class="tab-link btn btn-inverse-info btn-icon" onclick="openPage('1A', this, '#198ae3')" id="">1A</button>
                    <button class="tab-link btn btn-inverse-info btn-icon" onclick="openPage('1B', this, '#198ae3')" id="">1B</button>
                    <button class="tab-link btn btn-inverse-info btn-icon" onclick="openPage('1C', this, '#198ae3')" id="">1C</button>
                    <button class="tab-link btn btn-inverse-info btn-icon" onclick="openPage('1D', this, '#198ae3')" id="">1D</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin m-0 p-0">
        <div class="col grid-margin">
            <div class="card ">
                <h2 class="text-center" style="background-color: green; color: white">Detail Kelas</h2>
                {{-- EMPTY --}}
                <div id="empty" class="tab-content">
                    {{-- KETERANGAN --}}
                    <div class="pl-2">
                        <table>
                            <tbody>
                                <tr>
                                    <td> Tahun Ajaran </td>
                                    <td> : </td>
                                    <td> - </td>
                                </tr>
                                <tr>
                                    <td> Kelas </td>
                                    <td> : </td>
                                    <td> - </td>
                                </tr>
                                <tr>
                                    <td> Wali Kelas </td>
                                    <td> : </td>
                                    <td> - </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- DAFTAR SISWA --}}
                    <div class="table">
                        <table id="" class="table table-hover table-border">
                            <thead>
                                <th>No</th>
                                <th width="500">Nama</th>
                                <th>NIS</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>                
                </div>

                {{-- ADA DATA --}}
                {{-- Kelas 1A --}}
                <div id="1A" class="tab-content">
                    {{-- KETERANGAN --}}
                    <div class="pl-2">
                        <table>
                            <tbody>
                                <tr>
                                    <td> Tahun Ajaran </td>
                                    <td> : </td>
                                    <td> 2019/2020 </td>
                                </tr>
                                <tr>
                                    <td> Kelas </td>
                                    <td> : </td>
                                    <td> 1A </td>
                                </tr>
                                <tr>
                                    <td> Wali Kelas </td>
                                    <td> : </td>
                                    <td> <a href="/bio-pegawai">Lorem Ipsum</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- DAFTAR SISWA --}}
                    <div class="table">
                        <table id="" class="table table-hover table-border">
                            <thead>
                                <th>No</th>
                                <th width="500">Nama</th>
                                <th>NIS</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>1111</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                
                </div>
                {{-- Kelas 1B --}}
                <div id="1B" class="tab-content">
                    {{-- KETERANGAN --}}
                    <div class="pl-2">
                        <table>
                            <tbody>
                                <tr>
                                    <td> Tahun Ajaran </td>
                                    <td> : </td>
                                    <td> 2019/2020 </td>
                                </tr>
                                <tr>
                                    <td> Kelas </td>
                                    <td> : </td>
                                    <td> 1B </td>
                                </tr>
                                <tr>
                                    <td> Wali Kelas </td>
                                    <td> : </td>
                                    <td> <a href="/bio-pegawai">Lorem</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- DAFTAR SISWA --}}
                    <div class="table">
                        <table id="" class="table table-hover table-border">
                            <thead>
                                <th>No</th>
                                <th width="500">Nama</th>
                                <th>NIS</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>1111</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                
                </div>
                {{-- Kelas 1C --}}
                <div id="1C" class="tab-content">
                    {{-- KETERANGAN --}}
                    <div class="pl-2">
                        <table>
                            <tbody>
                                <tr>
                                    <td> Tahun Ajaran </td>
                                    <td> : </td>
                                    <td> 2019/2020 </td>
                                </tr>
                                <tr>
                                    <td> Kelas </td>
                                    <td> : </td>
                                    <td> 1C </td>
                                </tr>
                                <tr>
                                    <td> Wali Kelas </td>
                                    <td> : </td>
                                    <td> <a href="/bio-pegawai">Ipsum</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- DAFTAR SISWA --}}
                    <div class="table">
                        <table id="" class="table table-hover table-border">
                            <thead>
                                <th>No</th>
                                <th width="500">Nama</th>
                                <th>NIS</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>1111</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                
                </div>
                {{-- Kelas 1D --}}
                <div id="1D" class="tab-content">
                    {{-- KETERANGAN --}}
                    <div class="pl-2">
                        <table>
                            <tbody>
                                <tr>
                                    <td> Tahun Ajaran </td>
                                    <td> : </td>
                                    <td> 2019/2020 </td>
                                </tr>
                                <tr>
                                    <td> Kelas </td>
                                    <td> : </td>
                                    <td> 1D </td>
                                </tr>
                                <tr>
                                    <td> Wali Kelas </td>
                                    <td> : </td>
                                    <td> <a href="/bio-pegawai">Lorem Lorem</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- DAFTAR SISWA --}}
                    <div class="table">
                        <table id="" class="table table-hover table-border">
                            <thead>
                                <th>No</th>
                                <th width="500">Nama</th>
                                <th>NIS</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>1111</td>
                                    <td>
                                        <a href="">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
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
