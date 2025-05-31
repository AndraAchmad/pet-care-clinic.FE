<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pet Care Clinic</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/petcare-layout.css') }}">

    <!-- Google Fonts: Sora -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Sora', sans-serif;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #D3EE98;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="/images/logo.svg" alt="Pet Care Logo" style="height: 40px; margin-right: 10px;">
                <span class="fw-bold" style="font-size: 1.5rem; color: #29421D;">Pet Care Clinic</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Our Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    @guest
                        <li class="nav-item"><a class="btn btn-outline-dark me-2" href="/login">Login</a></li>
                        <li class="nav-item"><a class="btn btn-success" href="/register">Register</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Hi, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/profile/edit">Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="d-flex" style="height: 80vh; background-color: #3AA209;">
        <div class="col-md-6 p-0">
            <img src="/images/hero-dog.jpg" alt="Hero Dog" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center text-white px-4">
            <p style="font-size: 1rem;">All kinds of care for all kinds of pets</p>
            <h1 style="font-size: 2.5rem; font-weight: 700;">Pet Care Clinic</h1>
           <a href="{{ route('download') }}" class="btn mt-3" style="background-color: #FEFF9F; color: #29421D; font-weight: 600;">Download Now</a>

        </div>
    </section>

    <!-- Page Content -->
    <main class="container my-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer mt-auto" style="background-color: #FEFF9F; text-align: center; padding: 1rem; font-size: 0.9rem; color: #29421D;">
        © 2024 Pet Care Clinic. All Rights Reserved
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
