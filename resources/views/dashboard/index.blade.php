@extends('layouts.main')
@section('content')
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-gray-200">
        @include('layouts.sidebar')
        <div class="flex-lg-1 h-screen overflow-y-lg-auto">
            @include('layouts.headbar')
            <header>
                <!-- Container -->
                <section class="container-fluid p-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            @include('layouts.alert')
                            <div class="border-bottom pb-2 mb-4 d-lg-flex justify-content-between align-items-center">
                                <div class="mb-lg-0">
                                    <h3 class="mb-0 fw-bold">Dashboard</h3>
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
