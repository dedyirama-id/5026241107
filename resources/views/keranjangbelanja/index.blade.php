@extends('template')
@section('judul_halaman', 'Keranjang Belanja')
@section('konten')
    <div>
        <a href="/keranjangbelanja/tambah" class="btn btn-success"> Beli</a>
    </div>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $kb)
            <tr>
                <td>{{ $kb->ID }}</td>
                <td>{{ $kb->KodeBarang }}</td>
                <td>{{ $kb->Jumlah }}</td>
                <td>{{ number_format($kb->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($kb->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
