@extends('layouts.app')

@section('title', 'Tambah Dokter')

@section('content')

    <div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Tambah Dokter</h1>
        
        @include('dokter.components.form')

    </div>

@endsection
