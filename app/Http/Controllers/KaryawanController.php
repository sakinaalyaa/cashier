<?php

namespace App\Http\Controllers;

use App\Exports\KaryawanExport;
use App\Models\Karyawan;
use App\Http\Requests\StorekaryawanRequest;
use App\Http\Requests\UpdatekaryawanRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::latest()->get();
        return view('karyawan.index', compact('karyawan'));
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
    public function store(StoreKaryawanRequest $request)
    {

        $validated = $request->validated();
        DB::beginTransaction();
        Karyawan::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }
    
    public function update(UpdateKaryawanRequest $request, Karyawan $karyawan)
    {
        $validatedData = $request->validated();
        $karyawan->update($validatedData);
        return redirect()->route('karyawan.index')->with('success','Karyawan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect('karyawan')->with('success', 'Data berhasil dihapus!');
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new KaryawanExport, $date .'karyawan.xlsx');
    }

    public function generatepdf()
    {
        $menu = Karyawan::all();
        $pdf = Pdf::loadView('karyawan.data', compact('karyawan'));
        return $pdf->download('karyawan.pdf');
    }
}
