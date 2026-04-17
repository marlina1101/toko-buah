<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    public function index()
    {
        $buah = Buah::all();
        return view('buah.index', compact('buah'));
    }

    public function create()
    {
        return view('buah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_buah' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Buah::create($request->all());

        return redirect()->route('buah.index');
    }

    public function edit($id)
    {
        $buah = Buah::findOrFail($id);
        return view('buah.edit', compact('buah'));
    }

    public function update(Request $request, $id)
    {
        $buah = Buah::findOrFail($id);
        $buah->update($request->all());

        return redirect()->route('buah.index');
    }

    public function destroy($id)
    {
        Buah::destroy($id);
        return redirect()->route('buah.index');
    }
}