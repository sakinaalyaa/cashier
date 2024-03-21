<?php

namespace App\Http\Controllers;

use App\Exports\jenisExport;
use App\Models\Jenis;
use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDOException;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $jenis = Jenis::latest()->get();
            return view('jenis.index', compact('jenis'));
        } catch (QueryException | Exception | PDOException $error) {

            //    $this->failResponse($error->getMessage(), $error->getCode());
            // return redirect()->back()->withErrors(['message' => 'Terjadi error']);
        }
    }
    

    public function store(StoreJenisRequest $request)
    {

        $validated = $request->validated();
        DB::beginTransaction();
        Jenis::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejenisRequest $request, jenis $jeni)
    {
        $validatedData = $request->validated();
        $jeni->update($validatedData);
        return redirect()->route('jenis.index')->with('success', 'jenis updated successfully');
    }
    public function destroy($jenis)
    {
        try {
            $jenis = Jenis::findOrFail($jenis);

            $jenis->delete();

            return redirect('/jenis')->with('success', 'Data berhasil dihapus!');
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getCode());
        }
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new jenisExport, $date . 'jenis.xlsx');
    }

    public function generatepdf()
    {
        $jenis = jenis::all();
        $pdf = Pdf::loadView('jenis.data', compact('jenis'));
        return $pdf->download('jenis.pdf');
    }
}
