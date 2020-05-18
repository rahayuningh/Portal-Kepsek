@extends('layouts.main_layout')
@section('page-name') Kotak Pesan Terkirim @endsection
@section('icon') mdi-send @endsection
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Pesan</h2>
            <div class="table pb-4 pt-3">
                <table id="inbox-table" class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penerima</th>
                            <th>Perihal</th>
                            <th>Tanggal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($messages as $message)
                        <tr>
                            <td> {{ $no }} </td>
                            <td><a href="{{ route('teacher.detail', ['id'=>$message['penerima_id']]) }}">
                                    {{ $message['penerima_nama'] }}
                                </a>
                            </td>
                            <td>
                                {{ $message['subject'] }}
                            </td>
                            <td>{{ $message['created_at']->format('d F Y H:i') }}</td>
                            <td class="p-0 text-center">
                                <a href="{{ route('message.detail', ['id'=>$message['id']]) }}"
                                    class="btn btn-inverse-info btn-icon p-2" title="Detail">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a href="{{ route('message.delete', ['id'=>$message['id']]) }}" type="button"
                                    class="btn btn-inverse-danger btn-icon p-2" title="Hapus"
                                    onclick="return confirm('Yakin hapus pesan ini?')">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
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
        $('#inbox-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
