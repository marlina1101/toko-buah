@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Data Buah</h3>

    <a href="{{ route('buah.create') }}" class="btn btn-success">
        + Tambah Buah
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <table class="table table-hover align-middle text-center">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($buah as $b)
                <tr>
                    <td>{{ $b->nama_buah }}</td>
                    <td>{{ $b->jenis }}</td>
                    <td>Rp {{ number_format($b->harga) }}</td>
                    <td>
                        <span class="badge bg-primary">{{ $b->stok }}</span>
                    </td>
                    <td>
                        <a href="{{ route('buah.edit', $b->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('buah.destroy', $b->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>

@endsection