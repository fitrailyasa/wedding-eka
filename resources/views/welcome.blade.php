<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedding of Eka & Wildan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Glacial+Indifference:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kulachat+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @include('style')
</head>

<body>
    <!-- Hamburger Menu -->
    <div class="hamburger-menu" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Navigation Menu -->
    <nav class="nav-menu" id="navMenu">
        <ul>
            <li><a href="#bannerCarousel">Home</a></li>
            <li><a href="#invitation">Countdown</a></li>
            <li><a href="#biodata">Eka & Wildan</a></li>
            <li><a href="#event">Save the Date</a></li>
            <li><a href="#snapshot">Our Momments</a></li>
            <li><a href="#comment">Wedding Wish</a></li>
            <li><a href="#gift">Share Love</a></li>
        </ul>
    </nav>

    <!-- Video Background -->
    <div class="video-wrapper">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('') }}assets/wedding-video.mp4" type="video/mp4" />
        </video>
    </div>
    <div class="overlay"></div>

    <!-- Audio -->
    <audio id="bg-music" loop>
        <source src="{{ asset('') }}assets/wedding-audio-2.mp3" type="audio/mp3" />
    </audio>
    <button id="audio-btn" title="Toggle Musik">
        <img src="{{ asset('') }}assets/disc.png" alt="Vinyl Icon" id="audio-icon" />
    </button>

    <!-- Header Section -->
    @include('header')

    <!-- Banner Carousel -->
    @include('banner')

    <!-- Invitation Section -->
    @include('invitation')

    <!-- Biodata Section -->
    @include('biodata')

    <!-- Event Section -->
    @include('event')

    <!-- Snapshot Section -->
    @include('snapshot')

    <!-- Comment Section -->
    @include('comment')

    <!-- Gift Section -->
    @include('gift')

    <!-- Thanks Section -->
    @include('thanks')

    <!-- Scripts -->
    @include('script')
</body>

</html>
