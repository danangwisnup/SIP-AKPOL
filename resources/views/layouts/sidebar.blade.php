<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar"
    id="sidebar">
    <div class="container-fluid">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
            aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <a class="navbar-brand d-inline-block py-lg-2 mb-lg-5 px-lg-6 me-0 mx-lg-5">
            <img src="{{ url('img/logo-akpol.png') }}" class="navbar-brand-img" alt="..." style="width: 50px;">
            <strong class="ms-1">SIP AKPOL</strong>
        </a>
        <div class="navbar-user d-lg-none">
            <div class="dropdown">
                <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="avatar-parent-child">
                        <img alt="..." src="/img/people/img-profile.jpg" class="avatar avatarrounded-circle">
                        <span class="avatar-child avatar-badge bg-dark">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                    <div class="dropdown-header">
                        <span class="d-block text-sm text-muted mb-1">Login sebagai</span>
                        <span class="d-block text-heading font-semibold">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('logout') }}">
                        <i class="dropdown-icon fe fe-log-out"></i> Logout
                    </a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse my-3 px-lg-2 position-relative" id="sidebarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'rounded-3 border shadow-lg text-white bg-dark' : '' }}"
                        href="/dashboard">
                        <i class="fe fe-monitor"></i> Dashboard
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('ubah-password') ? 'rounded-3 border shadow-lg text-white bg-dark' : '' }}"
                        href="/ubah-password">
                        <i class="fe fe-lock"></i> Ubah Password
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav mt-3">
                <li>
                    <strong class="nav-link text-xs font-bold text-uppercase text-dark ls-wide">Menu Admin</strong>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('data-akademik') ? 'rounded-3 border shadow-lg text-white bg-dark' : '' }}"
                        href="/data-akademik">
                        <i class="fe fe-book"></i> Data Akademik
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebar-konfigurasi" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebar-konfigurasi">
                        <i class="fe fe-settings"></i> Konfigurasi
                    </a>
                    <div class="collapse" id="sidebar-konfigurasi">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('konfigurasi/semester') }}" class="nav-link">Data Semester</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('konfigurasi/pendidik') }}" class="nav-link">Data Pendidik</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('konfigurasi/taruna') }}" class="nav-link">Data Taruna/Taruni</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('konfigurasi/kelas') }}" class="nav-link">Data Kelas</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('konfigurasi/peleton') }}" class="nav-link">Data Peleton</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('konfigurasi/aspek-karakter') }}" class="nav-link">Data Aspek
                                    Karakter</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav mt-3">
                <li>
                    <strong class="nav-link text-xs font-bold text-uppercase text-dark ls-wide">Menu
                        Danyon & Danki</strong>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebar-mona" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebar-mona">
                        <i class="fe fe-eye"></i>
                        Monitoring dan Analisis
                    </a>
                    <div class="collapse" id="sidebar-mona">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('mona/riwayat-penilaian') }}" class="nav-link">Riwayat Penilaian</a>
                        </ul>
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('mona/grafik-nilai') }}" class="nav-link">Grafik Nilai</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav mt-3">
                <li>
                    <strong class="nav-link text-xs font-bold text-uppercase text-dark ls-wide">Menu
                        Danton</strong>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebar-input-data" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebar-input-data">
                        <i class="fe fe-list"></i>
                        Input Data
                    </a>
                    <div class="collapse" id="sidebar-input-data">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('input-data/nilai-perilaku-positif') }}" class="nav-link">Nilai
                                    Perilaku Positif
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('input-data/nilai-perilaku-negatif') }}" class="nav-link">Nilai
                                    Perilaku Negatif
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebar-output-data" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebar-output-data">
                        <i class="fe fe-printer"></i>
                        Cetak Data
                    </a>
                    <div class="collapse" id="sidebar-output-data">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('output-data/lihat-legger') }}" class="nav-link">Lihat Legger</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('output-data/cetak-laporan') }}" class="nav-link">Cetak Laporan</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <hr class="navbar-divider my-4 opacity-70">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}">
                        <i class="fe fe-log-out"></i> Logout
                    </a>
                </li>
                </li>
            </ul>
        </div>
    </div>
</nav>
