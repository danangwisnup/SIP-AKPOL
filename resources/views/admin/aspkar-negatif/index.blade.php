@extends('layouts.main')
@section('content')
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-gray-200">
        @include('layouts.sidebar')
        <div class="flex-lg-1 h-screen overflow-y-lg-auto">
            <header>
                <!-- Container -->
                <section class="container-fluid p-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            @include('layouts.alert')
                            <div class="border-bottom pb-2 mb-4 d-lg-flex justify-content-between align-items-center">
                                <div class="mb-lg-0">
                                    <h2 class="mb-0 fw-bold ls-tight">{{ $title }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </header>
            <div class="row container-fluid mb-20">
                <div class="vstack gap-4">
                    <div class="d-flex justify-content-between flex-column flex-sm-row gap-3">
                        <form action="{{ route('negatif.index') }}" method="GET">
                            <div class="hstack gap-2">
                                <div class="input-group input-group-sm input-group-inline">
                                    <span class="input-group-text pe-2">
                                        <i class="bi bi-search"></i>
                                    </span>
                                    <input type="text" name="search" id="search" class="form-control"
                                        placeholder="Search" aria-label="Search">
                                </div>
                                <div>
                                    <button type="sumbit" class="btn btn-sm px-3 btn-neutral d-flex align-items-center">
                                        <span>Cari</span><span class="vr opacity-20 mx-3"></span>
                                        <span class="text-xs text-primary">{{ $aspkarNegatifs->count() }}</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group">
                            <a href="#modalAdd" data-bs-toggle="modal" class="btn btn-sm btn-primary">
                                <i class="fe fe-plus me-2"></i>Tambah
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-bottom d-flex align-items-center">
                            <h5 class="me-auto">Daftar Aspek Karakter Negatif</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Karakter</th>
                                        <th scope="col">No</th>
                                        <th scope="col">Dasar Hukum</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Bobot</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aspkarNegatifs->groupBy(['penggolongan', 'karakter']) as $penggologan => $penggologanNegatif)
                                        <tr class="font-bold text-wrap table-active bg-gray-200">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                {{ $penggologan }}
                                            </td>
                                            <td>
                                                {{ round($aspkarNegatifs->sum('bobot'), 1) }}
                                            </td>
                                            <td></td>
                                        </tr>
                                        @foreach ($penggologanNegatif as $karakter => $karakterNegatif)
                                            <tr valign="top">
                                                <td rowspan="{{ $aspkarNegatifs->where('karakter', $karakter)->count() + 1 }}"
                                                    class="text-wrap table-active bg-gray-200">
                                                    {{ $karakter }}
                                                </td>
                                            </tr>
                                            @foreach ($karakterNegatif as $no => $innerValue)
                                                <tr valign="top">
                                                    <td class="text-wrap">{{ $innerValue->no }}</td>
                                                    <td class="text-wrap">{{ $innerValue->dasar_hukum }}</td>
                                                    <td class="text-wrap">{{ $innerValue->deskripsi }}</td>
                                                    <td class="text-wrap">{{ $innerValue->bobot }}</td>
                                                    <td class="text-end">
                                                        <a href="#modalUpdate" data-bs-toggle="modal"
                                                            id="btn_edit_karnegatif"
                                                            data-attr="{{ route('negatif.edit', $innerValue->uuid) }}"
                                                            class="btn btn-sm btn-square btn-neutral">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <button type="button"
                                                            class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5"><span class="text-muted text-sm">
                                {{ $aspkarNegatifs->render('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalAdd" class="modal hide fade in" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header">
                    <h5>Tambah Aspek Karakter Negatif</h5>
                </div>
                <div class="modal-body">
                    <strong>
                        Sementara Penambahan Aspek Karakter Negatif dilakukan melalui database
                    </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalUpdate" class="modal hide fade in" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header">
                    <h5>Update Aspek Karakter Negatif</h5>
                </div>
                <div class="modal-body">
                    <strong>
                        Sementara Perubahan Aspek Karakter Negatif dilakukan melalui database
                    </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // display a modal (Manage User)
        $(document).on("click", "#btn_edit_karnegatif", function(event) {
            event.preventDefault();
            let href = $(this).attr("data-attr");
            $.ajax({
                url: href,
                // return the result
                success: function(result) {
                    $("#edit_karnegatif").modal("show");
                    $("#show_karnegatif").html(result).show();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                },
            });
        });
    </script>
@endsection
