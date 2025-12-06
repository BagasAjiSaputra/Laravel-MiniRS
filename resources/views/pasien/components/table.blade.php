<table class="w-full border-collapse mt-4">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-3 border">No</th>
                    <th class="p-3 border">Nama</th>
                    <th class="p-3 border">No HP</th>
                    <th class="p-3 border">Tgl Lahir</th>
                    <th class="p-3 border">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pasien as $p)
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border">{{ $loop->iteration }}</td>
                    <td class="p-3 border">{{ $p->nama }}</td>
                    <td class="p-3 border">{{ $p->no_hp ?? '-' }}</td>
                    <td class="p-3 border">{{ $p->tgl_lahir ?? '-' }}</td>

                    <td class="p-3 border flex gap-2">
                        <!-- Tombol Edit -->
                        <a href="{{ route('pasien.edit', $p->id) }}"
                            class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm">
                            Edit
                        </a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('pasien.destroy', $p->id) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')

                            <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="5" class="p-3 text-center text-gray-500">Belum ada data pasien</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        