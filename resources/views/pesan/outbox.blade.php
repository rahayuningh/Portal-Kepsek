@extends('layouts.main_layout')
@section('page-name') Kotak Pesan Terkirim @endsection
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center" style="background-color: green; color: white">Pesan</h2>
            <div class="table">
                <table id="inbox-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penerima</th>
                            <th>Perihal</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td>Guru A </a></td>
                            <td><a href="{{ route('message.detail', ['id'=>1]) }}">Negara dalam
                                    bahasaya</a></td>
                            <td>2 Mei 2020</td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td>Guru B </a></td>
                            <td><a href="{{ route('message.detail', ['id'=>1]) }}">Negara dalam
                                    bahasaya</a></td>
                            <td>2 Mei 2020</td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td>Guru C </a></td>
                            <td><a href="{{ route('message.detail', ['id'=>1]) }}">Negara dalam
                                    bahasaya</a></td>
                            <td>2 Mei 2020</td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td>Guru D </a></td>
                            <td><a href="{{ route('message.detail', ['id'=>1]) }}">Negara dalam
                                    bahasaya</a></td>
                            <td>2 Mei 2020</td>
                        </tr>
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
        $('#inbox-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
