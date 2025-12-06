@extends('layouts.app')

@section('title', 'Tambah Dokter')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Data Pasien</h2>

            <div class="flex gap-3 items-center">
                <form method="GET" class="">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama pasien..."
                        class="px-4 py-2 border rounded-lg w-64 focus:ring focus:border-blue-500"
                        oninput="this.form.submit()">
                </form>
                <a href="{{ route('pasien.create') }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    + Tambah Pasien
                </a>
            </div>
        </div>
        @include('pasien.components.table')
        <div class="mt-6">
            {{ $pasien->appends(request()->query())->links() }}
        </div>

        <style>
            /* Styling pagination default Laravel (Tailwind) */
            .pagination {
                @apply flex items-center justify-center space-x-2;
            }

            .pagination .page-link {
                @apply px-4 py-2 bg-white border rounded-lg hover:bg-gray-100 transition text-sm;
            }

            .pagination .active .page-link {
                @apply bg-blue-600 text-white border-blue-600 shadow;
            }

            .pagination .disabled .page-link {
                @apply bg-gray-200 text-gray-400 cursor-not-allowed;
            }
        </style>


    </div>
@endsection