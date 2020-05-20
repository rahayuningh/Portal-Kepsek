@extends('layouts.main_layout')
@section('page-name') Status Pekerjaan Guru @endsection
@section('icon') mdi-bookmark-check @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- TABEL RINGKASAN --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Ringkasan</h2>
            <div class="table pb-3 pt-3">
                <table id="job-summary-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-left"> No </th>
                            <th> Kelas </th>
                            <th> Mata Pelajaran </th>
                            <th> Nama Guru </th>
                            <th class="text-center"> Nilai UTS </th>
                            <th class="text-center"> Nilai UAS </th>
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
                            <td class="pt-0 pb-0"><label class="badge badge-success badge-td">Sudah</label></td>
                            <td class="pt-0 pb-0"><label class="badge badge-gray badge-td">Progress</label></td>
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
                            <td class="pt-0 pb-0"><label class="badge badge-success badge-td">Sudah</label></td>
                            <td class="pt-0 pb-0"><label class="badge badge-gray badge-td">Belum</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- CONTENT 2--}}
{{-- TABEL UTAMA --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <h2 class="text-center header-card">Status Pekerjaan Guru</h2>
            {{-- KOLOM PENCARIAN --}}
            <div class="card-body">
                <h4 class="card-title text-center">Pencarian</h4>
                <form class="form-sample">
                    <div class="row">
                        {{-- KOLOM TAHUN AJARAN --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Tahun Ajaran</label>
                                    <select class="form-control" id="search-year" required>
                                        <option disabled selected> --Pilih-- </option>
                                        @foreach ($schoolYears as $year)
                                        <option value="{{ $year->id }}">{{ $year->tahun_ajaran }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Semester</label>
                                    <select class="form-control" required>
                                        <option disabled selected> --Pilih-- </option>
                                        <option value="0">Ganjil</option>
                                        <option value="1">Genap</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- MATA PELAJARAN --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Mata Pelajaran</label>
                                    <select class="form-control col-sm-12" required>
                                        <option disabled selected> --Pilih-- </option>
                                        @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{$subject->nama_mapel}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- KELAS --}}
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="text-center col-sm-12">
                                    <label class="" for="tahun">Kelas</label>
                                    <select class="form-control" id="search-class" required>
                                        <option disabled selected> --Pilih-- </option>
                                        <option disabled>Pilih tahun ajaran dahulu ...</option>
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
            <h5 class="card-title text-center">TABEL {TAHUN AJARAN {2019/2020} SEMESTER {GANJIL}}</h5>
            <h5 class="card-title text-center">{HASIL PENCARIAN}</h5>
            <div class="table pb-3">
                <table id="job-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-left"> No </th>
                            <th> Kelas </th>
                            <th> Mata Pelajaran </th>
                            <th> Nama Guru </th>
                            <th class="text-center"> Nilai UTS </th>
                            <th class="text-center"> Nilai UAS </th>
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
                            <td class="pt-0 pb-0"><label class="badge badge-success badge-td">Sudah</label></td>
                            <td class="pt-0 pb-0"><label class="badge badge-gray badge-td">Progress</label></td>
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
                            <td class="pt-0 pb-0"><label class="badge badge-success badge-td">Sudah</label></td>
                            <td class="pt-0 pb-0"><label class="badge badge-gray badge-td">Belum</label></td>
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
                            <td class="pt-0 pb-0"><label class="badge badge-success badge-td">Sudah</label></td>
                            <td class="pt-0 pb-0"><label class="badge badge-success badge-td">Sudah</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{ asset('assets/js/data/teacher-job-option.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#job-summary-table').DataTable({
          "searching": false
      });
    } );
    $(document).ready( function () {
        $('#job-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
