@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Klinik</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clinics.update', $clinic->id) }}" method="POST">
    @csrf
    @method('PUT')
        <label>Nama:</label>
        <input type="text" name="name" value="{{ old('name', $clinic->name) }}" required><br>

        <label>Deskripsi:</label>
        <textarea name="description">{{ old('description', $clinic->description) }}</textarea><br>

        <label>Alamat:</label>
        <input type="text" name="address" value="{{ old('address', $clinic->address) }}"><br>

        <label>Kontak:</label>
        <input type="text" name="contact" value="{{ old('contact', $clinic->contact) }}"><br>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
