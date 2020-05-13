@extends('layouts.main_layout')
@section('page-name') Pesan @endsection
@section('content')
{{-- ######################################################################## --}}
{{-- ANNOUNCEMENT --}}
{{-- ######################################################################## --}}

{{-- CONTENT 1 --}}
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center" style="background-color: green; color: white">Pesan</h2>
            <div class="card-body">
                {{-- Detail --}}
                <div class="row font-weight-bolder">
                    <div class="col-md-8">
                            Dari : Kepala Sekolah <br>
                            Tentang : Selamat
                    </div>
                    <div class="col-md-4">
                            Rabu, 13 Mei 2020 <br>
                            14.30 WIB
                    </div>
                </div>
                {{-- Isi Pesan --}}
                <div class="row pt-5">
                    <div class="col-md-12 text-center">
                        Selamat Sore Pak Morgan, selamat atas sore ini. 
                    </div>
                </div>
                {{-- Footer --}}
                <div class="row pt-4">
                    <div class="col-md-12">
                        Salam hangat <br>
                        Kepala Sekolah
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-1"></div>
</div>

@endsection
@section('script')
<script>
    $(document).ready( function () {
        $('#dashboard-job-table').DataTable({
          "searching": false
      });
    } );
</script>
@endsection
