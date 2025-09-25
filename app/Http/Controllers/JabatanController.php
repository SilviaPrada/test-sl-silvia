<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function create()
    {
        return view('jabatans.form', [
            'title' => 'Tambah Jabatan',
            'action' => route('jabatans.store'),
            'isEdit' => false
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required',
            'deskripsi' => 'nullable'
        ]);

        Jabatan::create($request->all());
        return redirect()->route('pegawais.index', ['tab' => 'jabatan'])
            ->with('success', 'Jabatan berhasil ditambahkan');
    }

    public function edit(Jabatan $jabatan)
    {
        return view('jabatans.form', [
            'title' => 'Edit Jabatan',
            'action' => route('jabatans.update', $jabatan->id),
            'isEdit' => true,
            'jabatan' => $jabatan
        ]);
    }

    public function update(Request $request, Jabatan $jabatan)
    {
        $request->validate([
            'nama_jabatan' => 'required',
            'deskripsi' => 'nullable'
        ]);

        $jabatan->update($request->all());
        return redirect()->route('pegawais.index', ['tab' => 'jabatan'])
            ->with('success', 'Jabatan berhasil diupdate');
    }

    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect()->route('pegawais.index', ['tab' => 'jabatan'])
            ->with('success', 'Jabatan berhasil dihapus');
    }
}
