@extends('layouts.app')

@section('title', 'Tambah Dokter')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Data Pasien</h2>

            <a href="{{ route('pasien.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                + Tambah Pasien
            </a>
        </div>
        @include('pasien.components.table')
    </div>
@endsection
