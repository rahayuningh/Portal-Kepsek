@extends('layouts.main_layout')
@section('page-name') Data Siswa @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- KOLOM PENCARIAN --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        {{-- KOLOM PENCARIAN --}}
        <div class="card-body">
            <form class="form-sample">
                <div class="row">
                    {{-- KOLOM TAHUN AJARAN --}}
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="text-center col-sm-12">
                                <label class="" for="tahun">Tahun Ajaran</label>
                                <select class="form-control" required>
                                    <option disabled selected> --Pilih-- </option>
                                    <option>2020/2021</option>
                                    <option>2019/2020</option>
                                    <option>2018/2019</option>
                                    <option>2017/2018</option>
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
                    {{-- MATA PELAJARAN --}}
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="text-center col-sm-12">
                                <label class="" for="tahun">Wilayah</label>
                                <select class="form-control" id="search-region" required>
                                    <option disabled selected> --Pilih-- </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- TOMBOL SEARCH --}}
                <div class="row justify-content-center">
                    <button type="search" class="btn btn-gradient-primary mr-2">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- CONTENT 2--}}
{{-- DATA SISWA --}}
{{-- TABEL HASIL PENCARIAN --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center" style="background-color: green; color: white">Data Siswa</h2>
            <div class="card-body">
                <h5 class="card-title text-center">TABEL {TAHUN AJARAN {2019/2020} SEMESTER {GANJIL}}</h5>
                <h5 class="card-title text-center">{HASIL PENCARIAN}</h5>
                <div class="table">
                    <table id="student-table" class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th> NISN </th>
                                <th> Nama Siswa </th>
                                <th> Asal Wilayah </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td> 9027310723 </td>
                                <td><a href="{{ route('student.detail') }}">Morgan Mendel</a></td>
                                <td> Jambi </td>
                            </tr>
                            <tr>
                                <td> 2019/2020 </td>
                                <td><a href="{{ route('student.detail') }}">Morgan Mendel</a></td>
                                <td> Jambi </td>
                            </tr>
                            <tr>
                                <td> 2019/2020 </td>
                                <td><a href="{{ route('student.detail') }}">Morgan Mendel</a></td>
                                <td> Jambi </td>
                            </tr>
                            <tr>
                                <td> 2019/2020 </td>
                                <td><a href="{{ route('student.detail') }}">Morgan Mendel</a></td>
                                <td> Jambi </td>
                            </tr>
                            <tr>
                                <td> 2019/2020 </td>
                                <td><a href="{{ route('student.detail') }}">Morgan Mendel</a></td>
                                <td> Jambi </td>
                            </tr>
                            <tr>
                                <td> 2019/2020 </td>
                                <td><a href="{{ route('student.detail') }}">Morgan Mendel</a></td>
                                <td> Jambi </td>
                            </tr>
                        </tbody>


                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/js/region-data.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#student-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
