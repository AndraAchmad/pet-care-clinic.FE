<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Pet Care Clinic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #3AA209;
            font-family: 'Sora', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .form-container {
            margin: auto;
            background: #fff;
            padding: 2rem;
            border-radius: 12px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        .logo {
            display: block;
            margin: 0 auto 1rem auto;
            width: 200px;
        }
        footer {
            background-color: #FEFF9F;
            text-align: center;
            padding: 1rem 0;
            font-size: 0.9rem;
            color: #29421D;
            margin-top: auto;
        }
        .btn-success {
            background-color: #3AA209;
            border: none;
        }
        .btn-success:hover {
            background-color: #72BF78;
        }
    </style>
</head>
<body>

<div class="d-flex flex-column align-items-center justify-content-center flex-grow-1">
    <img src="\images\logo-black.png" alt="Pet Care Clinic Logo" class="logo">
    <div class="form-container">
        <h3 class="text-center mb-3" style="color: #A98537;">Welcome!</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Username" value="{{ old('name') }}" required autofocus>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
           <div class="mb-3 position-relative">
            <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
            <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;" onclick="togglePassword('password', this)">
                👁️
            </span>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3 position-relative">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" id="password_confirmation" required>
            <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;" onclick="togglePassword('password_confirmation', this)">
                👁️
            </span>
        </div>

            <button type="submit" class="btn btn-success w-100 fw-bold">Register</button>
        </form>

        <div class="text-center mt-3">
    Sudah punya akun? 
    <a href="{{ route('login') }}" class="text-decoration-none" style="color: #0d6efd; font-weight: 600;">
        Login di sini
    </a>
</div>


        </div>
    </div>
</div>

<footer>
    © 2024 Pet Care Clinic. All Rights Reserved
</footer>
<script>
function togglePassword(fieldId, icon) {
    const input = document.getElementById(fieldId);
    icon.classList.add('rotate');
    setTimeout(() => {
        if (input.type === "password") {
            input.type = "text";
            icon.textContent = "🙈";
        } else {
            input.type = "password";
            icon.textContent = "👁️";
        }
        icon.classList.remove('rotate');
    }, 150);
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
