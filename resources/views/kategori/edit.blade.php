@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Kategori</div>
        <div class="card-body">
            <form method="POST" action="{{ route('kategori.update', $kategori->kategori_id) }}">
                @csrf
                <div class="form-group">
                    <label>Kode Kategori</label>
                    <input type="text" class="form-control" name="kodeKategori" value="{{ $kategori->kategori_kode }}">
                </div>
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" class="form-control" name="namaKategori" value="{{ $kategori->kategori_nama }}">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
