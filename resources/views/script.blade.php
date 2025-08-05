<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // DOM Elements
    const audio = document.getElementById("bg-music");
    const vinyl = document.getElementById("audio-icon");
    const openBtn = document.getElementById("open-btn");
    const toggleBtn = document.getElementById("audio-btn");
    const messageInput = document.getElementById("message");
    const charCount = document.getElementById("char-count");
    const commentList = document.getElementById("comment-list");
    const form = document.getElementById("comment-form");
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");

    // Initialize Audio
    function initAudio() {
        openBtn.addEventListener("click", () => {
            audio
                .play()
                .then(() => vinyl.classList.add("spinning"))
                .catch((e) => console.log("Autoplay prevented:", e));
        });

        toggleBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            if (audio.paused) {
                audio.play();
                vinyl.classList.add("spinning");
            } else {
                audio.pause();
                vinyl.classList.remove("spinning");
            }
        });
    }

    // Hamburger Menu Toggle
    function initHamburgerMenu() {
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });

        // Close menu when clicking on a link
        const navLinks = document.querySelectorAll(".nav-menu a");
        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                hamburger.classList.remove("active");
                navMenu.classList.remove("active");
            });
        });
    }

    // Set Guest Name from URL
    function setGuestName() {
        const getQueryParam = (param) => {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        };

        const guestName = getQueryParam("to");
        if (guestName) {
            document.getElementById("guest-name").textContent =
                decodeURIComponent(guestName.replace(/\+/g, " "));
        }
    }

    // Typing Effect
    function initTypingEffect() {
        const text = "Countdown to\nOur History";
        const target = document.getElementById("typed-title");
        let i = 0;

        function typeEffect() {
            if (i < text.length) {
                if (text.charAt(i) === "\n") {
                    target.innerHTML += "<br>";
                } else {
                    target.innerHTML += text.charAt(i);
                }
                i++;
                setTimeout(typeEffect, 100);
            }
        }

        window.addEventListener("DOMContentLoaded", () => {
            target.textContent = "";
            setTimeout(typeEffect, 500);
        });
    }

    // Scroll Animation
    function initScrollAnimation() {
        const animateElements = document.querySelectorAll(".animate-text");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("animated");
                    }
                });
            }, {
                threshold: 0.1,
            }
        );

        animateElements.forEach((element) => {
            observer.observe(element);
        });
    }

    // Comment Form Handling
    function initCommentForm() {
        messageInput.addEventListener("input", () => {
            const remaining = 500 - messageInput.value.length;
            charCount.textContent = `Character left: ${remaining}`;
        });

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            const name = document.getElementById("name").value.trim();
            const message = messageInput.value.trim();

            if (!name || !message) return;

            fetch("{{ route('wishes.store') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify({
                        name,
                        message
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === "success") {
                        const time = "Baru saja";
                        const initial = name.charAt(0).toUpperCase();

                        const commentHTML = `
                    <div class="comment-box d-flex align-items-start animate__animated animate__fadeIn">
                        <div class="initials">${initial}</div>
                        <div>
                            <strong>${name}</strong>
                            <p class="mb-1">${message}</p>
                            <small>${time}</small>
                        </div>
                    </div>
                `;
                        commentList.insertAdjacentHTML("afterbegin", commentHTML);
                        form.reset();
                        charCount.textContent = "Character left: 500";
                    }
                })
                .catch(err => console.error(err));
        });
    }


    // Countdown Timer
    function initCountdown() {
        const weddingDate = new Date("September 7, 2025 08:00:00").getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = weddingDate - now;

            // Animate countdown numbers
            document.getElementById("days").textContent = Math.floor(
                distance / (1000 * 60 * 60 * 24)
            );
            document.getElementById("hours").textContent = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            document.getElementById("minutes").textContent = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );
            document.getElementById("seconds").textContent = Math.floor(
                (distance % (1000 * 60)) / 1000
            );
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    // Initialize all functions
    document.addEventListener("DOMContentLoaded", () => {
        initAudio();
        initHamburgerMenu();
        setGuestName();
        initTypingEffect();
        initScrollAnimation();
        initCommentForm();
        initCountdown();
    });

    document.addEventListener("DOMContentLoaded", () => {
        fetch("{{ route('wishes.index') }}")
            .then(res => res.json())
            .then(wishes => {
                wishes.forEach(wish => {
                    const initial = wish.name.charAt(0).toUpperCase();
                    const commentHTML = `
                    <div class="comment-box d-flex align-items-start">
                        <div class="initials">${initial}</div>
                        <div>
                            <strong>${wish.name}</strong>
                            <p class="mb-1">${wish.message}</p>
                            <small>${new Date(wish.created_at).toLocaleString()}</small>
                        </div>
                    </div>
                `;
                    commentList.insertAdjacentHTML("beforeend", commentHTML);
                });
            });
    });

    function copyText(elementId) {
        const text = document.getElementById(elementId).innerText;
        navigator.clipboard
            .writeText(text)
            .then(() => {
                // Ubah teks sementara untuk memberi tanda sukses
                const el = document.getElementById(elementId);
                const original = el.innerText;
                el.innerText = "✅ Disalin";
                setTimeout(() => {
                    el.innerText = original;
                }, 1500);
            })
            .catch((err) => {
                console.error("Gagal menyalin: ", err);
            });
    }
</script>
