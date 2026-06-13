@extends('template')
@section('judul_halaman', 'Data Siswa')
@section('konten')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mb-3">
        <div class="col-md-6">
            <a href="{{ route('siswa.create') }}" class="btn btn-success"> + Tambah Siswa Baru</a>
        </div>
        <div class="col-md-6">
            <form action="{{ route('siswa.cari') }}" method="GET" class="d-flex justify-content-end">
                <input class="form-control w-50 me-2" type="text" name="cari" placeholder="Cari Siswa .."
                    value="{{ request('cari') }}">
                <button class="btn btn-secondary" type="submit">CARI</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Daftar Siswa
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($siswa as $row)
                            <tr>
                                <td>{{ $row->NRP }}</td>
                                <td>{{ $row->Nama }}</td>
                                <td>{{ $row->Kelas }}</td>
                                <td>{{ $row->TanggalLahir }}</td>
                                <td>
                                    <a href="{{ route('siswa.edit', $row->NRP) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('siswa.destroy', $row->NRP) }}" method="POST" style="display:inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data siswa.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection