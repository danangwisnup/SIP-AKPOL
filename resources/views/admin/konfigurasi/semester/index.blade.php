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
                <div class="vstack gap-4 col-lg-4 col-12 mb-5">
                    <div class="card">
                        <div class="card-header border-bottom d-flex align-items-center">
                            <h5 class="me-auto">Pengaturan</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-5">
                                <small class="text-danger">
                                    Aktifkan semester dan tahun akademik yang akan digunakan untuk penilaian.
                                </small>
                            </div>
                            <form
                                action="{{ route('semester.update', ['type' => '1', 'semester' => $semesters->where('status', 'Aktif')->first()->id]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <select class="form-select" id="id" name="id" required>
                                        @foreach ($semesters as $semester)
                                            <option value="{{ $semester->id }}"
                                                {{ $semester->status == 'Aktif' ? 'selected' : '' }}>
                                                {{ $semester->semester_tahun }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-sm btn-success" hidden>Simpan</button>
                            </form>
                            <script>
                                document.getElementById('id').addEventListener('change', function() {
                                    this.form.submit();
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="vstack gap-4 col-lg-8 col-12">
                    <div class="d-flex justify-content-between flex-column flex-sm-row gap-3">
                        <form action="{{ route('semester.index') }}" method="GET">
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
                                        <span class="text-xs text-primary">{{ $data->count() }}</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group">
                            <a href="#modalAdd" data-bs-toggle="modal" class="btn btn-sm btn-primary">
                                <i class="fe fe-plus me-2"></i>Tambah Semester
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-bottom d-flex align-items-center">
                            <h5 class="me-auto">Daftar Semester & Tahun Akademik</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Semester & Tahun Akademik</th>
                                        <th scope="col">Tanggal Mulai</th>
                                        <th scope="col">Tanggal Selesai</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $semester)
                                        <tr class="{{ $semester->status == 'Aktif' ? 'h1 text-success' : '' }}">
                                            <th>{{ $semester->id }}</th>
                                            <td>{{ $semester->semester_tahun }} </td>
                                            <td>{{ $semester->tanggal_mulai }}</td>
                                            <td>{{ $semester->tanggal_selesai }}</td>
                                            <td class="text-end">
                                                <a href="#modalUpdate" data-bs-toggle="modal" id="btn_edit_semester"
                                                    data-attr="{{ route('semester.edit', $semester->id) }}"
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
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5"><span class="text-muted text-sm">
                                {{ $data->render('pagination::bootstrap-5') }}
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
                    <h5 class="mb-5">Tambah Semester & Tahun Akademik</h5>
                    <small class="d-block text-xs text-danger">
                        Lakukan ketika semester sebelumnya akan selesai.
                    </small>
                </div>
                <form action="{{ route('semester.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <!-- Semester -->
                        <div class="mb-3">
                            <label for="semester" class="form-label">Semester & Tahun Akademik</label>
                            <!-- example value="Semester Genap - 2021/2022" -->
                            <input type="text" class="form-control" id="semester_tahun" name="semester_tahun"
                                value="<?php
                                // example value="Semester Genap - 2021/2022"
                                $lastSemester = $semesters->where('created_at', $semesters->max('created_at'))->first();
                                $lastSemesterSemester = explode(' - ', $lastSemester->semester_tahun);
                                $lastSemesterTahun = explode('/', $lastSemester->semester_tahun);
                                if ($lastSemesterSemester[0] == 'Semester Genap') {
                                    echo 'Semester Ganjil - ' . $lastSemesterTahun[1] . '/' . ($lastSemesterTahun[1] + 1);
                                } else {
                                    echo 'Semester Genap - ' . $lastSemesterTahun[1] - 1 . '/' . $lastSemesterTahun[1];
                                }
                                //dd($lastSemester);
                                ?>">
                        </div>
                        <!-- Tanggal Mulai -->
                        <div class="mb-3">
                            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                                max="9999-12-31" required>
                        </div>
                        <!-- Tanggal Selesai -->
                        <div class="mb-3">
                            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai"
                                max="9999-12-31" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-success">Buat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalUpdate" class="modal hide fade in" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-3">
                <div class="modal-header">
                    <h5 class="mb-5">Update Semester & Tahun Akademik</h5>
                </div>

                <div id="show_semester"></div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // display a modal (Manage User)
        $(document).on("click", "#btn_edit_semester", function(event) {
            event.preventDefault();
            let href = $(this).attr("data-attr");
            $.ajax({
                url: href,
                // return the result
                success: function(result) {
                    $("#edit_semester").modal("show");
                    $("#show_semester").html(result).show();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                },
            });
        });
    </script>
@endsection
