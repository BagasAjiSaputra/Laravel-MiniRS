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

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Kategori Obat</th>
                <th class="p-2 border">Stok Obat</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obat as $o)
            <tr>
                <td class="p-2 border">{{ $o->id }}</td>
                <td class="p-2 border">{{ $o->kategori_obat }}</td>
                <td class="p-2 border">{{ $o->stok_obat }}</td>
                <td class="p-2 border flex gap-2">
                    <a href="{{ route('obat.edit', $o->id) }}" 
                       class="bg-yellow-500 text-white px-3 py-1 rounded">
                       Edit
                    </a>

                    <form action="{{ route('obat.destroy', $o->id) }}" method="POST"
                          onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 text-white px-3 py-1 rounded">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection