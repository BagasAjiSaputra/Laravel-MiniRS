<table class="w-full mt-6 border-collapse">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-3 border">No</th>
            <th class="p-3 border">Diagnosis</th>
            <th class="p-3 border">Tindakan</th>
            <th class="p-3 border">Resep Obat</th>
            <th class="p-3 border text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $rm)
            <tr class="border">
                <td class="p-3 border">{{ $loop -> iteration }}</td>
                <td class="p-3 border">{{ $rm -> diagnosis }}</td>
                <td class="p-3 border">{{ $rm -> tindakan }}</td>
                <td class="p-3 border">{{ $rm -> resep_obat }}</td>
                <td class="p-3 text-center flex gap-3">
                    <a href="{{ route('dokter.edit', $rm->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">
                        Edit
                    </a>

                    <form action="{{ route('dokter.destroy', $rm->id) }}" method="POST"
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