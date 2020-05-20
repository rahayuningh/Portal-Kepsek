@extends('layouts.main_layout')
@section('page-name') Input Nilai @endsection
@section('icon') mdi-account-multiple @endsection
@section('content')

{{-- CONTENT 1 --}}
{{-- KOLOM PENCARIAN --}}
<div class="card-body">
    <form class="form-sample" method="POST" action="{{ route('student.search') }}">
        @csrf
        <div class="row">
            {{-- KOLOM TAHUN AJARAN --}}
            <div class="col-md-3">
                <div class="form-group row">
                    <div class="text-center col-sm-12">
                        <label class="" for="tahun">Tahun Ajaran</label>
                        <select class="form-control" id="search-year" required name="year">
                            <option disabled selected> --Pilih-- </option>
                            {{-- @foreach ($schoolYears as $year)
                            <option value="{{ $year->id }}">{{ $year->tahun_ajaran }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
            </div>
            {{-- KELAS --}}
            <div class="col-md-3">
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
            <div class="col-md-3">
                <div class="form-group row">
                    <div class="text-center col-sm-12">
                        <label class="" for="tahun">Mata Pelajaran</label>
                        <select class="form-control" id="" required name="">
                            <option disabled selected> --Pilih-- </option>
                            <option> IPA </option>
                            <option> MTK </option>
                            {{-- @foreach ($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->nama_daerah }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
            </div>
            {{-- Nilai Ujian --}}
            <div class="col-md-3">
                <div class="form-group row">
                    <div class="text-center col-sm-12">
                        <label class="" for="tahun">Nilai</label>
                        <select class="form-control" id="" required name="">
                            <option disabled selected> --Pilih-- </option>
                            <option> UTS </option>
                            <option> UAS </option>
                            {{-- @foreach ($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->nama_daerah }}</option>
                            @endforeach --}}
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

{{-- CONTENT 2--}}
{{-- DATA SISWA --}}
{{-- TABEL HASIL PENCARIAN --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Input Nilai</h2>
            {{-- KETERANGAN --}}
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td> Tahun Ajaran </td>
                                    <td> : </td>
                                    <td id="year">
                                        @if (isset($class))
                                        {{ $class->tahun->tahun_ajaran }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td> Kelas </td>
                                    <td> : </td>
                                    <td id="class">
                                        @if (isset($class))
                                        {{ $class->nama_kelas }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td> Wali Kelas </td>
                                    <td> : </td>
                                    <td id="teacher">
                                        @if (isset($teacher_id) && isset($teacher_name))
                                        <a href="{{ route('teacher.detail',['id'=>$teacher_id]) }}">
                                            {{ $teacher_name }}
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td> Guru Mapel </td>
                                    <td> : </td>
                                    <td id="teacher">
                                        @if (isset($teacher_id) && isset($teacher_name))
                                        <a href="{{ route('teacher.detail',['id'=>$teacher_id]) }}">
                                            {{ $teacher_name }}
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td> Mata Pelajaran </td>
                                    <td> : </td>
                                    <td id="">
                                        MTK
                                    </td>
                                </tr>
                                <tr>
                                    <td> Nilai </td>
                                    <td> : </td>
                                    <td id="">
                                        UTS
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-end p-3">
                            <button type="submit" class="btn btn-gradient-primary">Simpan Nilai</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table pb-3">
                <table id="input-table" class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th> Nama Siswa </th>
                            <th> Nilai Ujian</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr style="border-bottom: 1pt solid #eee !important">
                            <td>1</td>
                            <td>Lorem Lorem Lorem</td>
                            <td class="pt-0 pb-0">
                                <input type="text" name="" class="form-control p-1" style="height: 30px; width: 100%">
                            </td>
                        </tr>
                        <tr style="border-bottom: 1pt solid #eee !important">
                            <td>1</td>
                            <td>Lorem Lorem Lorem</td>
                            <td class="pt-0 pb-0">
                                <input type="text" name="" class="form-control p-1" style="height: 30px">
                            </td>
                        </tr>
                        <tr style="border-bottom: 1pt solid #eee !important">
                            <td>1000</td>
                            <td>Lorem Lorem Lorem</td>
                            <td class="pt-0 pb-0">
                                <input type="text" name="" class="form-control p-1" style="height: 30px">
                            </td>
                        </tr>
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
        $('#input-table').DataTable({
          "searching": false,
          "paging": false,
          "info": false,
          "ordering":false,
          "bAutoWidth": false ,
          aoColumns : [
          { "sWidth": "5%"},
          { "sWidth": "60%"},
          { "sWidth": "35%"}
          ]
      });
    } );
</script>
@endsection
