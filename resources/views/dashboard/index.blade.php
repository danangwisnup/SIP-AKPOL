@extends('layouts.main')
@section('content')
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-gray-200">
        @include('layouts.sidebar')
        <div class="flex-lg-1 h-screen overflow-y-lg-auto">
            <nav class="navbar navbar-light position-lg-sticky top-lg-0 d-none d-lg-block overlap-10 flex-none bg-white border-bottom px-0 py-3"
                id="topbar">
                <div class="container-fluid">
                    <form class="form-inline mx-lg-4 d-none d-md-flex">
                        <strong>
                            <i class="bi bi-calendar me-1"></i>
                            <span id="getDate">{{ carbon\carbon::now()->translatedFormat('l, d F Y H:i:s') }}</span>
                        </strong>
                    </form>
                    <div class="navbar-user d-none d-sm-block">
                        <div class="hstack gap-3 ms-4">
                            <div class="dropdown"><a href="#"
                                    class="nav-link px-3 text-base text-muted text-opacity-70 text-opacity-100-hover"
                                    id="dropdown-notifications" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="bi bi-bell-fill"></i></a>
                                <div class="dropdown-menu dropdown-menu-end px-2" aria-labelledby="dropdown-notifications">
                                    <div class="dropdown-item d-flex align-items-center">
                                        <h6 class="dropdown-header p-0 m-0 font-semibold">Notifications</h6><a
                                            href="#" class="text-sm font-semibold ms-auto">Clear all</a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-item py-2 text-center"><a href="#"
                                            class="font-semibold text-muted text-primary-hover">View all</a></div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="false" aria-expanded="false">
                                    <div>
                                        <div class="avatar avatar-sm bg-dark rounded-circle text-white">
                                            <img alt="..." src="/img/people/img-profile.jpg">
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
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
                    </div>
                </div>
            </nav>
            <header>
                <!-- Container -->
                <section class="container-fluid p-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="alert alert-info alert-left-icon alert-dismissible mt-7 mb-7" role="alert">
                                <div class="icon">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                Tahun akademik <strong>2022/2023 (Ganjil)</strong> sedang aktif.
                            </div>
                            <div class="alert alert-danger alert-left-icon alert-dismissible mt-7 mb-7" role="alert">
                                <div class="icon">
                                    <i class="bi bi-x-circle"></i>
                                </div>
                                <strong>Perhatian!</strong> Pada semester ini pengasuh tidak dapat melakukan penilaian
                                karena:
                                <ul class="mb-0" style="list-style-type: number;">
                                    <li>Data Taruna/Taruni belum diset.</li>
                                    <li>Data Kelas belum diset.</li>
                                    <li>Data Peleton belum diset.</li>
                                    <li>Data Aspek Karakter belum diset.</li>
                                </ul>
                            </div>
                            <div class="border-bottom pb-2 mb-4 d-lg-flex justify-content-between align-items-center">
                                <div class="mb-lg-0">
                                    <h3 class="mb-0 fw-bold">Dashboard</h3>
                                    <span class="text-primary text-muted">
                                        {{ Auth::user()->role }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </header>
        </div>
    </div>
    <script>
        // run this function every 1 second
        setInterval(function() {
            getDate = document.getElementById("getDate");

            // replace the content of the element with id="getDate"
            // Example : Minggu, 19 November 2023 pukul 17:59:57

            getDate.innerHTML = new Date().toLocaleString("id-ID", {
                weekday: "long",
                day: "numeric",
                month: "long",
                year: "numeric",
                hour: "numeric",
                minute: "numeric",
                second: "numeric"
            });

            getDate.innerHTML = getDate.innerHTML.replace("pukul", "");
            getDate.innerHTML = getDate.innerHTML.replace(/\./g, ":");

        }, 1000);
    </script>
@endsection
