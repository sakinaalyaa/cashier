<?php

namespace App\Http\Controllers;

use App\Models\meja;
use App\Http\Requests\StoremejaRequest;
use App\Http\Requests\UpdatemejaRequest;
use App\Imports\mejaImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meja = meja::latest()->get();
        return view('meja.index', compact('meja'));
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
    public function store(StoremejaRequest $request)
    {
        $validated = $request->validated();
        DB::beginTransaction();
        meja::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }


    public function update(UpdatemejaRequest $request, meja $meja)
    {
        $validatedData = $request->validated();
        $meja->update($validatedData);
        return redirect()->route('meja.index')->with('success', 'meja updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(meja $meja)
    {
        $meja->delete();
        return redirect('meja')->with('success', 'Data berhasil dihapus!');
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new mejaImport, $date . 'meja.xlsx');
    }

    public function generatepdf()
    {
        $meja = meja::all();
        $pdf = Pdf::loadView('meja.data', compact('meja'));
        return $pdf->download('meja.pdf');
    }
}
