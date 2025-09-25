@extends('layouts.main')

@section('content')
    <div x-data="{ tab: '{{ request('tab', 'pegawai') }}' }" class="max-w-7xl mx-auto">
        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol Tab -->
        <div class="flex space-x-2 mb-6">
            <button @click="tab = 'pegawai'"
                :class="tab === 'pegawai'
                    ?
                    'bg-blue-600 text-white' :
                    'bg-gray-200 text-gray-700 hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600'"
                class="px-4 py-2 rounded-full transition-colors">
                Pegawai
            </button>

            <button @click="tab = 'jabatan'"
                :class="tab === 'jabatan'
                    ?
                    'bg-blue-600 text-white' :
                    'bg-gray-200 text-gray-700 hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600'"
                class="px-4 py-2 rounded-full transition-colors">
                Jabatan
            </button>

            <button @click="tab = 'departemen'"
                :class="tab === 'departemen'
                    ?
                    'bg-blue-600 text-white' :
                    'bg-gray-200 text-gray-700 hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600'"
                class="px-4 py-2 rounded-full transition-colors">
                Departemen
            </button>
        </div>

        <!-- Daftar Pegawai -->
        <div x-show="tab === 'pegawai'">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold">Daftar Pegawai</h2>
                <a href="{{ route('pegawais.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    + Tambah Pegawai
                </a>
            </div>

            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
                <table class="min-w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700 text-left text-gray-700 dark:text-gray-200">
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Jabatan</th>
                            <th class="px-4 py-2">Departemen</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawais as $pegawai)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $pegawai->nama }}</td>
                                <td class="px-4 py-2">{{ $pegawai->email }}</td>
                                <td class="px-4 py-2">{{ $pegawai->jabatan->nama_jabatan }}</td>
                                <td class="px-4 py-2">{{ $pegawai->departemen->nama_departemen }}</td>
                                <td class="px-4 py-2 space-x-2 flex">
                                    <!-- Tombol Edit -->
                                    <x-button.edit href="{{ route('pegawais.edit', $pegawai->id) }}">Edit</x-button.edit>

                                    <form action="{{ route('pegawais.destroy', $pegawai->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin hapus data?')">
                                        @csrf
                                        @method('DELETE')
                                        <x-button.delete type="submit">Hapus</x-button.delete>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Daftar Jabatan -->
        <div x-show="tab === 'jabatan'">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold">Daftar Jabatan</h2>
                <a href="{{ route('jabatans.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    + Tambah Jabatan
                </a>
            </div>

            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
                <table class="min-w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700 text-left text-gray-700 dark:text-gray-200">
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama Jabatan</th>
                            <th class="px-4 py-2">Deskripsi</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatans as $jabatan)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $jabatan->nama_jabatan }}</td>
                                <td class="px-4 py-2">{{ $jabatan->deskripsi }}</td>
                                <td class="px-4 py-2 space-x-2 flex">
                                    <x-button.edit href="{{ route('jabatans.edit', $jabatan->id) }}">Edit</x-button.edit>

                                    <form action="{{ route('jabatans.destroy', $jabatan->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin hapus jabatan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <x-button.delete type="submit">Hapus</x-button.delete>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Daftar Departemen -->
        <div x-show="tab === 'departemen'">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold">Daftar Departemen</h2>
                <a href="{{ route('departemens.create') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    + Tambah Departemen
                </a>
            </div>

            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
                <table class="min-w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700 text-left text-gray-700 dark:text-gray-200">
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama Departemen</th>
                            <th class="px-4 py-2">Lokasi</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departemens as $departemen)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $departemen->nama_departemen }}</td>
                                <td class="px-4 py-2">{{ $departemen->lokasi }}</td>
                                <td class="px-4 py-2 space-x-2 flex">
                                    <x-button.edit
                                        href="{{ route('departemens.edit', $departemen->id) }}">Edit</x-button.edit>

                                    <form action="{{ route('departemens.destroy', $departemen->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin hapus departemen ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <x-button.delete type="submit">Hapus</x-button.delete>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
