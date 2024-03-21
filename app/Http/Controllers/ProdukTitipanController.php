<?php

namespace App\Http\Controllers;

use App\Exports\produkTitipanExport;
use App\Models\produkTitipan;
use App\Http\Requests\StoreprodukTitipanRequest;
use App\Http\Requests\UpdateprodukTitipanRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProdukTitipanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkTitipan = produkTitipan::latest()->get();
        return view('produkTitipan.index', compact('produkTitipan'));
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
    public function store(StoreprodukTitipanRequest $request)
    {
        $validated = $request->validated();
        DB::beginTransaction();
        produkTitipan::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }


    public function update(UpdateprodukTitipanRequest $request, produkTitipan $produkTitipan)
    {
        $validatedData = $request->validated();
        $produkTitipan->update($validatedData);
        return redirect()->route('produkTitipan.index')->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produkTitipan $produkTitipan)
    {
        $produkTitipan->delete();
        return redirect('produkTitipan')->with('success', 'Data berhasil dihapus!');
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new produkTitipanExport, $date .'produkTitipan.xlsx');
    }

    public function sakina()
    {
        $produkTitipan = produkTitipan::all();
        $pdf = Pdf::loadView('produkTitipan.data', compact('produkTitipan'));
        return $pdf->download('produkTitipan.pdf');
    }
}
