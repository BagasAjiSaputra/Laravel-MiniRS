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

    <table class="w-full border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-2 py-1">No</th>
                <th class="border px-2 py-1">Pasien</th>
                <th class="border px-2 py-1">Dokter</th>
                <th class="border px-2 py-1">Keluhan</th>
                <th class="border px-2 py-1">Waktu Kunjungan</th>
                <th class="border px-2 py-1">Status</th>
                <th class="border px-2 py-1">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rawat_jalan as $item)
            <tr>
                <td class="border px-2 py-1">{{ $loop->iteration }}</td>
                <td class="border px-2 py-1">{{ $item->pasien->nama ?? '-' }}</td>
                <td class="border px-2 py-1">{{ $item->dokter->nama_dokter ?? '-' }}</td>
                <td class="border px-2 py-1">{{ $item->keluhan }}</td>
                <td class="border px-2 py-1">{{ $item->waktu_kunjungan }}</td>
                <td class="border px-2 py-1">{{ $item->status_pemeriksaan }}</td>
                <td class="border px-2 py-1">
                    <a href="{{ route('pendaftaran.edit', $item->id) }}" class="bg-yellow-400 px-2 py-1 rounded text-white">Edit</a>
                    <form action="{{ route('pendaftaran.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 px-2 py-1 rounded text-white">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
