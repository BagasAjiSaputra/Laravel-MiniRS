<table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">No</th>
                <th class="p-2 border">Nama Obat</th>
                <th class="p-2 border">Stok Obat</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obat as $o)
            <tr>
                <td class="p-2 border">{{ $loop -> iteration }}</td>
                <td class="p-2 border">{{ $o -> nama_obat }}</td>
                <td class="p-2 border">{{ $o -> stok_obat }}</td>
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