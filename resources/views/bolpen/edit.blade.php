@extends('template')
@section('judul_halaman', 'Edit Data Bolpen')
@section('konten')
    <a href="/bolpen" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($bolpen as $b)
        <div class="card">
            <div class="card-header">
                Form Edit Data Bolpen
            </div>

            <div class="card-body">
                <form action="/bolpen/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $b->kodebolpen }}">

                    <div class="row mb-3">
                        <label for="merkbolpen" class="col-sm-2 col-form-label">Merk Bolpen</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkbolpen" id="merkbolpen" class="form-control" maxlength="30" required
                                value="{{ $b->merkbolpen }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stockbolpen" class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockbolpen" id="stockbolpen" class="form-control" required
                                value="{{ $b->stockbolpen }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <input type="hidden" name="tersedia" value="N">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="tersedia" id="tersedia" value="Y" class="custom-control-input"
                                    {{ $b->tersedia == 'Y' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="tersedia">Ya</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    @endforeach
@endsection
