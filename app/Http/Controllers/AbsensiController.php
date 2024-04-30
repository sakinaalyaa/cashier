<?php

namespace App\Http\Controllers;

use App\Exports\AbsensiExport;
use App\Models\absensi;
use App\Http\Requests\StoreabsensiRequest;
use App\Http\Requests\UpdateabsensiRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDOException;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $absensi = absensi::latest()->get();
            return view('absensi.index', compact('absensi'));
        } catch (QueryException | Exception | PDOException $error) {

            //    $this->failResponse($error->getMessage(), $error->getCode());
            // return redirect()->back()->withErrors(['message' => 'Terjadi error']);
        }
    }
    

    public function store(StoreabsensiRequest $request)
    {

        $validated = $request->validated();
        DB::beginTransaction();
        absensi::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateabsensiRequest $request, absensi $absensi)
    {
        $validatedData = $request->validated();
        $absensi->update($validatedData);
        return redirect()->route('absensi.index')->with('success', 'absensi updated successfully');
    }
    public function destroy($absensi)
    {
        try {
            $absensi = absensi::findOrFail($absensi);

            $absensi->delete();

            return redirect('/absensi')->with('success', 'Data berhasil dihapus!');
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new absensiExport, $date . 'absensi.xlsx');
    }

    
    public function generatepdf()
    {
        $absensi = absensi::all();
        $pdf = Pdf::loadView('absensi.data', compact('absensi'));
        return $pdf->download('absensi.pdf');
    }
}
