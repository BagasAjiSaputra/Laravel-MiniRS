@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')

    <div class="max-w-4xl mx-auto bg-white p-6 shadow rounded">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold">Data Dokter</h2>

        <a href="{{ route('dokter.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
           + Tambah Dokter
        </a>
        </div>

        @if(session('success'))
            <div class="mt-4 bg-green-100 text-green-700 p-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full mt-6 border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-2 border">Nama Dokter</th>
                    <th class="p-2 border">Spesialis</th>
                    <th class="p-2 border">Jam Masuk</th>
                    <th class="p-2 border">Jam Pulang</th>
                    <th class="p-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dokter as $d)
                <tr class="border">
                    <td class="p-2">{{ $d->nama_dokter }}</td>
                    <td class="p-2">{{ $d->spesialis }}</td>
                    <td class="p-2">{{ $d->jam_masuk }}</td>
                    <td class="p-2">{{ $d->jam_pulang }}</td>
                    <td class="p-2 text-center flex gap-2">
                        <a href="{{ route('dokter.edit', $d->id) }}" 
                       class="bg-yellow-500 text-white px-3 py-1 rounded">
                       Edit
                    </a>

                    <form action="{{ route('dokter.destroy', $d->id) }}" method="POST"
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