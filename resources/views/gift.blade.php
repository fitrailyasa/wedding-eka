<section class="section-container" id="gift">
    <div class="overlay-bg"></div>
    <div class="container position-relative">
        <h2 class="section-title animate-text">Share Love</h2>
        <p class="mb-4 animate-text delay-1">
            Thank you for filling our wedding with happiness and joy with your
            presence and beautiful gifts.
        </p>

        <!-- Bank Accounts -->
        <div class="d-flex align-items-center justify-content-center">
            <div class="mb-3 d-flex align-items-center justify-content-center gap-3 flex-wrap animate-text delay-2 p-2">
                <img src="{{ asset('') }}assets/bca.png" alt="bank Logo"
                    style="height: 50px; background-color: #fff; border-radius: 20px" />
                <div>
                    <strong id="bca-number" class="d-block copy-number" onclick="copyText('bca-number')">
                        <i class="fa fa-copy"></i> 7772922801
                    </strong>
                    <small>A/N Eka Anggraini</small>
                </div>
            </div>

            <div class="mb-4 d-flex align-items-center justify-content-center gap-3 flex-wrap animate-text delay-3 p-2">
                <img src="{{ asset('') }}assets/mandiri.png" alt="bank Logo"
                    style="height: 60px; background-color: #fff; border-radius: 20px" />
                <div>
                    <strong id="mandiri-number" class="d-block copy-number" onclick="copyText('mandiri-number')">
                        <i class="fa fa-copy"></i> 1130011343906
                    </strong>
                    <small>A/N Eka Anggraini</small>
                </div>
            </div>
        </div>

        <a href="https://wa.me/+6282183527292" target="_blank"
            class="btn btn-light rounded-pill px-5 animate-text delay-4 animate__animated animate__pulse animate__infinite">
            Confirm
        </a>
    </div>
</section>
