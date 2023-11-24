<?php

namespace App\Http\Controllers;

use App\Models\AspkarPositif;
use App\Http\Requests\StoreAspkarPositifRequest;
use App\Http\Requests\UpdateAspkarPositifRequest;
use App\Models\Semester;
use Illuminate\Http\Request;

class AspkarPositifController extends Controller
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
            $jmlData = AspkarPositif::all()->where('tingkat', '1')->count();
            return $jmlData;
        }

        // Mengirim data semester ke view index
        return view('admin.aspkar-positif.index', [
            'title' => 'Aspek Karakter Positif',
            'semesters' => Semester::all(),
            'aspkarPositifs' => AspkarPositif::where('tingkat', 'like', '%' . $search . '%')
                ->orWhere('bab', 'like', '%' . $search . '%')
                ->orWhere('variabel', 'like', '%' . $search . '%')
                ->orWhere('sub_bab', 'like', '%' . $search . '%')
                ->orWhere('indikator', 'like', '%' . $search . '%')
                ->orWhere('no', 'like', '%' . $search . '%')
                ->orWhere('keterangan', 'like', '%' . $search . '%')
                ->orWhere('item', 'like', '%' . $search . '%')
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
    public function store(StoreAspkarPositifRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AspkarPositif $aspkarPositif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AspkarPositif $aspkarPositif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAspkarPositifRequest $request, AspkarPositif $aspkarPositif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AspkarPositif $aspkarPositif)
    {
        //
    }
}
