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

<div class="bg-white shadow-md rounded-xl overflow-hidden border border-gray-100">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">ID</th>
                <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Diagnosis</th>
                <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Tindakan</th>
                <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Resep Obat</th>
                <th class="px-4 py-3 text-sm font-medium text-gray-600">Aksi</th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($data as $rm)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-4 py-3 text-sm text-gray-700">{{ $rm->id }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $rm->diagnosis }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $rm->tindakan }}</td>
                <td class="px-4 py-3 text-sm text-gray-700">{{ $rm->resep_obat }}</td>

                <td class="px-4 py-3 flex gap-2 justify-center">
                    <a href="{{ route('rekam-medis.edit', $rm->id) }}"
                        class="px-3 py-1.5 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-all duration-200 shadow-sm">
                        Edit
                    </a>

                    <form action="{{ route('rekam-medis.destroy', $rm->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button onclick="return confirm('Hapus data ini?')"
                            class="px-3 py-1.5 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-all duration-200 shadow-sm">
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
