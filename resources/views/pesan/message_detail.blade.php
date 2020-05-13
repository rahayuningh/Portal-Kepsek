@extends('layouts.main_layout')
@section('page-name') Pesan @endsection
@section('content')
{{-- ######################################################################## --}}
{{-- ANNOUNCEMENT --}}
{{-- ######################################################################## --}}

{{-- CONTENT 1 --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center" style="background-color: green; color: white">Detail Pesan</h2>
            <div class="card-body">
                {{-- Detail --}}
                <div class="row font-weight-bolder">
                    <div class="col-md-12">
                        <table class="mb-3">
                            <tr>
                                <td>Penerima</td>
                                <td>: Guru A</td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>: Negara dalam bahaya</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>: 05 Mei 20202</td>
                            </tr>
                            <tr>
                                <td>Waktu</td>
                                <td>: 14.30 WIB</td>
                            </tr>
                        </table>
                        <h3>Isi Pesan :</h3>
                        Selamat Sore Pak Morgan, selamat atas sore ini. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Dicta distinctio numquam ab blanditiis sequi voluptates unde similique
                        explicabo! Ad earum tenetur dolore ipsa cupiditate error asperiores soluta sint itaque in.
                    </div>
                </div>
                {{-- Isi Pesan --}}
                {{-- <div class="row pt-5">
                    <div class="col-md-12">
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
</div>

@endsection
