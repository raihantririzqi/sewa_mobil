<?php

namespace App\Http\Controllers;

use App\Models\pelangganModel;
use Illuminate\Http\Request;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pelangganModel::all();
        return view('pelanggan.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pelangganModel::insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon
        ]);

        return redirect('/pelanggan/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = pelangganModel::where("nis", $id)->first();
        return view('pelanggan.edit', compact("data"));
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
        pelangganModel::where("nik", $id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon
        ]);

        return redirect('/pelanggan/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pelangganModel::where("nis", $id)->delete();
        return redirect('/pelanggan/');
    }
}
