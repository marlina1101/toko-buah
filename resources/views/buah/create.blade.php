@extends('layout')

@section('content')

<h3 class="fw-bold text-success mb-3">Tambah Buah</h3>

<div class="card shadow-sm p-4">

    <form method="POST" action="{{ route('buah.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Buah</label>
            <input name="nama_buah" class="form-control" placeholder="Contoh: Apel">
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis</label>
            <input name="jenis" class="form-control" placeholder="Contoh: Buah Tropis">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input name="harga" class="form-control" placeholder="Contoh: 25000">
        </div>

        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input name="stok" class="form-control" placeholder="Contoh: 10">
        </div>

        <button class="btn btn-success w-100">
            Simpan Data
        </button>
    </form>

</div>

@endsection