{{-- ######################################################################## --}}
{{-- SIDEBAR --}}
{{-- ######################################################################## --}}

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="left-fixed-sidebar">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                {{-- BERANDA --}}
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <span class="menu-title">Beranda</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>
                {{-- PEKERJAAN GURU --}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#pekerjaan" aria-expanded="false"
                        aria-controls="pekerjaan">
                        <span class="menu-title">Aktivitas/Pekerjaan</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-account-card-details menu-icon"></i>
                    </a>
                    <div class="collapse" id="pekerjaan">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="/status-pekerjaan-guru">Status Pekerjaan
                                    Guru</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/kbm">KBM</a></li>
                            <li class="nav-item"> <a class="nav-link" href="">Mata Pelajaran</a></li>
                        </ul>
                    </div>
                </li>
                {{-- INFO PEGAWAI --}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#info-pegawai" aria-expanded="false"
                        aria-controls="info-pegawai">
                        <span class="menu-title">Info Pegawai</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-account-card-details menu-icon"></i>
                    </a>
                    <div class="collapse" id="info-pegawai">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="">Data Guru</a></li>
                            <li class="nav-item"> <a class="nav-link" href="">Data Tenaga Pendidik</a></li>
                            {{-- <li class="nav-item"> <a class="nav-link" href="/bio-pegawai">Biodata Pegawai</a></li> --}}
                        </ul>
                    </div>
                </li>

                {{-- INFO SISWA --}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#info-siswa" aria-expanded="false"
                        aria-controls="info-siswa">
                        <span class="menu-title">Info Siswa</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-account-multiple menu-icon"></i>
                    </a>
                    <div class="collapse" id="info-siswa">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="/data-siswa">Data Siswa</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/detail-kelas">Data Kelas</a></li>
                            {{-- <li class="nav-item"> <a class="nav-link" href="/bio-siswa">Biodata Siswa</a></li> --}}
                        </ul>
                    </div>
                </li>

                {{-- INVENTARIS --}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#inventaris" aria-expanded="false"
                        aria-controls="inventaris">
                        <span class="menu-title">Inventaris</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-account-multiple menu-icon"></i>
                    </a>
                    <div class="collapse" id="inventaris">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="">Kebutuhan Barang</a></li>
                            <li class="nav-item"> <a class="nav-link" href="/data-inventaris">Data Inventaris</a></li>
                            <li class="nav-item"> <a class="nav-link" href="">Gedung</a></li>
                            <li class="nav-item"> <a class="nav-link" href="">Ruangan</a></li>
                        </ul>
                    </div>
                </li>

                {{-- PESAN --}}

            </ul>
        </nav>
    </div>
</nav>
