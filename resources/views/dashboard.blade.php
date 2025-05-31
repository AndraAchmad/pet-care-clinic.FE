<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Pet Care Clinic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/petcare-layout.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Pet Care Clinic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Our Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item">
                    <span class="nav-link">Hi, {{ Auth::user()->name }}</span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-outline-dark" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="hero-image"></div>
    <div class="hero-text">
        <p>All kinds of care for all kinds of pets</p>
        <h1>Pet Care Clinic</h1>
        <p>Welcome back, {{ Auth::user()->name }}! 🎉</p>
        <button class="btn-download">Download Now</button>
    </div>
</section>

<footer>
    © 2024 Pet Care Clinic. All Rights Reserved
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
