<?php

namespace App\Http\Controllers;

use App\Models\mobilModel;
use Illuminate\Http\Request;

class mobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mobilModel::all();
        $no = 1;
        return view('mobil.index', ['data' => $data, 'no' => $no]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mobil.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        mobilModel::insert([
            'noplat' => $request->noplat,
            'type' => $request->type,
            'merk' => $request->merk,
            'warna' => $request->warna,
        ]);

        return redirect('/mobil/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = mobilModel::where("noplat", $id)->first();
        return view('mobil.edit', compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        mobilModel::where("noplat", $id)->update([
            'noplat' => $request->noplat,
            'type' => $request->type,
            'merk' => $request->merk,
            'warna' => $request->warna,
        ]);

        return redirect('/mobil/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        mobilModel::where("noplat", $id)->delete();
        return redirect('/mobil/');
    }
}
