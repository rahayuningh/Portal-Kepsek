@extends('layouts.main_layout')
@section('page-name') Beranda @endsection
@section('content')
{{-- ######################################################################## --}}
{{-- ANNOUNCEMENT --}}
{{-- ######################################################################## --}}
{{-- <div class="row" id="proBanner">
                        <div class="col-12">
                            <span class="d-flex align-items-center purchase-popup">
                                <p>Like what you see?</p>
                                <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank" class="btn ml-auto purchase-button">Go to?</a>
                                <i class="mdi mdi-close" id="bannerClose"></i>
                            </span>
                        </div>
                    </div> --}}
<div class="row" id="proBanner">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pengumuman</h4>
                <p>Sistem ini masih dalam tahap pengembangan</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Data Siswa <i
                        class="mdi mdi-account-card-details mdi-24px float-right"></i>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">List KBM <i class="mdi mdi-library-books mdi-24px float-right"></i>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Data Barang <i class="mdi mdi-archive mdi-24px float-right"></i>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Data Guru <i
                        class="mdi mdi-account-card-details mdi-24px float-right"></i>
                </h4>
            </div>
        </div>
    </div>
</div>
{{-- CONTENT 1 --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            {{-- HEADER --}}
            <h2 class="text-center" style="background-color: green; color: white">Ringkasan Pekerjaan Guru</h2>
            <div class="table">
                <table id="searchTable" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Nama Guru</th>
                            <th>UTS</th>
                            <th>UAS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><a href="">Kelas 1A</a></td>
                            <td>Matematika</td>
                            <td><a href="">Pak Julio</a></td>
                            <td style="background-color: #ff0000">Belum</td>
                            <td style="background-color: #1bcfb4">Sudah</td>
                        </tr>
                        <tr>
                            <td><a href="">Kelas 1A</a></td>
                            <td>Matematika</td>
                            <td><a href="">Pak Julio</a></td>
                            <td style="background-color: #ff0000">Belum</td>
                            <td style="background-color: #1bcfb4">Sudah</td>
                        </tr>
                        <tr>
                            <td><a href="">Kelas 1A</a></td>
                            <td>Matematika</td>
                            <td><a href="">Pak Julio</a></td>
                            <td style="background-color: #ff0000">Belum</td>
                            <td style="background-color: #1bcfb4">Sudah</td>
                        </tr>
                        <tr>
                            <td><a href="">Kelas 1A</a></td>
                            <td>Matematika</td>
                            <td><a href="">Pak Julio</a></td>
                            <td style="background-color: #ff0000">Belum</td>
                            <td style="background-color: #1bcfb4">Sudah</td>
                        </tr>
                        <tr>
                            <td><a href="">Kelas 1A</a></td>
                            <td>Matematika</td>
                            <td><a href="">Pak Julio</a></td>
                            <td style="background-color: #ff0000">Belum</td>
                            <td style="background-color: #1bcfb4">Sudah</td>
                        </tr>
                    </tbody>


                </table>
            </div>
            {{-- <div class="card-body">

            </div> --}}
        </div>
    </div>
</div>

@endsection
