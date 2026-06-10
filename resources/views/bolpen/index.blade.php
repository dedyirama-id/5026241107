@extends('template')
@section('judul_halaman', 'Data Bolpen')
@section('konten')
    <form action="/bolpen/cari" method="GET" class="d-flex">
        <input class="form-control w-25" type="text" name="cari" placeholder="Cari Bolpen .." value="{{ old('cari') }}">
        <input class="btn btn-secondary" type="submit" value="CARI" >
    </form>

    <br />
    <div>
        <a href="/bolpen/tambah" class="btn btn-success"> + Tambah Bolpen Baru</a>
    </div>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bolpen as $b)
            <tr>
                <td>{{ $b->kodebolpen }}</td>
                <td>{{ $b->merkbolpen }}</td>
                <td>{{ $b->stockbolpen }}</td>
                <td>{{ $b->tersedia }}</td>
                <td>
                    <a href="/bolpen/edit/{{ $b->kodebolpen }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/bolpen/hapus/{{ $b->kodebolpen }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $bolpen->links() }}
@endsection
