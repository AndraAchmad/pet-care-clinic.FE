@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
@endsection


@section('content')
<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md">
        <div class="p-4 font-bold text-xl text-center border-b">
            Admin Dashboard
        </div>
        <nav class="p-4 space-y-2">
            <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Dashboard</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Orders</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200">Analytics</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-gray-200 text-red-500">Logout</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <h1 class="text-2xl font-semibold mb-4">Welcome, Admin!</h1>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white p-4 rounded shadow">
                <p class="text-gray-500">Total Orders</p>
                <p class="text-2xl font-bold">120</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="text-gray-500">Approved</p>
                <p class="text-2xl font-bold">80</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <p class="text-gray-500">Pending</p>
                <p class="text-2xl font-bold">40</p>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Recent Orders</h2>
            <div class="overflow-x-auto">
                <table class="w-full table-auto text-left">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">Order ID</th>
                            <th class="px-4 py-2">User</th>
                            <th class="px-4 py-2">Pet Name</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-2">#001</td>
                            <td class="px-4 py-2">John Doe</td>
                            <td class="px-4 py-2">Buddy</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 text-xs bg-yellow-200 rounded">Pending</span>
                            </td>
                            <td class="px-4 py-2 space-x-2">
                                <button class="px-2 py-1 bg-green-500 text-white rounded text-sm">Approve</button>
                                <button class="px-2 py-1 bg-red-500 text-white rounded text-sm">Cancel</button>
                                <button class="px-2 py-1 bg-blue-500 text-white rounded text-sm">View</button>
                            </td>
                        </tr>
                        <!-- Repeat rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
@endsection
