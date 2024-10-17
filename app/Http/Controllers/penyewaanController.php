<?php

namespace App\Http\Controllers;

use App\Models\penyewaanModel;
use Illuminate\Http\Request;

class penyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penyewaan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penyewaan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        penyewaanModel::insert([
            "noplat" => $request->noplat,
            "nik" => $request->nik,
            "tgl_pinjam" => $request->tgl_pinjam,
            "tgl_kembali" => $request->tgl_kembali
        ]);

        return redirect('/penyewaan/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = penyewaanModel::where("id_sewa", $id)->first();
        return view('penyewaan.edit', compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        penyewaanModel::where("id_sewa", $id)->update([
            "noplat" => $request->noplat,
            "nik" => $request->nik,
            "tgl_pinjam" => $request->tgl_pinjam,
            "tgl_kembali" => $request->tgl_kembali
        ]);

        return redirect('/penyewaan/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        penyewaanModel::where("id_sewa", $id)->delete();
        return redirect('/penyewaan/');
    }
}
