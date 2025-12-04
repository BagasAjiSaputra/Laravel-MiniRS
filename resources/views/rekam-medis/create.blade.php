@extends('layouts.app')

@section('title', 'Tambah')

@section('content')

<h1 class="text-2xl font-bold mb-4">Tambah Rekam Medis</h1>

<form action="{{ route('rekam-medis.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label>Diagnosis</label>
        <textarea name="diagnosis" class="w-full border p-2" required></textarea>
    </div>

    <div>
        <label>Tindakan</label>
        <textarea name="tindakan" class="w-full border p-2"></textarea>
    </div>

    <div>
        <label>Resep Obat</label>
        <textarea name="resep_obat" class="w-full border p-2"></textarea>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
</form>

@endsection