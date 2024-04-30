<?php

namespace App\Http\Controllers;

use App\Exports\pelangganExport;
use App\Models\pelanggan;
use App\Http\Requests\StorepelangganRequest;
use App\Http\Requests\UpdatepelangganRequest;
use App\Imports\pelangganImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = pelanggan::latest()->get();
        return view('pelanggan.index', compact('pelanggan'));
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
    public function store(StorepelangganRequest $request)
    {

        $validated = $request->validated();
        DB::beginTransaction();
        pelanggan::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(UpdatepelangganRequest $request, pelanggan $pelanggan)
    {
        $validatedData = $request->validated();
        $pelanggan->update($validatedData);
        return redirect()->route('pelanggan.index')->with('success', 'pelanggan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect('pelanggan')->with('success', 'Data berhasil dihapus!');
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new pelangganExport, $date . 'pelanggan.xlsx');
    }

    public function generatepdf()
    {
        $pelanggan = pelanggan::all();
        $pdf = Pdf::loadView('pelanggan.data', compact('pelanggan'));
        return $pdf->download('pelanggan.pdf');
    }

    public function importData(){
        Excel::import(new pelangganImport, request()->file('import'));

        return redirect(request()->segment(1).'/pelanggan')->with('succes','Import data pelanggan berhasil!');
    }

}
