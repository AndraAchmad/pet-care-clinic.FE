@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
@endsection


@section('content')
<div class="p-6 max-w-xl mx-auto bg-white rounded shadow">
    <h1 class="text-2xl font-semibold mb-4">Admin Profile</h1>
    <form>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" class="w-full border rounded px-3 py-2" value="Admin Name">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" class="w-full border rounded px-3 py-2" value="admin@example.com">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Password</label>
            <input type="password" class="w-full border rounded px-3 py-2" placeholder="New Password">
        </div>
        <div class="flex justify-end">
            <button class="px-4 py-2 bg-blue-500 text-white rounded">Save Changes</button>
        </div>
    </form>
</div>
@endsection
