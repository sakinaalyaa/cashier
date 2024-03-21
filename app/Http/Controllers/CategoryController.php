<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use App\Http\Requests\UpdatecatgoryRequest;
use App\Imports\categoryImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::latest()->get();
        return view('category.index', compact('category'));
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
    public function store(StoreCategoryRequest $request)
    {

        $validated = $request->validated();
        DB::beginTransaction();
        category::create($request->all());
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(UpdatecatgoryRequest $request, category $category)
    {
        $validatedData = $request->validated();
        $category->update($validatedData);
        return redirect()->route('category.index')->with('success', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect('category')->with('success', 'Data berhasil dihapus!');
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new categoryImport, $date .'cqtegory.xlsx');
    }

    public function generatepdf()
    {
        $category = category::all();
        $pdf = Pdf::loadView('category.data', compact('category'));
        return $pdf->download('category.pdf');
    }
}
