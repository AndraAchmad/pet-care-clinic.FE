@extends('layouts.app')

@section('content')
<section class="contact-banner text-center position-relative">
    <img src="\images\image copy 3.png" alt="Contact Banner" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
    <div class="banner-text position-absolute top-50 start-50 translate-middle text-white">
        <h1 class="fw-bold" style="font-size: 3rem; text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">Contact Us</h1>
    </div>
</section>

<section class="py-5" style="background-color: #fff; min-height: 60vh;">
    <div class="container">
        <p class="text-center mb-5" style="color: #555; max-width: 600px; margin: 0 auto;">
            Have questions or want to schedule an appointment? Reach out to us — we'd love to hear from you!
        </p>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-light rounded shadow-sm fancy-card h-100 text-center">
                    <div class="fancy-icon mb-3" style="font-size: 2.5rem; color: #3AA209;">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Our Location</h5>
                    <p>Jl. Bahagia No. 123, Purwokerto, Indonesia</p>
                    <p><i class="bi bi-telephone-fill"></i> (0281) 123-456</p>
                    <p><i class="bi bi-envelope-fill"></i> info@petcareclinic.com</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="p-4 bg-light rounded shadow-sm fancy-card h-100">
                    <h5 class="fw-bold mb-3 text-center">Send Us a Message</h5>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100 fancy-button">Send Message</button>
                    </form>
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
