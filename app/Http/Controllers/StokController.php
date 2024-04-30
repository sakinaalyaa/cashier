<?php

namespace App\Http\Controllers;

use App\Exports\stokExport;
use App\Models\Stok;
use App\Http\Requests\StoreStokRequest;
use App\Http\Requests\UpdateStokRequest;
use App\Imports\stokImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

// use Barryvdh\DomPDF\Facade\Pdf;
// use Maatwebsite\Excel\Facades\Excel;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok = stok::latest()->get();
        return view('stok.index', compact('stok'));
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
    public function store(StoreStokRequest $request)
    {

        $validated = $request->validated();
        DB::beginTransaction();
        Stok::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(UpdateStokRequest $request, stok $stok)
    {
        $validatedData = $request->validated();
        $stok->update($validatedData);
        return redirect()->route('stok.index')->with('success', 'stok updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stok $stok)
    {
        $stok->delete();
        return redirect('stok')->with('success', 'Data berhasil dihapus!');
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new stokExport, $date . 'stok.xlsx');
    }

    public function generatepdf()
    {
        $stok = stok::all();
        $pdf = Pdf::loadView('stok.data', compact('stok'));
        return $pdf->download('stok.pdf');
    }

    public function imprtData(){
        Excel::import(new stokImport, request()->file('import'));

        return redirect(request()->segment(1).'/stok')->with('succes','Import data stok berhasil!');
    }
}
