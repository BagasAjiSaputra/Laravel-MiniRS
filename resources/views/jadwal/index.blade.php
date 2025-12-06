@extends('layouts.app')

@section('content')
<table class="w-full mt-6 border-collapse">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-3 border text-center">No</th>
            <th class="p-3 border text-center">Pasien</th>
            <th class="p-3 border text-center">Dokter</th>
            <th class="p-3 border text-center">Diagnosis</th>
            <th class="p-3 border text-center">Keluhan</th>
            <th class="p-3 border text-center">Waktu Kunjungan</th>
            <th class="p-3 border text-center">Status</th>
            <th class="p-3 border text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $rj)
            <tr class="border">

                <td class="p-3 border">{{ $loop -> iteration }}</td>
                <td class="p-3 border">{{ $rj -> nama ?? 'Kosong' }}</td>
                <td class="p-3 border">{{ $rj -> nama_dokter ?? 'Kosong' }}</td>
                <td class="p-3 border">{{ $rj -> diagnosis ?? 'Kosong' }}</td>
                <td class="p-3 border">{{ $rj -> keluhan }}</td>
                <td class="p-3 border">{{ $rj -> waktu_kunjungan }}</td>
                <td class="p-3 border">{{ $rj -> status_pemeriksaan }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
@endsection