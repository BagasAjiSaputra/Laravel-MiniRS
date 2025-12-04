@extends('layouts.app')

@section('title', 'Tambah Dokter')

@section('content')
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-semibold mb-4">Edit Pasien</h2>

        @if(session('success'))
            <div class="mb-3 p-3 bg-green-100 text-green-700 border border-green-300 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pasien.update', $pasien->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div>
                <label class="block font-medium mb-1">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $pasien->nama) }}"
                    class="w-full p-2 border rounded focus:ring focus:ring-blue-300" />
                @error('nama')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <!-- Alamat -->
            <div>
                <label class="block font-medium mb-1">Alamat</label>
                <textarea name="alamat"
                    class="w-full p-2 border rounded focus:ring focus:ring-blue-300">{{ old('alamat', $pasien->alamat) }}</textarea>
            </div>

            <!-- No HP -->
            <div>
                <label class="block font-medium mb-1">No HP</label>
                <input type="text" name="no_hp" value="{{ old('no_hp', $pasien->no_hp) }}"
                    class="w-full p-2 border rounded focus:ring focus:ring-blue-300" />
            </div>

            <!-- Tanggal Lahir -->
            <div>
                <label class="block font-medium mb-1">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir', $pasien->tgl_lahir) }}"
                    class="w-full p-2 border rounded focus:ring focus:ring-blue-300" />
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Update
            </button>
        </form>
    </div>
@endsection