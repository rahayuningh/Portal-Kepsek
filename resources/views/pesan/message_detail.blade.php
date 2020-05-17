@extends('layouts.main_layout')
@section('page-name') Pesan @endsection
@section('icon') mdi-message-text @endsection
@section('content')
{{-- ######################################################################## --}}
{{-- ANNOUNCEMENT --}}
{{-- ######################################################################## --}}

{{-- CONTENT 1 --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center header-card">Detail Pesan</h2>
            <div class="card-body">
                {{-- Detail --}}
                <div class="row">
                    <div class="col-md-12">
                        <table class="mb-3">
                            <tr>
                                <td>Penerima</td>
                                <td>: {{ $message['penerima_nama'] }}</td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>: <span class="font-weight-bolder">{{ $message['subject'] }}</span></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>: {{ $message['created_at']->format('d F Y') }}</td>
                            </tr>
                            <tr>
                                <td>Waktu</td>
                                <td>: {{ $message['created_at']->format('H:i') }}</td>
                            </tr>
                        </table>
                        <h3>Isi Pesan :</h3>
                        <p>
                            {{ $message['konten'] }}
                        </p>
                        <hr>
                        <a href="{{ route('message.outbox') }}" class="btn btn-md btn-gradient-primary">Kembali ke Sent Box</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
