@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between">
<h1 class="text-2xl font-bold mb-4">Daftar Rawat Jalan</h1>
    <a href="{{ route('pendaftaran.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah</a>
    </div>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-2">{{ session('success') }}</div>
    @endif

    @include('pendaftaran.components.table')
</div>
@endsection
