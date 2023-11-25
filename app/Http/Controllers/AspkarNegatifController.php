<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\AspkarNegatif;
use App\Http\Requests\StoreAspkarNegatifRequest;
use App\Http\Requests\UpdateAspkarNegatifRequest;

class AspkarNegatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // mengambil data search
        $search = $request->get('search');

        function TingkatPagination()
        {
            $jmlData = AspkarNegatif::all()->where('penggolongan', '1')->count();
            return $jmlData;
        }

        // Mengirim data semester ke view index
        return view('admin.aspkar-negatif.index', [
            'title' => 'Aspek Karakter Negatif',
            'semesters' => Semester::all(),
            'aspkarNegatifs' => AspkarNegatif::where('penggolongan', 'like', '%' . $search . '%')
                ->orWhere('karakter', 'like', '%' . $search . '%')
                ->orWhere('no', 'like', '%' . $search . '%')
                ->orWhere('dasar_hukum', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%')
                ->orWhere('bobot', 'like', '%' . $search . '%')
                ->paginate(TingkatPagination()),
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
    public function store(StoreAspkarNegatifRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AspkarNegatif $aspkarNegatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AspkarNegatif $aspkarNegatif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAspkarNegatifRequest $request, AspkarNegatif $aspkarNegatif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AspkarNegatif $aspkarNegatif)
    {
        //
    }
}
