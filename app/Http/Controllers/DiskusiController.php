<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diskusi;

class DiskusiController extends Controller
{
    public function index()
    {
        $diskusis = Diskusi::all();
        return view('diskusi.index', compact('diskusis'));
    }

    public function create()
    {
        return view('diskusi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'topik' => 'required',
            'pesan' => 'required',
        ]);

        Diskusi::create($request->all());

        return redirect()->route('diskusi.index')
                         ->with('success', 'Diskusi berhasil ditambahkan!');
    }

    public function show($id)
    {
        $diskusi = Diskusi::findOrFail($id);
        return view('diskusi.show', compact('diskusi'));
    }

    public function edit($id)
    {
        $diskusi = Diskusi::findOrFail($id);
        return view('diskusi.edit', compact('diskusi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'topik' => 'required',
            'pesan' => 'required',
        ]);

        $diskusi = Diskusi::findOrFail($id);
        $diskusi->update($request->all());

        return redirect()->route('diskusi.index')
                         ->with('success', 'Diskusi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $diskusi = Diskusi::findOrFail($id);
        $diskusi->delete();

        return redirect()->route('diskusi.index')
                         ->with('success', 'Diskusi berhasil dihapus!');
    }
}