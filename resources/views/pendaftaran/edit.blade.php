@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Rawat Jalan</h1>

    @if ($errors->any())
        <div class="bg-red-200 text-red-800 p-2 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pendaftaran.update', $rawat->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label>Pasien</label>
            <select name="id_pasien" class="border p-2 w-full">
                @foreach($pasien as $p)
                    <option value="{{ $p->id }}" {{ $rawat->id_pasien == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Dokter</label>
            <select name="id_dokter" class="border p-2 w-full">
                @foreach($dokter as $d)
                    <option value="{{ $d->id }}" {{ $rawat->id_dokter == $d->id ? 'selected' : '' }}>{{ $d->nama_dokter }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Keluhan</label>
            <textarea name="keluhan" class="border p-2 w-full">{{ $rawat->keluhan }}</textarea>
        </div>
        <div>
            <label>Waktu Kunjungan</label>
            <input type="datetime-local" name="waktu_kunjungan" value="{{ date('Y-m-d\TH:i', strtotime($rawat->waktu_kunjungan)) }}" class="border p-2 w-full">
        </div>
        <div>
            <label>Status Pemeriksaan</label>
            <select name="status_pemeriksaan" class="border p-2 w-full">
                <option value="Menunggu" {{ $rawat->status_pemeriksaan == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                <option value="Sedang Diperiksa" {{ $rawat->status_pemeriksaan == 'Sedang Diperiksa' ? 'selected' : '' }}>Sedang Diperiksa</option>
                <option value="Selesai" {{ $rawat->status_pemeriksaan == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
