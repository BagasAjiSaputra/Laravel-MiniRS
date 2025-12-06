@extends('layouts.app')

@section('title', 'Obat')

@section('content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Data Obat</h1>

    <a href="{{ route('obat.create') }}" 
       class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Obat</a>

    @if(session('success'))
        <div class="mt-4 bg-green-200 text-green-800 p-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    @include('obat.components.table')

</div>

@endsection