<style>
    :root {
        --primary-color: #e9d8a6;
        /* gold/cream tone */
        --secondary-color: rgba(0, 0, 0, 0.6);
        --text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
        --section-padding: 100px 20px;
    }

    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        color: white;
        overflow-x: hidden;
    }

    /* Typography */
    .font-wedding {
        font-family: "Playfair Display", serif;
        color: white;
        text-shadow: var(--text-shadow);
    }

    .section-title {
        font-family: "Playfair Display", serif;
        font-size: 36px;
        color: var(--primary-color);
        letter-spacing: 2px;
        margin-bottom: 30px;
    }

    /* 1. THE dan OF */
    .the-of-text {
        font-family: 'Glacial Indifference', sans-serif;
        font-style: italic;
        font-size: 12px;
        letter-spacing: 2px;
    }

    /* 2. W E D D I N G */
    .wedding-text {
        font-family: 'Lovelace', serif;
        font-weight: bold;
        letter-spacing: 8px;
        font-style: normal;
        font-size: 30px;
    }

    /* 3. Eka + Wildan */
    .names-text {
        font-family: 'Pinyon Script', cursive;
        font-style: normal;
        font-weight: normal;
        font-size: 50px;
    }

    /* 4. Lambang & */
    .and-symbol {
        font-family: 'Playfair Display', serif;
    }

    /* 5. Open Invitation Button */
    #open-btn {
        font-family: 'Kulachat Serif', serif;
        font-weight: bold;
        background-color: transparent;
        border: 2px solid white;
        color: white;
        transition: all 0.3s ease;
    }

    #open-btn:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    /* 6. "Dear" */
    .dear-text {
        font-family: 'Kulachat Serif', serif;
        font-weight: normal;
    }

    /* 7. Nama tamu (ex: vivin agustina) */
    .guest-name-text {
        font-family: 'Lovelace', serif;
        font-weight: bold;
    }

    /* 8. "You're invited to our wedding" */
    .invite-text {
        font-family: 'Kulachat Serif', serif;
        font-weight: normal;
        letter-spacing: 1.5px;
    }

    /* Text Animation Classes */
    .animate-text {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-out;
    }

    .animate-text.animated {
        opacity: 1;
        transform: translateY(0);
    }

    .delay-1 {
        transition-delay: 0.2s;
    }

    .delay-2 {
        transition-delay: 0.4s;
    }

    .delay-3 {
        transition-delay: 0.6s;
    }

    .delay-4 {
        transition-delay: 0.8s;
    }

    .delay-5 {
        transition-delay: 1s;
    }

    /* Layout Components */
    .overlay-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    .section-container {
        position: relative;
        padding: var(--section-padding);
        z-index: 1;
        text-align: center;
    }

    .content-block {
        background-color: rgba(255, 255, 255, 0.05);
        padding: 20px;
        border-radius: 15px;
        max-width: 500px;
        margin: 0 auto 30px;
    }

    /* Video Background */
    .video-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -2;
    }

    .video-wrapper video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        transform: translate(-50%, -50%);
        object-fit: cover;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: -1;
    }

    #open-btn {
        background: transparent;
        color: white;
        border: 2px solid white;
        padding: 12px 30px;
        font-size: 13px;
        border-radius: 30px;
        margin-top: 20px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    #open-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        color: white;
    }

    /* Typing Animation */
    #typed-title {
        overflow: hidden;
        white-space: nowrap;
        border-right: 2px solid rgba(255, 255, 255, 0.7);
        width: fit-content;
        margin: 0 auto;
        font-family: "Playfair Display", serif;
        font-size: 32px;
        animation: blink 0.8s infinite;
    }

    @keyframes blink {

        0%,
        100% {
            border-color: transparent;
        }

        50% {
            border-color: rgba(255, 255, 255, 0.7);
        }
    }

    /* Banner Carousel */
    .banner-img {
        max-height: 800px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .carousel-caption {
        position: absolute;
        left: 0;
        right: 0;
        padding: 1rem;
        z-index: 2;
    }

    .top-caption {
        top: 10%;
        bottom: auto;
        transform: translateY(0);
    }

    .text-shadow {
        text-shadow: var(--text-shadow);
    }

    /* Countdown */
    #countdown h3 {
        font-size: 32px;
        margin: 0;
    }

    #countdown small {
        font-size: 14px;
        color: #ddd;
    }

    /* Comment Section */
    .comment-box {
        background-color: #fff;
        color: #000;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .comment-box small {
        font-size: 12px;
        color: #666;
    }

    .comment-box .initials {
        background: #ccc;
        color: #000;
        font-weight: bold;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin-right: 10px;
    }

    /* Audio Control */
    #audio-btn {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 5;
        background: transparent;
        border: none;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    #audio-btn:hover {
        transform: scale(1.1);
    }

    #audio-icon {
        width: 60px;
        height: 60px;
        transition: transform 0.3s ease;
    }

    .spinning {
        animation: spin 3s linear infinite;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    audio {
        display: none;
    }

    /* Hamburger Menu */
    .hamburger-menu {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
        cursor: pointer;
        background: rgba(0, 0, 0, 0.7);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease;
    }

    .hamburger-menu:hover {
        background: rgba(0, 0, 0, 0.9);
    }

    .hamburger-menu span {
        display: block;
        width: 20px;
        height: 2px;
        background: white;
        margin: 2.5px 0;
        transition: all 0.3s ease;
    }

    .hamburger-menu.active span:nth-child(1) {
        transform: translateY(7px) rotate(45deg);
    }

    .hamburger-menu.active span:nth-child(2) {
        opacity: 0;
    }

    .hamburger-menu.active span:nth-child(3) {
        transform: translateY(-7px) rotate(-45deg);
    }

    .nav-menu {
        position: fixed;
        top: 0;
        right: -300px;
        width: 250px;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 999;
        transition: all 0.3s ease;
        padding-top: 80px;
    }

    .nav-menu.active {
        right: 0;
    }

    .nav-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-menu li {
        padding: 15px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nav-menu a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        transition: all 0.3s ease;
        display: block;
    }

    .nav-menu a:hover {
        color: var(--primary-color);
        padding-left: 10px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        :root {
            --section-padding: 80px 15px;
        }

        .font-wedding {
            font-size: 32px;
        }

        .section-title {
            font-size: 28px;
        }

        .banner-img {
            height: 90vh;
            object-position: center center;
        }
    }

    .copy-number {
        cursor: pointer;
        transition: color 0.2s;
    }

    .copy-number:hover {
        color: #007bff;
        /* biru saat hover */
    }
</style>
