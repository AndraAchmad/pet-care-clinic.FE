@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #3AA209;">
    <div class="text-center mb-4">
        <img src="/images/logo.svg" alt="Pet Care Clinic Logo" style="height: 80px;">
    </div>
    <div class="card p-4" style="width: 400px; border-radius: 15px;">
        <h3 class="text-center mb-4" style="color: #A98537;">Welcome Back!</h3>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required autofocus>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn w-100" style="background-color: #3AA209; color: white; font-weight: 600;">Login</button>
        </form>
    </div>
</div>
@endsection
