@extends('layouts.main')

@section('content')
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl font-semibold mb-6">{{ $title }}</h2>

        <form action="{{ $action }}" method="POST" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow space-y-4">
            @csrf
            @if ($isEdit)
                @method('PUT')
            @endif

            <div>
                <label class="block mb-1">Nama Departemen</label>
                <input type="text" name="nama_departemen"
                    value="{{ old('nama_departemen', $departemen->nama_departemen ?? '') }}"
                    class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600" required>
            </div>

            <div>
                <label class="block mb-1">Lokasi</label>
                <input type="text" name="lokasi" value="{{ old('lokasi', $departemen->lokasi ?? '') }}"
                    class="w-full border rounded px-3 py-2 dark:bg-gray-700 dark:border-gray-600">
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('pegawais.index', ['tab' => 'departemen']) }}"
                    class="px-4 py-2 border rounded-md dark:border-gray-600">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
