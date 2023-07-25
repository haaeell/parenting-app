<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.index',compact('artikels'));
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
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',   
            'konten' => 'required',
            'penulis' => 'required',
            'publikasi' => 'required|date',

        ]);


        Artikel::create([
            'judul' => $request->input('judul'),
            'konten' => $request->input('konten'),
            'penulis' => $request->input('penulis'),
            'publikasi' => $request->input('publikasi'),
        ]);

        return redirect()->route('artikels.index')->with('success', 'Berhasil menambahkan artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikels = Artikel::findOrFail($id);
        $artikels->delete();

        return redirect()->route('artikels.index')->with('success', 'Berhasil hapus user');
    }
}
