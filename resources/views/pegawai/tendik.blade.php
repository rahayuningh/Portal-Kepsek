@extends('layouts.main_layout')
@section('page-name') Data Tenaga Pendidik @endsection
@section('icon') mdi-account-card-details @endsection
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Data Tenaga Pendidik</h2>
            <div class="table pb-3 pt-3">
                <table id="tendik-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th> Nama Tenaga Pendidik </th>
                            <th> NIK </th>
                            {{-- <th> Aksi </th> --}}
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($tendiks as $tendik)
                        <tr>
                            <td>{{ $no }}</td>
                            <td><a href="{{ route('tendik.detail',['id'=>$tendik['id']]) }}">{{ $tendik['name'] }}</a>
                            </td>
                            <td>{{ $tendik['nik'] }}</td>
                            {{-- <td class="p-0 text-center">
                                <a type="button" class="btn btn-inverse-warning btn-icon p-2" data-toggle="modal"
                                    align="center" title="Edit" href="#Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="" type="button" class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    onclick="return confirm('Yakin hapus data?')">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td> --}}
                        </tr>
                        @php
                        $no++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready( function () {
        $('#tendik-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
