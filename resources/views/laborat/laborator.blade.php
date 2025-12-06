@extends('layouts.master')

@section('title', 'Laboratorium - My App')
@section('page-title', 'Data Laboratorium')
@section('breadcrumb', 'Laboratorium')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Data Pasien & Obat</h3>
                    <div class="card-tools">
                        <!-- ✅ Perbaikan: tombol buka modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#modalTambah">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nama Pasien</th>
                                <th>Alamat Pasien</th>

                                <th>Obat</th>
                                <th>Stok</th>
                                <th style="width: 120px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data_laborat as $dt)
                                <tr class="align-middle">
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $dt->nama ?? '-' }}</td>
                                    <td>{{ $dt->alamat ?? '-' }}</td>
                                    <td>{{ $dt->nama_obat ?? 'Belum ada obat' }}</td>
                                    <td>{{ $dt->stok_obat ?? '-' }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit">Edit</i>
                                        </a>
                                        <form action="" method="POST" style="display:inline;"
                                            onsubmit="return confirm('Yakin hapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash">Hapus</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <!-- Pagination (opsional, aktifkan jika pakai paginate()) -->
                    @if (isset($data_laborat) && $data_laborat instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        {{ $data_laborat->links('pagination::bootstrap-5') }}
                    @endif
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>


    {{-- Modal Tambah --}}
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header py-2 px-3">
                    <h6 class="modal-title" id="modalTambahLabel">Tambah Pasien</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('laborator.store') }}" method=" POST">
                    @csrf
                    <div class="modal-body py-4 px-6
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-sm" name="nama" placeholder="Nama *"
                                required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-sm" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-sm" name="no_hp" placeholder="No HP">
                        </div>
                        <div class="mb-3">
                            <input type="date" class="form-control form-control-sm" name="tgl_lahir"
                                placeholder="Tgl Lahir">
                        </div>
                        <div class="mb-3">
                            <select name="obat_id" class="form-select form-select-sm">
                                <option value="">-- Obat --</option>
                                @foreach($data_laborat as $obat)
                                    <option value="{{ $obat->id }}">{{ $obat->nama_obat }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer py-2 px-3">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    tolong kecilkan form agar lebih rapi dan buatkan di tengah tengah halaman
    @push('scripts')
        <script>
            // Reset form modal saat ditutup
            document.addEventListener('DOMContentLoaded', function () {
                const modalTambah = document.getElementById('modalTambah');
                if (modalTambah) {
                    modalTambah.addEventListener('hidden.bs.modal', function () {
                        this.querySelector('form').reset();
                        // Opsional: reset pesan error jika pakai validasi Laravel
                        const errors = this.querySelectorAll('.text-danger');
                        errors.forEach(el => el.remove());
                    });
                }

                // Optional: Auto-focus ke input pertama saat modal dibuka
                modalTambah?.addEventListener('shown.bs.modal', function () {
                    this.querySelector('input[name="nama"]')?.focus();
                });
            });
        </script>

    @endpush
@endsection