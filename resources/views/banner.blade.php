<section class="section-container p-0" id="bannerCarousel">
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('') }}assets/photo (1).JPG" class="d-block w-100 banner-img" alt="Banner 1" />
                <div class="carousel-caption top-caption">
                    <p class="text-shadow m-0 p-0" style="font-family: 'Lovelace', serif;">THANK YOU</p>
                    <p class="text-shadow m-0 p-0" style="font-family: 'Lovelace-Bold', serif; font-size: 44px;">FOR</p>
                    <p class="text-shadow m-0 p-0" style="font-family: 'Lovelace-Bold', serif; font-size: 44px;">BEING</p>
                    <p class="text-shadow m-0 p-0" style="font-family: 'Lovelace-Bold', serif; font-size: 44px;">A</p>
                    <p class="text-shadow m-0 p-0" style="font-family: 'Lovelace-Bold', serif; font-size: 44px;">PART</p>
                    <p class="text-shadow m-0 p-0" style="font-family: 'Lovelace-Bold', serif; font-size: 44px;">OF</p>
                    <p class="text-shadow" style="font-family: 'Lovelace', serif;">OUR HISTORY</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('') }}assets/photo (2).JPG" class="d-block w-100 banner-img" alt="Banner 2" />
                <div class="carousel-caption top-caption">
                    <p class="text-shadow the-of-text">“Loved you yesterday, love you still,<br> always have, always will.” - Elaine Davis</p>
                    <p class="text-shadow" style="font-family: 'Glacial Indifference', sans-serif;">#WEddingparty</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>
</section>
