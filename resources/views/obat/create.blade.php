@extends('layouts.app')

@section('title', 'Tambah Obat')

@section('content')

<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Tambah Obat</h1>

    <form action="{{ route('obat.store') }}" method="POST">
        @csrf
        
        <label class="block mb-2 font-semibold">Kategori Obat</label>
        <input type="text" name="nama_obat"
               class="w-full border p-2 rounded mb-4"
               required>

        <label class="block mb-2 font-semibold">Stok Obat</label>
        <input type="number" name="stok_obat"
               class="w-full border p-2 rounded mb-4"
               required>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
        <a href="{{ route('obat.index') }}" class="ml-2 text-gray-600">Kembali</a>
    </form>
</div>

@endsection