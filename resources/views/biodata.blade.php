<style>
    .biodata-container {
        position: relative;
        display: inline-block;
        width: 100%;
        max-width: 400px;
        text-align: center;
        color: white;
    }

    .biodata-container img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Nama di atas foto */
    .biodata-title {
        position: absolute;
        top: 90px;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        color: gold;
        /* Warna emas */
        font-family: 'Great Vibes', cursive;
        /* Font elegan */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }

    .biodata-title h2 {
        font-size: 28px;
        margin: 0;
    }

    /* Deskripsi di bawah foto */
    .biodata-caption {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        font-size: 14px;
        opacity: 80%;
        line-height: 1.4;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }
</style>

<section class="section-container p-0 mb-5 text-shadow" id="biodata">
    <!-- Foto Calon Mempelai Wanita -->
    <div class="biodata-container">
        <img src="{{ asset('') }}assets/photo-eka.jpg" alt="Calon Mempelai Wanita" />
    </div>

    <!-- Foto Calon Mempelai Pria -->
    <div class="biodata-container">
        <img src="{{ asset('') }}assets/photo-wildan.jpg" alt="Calon Mempelai Pria" />
    </div>
</section>
