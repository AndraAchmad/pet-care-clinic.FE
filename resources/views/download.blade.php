<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Download App - Pet Care Clinic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sora', sans-serif;
            background-color: #3AA209;
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 2rem;
        }
        .btn-store {
            display: inline-block;
            margin: 1rem;
            transition: transform 0.3s ease;
        }
        .btn-store:hover {
            transform: scale(1.1);
        }
        .illustration {
            max-width: 250px;
            margin-bottom: 2rem;
        }
        footer {
            background-color: #FEFF9F;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            color: #29421D;
        }
    </style>
</head>
<body>
    <div class="content">
        <img src="\images\image.png" alt="Cute Pet Illustration" class="illustration" style="height:100px;">
        <h1>Download Our App</h1>
        <p class="mb-4">Thank you for choosing Pet Care Clinic!  
        Get our app for the best pet care experience anytime, anywhere.</p>
        
        <div>
            <a href="#" class="btn-store">
                <img src="\images\[CITYPNG.COM]FREE Google Play PlayStore Logo PNG - 2000x2000.png" alt="Download on Google Play" style="height:100px;">
            </a>
            <a href="#" class="btn-store">
                <img src="\images\[CITYPNG.COM]Download Black Apple App Store Icon PNG - 1600x1600.png" alt="Download on App Store" style="height:100px;">
            </a>
        </div>
    </div>
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
    <footer>
        © 2024 Pet Care Clinic. All Rights Reserved
    </footer>
</body>
</html>
