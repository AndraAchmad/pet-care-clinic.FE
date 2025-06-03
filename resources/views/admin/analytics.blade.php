@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold">Admin Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
@endsection


@section('content')
<div class="p-6">
    <h1 class="text-2xl font-semibold mb-6">Analytics</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Example Chart Card -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Order Trends</h2>
            <canvas id="orderChart"></canvas>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">User Engagement</h2>
            <canvas id="engagementChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx1 = document.getElementById('orderChart').getContext('2d');
new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr'],
        datasets: [{
            label: 'Orders',
            data: [30, 50, 40, 60],
            borderWidth: 2
        }]
    }
});

const ctx2 = document.getElementById('engagementChart').getContext('2d');
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Active Users',
            data: [20, 35, 25, 40],
            borderWidth: 2
        }]
    }
});
</script>
@endsection
