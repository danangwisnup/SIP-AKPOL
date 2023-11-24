<div class="alert alert-info alert-left-icon alert-dismissible mt-7 mb-7" role="alert">
    <div class="icon">
        <i class="bi bi-info-circle"></i>
    </div>
    Semester dan tahun akademik yang aktif adalah
    <strong>{{ $semesters->where('status', 'Aktif')->first()->semester_tahun }}</strong>.
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
