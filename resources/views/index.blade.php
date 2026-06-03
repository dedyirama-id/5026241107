@extends('template')
@section('judul_halaman', 'Data Pegawai')
@section('konten')
    <form action="/pegawai/cari" method="GET" class="d-flex">
        <input class="form-control w-25" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input class="btn btn-secondary" type="submit" value="CARI" >
    </form>

    <br />
    <div>
        <a href="/pegawai/tambah" class="btn btn-success"> + Tambah Pegawai Baru</a>
    </div>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}
@endsection
