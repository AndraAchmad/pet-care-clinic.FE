@extends('layouts.app')

@section('content')
<div class="container py-5" style="max-width: 800px;">
    <div class="text-center mb-4">
        <img src="{{ Auth::user()->profile_photo_url }}" 
             alt="Profile Photo" 
             class="rounded-circle border shadow mb-2" 
             style="width: 120px; height: 120px; object-fit: cover;">
        <form method="POST" action="{{ route('profile.photo') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="profile_photo" class="form-control-sm d-inline-block w-auto" required>
            <button type="submit" class="btn btn-sm btn-outline-primary mt-2">Upload New Photo</button>
        </form>
        <h2 class="fw-bold mt-3" style="color: #29421D;">{{ Auth::user()->name }}</h2>
        <p class="text-muted">{{ Auth::user()->email }}</p>
        <small class="text-secondary">Member since {{ Auth::user()->created_at->format('F Y') }}</small>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="fw-bold mb-3" style="color: #29421D;">Account Information</h5>

            <button class="btn btn-outline-success mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#editInfo">
                Edit Profile Info
            </button>

            <div class="collapse" id="editInfo">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success">Save Changes</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="fw-bold mb-3" style="color: #29421D;">Security</h5>

            <button class="btn btn-outline-warning mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#changePassword">
                Change Password
            </button>

            <div class="collapse" id="changePassword">
                <form method="POST" action="{{ route('profile.updatePassword') }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" name="current_password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-warning">Change Password</button>
                </form>
            </div>
        </div>
    </div>

    <div class="text-center">
        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete Account</button>
        </form>
    </div>
</div>
@endsection
