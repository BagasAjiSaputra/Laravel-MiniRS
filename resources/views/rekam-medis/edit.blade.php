@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<h1 class="text-2xl font-bold mb-4">Edit Rekam Medis</h1>

<form action="{{ route('rekam-medis.update', $item->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label>Diagnosis</label>
        <textarea name="diagnosis" class="w-full border p-2" required>{{ $item->diagnosis }}</textarea>
    </div>

    <div>
        <label>Tindakan</label>
        <textarea name="tindakan" class="w-full border p-2">{{ $item->tindakan }}</textarea>
    </div>

    <div>
        <label>Resep Obat</label>
        <textarea name="resep_obat" class="w-full border p-2">{{ $item->resep_obat }}</textarea>
    </div>

    <button class="bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
</form>

@endsection