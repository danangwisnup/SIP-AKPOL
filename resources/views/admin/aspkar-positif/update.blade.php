<form action="{{ route('semester.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <!-- Semester -->
        <div class="mb-3">
            <label for="semester" class="form-label">Semester & Tahun Akademik</label>
            <!-- example value="Semester Genap - 2021/2022" -->
            <input type="text" class="form-control" id="semester_tahun" name="semester_tahun"
                value="{{ $data->semester_tahun }}" readonly>
        </div>
        <!-- Tanggal Mulai -->
        <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" max="9999-12-31"
                value="{{ $data->tanggal_mulai }}" required>
        </div>
        <!-- Tanggal Selesai -->
        <div class="mb-3">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" max="9999-12-31"
                value="{{ $data->tanggal_selesai }}" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
    </div>
</form>
