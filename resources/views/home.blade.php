<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pet Care Clinic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('C:\laragon\www\pet-care-clinic\resources\css\layout-petcare.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Sora', sans-serif;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: #D3EE98;
        }
        .navbar-brand, .nav-link {
            color: #29421D !important;
            font-weight: 600;
        }
        main {
            flex: 1;
            display: flex;
        }
        .hero-image {
            flex: 1;
            background: url('/images/background.png') center center / cover no-repeat;
        }
        .hero-text {
            flex: 1;
            background-color: #3AA209;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }
        .hero-text h1 {
            font-size: 3rem;
            font-weight: 700;
        }
        .btn-download {
            background-color: #FEFF9F;
            color: #29421D;
            font-weight: 700;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 8px;
            margin-top: 1rem;
            text-decoration: none;
        }
        .btn-download:hover {
            background-color: #72BF78;
            color: white;
        }
        footer {
            background-color: #FEFF9F;
            text-align: center;
            padding: 1rem 0;
            font-size: 0.9rem;
            color: #29421D;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ Auth::check() ? '/dashboard' : '/' }}">
            <img src="\images\logo.png" alt="Pet Care Logo" style="height: 40px; margin-right: 10px;">
            Pet Care Clinic
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
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
                    <li class="nav-item">
                        <a href="/dashboard" class="btn btn-sm btn-success ms-2">Dashboard</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<main>
    <div class="hero-image"></div>
    <div class="hero-text">
        <p>All kinds of care for all kinds of pets</p>
        <h1>Pet Care Clinic</h1>
        <a href="/download" class="btn-download">Download Now</a>
    </div>
</main>

<footer>
    © 2024 Pet Care Clinic. All Rights Reserved
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
