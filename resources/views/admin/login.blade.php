@extends('layouts.app')

@section('content')
<h2>Admin Login</h2>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    
@endif

<form method="POST" action="{{ route('admin.login.submit') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login as Admin</button>
</form>

@if ($errors->any())
    <div>
        <strong>{{ $errors->first() }}</strong>
    </div>
@endif

@endsection
