<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use App\Http\Requests\StorepemesananRequest;
use App\Http\Requests\UpdatepemesananRequest;
use App\Models\jenis;
use Illuminate\Support\Facades\DB;

class pemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data['jenis'] = jenis::with(['menu'])->get();
        // return view('pemesanan.index')->with($data);
        $data['pemesanan'] = Pemesanan::orderBy('created_at', 'DESC')->get();
        $jenis = jenis::all();


        return view('pemesanan.index', compact('data', 'jenis'));
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
    public function store(StorepemesananRequest $request)
    {
        $validated = $request->validated();
        DB::beginTransaction();


        pemesanan::create($validated);
        DB::table('pemesanan')->insert($validated);
        DB::commit();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pemesanan = pemesanan::findOrFail($id);
        return view('pemesanan.edit', compact('pemesanan'));
    }

    public function update(UpdatepemesananRequest $request, pemesanan $pemesanan)
    {
        $validatedData = $request->validated();
        $pemesanan->update($validatedData);
        return redirect()->route('pemesanan.index')->with('success', 'pemesanan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemesanan $pemesanan)
    {
        $pemesanan->delete();
        return redirect('pemesanan')->with('success', 'Data berhasil dihapus!');
    }
}
