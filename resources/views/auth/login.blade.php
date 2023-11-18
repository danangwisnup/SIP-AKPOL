@extends('layouts.main')
@section('content')
    <main>
        <div class="px-5 py-5 p-lg-0 min-h-screen bg-surface-secondary d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center">
                <!-- kecilkan background image -->
                <div style="background-image: url('{{ url('img/bg-login.png') }}'); background-size: cover; background-position: center;"
                    class="col-lg-5 col-xl-5 p-12 p-xl-20 position-fixed start-0 top-0 h-screen overflow-y-hidden d-none d-lg-flex flex-column">
                </div>
                <div
                    class="col-12 col-md-9 col-lg-7 offset-lg-5 border-left-lg min-h-screen d-flex flex-column justify-content-center position-relative">
                    <div class="py-lg-16 px-lg-20 mx-lg-20 mx-5">
                        <div class="row">
                            <div class="text-center text-md-start">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show mb-10" role="alert">
                                        <div class="d-flex align-items-center justify-content-start">
                                            <i class="icon fa-solid fa-exclamation-triangle text-white fs-5"></i>
                                            <div class="flex-fill ms-3">
                                                {{ $errors->first() }}
                                            </div>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                                <img src="{{ url('img/logo-akpol.png') }}" class="img-fluid mb-3 ml-md-4 ml-sm-5"
                                    width="90px" alt="Logo">
                                <p class="mb-0">Selamat Datang</p>
                                <h4 style="font-weight: bolder;">di SIP AKPOL</h4>
                                <p style="font-size: small; color: grey;">merupakan aplikasi untuk memberikan penilaian
                                    karakter dan memonitoring Taruna Akademik Kepolisian Negara Republik Indonesia.</p>
                            </div>
                            <form class="mt-5 mb-3 mt-md-3" action="{{ route('login.post') }}" method="POST">
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
