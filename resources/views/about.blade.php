@extends('layouts.app')

@section('content')
<section class="about-banner text-center position-relative">
    <img src="\images\image copy 2.png" alt="About Us Banner" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
    <div class="banner-text position-absolute top-50 start-50 translate-middle text-white">
        <h1 class="fw-bold" style="font-size: 3rem; text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">About Us</h1>
    </div>
</section>

<section class="py-5 about-section" style="background: linear-gradient(180deg, #d3ee98 0%, #ffffff 100%); background-image: url('/images/pawprint-pattern.png'); background-repeat: repeat; background-size: 150px;">
    <div class="container">
        <p class="text-center mb-5" style="color: #29421D; max-width: 700px; margin: 0 auto; font-size: 1.1rem;">
            Pet Care Clinic is dedicated to providing exceptional care and services for your beloved pets.
            With years of experience, we combine professionalism and compassion to ensure the health and happiness of every animal we treat.
        </p>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white">
                    <div style="font-size: 2.5rem;">🐾</div>
                    <h5 class="fw-bold mt-2" style="color: #29421D;">Our Mission</h5>
                    <p style="color: #555;">To deliver high-quality veterinary services that keep pets healthy and owners happy.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white">
                    <div style="font-size: 2.5rem;">🎯</div>
                    <h5 class="fw-bold mt-2" style="color: #29421D;">Our Vision</h5>
                    <p style="color: #555;">To become the most trusted and loved pet care provider in the community.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white">
                    <div style="font-size: 2.5rem;">💖</div>
                    <h5 class="fw-bold mt-2" style="color: #29421D;">Our Values</h5>
                    <p style="color: #555;">Compassion, Excellence, Integrity, and Innovation in every service we provide.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-center fw-bold mb-4" style="color: #29421D;">Meet Our Team</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <img src="\images\jojo-stand-killer-queen-png-6225-768x1001.png" class="rounded-circle mb-3" alt="Team Member 1" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="fw-bold">Brian Farrel Arkana</h5>
                <p style="color: #555;">Backend Web</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="\images\jojo-stand-killer-queen-png-6225-768x1001.png" class="rounded-circle mb-3" alt="Team Member 2" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="fw-bold">Franssius Andalenta</h5>
                <p style="color: #555;">Front End Mobile</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="\images\jojo-stand-killer-queen-png-6225-768x1001.png" class="rounded-circle mb-3" alt="Team Member 3" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="fw-bold">Raditya Hidayat</h5>
                <p style="color: #555;">UI Design Mobile</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="\images\jojo-stand-killer-queen-png-6225-768x1001.png" class="rounded-circle mb-3" alt="Team Member 1" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="fw-bold">Andra Achmad</h5>
                <p style="color: #555;">Front End Web</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="\images\jojo-stand-killer-queen-png-6225-768x1001.png" class="rounded-circle mb-3" alt="Team Member 2" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="fw-bold">Azfa Fairuzia</h5>
                <p style="color: #555;">UI Design Web</p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="\images\jojo-stand-killer-queen-png-6225-768x1001.png" class="rounded-circle mb-3" alt="Team Member 3" style="width: 150px; height: 150px; object-fit: cover;">
                <h5 class="fw-bold">Ragil Putri</h5>
                <p style="color: #555;">Backend Web</p>
            </div>
        </div>
    </div>
</section>
<section class="py-5" style="background-color: #D3EE98;">
    <div class="container">
        <h2 class="text-center fw-bold mb-4" style="color: #29421D;">Why Choose Us</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white h-100">
                    <div style="font-size: 2.5rem;">🌿</div>
                    <h5 class="fw-bold mt-2" style="color: #29421D;">Experienced Team</h5>
                    <p style="color: #555;">Our team consists of skilled veterinarians and passionate staff dedicated to your pet's well-being.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white h-100">
                    <div style="font-size: 2.5rem;">🏥</div>
                    <h5 class="fw-bold mt-2" style="color: #29421D;">Modern Facilities</h5>
                    <p style="color: #555;">We provide state-of-the-art facilities to ensure top-notch care and comfort for your pets.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white h-100">
                    <div style="font-size: 2.5rem;">❤️</div>
                    <h5 class="fw-bold mt-2" style="color: #29421D;">Compassionate Care</h5>
                    <p style="color: #555;">We treat every pet as part of our family, ensuring they receive gentle and loving care every visit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.fancy-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.fancy-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.fancy-icon {
    transition: transform 0.3s ease;
}
.fancy-card:hover .fancy-icon {
    transform: rotate(-10deg) scale(1.2);
}

.fancy-button {
    transition: background-color 0.3s ease, transform 0.2s ease;
}
.fancy-button:hover {
    background-color: #72BF78;
    transform: scale(1.05);
    color: #fff;
}
</style>
@endsection
