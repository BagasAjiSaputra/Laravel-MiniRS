@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Rawat Jalan</h1>

    @if ($errors->any())
        <div class="bg-red-200 text-red-800 p-2 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Pasien</label>
            <select name="id_pasien" class="border p-2 w-full">
                @foreach($pasien as $p)
                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Dokter</label>
            <select name="id_dokter" class="border p-2 w-full">
                @foreach($dokter as $d)
                    <option value="{{ $d->id }}">{{ $d->nama_dokter }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Keluhan</label>
            <textarea name="keluhan" class="border p-2 w-full"></textarea>
        </div>
        <div>
            <label>Waktu Kunjungan</label>
            <input type="datetime-local" name="waktu_kunjungan" class="border p-2 w-full">
        </div>
        <div>
            <label>Status Pemeriksaan</label>
            <select name="status_pemeriksaan" class="border p-2 w-full">
                <option value="Menunggu">Menunggu</option>
                <option value="Sedang Diperiksa">Sedang Diperiksa</option>
                <option value="Selesai">Selesai</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
