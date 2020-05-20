@extends('layouts.main_layout')
@section('page-name') Data Siswa @endsection
@section('icon') mdi-account-multiple @endsection
@section('content')

{{-- CONTENT 1 --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        {{-- KOLOM PENCARIAN --}}
        <div class="card-body">
            <form class="form-sample" method="POST" action="{{ route('student.search') }}">
                @csrf
                <div class="row">
                    {{-- KOLOM TAHUN AJARAN --}}
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="text-center col-sm-12">
                                <label class="" for="tahun">Tahun Ajaran</label>
                                <select class="form-control" id="search-year" required name="year">
                                    <option disabled selected> --Pilih-- </option>
                                    @foreach ($schoolYears as $year)
                                    <option value="{{ $year->id }}">{{ $year->tahun_ajaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- KELAS --}}
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="text-center col-sm-12">
                                <label class="" for="tahun">Kelas</label>
                                <select class="form-control" id="search-class" required name="class">
                                    <option disabled selected> --Pilih-- </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- MATA PELAJARAN --}}
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="text-center col-sm-12">
                                <label class="" for="tahun">Wilayah</label>
                                <select class="form-control" id="search-region" required name="region">
                                    <option disabled selected> --Pilih-- </option>
                                    @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->nama_daerah }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- TOMBOL SEARCH --}}
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-gradient-primary mr-2">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- CONTENT 2--}}
<div class="row pb-3">
    <div class="col-md-4">
        <a type="" class="btn btn-block btn-primary btn-icon-text pl-0 p-2" href="{{route('student.create')}}">
            <i class="mdi mdi-plus-circle-outline btn-icon-prepend"></i>
            Tambah Data Siswa
        </a>
    </div>
</div>

{{-- CONTENT 3--}}
{{-- DATA SISWA --}}
{{-- TABEL HASIL PENCARIAN --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Data Siswa</h2>
            @if (isset($searchParam['year']))
            <h5 class="card-title text-center mt-3">TAHUN AJARAN {{ $searchParam['year']->tahun_ajaran }}</h5>
            @endif
            @if (isset($searchParam['class']))
            <h5 class="card-title text-center mt-3">KELAS {{ $searchParam['class']->nama_kelas }}</h5>
            @endif
            @if (isset($searchParam['region']))
            <h5 class="card-title text-center mt-3">WILAYAH {{ $searchParam['region']->nama_daerah }}</h5>
            @endif
            <div class="table pb-3 pt-3">
                <table id="student-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th> NISN </th>
                            <th> Nama Siswa </th>
                            <th> Asal Wilayah </th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $student['nisn'] }}</td>
                            <td><a href="{{ route('student.detail',['id'=>$student['id']]) }}">
                                    {{ $student['name'] }}
                                </a>
                            </td>
                            <td>{{ $student['region'] }}</td>
                            @php
                            $no++;
                            @endphp
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/js/data/student-data-option.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#student-table').DataTable({
        //   "searching": false
      });
    } );
</script>
@endsection
