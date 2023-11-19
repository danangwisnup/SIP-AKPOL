@extends('layouts.main')
@section('content')
    <main>
        <div class="px-5 py-5 p-lg-0 h-screen">
            <!-- make blur image background -->
            <div class="d-flex justify-content-center col-md-12">
                <div class="position-absolute bg-image h-100"
                    style="background-image: url('{{ url('img/gerbang-akpol.jpg') }}');
    opacity: 0.3;
    position: fixed;
    background-size: cover;
    left: 0;
    background-position: center;
    right: 0;
    display: block;
    width: auto;
    height: 100%;
    -webkit-filter: blur(5px);
    -moz-filter: blur(5px);
    -o-filter: blur(5px);
    -ms-filter: blur(5px);
    filter: blur(5px);">
                </div>
                <div
                    class="col-12 col-md-9 col-lg-7 min-h-screen d-flex flex-column justify-content-center position-relative">
                    <div class="row py-lg-16 px-lg-20 mx-lg-20 mx-1">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-left-icon alert-dismissible" role="alert">
                                <div class="icon">
                                    <i class="bi bi-x-circle"></i>
                                </div>
                                {{ $errors->first() }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="rounded-3 border bg-white shadow p-lg-10 p-3">
                            <div class="text-center text-md-start">
                                <img src="{{ url('img/logo-akpol.png') }}" class="img-fluid mb-3 ml-md-4 ml-sm-5"
                                    width="90px" alt="Logo">
                                <p class="mb-0">Selamat Datang</p>
                                <h4 style="font-weight: bolder;">di SIP AKPOL</h4>
                                <p style="font-size: small; color: grey;">merupakan aplikasi untuk memberikan penilaian
                                    karakter dan memonitoring Taruna Akademik Kepolisian Negara Republik Indonesia.</p>
                            </div>
                            <form class="mt-5" action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <!-- Identifier -->
                                <div class="mb-3">
                                    <label class="form-label"> Username atau Email <span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" style="font-size: small" id="identifier"
                                        name="identifier" placeholder="Masukkan Username atau Email"
                                        value="{{ old('identifier') }}" required>
                                </div>

                                <!-- Password -->
                                <div class="mb-3 position-relative">
                                    <label class="form-label"> Password <span style="color: red;">*</span></label>
                                    <input type="password" class="form-control fakepassword" style="font-size: small"
                                        id="password" name="password" placeholder="Masukkan Password" required>
                                </div>

                                <div class="d-grid mt-10">
                                    <button type="submit" class="btn btn-dark">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
