@extends('layouts.app')

@section('content')
<section class="services-banner position-relative">
    <img src="\images\services.png" alt="Our Services Banner" class="img-fluid w-100" style="height: 400px; object-fit: cover;">
    <div class="banner-text position-absolute top-50 start-50 translate-middle text-white text-center">
       <h1 class="fw-bold" style="font-size: 3.2rem; color: #fff; text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">Our Services</h1>
        <p class="mt-2" style="font-size: 1.2rem; color: #fff; text-shadow: 1px 1px 5px rgba(0,0,0,0.7);">We offer the best care for your furry friends!</p>
    </div>
</section>


<section class="py-5 bg-light flex-grow-1">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="\images\services.png" class="card-img-top" alt="Health Check">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pemeriksaan Kesehatan Umum</h5>
                        <p class="card-text">Cek kesehatan menyeluruh untuk memastikan hewan peliharaan Anda tetap sehat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="\images\services.png" class="card-img-top" alt="Vaksinasi">
                    <div class="card-body text-center">
                        <h5 class="card-title">Vaksinasi</h5>
                        <p class="card-text">Perlindungan lengkap dari berbagai penyakit menular.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="\images\services.png" class="card-img-top" alt="Sterilisasi">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sterilisasi</h5>
                        <p class="card-text">Proses aman untuk mencegah kehamilan tidak diinginkan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-4 offset-md-2">
                <div class="card h-100 shadow-sm">
                    <img src="\images\services.png" class="card-img-top" alt="Perawatan Gigi">
                    <div class="card-body text-center">
                        <h5 class="card-title">Perawatan Gigi</h5>
                        <p class="card-text">Menjaga kebersihan dan kesehatan gigi hewan peliharaan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="\images\services.png" class="card-img-top" alt="Penitipan Hewan">
                    <div class="card-body text-center">
                        <h5 class="card-title">Penitipan Hewan</h5>
                        <p class="card-text">Tempat aman dan nyaman saat Anda bepergian.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
