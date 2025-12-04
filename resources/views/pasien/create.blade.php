@extends('layouts.app')

@section('title', 'Tambah Dokter')

@section('content')
  <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

    <h2 class="text-2xl font-bold mb-6 text-center">Tambah Pasien</h2>

    @if(session('success'))
      <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('pasien.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Nama -->
        <div>
            <label class="block font-medium mb-1">Nama</label>
            <input type="text" 
                   name="nama"
                   value="{{ old('nama') }}"
                   class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-300">
            @error('nama')
               <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Alamat -->
        <div>
            <label class="block font-medium mb-1">Alamat</label>
            <textarea name="alamat"
                      class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                      rows="3">{{ old('alamat') }}</textarea>
        </div>

        <!-- No HP -->
        <div>
            <label class="block font-medium mb-1">No HP</label>
            <input type="text" 
                   name="no_hp"
                   value="{{ old('no_hp') }}"
                   class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <!-- Tanggal Lahir -->
        <div>
            <label class="block font-medium mb-1">Tanggal Lahir</label>
            <input type="date" 
                   name="tgl_lahir"
                   value="{{ old('tgl_lahir') }}"
                   class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-300">
        </div>

        <!-- Submit -->
        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
            Simpan
        </button>

    </form>

  </div>
@endsection