<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Pet Care Clinic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4 font-bold text-xl text-center border-b">
                Admin Panel
            </div>
            <nav class="p-4 space-y-2">
    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-200">
        <i data-lucide="home" class="w-5 h-5 mr-2"></i> Dashboard
    </a>
    <a href="{{ route('admin.analytics') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-200">
        <i data-lucide="bar-chart-3" class="w-5 h-5 mr-2"></i> Analytics
    </a>
    <a href="{{ route('admin.profile') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-200">
        <i data-lucide="user" class="w-5 h-5 mr-2"></i> Profile
    </a>
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="flex items-center w-full text-left px-4 py-2 rounded hover:bg-gray-200 text-red-500">
            <i data-lucide="log-out" class="w-5 h-5 mr-2"></i> Logout
        </button>
    </form>
</nav>

<script>
    lucide.createIcons();
</script>

        </aside>
        <!-- Lucide Icons -->
        <script src="https://unpkg.com/lucide@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
