<table class="w-full mt-6 border-collapse">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-3 border text-center">No</th>
            <th class="p-3 border text-center">Pasien</th>
            <th class="p-3 border text-center">Dokter</th>
            <th class="p-3 border text-center">Keluhan</th>
            <th class="p-3 border text-center">Waktu Kunjungan</th>
            <th class="p-3 border text-center">Status</th>
            <th class="p-3 border text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rawat_jalan as $rj)
            <tr class="border">

                <td class="p-3 border">{{ $loop -> iteration }}</td>
                <td class="p-3 border">{{ $rj -> pasien -> nama ?? 'Kosong' }}</td>
                <td class="p-3 border">{{ $rj -> dokter -> nama_dokter ?? 'Kosong' }}</td>
                <td class="p-3 border">{{ $rj -> keluhan }}</td>
                <td class="p-3 border">{{ $rj -> waktu_kunjungan }}</td>
                <td class="p-3 border">{{ $rj -> status_pemeriksaan }}</td>

                <td class="p-3 text-center flex gap-3">
                    <a href="{{ route('pendaftaran.edit', $rj->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">
                        Edit
                    </a>

                    <form action="{{ route('pendaftaran.destroy', $rj->id) }}" method="POST"
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