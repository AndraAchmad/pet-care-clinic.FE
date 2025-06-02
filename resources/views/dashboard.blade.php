<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Pet Care Clinic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Sora', sans-serif;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .hero {
            flex: 1;
            display: flex;
        }
        .hero-left {
            flex: 1;
        }
        .hero-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .hero-right {
            flex: 1;
            background-color: #3AA209;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            padding: 2rem;
        }
        .hero-right p {
            margin-bottom: 0.5rem;
        }
        .btn-download {
            background-color: #FEFF9F;
            color: #29421D;
            font-weight: 700;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 12px;
            transition: background-color 0.3s;
            margin-top: 1rem;
        }
        .btn-download:hover {
            background-color: #72BF78;
            color: #fff;
        }
        footer {
            background-color: #FEFF9F;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            color: #29421D;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #D3EE98;">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Hi, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/download" class="btn btn-sm btn-success ms-2">Download App</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
    <section class="hero">
        <div class="hero-left">
            <img src="\images\background.png" alt="Hero Dog">
        </div>
        <div class="hero-right">
            <p>All kinds of care for all kinds of pets</p>
            <h1>Pet Care Clinic</h1>
            <p>Welcome back, {{ Auth::user()->name }}! </p>
            <a href="/download" class="btn-download">Download Now</a>
        </div>
    </section>
</div>
<style>
.fancy-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.fancy-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.fancy-icon {
    transition: transform 0.3s ease;
}
.fancy-card:hover .fancy-icon {
    transform: rotate(-10deg) scale(1.2);
}

.fancy-button {
    transition: background-color 0.3s ease, transform 0.2s ease;
}
.fancy-button:hover {
    background-color: #72BF78;
    transform: scale(1.05);
    color: #fff;
}
</style>
<footer>
    © 2024 Pet Care Clinic. All Rights Reserved
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
