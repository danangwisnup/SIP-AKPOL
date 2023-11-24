<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Http\Requests\StoreSemesterRequest;
use App\Http\Requests\UpdateSemesterRequest;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // mengambil data search
        $search = $request->get('search');

        // Mengirim data semester ke view index
        return view('admin.konfigurasi.semester.index', [
            'title' => 'Semester',
            'data' => Semester::where('semester_tahun', 'like', '%' . $search . '%')
                ->orWhere('tanggal_mulai', 'like', '%' . $search . '%')
                ->orWhere('tanggal_selesai', 'like', '%' . $search . '%')
                ->paginate(5),
            'semesters' => Semester::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSemesterRequest $request)
    {
        // Validasi data yang dikirim
        $request->validated([
            'semester_tahun' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        // Menyimpan data semester baru
        Semester::create([
            'semester_tahun' => $request->semester_tahun,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);

        // Redirect ke halaman semester
        return redirect()->route('semester.index')->with('success', 'Semester berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semester $semester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semester $semester)
    {
        // Mengirim data semester ke view edit
        return view('admin.konfigurasi.semester.update', [
            'title' => 'Semester',
            'data' => $semester
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSemesterRequest $request, Semester $semester)
    {
        if ($request->type == 1) {
            $semester->update([
                'status' => 'Tidak Aktif'
            ]);

            Semester::where('id', $request->id)->update([
                'status' => 'Aktif'
            ]);
        } else {
            // Validasi data yang dikirim
            $request->validated([
                'tanggal_mulai' => 'required|date',
                'tanggal_selesai' => 'required|date',
            ]);

            // Menyimpan data semester yang diupdate
            $semester->update([
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
            ]);
        }

        // Redirect ke halaman semester
        return redirect()->route('semester.index')->with('success', 'Semester berhasil diaktifkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semester $semester)
    {
        //
    }
}
