<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pet Care Clinic</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/layout-petcare.css') }}">

    <style>
        .eye-icon {
    cursor: pointer;
    font-size: 1.1rem;
    color: #555;
}

    body {
        font-family: 'Sora', sans-serif;
    }
    .navbar {
        background-color: #D3EE98;
        padding: 1rem 2rem; /* lebih tebal */
    }
    .navbar-brand img {
        height: 70px; /* lebih tinggi */
        margin-right: 15px;
    }
    .navbar-brand .brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1.1;
    }
    .brand-text .line {
        font-weight: 800;
        font-size: 1.5rem; /* lebih besar */
        color: #29421D;
    }
    .navbar-nav .nav-link {
        font-weight: 700;
        font-size: 1.2rem; /* sebelumnya 1.1rem → diperbesar */
        color: #29421D !important;
        margin-left: 1.8rem; /* sebelumnya 1.2rem → diperluas */
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

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center me-auto" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Pet Care Logo">
                <div class="brand-text">
                    <div class="line">Pet Care</div>
                    <div class="line">Clinic</div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Our Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>

                    @guest
                        <li class="nav-item ms-3"><a class="btn btn-outline-dark" href="/login">Login</a></li>
                        <li class="nav-item ms-2"><a class="btn btn-success" href="/register">Register</a></li>
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

    <!-- Page Content -->
   <main class="container my-5 flex-fill">
    @yield('content')
</main>


    <!-- Footer -->
    <footer>
        © 2024 Pet Care Clinic. All Rights Reserved
    </footer>
<script>
function togglePassword(fieldId, iconElement) {
    const field = document.getElementById(fieldId);
    const icon = iconElement.querySelector('i');

    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        field.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>

    <!-- Bootstrap JS -->
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // cegah reload
    
    Swal.fire({
        icon: 'success',
        title: 'Message Sent!',
        text: 'Thank you for reaching out. We will get back to you shortly.',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true
    });

    // Optional: reset form
    this.reset();
});
</script>

</body>
</html>
