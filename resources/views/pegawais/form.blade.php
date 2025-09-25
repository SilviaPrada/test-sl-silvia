@extends('layouts.main')

@section('content')
<div class="max-w-3xl mx-auto">
    <h2 class="text-2xl font-semibold mb-6">{{ $title }}</h2>

    <form action="{{ $action }}" method="POST" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow space-y-4">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div>
            <label class="block mb-1">Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $pegawai->nama ?? '') }}"
                class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600" required>
        </div>

        <div>
            <label class="block mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $pegawai->email ?? '') }}"
                class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600" required>
        </div>

        <div>
            <label class="block mb-1">Alamat</label>
            <textarea name="alamat"
                class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600">{{ old('alamat', $pegawai->alamat ?? '') }}</textarea>
        </div>

        <div>
            <label class="block mb-1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir ?? '') }}"
                class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600">
        </div>

        <div>
            <label class="block mb-1">Jabatan</label>
            <select name="jabatan_id"
                class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600">
                @foreach($jabatans as $jabatan)
                    <option value="{{ $jabatan->id }}" 
                        {{ old('jabatan_id', $pegawai->jabatan_id ?? '') == $jabatan->id ? 'selected' : '' }}>
                        {{ $jabatan->nama_jabatan }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-1">Departemen</label>
            <select name="departemen_id"
                class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600">
                @foreach($departemens as $departemen)
                    <option value="{{ $departemen->id }}" 
                        {{ old('departemen_id', $pegawai->departemen_id ?? '') == $departemen->id ? 'selected' : '' }}>
                        {{ $departemen->nama_departemen }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('pegawais.index') }}"
               class="px-4 py-2 border rounded-md dark:border-gray-600">Batal</a>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
