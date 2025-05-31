@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Daftar Klinik</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('clinics.create') }}" class="btn btn-primary mb-3">Tambah Klinik Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clinics as $clinic)
            <tr>
                <td>{{ $clinic->name }}</td>
                <td>{{ $clinic->address }}</td>
                <td>{{ $clinic->contact }}</td>
                <td>
                    <a href="{{ route('clinics.edit', $clinic->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('clinics.destroy', $clinic->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin mau hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
