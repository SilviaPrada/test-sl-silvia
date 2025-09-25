<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\Departemen;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::with(['jabatan', 'departemen'])->get();
        $jabatans = Jabatan::all();
        $departemens = Departemen::all();

        return view('pegawais.index', compact('pegawais', 'jabatans', 'departemens'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        $departemens = Departemen::all();
        return view('pegawais.form', [
            'title' => 'Tambah Pegawai',
            'action' => route('pegawais.store'),
            'isEdit' => false,
            'jabatans' => $jabatans,
            'departemens' => $departemens
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pegawais',
            'jabatan_id' => 'required|exists:jabatans,id',
            'departemen_id' => 'required|exists:departemens,id',
        ]);

        Pegawai::create($request->all());
        return redirect()->route('pegawais.index', ['tab' => 'pegawai'])
            ->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function edit(Pegawai $pegawai)
    {
        $jabatans = Jabatan::all();
        $departemens = Departemen::all();
        return view('pegawais.form', [
            'title' => 'Edit Pegawai',
            'action' => route('pegawais.update', $pegawai->id),
            'isEdit' => true,
            'pegawai' => $pegawai,
            'jabatans' => $jabatans,
            'departemens' => $departemens
        ]);
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pegawais,email,' . $pegawai->id,
            'jabatan_id' => 'required|exists:jabatans,id',
            'departemen_id' => 'required|exists:departemens,id',
        ]);

        $pegawai->update($request->all());
        return redirect()->route('pegawais.index', ['tab' => 'pegawai'])
            ->with('success', 'Pegawai berhasil diupdate');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawais.index', ['tab' => 'pegawai'])
            ->with('success', 'Pegawai berhasil dihapus');
    }
}
