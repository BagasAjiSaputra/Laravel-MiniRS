@extends('layouts.app')

@section('title', 'Tambah Dokter')

@section('content')

    <div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Tambah Dokter</h1>

        <form action="{{ route('dokter.store') }}" method="POST">
            @csrf

            <label class="block font-semibold">Nama Dokter</label>
            <input type="text" name="nama_dokter" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Spesialis</label>
            <input type="text" name="spesialis" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Jam Masuk</label>
            <input type="time" name="jam_masuk" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Jam Pulang</label>
            <input type="time" name="jam_pulang" class="w-full border p-2 rounded mb-3" required>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Simpan
            </button>

            <a href="{{ route('dokter.index') }}" class="ml-2 text-gray-600 hover:underline">
                Batal
            </a>
        </form>

    </div>

@endsection
