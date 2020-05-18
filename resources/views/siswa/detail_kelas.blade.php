@extends('layouts.main_layout')
@section('page-name') Detail Kelas @endsection
@section('icon') mdi-account-multiple @endsection
@section('content')

{{-- CONTENT 1--}}
{{-- DAFTAR SISWA --}}
<div class="row" id="">
    <div class="col-md-4 grid-margin">
        <div class="card pb-3">
            {{-- FILTER --}}
            <h2 class="text-center header-card">Daftar Kelas</h2>
            <h4 class="card-title text-center">Pencarian</h4>
            <form class="form-sample">
                <div class="row">
                    <div class="col-md-2"></div>
                    {{-- KOLOM Gedung --}}
                    <div class="col-md-8">
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
                    <div class="col-md-2"></div>
                </div>
            </form>
            {{-- KELAS --}}
            <div class="text-center col-sm-12">
                <div>
                    <label class="" for="kelas">Kelas</label>
                </div>
                <div class="row text-center">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8" id="search-class">
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin m-0 p-0">
        <div class="col grid-margin">
            <div class="card pb-3">
                <h2 class="text-center header-card">Detail Kelas</h2>
                <div id="1A" class="tab-content">
                    {{-- KETERANGAN --}}
                    <div class="pl-2 mb-3">
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
                            </tbody>
                        </table>
                    </div>
                    {{-- DAFTAR SISWA --}}
                    <div class="table">
                        <table id="class-table" class="table table-bordered table-responsive">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                            </thead>
                            <tbody id="student-table-body">
                                @php
                                $no=1;
                                @endphp
                                @if (isset($students))
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>
                                        <a href="{{ route('student.detail',['id'=>$student['id']]) }}">
                                            {{ $student['name'] }}
                                        </a>
                                    </td>
                                    <td>{{ $student['nisn'] }}</td>
                                </tr>
                                @php
                                $no++;
                                @endphp
                                @endforeach
                                @endif
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
<script src="{{ asset('assets/js/data/class-detail-option.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#class-table').DataTable({
          "searching": false,
          "paging": false,
          "info": false,
          "ordering":false
      });
    } );
</script>
@endsection
