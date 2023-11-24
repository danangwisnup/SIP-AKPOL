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
                            <h6 class="dropdown-header p-0 m-0 font-semibold">Notifications</h6><a href="#"
                                class="text-sm font-semibold ms-auto">Clear all</a>
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
