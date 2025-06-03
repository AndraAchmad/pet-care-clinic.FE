@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
@endsection


@section('content')
<div class="container my-5" style="max-width: 400px;">
    <h2 class="text-center mb-4">Admin Login</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login as Admin</button>
        </div>
    </form>
</div>
@endsection
