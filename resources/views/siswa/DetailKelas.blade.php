@extends('layouts.main-layout')
@section('page-name') Detail Kelas @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- DAFTAR SISWA --}}
<div class="row" id="">
    <div class="col-md-4 grid-margin">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center" style="background-color: green; color: white">Daftar Kelas</h2>
            <div class="card-body" style="font-family: sans-serif;">
                <div class="row">
                    <div class="col-8">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin m-0 p-0">
        {{-- DETAIL --}}
        <div class="col grid-margin">
            <div class="card">
                {{-- HEADER --}}
                <h2 class="text-center" style="background-color: green; color: white">Detail Kelas</h2>
                <div class="card-body" style="font-family: sans-serif;  font-size: 100%; ">
                    <div class="row">
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
                                        <td> Lorem Ipsum </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- DAFTAR --}}
        <div class="col grid-margin">
            <div class="card">
                {{-- HEADER --}}
                <h2 class="text-center" style="background-color: green; color: white">Daftar Siswa</h2>
                {{-- <div class="card-body m-0" style="font-family: sans-serif;"> --}}
                    {{-- CONTENT --}}
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div  class="table">
                                <table class="table-border table-responsive">
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
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection