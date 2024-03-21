<?php

namespace App\Http\Controllers;

use App\Exports\MenuExport;
use App\Models\Jenis;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\menu;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDOException;
use App\Imports\MenuImport;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $menu = menu::latest()->get();
            return view('menu.index', compact('menu'));
        } catch (QueryException | Exception | PDOException $error) {
            //    $this->failResponse($error->getMessage(), $error->getCode());
            // return redirect()->back()->withErrors(['message' => 'Terjadi error']);
        }
    }
    /**
     * Show the form for creating a new resource.
     */

    public function store(StoreMenuRequest $request)
    {

        $validated = $request->validated();
        DB::beginTransaction();
        menu::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, menu $menu)
    {
        $validatedData = $request->validated();
        $menu->update($validatedData);
        return redirect()->route('menu.index')->with('success', 'menu updated successfully');
    }
    public function destroy(menu $menu)
    {
        $menu->delete();
        return redirect('menu')->with('success', 'Data berhasil dihapus!');
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new MenuExport, $date . 'menu.xlsx');
    }

    public function generatepdf()
    {
        $menu = menu::all();
        $pdf = Pdf::loadView('menu.data', compact('menu'));
        return $pdf->download('menu.pdf');
    }

    public function importData()
    {
        Excel::import(new MenuImport, request()->file('import'));

        return redirect(request()->segment(1).'/Menu')->with('succes, Import data succesfully!');
    }
}
