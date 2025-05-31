<nav class="navbar navbar-expand-lg" style="background-color: #D3EE98; padding: 1rem 2rem;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}" style="font-family: 'Sora', sans-serif; font-size: 1.8rem; color: #29421D;">
            Pet Care Clinic
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>

                @guest
                <li class="nav-item">
                    <a class="btn btn-outline-dark me-2" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success" href="{{ route('register') }}">Download App</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Hi, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        @if(Auth::user()->role === 'admin')
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @endif
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
