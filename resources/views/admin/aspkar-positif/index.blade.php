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
                        <form action="{{ route('positif.index') }}" method="GET">
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
                                        <span class="text-xs text-primary">{{ $aspkarPositifs->count() }}</span>
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
                            <h5 class="me-auto">Daftar Aspek Karakter Positif</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Variabel/Indikator</th>
                                        <th scope="col">No</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Item Yang Dinilai</th>
                                        <th scope="col">Bobot</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aspkarPositifs->groupBy(['bab', 'sub_bab', 'no']) as $bab => $babPositifs)
                                        <tr valign="top" class="font-bold table-active bg-gray-200">
                                            <td>{{ $bab }}</td>
                                            <td class="text-wrap">
                                                {{ $aspkarPositifs->where('bab', $bab)->first()->variabel }}
                                            </td>
                                            <td></td>
                                            <td>Taruna TK {{ $aspkarPositifs->where('bab', $bab)->first()->tingkat }}
                                            <td></td>
                                            <td>{{ round($aspkarPositifs->where('bab', $bab)->sum('bobot'), 1) }}</td>
                                            <td></td>
                                        </tr>
                                        <?php
                                        $jumlahItem = 0;
                                        
                                        foreach ($babPositifs as $sub_bab => $value) {
                                            foreach ($value as $no => $innerValue) {
                                                $jumlahItem += $aspkarPositifs
                                                    ->where('no', $no)
                                                    ->where('sub_bab', $sub_bab)
                                                    ->where('bab', $bab)
                                                    ->groupBy('no')
                                                    ->count();
                                            }
                                        }
                                        
                                        $jumlahall =
                                            $jumlahItem +
                                            $aspkarPositifs
                                                ->where('bab', $bab)
                                                ->groupBy('sub_bab')
                                                ->count() +
                                            $aspkarPositifs->where('bab', $bab)->count() +
                                            1;
                                        ?>
                                        @foreach ($babPositifs as $sub_bab => $value)
                                            <tr valign="top">
                                                <td rowspan="{{ $aspkarPositifs->where('bab', $bab)->where('sub_bab', $sub_bab)->count() +
                                                    $aspkarPositifs->where('bab', $bab)->where('sub_bab', $sub_bab)->groupBy('no')->count() +
                                                    1 }}"
                                                    class="text-wrap">
                                                    {{ $sub_bab }}
                                                </td>
                                                <td rowspan="{{ $aspkarPositifs->where('bab', $bab)->where('sub_bab', $sub_bab)->count() +
                                                    $aspkarPositifs->where('bab', $bab)->where('sub_bab', $sub_bab)->groupBy('no')->count() +
                                                    1 }}"
                                                    class="text-wrap">
                                                    {{ $aspkarPositifs->where('sub_bab', $sub_bab)->where('bab', $bab)->first()->indikator }}
                                                </td>
                                            </tr>
                                            @foreach ($value as $no => $innerValue)
                                                <tr valign="top">
                                                    <td rowspan="{{ $aspkarPositifs->where('no', $no)->where('sub_bab', $sub_bab)->where('bab', $bab)->count() + 1 }}"
                                                        class="text-wrap">
                                                        {{ $no }}.
                                                    </td>
                                                    <td rowspan="{{ $aspkarPositifs->where('no', $no)->where('sub_bab', $sub_bab)->where('bab', $bab)->count() + 1 }}"
                                                        class="text-wrap">
                                                        {{ $aspkarPositifs->where('no', $no)->where('sub_bab', $sub_bab)->where('bab', $bab)->first()->keterangan }}
                                                    </td>
                                                </tr>
                                                @foreach ($innerValue as $item)
                                                    <tr valign="top">
                                                        <td class="text-wrap">{{ $item['item'] }}</td>
                                                        <td class="text-wrap">{{ $item['bobot'] }}</td>
                                                        <td class="text-end">
                                                            <a href="#modalUpdate" data-bs-toggle="modal"
                                                                id="btn_edit_karpositif"
                                                                data-attr="{{ route('positif.edit', $item['uuid']) }}"
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5"><span class="text-muted text-sm">
                                {{ $aspkarPositifs->render('pagination::bootstrap-5') }}
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
                    <h5>Tambah Aspek Karakter Positif</h5>
                </div>
                <div class="modal-body">
                    <strong>
                        Sementara Penambahan Aspek Karakter Positif dilakukan melalui database
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
                    <h5>Update Aspek Karakter Positif</h5>
                </div>
                <div class="modal-body">
                    <strong>
                        Sementara Perubahan Aspek Karakter Positif dilakukan melalui database
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
        $(document).on("click", "#btn_edit_karpositif", function(event) {
            event.preventDefault();
            let href = $(this).attr("data-attr");
            $.ajax({
                url: href,
                // return the result
                success: function(result) {
                    $("#edit_karpositif").modal("show");
                    $("#show_karpositif").html(result).show();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                },
            });
        });
    </script>
@endsection
