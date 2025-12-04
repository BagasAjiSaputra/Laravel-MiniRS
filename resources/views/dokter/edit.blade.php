@extends('layouts.app')

@section('title', 'Edit Dokter')

@section('content')

<div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Edit Dokter</h1>

        <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="block font-semibold">Nama Dokter</label>
            <input type="text" name="nama_dokter" value="{{ $dokter->nama_dokter }}" class="w-full border p-2 rounded mb-3">

            <label class="block font-semibold">Spesialis</label>
            <input type="text" name="spesialis" value="{{ $dokter->spesialis }}" class="w-full border p-2 rounded mb-3">

            <label class="block font-semibold">Jam Masuk</label>
            <input type="time" name="jam_masuk" value="{{ $dokter->jam_masuk }}" class="w-full border p-2 rounded mb-3">

            <label class="block font-semibold">Jam Pulang</label>
            <input type="time" name="jam_pulang" value="{{ $dokter->jam_pulang }}" class="w-full border p-2 rounded mb-3">

            <button class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">
                Update
            </button>

            <a href="{{ route('dokter.index') }}" class="ml-2 text-gray-600 hover:underline">
                Batal
            </a>
        </form>

    </div>
    
@endsection
