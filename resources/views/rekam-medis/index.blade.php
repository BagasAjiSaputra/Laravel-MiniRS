@extends('layouts.app')

@section('title', 'Rekam Medis')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Rekam Medis</h1>

    <a href="{{ route('rekam-medis.create') }}"
        class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-all duration-200 shadow-sm">
        + Tambah Rekam Medis
    </a>
</div>

    @include('rekam-medis.components.table')

@endsection
