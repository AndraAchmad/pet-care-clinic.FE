    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login - Pet Care Clinic</title>
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
                text-align: center;
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
            .btn-login {
                background-color: #3AA209;
                border: none;
                color: white;
                font-weight: 600;
            }
            .btn-login:hover {
                background-color: #72BF78;
            }
            .link-register {
                margin-top: 1rem;
                font-size: 0.9rem;
            }
            .link-register a {
                color: #0d6efd; /* biru Bootstrap */
                text-decoration: none;
                font-weight: 600;
            }
            .link-register a:hover {
                text-decoration: underline;
            }
            .eye-icon {
                cursor: pointer;
                transition: transform 0.3s ease, opacity 0.3s ease;
                display: inline-block;
                font-size: 1.2rem;
            }
            .eye-icon.rotate {
                transform: rotate(180deg);
                opacity: 0.7;
            }
        </style>
    </head>
    <body>

    <div class="d-flex flex-column align-items-center justify-content-center flex-grow-1">
        <img src="\images\logo-black.png" alt="Pet Care Clinic Logo" class="logo">
        <div class="form-container">
            <h3 class="mb-3" style="color: #A98537;">Welcome Back!</h3>

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

                <div class="mb-3 position-relative">
                    <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
                    <span class="position-absolute top-50 end-0 translate-middle-y me-3 eye-icon" onclick="togglePassword('password', this)">
                        👁️
                    </span>
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-login w-100 mb-3">Login</button>
            </form>

            <div class="link-register">
                Belum punya akun? 
                <a href="{{ route('register') }}">Daftar di sini</a>
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
