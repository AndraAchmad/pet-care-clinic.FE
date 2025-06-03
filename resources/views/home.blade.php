<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pet Care Clinic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">

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
            padding: 1rem 2rem; /* lebih lega */
        }
        .brand-logo {
            height: 70px; /* diperbesar */
            width: auto;
            margin-right: 15px;
        }
        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.1;
            color: #29421D;
        }
        .brand-line {
            font-weight: 800;
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            font-size: 1.2rem; /* diperbesar */
            font-weight: 700;
            color: #29421D !important;
            margin-left: 1.8rem; /* jarak diperluas */
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
            font-weight: 800;
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
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Logo & Brand -->
        <a class="navbar-brand d-flex align-items-center me-auto" href="{{ Auth::check() ? '/dashboard' : '/' }}">
            <img src="{{ asset('images/logo.png') }}" alt="Pet Care Logo" class="brand-logo">
            <div class="brand-text">
                <div class="brand-line">Pet Care</div>
                <div class="brand-line">Clinic</div>
            </div>
        </a>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right-side Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Our Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>

                @guest
                    <li class="nav-item"><a class="btn btn-outline-dark ms-3" href="/login">Login</a></li>
                    <li class="nav-item"><a class="btn btn-success ms-2" href="/register">Register</a></li>
                @else
                    <li class="nav-item dropdown ms-3">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
        },
    });
</script>
@endif

</body>
</html>
