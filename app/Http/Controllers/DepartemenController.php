<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;

class DepartemenController extends Controller
{
    public function create()
    {
        return view('departemens.form', [
            'title' => 'Tambah Departemen',
            'action' => route('departemens.store'),
            'isEdit' => false
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_departemen' => 'required',
            'lokasi' => 'nullable'
        ]);

        Departemen::create($request->all());
        return redirect()->route('pegawais.index', ['tab' => 'departemen'])
            ->with('success', 'Departemen berhasil ditambahkan');
    }

    public function edit(Departemen $departemen)
    {
        return view('departemens.form', [
            'title' => 'Edit Departemen',
            'action' => route('departemens.update', $departemen->id),
            'isEdit' => true,
            'departemen' => $departemen
        ]);
    }

    public function update(Request $request, Departemen $departemen)
    {
        $request->validate([
            'nama_departemen' => 'required',
            'lokasi' => 'nullable'
        ]);

        $departemen->update($request->all());
        return redirect()->route('pegawais.index', ['tab' => 'departemen'])
            ->with('success', 'Departemen berhasil diupdate');
    }

    public function destroy(Departemen $departemen)
    {
        $departemen->delete();
        return redirect()->route('pegawais.index', ['tab' => 'departemen'])
        ->with('success', 'Departemen berhasil dihapus');
    }
}
