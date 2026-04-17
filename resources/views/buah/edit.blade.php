@extends('layout')

@section('content')

<h3>Edit Buah</h3>

<form method="POST" action="{{ route('buah.update', $buah->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Buah</label>
        <input type="text" name="nama_buah" value="{{ $buah->nama_buah }}">
    </div>

    <div>
        <label>Jenis</label>
        <input type="text" name="jenis" value="{{ $buah->jenis }}">
    </div>

    <div>
        <label>Harga</label>
        <input type="number" name="harga" value="{{ $buah->harga }}">
    </div>

    <div>
        <label>Stok</label>
        <input type="number" name="stok" value="{{ $buah->stok }}">
    </div>

    <button type="submit">Update</button>

</form>

@endsection