{{-- WINDOW BUAT PESAN --}}
<div id="BuatPesan" class="modal" tabindex="1" role="dialog" aria-hidden="true" style="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tulis Pesan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="forms-sample" method="POST" action="{{ route('message.create') }}">
                @csrf
                <div class="modal-body p-5">
                    <div class="form-group">
                        <label for="receiver">Penerima</label>
                        <select class="form-control" id="receiver" name="receiver">
                            <option disabled selected>Pilih penerima ...</option>
                            <option disabled>Tidak ada data ...</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subject">Perihal</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="content">Isi Pesan</label>
                        <textarea class="form-control" id="content" rows="5" name="content"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- ######################################################################## --}}
{{-- TOP NAVBAR --}}
{{-- ######################################################################## --}}
<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    {{-- LOGO --}}
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo pt-4" href="{{route('dashboard')}}">
            <img src="{{asset('assets/imagesSCB/Logo IMoSy_white.svg')}}" alt="logo" style="width: 200px" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img
                src="{{asset('assets/imagesSCB/Logo-SCB_mini.png')}}" alt="logo" /></a>
    </div>


    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        {{-- TOGGLER --}}
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            {{-- EMAIL --}}
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown"
                    aria-expanded="false">
                    <i class="mdi mdi-email-outline"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0 text-center"><a data-toggle="modal" href="#BuatPesan" id="create-message">Buat
                            Pesan</a></h6>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center"><a href="{{ route('message.outbox') }}">Buka Sent Box</a></h6>
                </div>
            </li>

            {{-- PROFILE --}}
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image">
                        {{-- <span class="availability-status online"></span> --}}
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list p-3"
                    aria-labelledby="profileDropdown">
                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                    <p>{{ Auth::user()->email }}</p>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout mr-2 text-primary"></i>
                        Signout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        {{-- TOGGLER OFF CANVAS --}}
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>

    </div>
</nav>
