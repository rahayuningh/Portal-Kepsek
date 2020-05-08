@extends('layouts.main_layout')
@section('page-name') Detail Kelas @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- DAFTAR SISWA --}}
<div class="row" id="">
    <div class="col-md-4 grid-margin">
        <div class="card pb-3">
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
                    {{-- #198ae3 --}}
                    <button class="tab-link btn btn-inverse-info btn-icon">1A</button>
                    <button class="tab-link btn btn-inverse-info btn-icon">1B</button>
                    <button class="tab-link btn btn-inverse-info btn-icon">1C</button>
                    <button class="tab-link btn btn-inverse-info btn-icon">1D</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin m-0 p-0">
        <div class="col grid-margin">
            <div class="card pb-3">
                <h2 class="text-center" style="background-color: green; color: white">Detail Kelas</h2>
                <div id="1A" class="tab-content">
                    {{-- KETERANGAN --}}
                    <div class="pl-2 mb-3">
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
                                    <td> <a href="{{ route('teacher.detail') }}">Lorem Ipsum</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- DAFTAR SISWA --}}
                    <div class="table">
                        <table id="class-table" class="table table-hover table-border">
                            <thead>
                                <th>No</th>
                                <th width="500">Nama</th>
                                <th>NIS</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="{{ route('student.detail') }}">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <a href="{{ route('student.detail') }}">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum>
                                    </td>
                                    <td>000XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <a href="{{ route('student.detail') }}">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</a>
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
@section('script')
<script>
    $(document).ready( function () {
        $('#class-table').DataTable();
    } );
</script>
@endsection
