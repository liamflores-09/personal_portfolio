<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Nunito Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
            background: #f8f9fa;
        }

        .profile-box {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-top: 70px;
        }

        .profile-box img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 16px;
        }

        .name {
            font-size: 42px;
            font-weight: 900;
            letter-spacing: -0.5px;
        }

        .location {
            font-size: 14px;
            color: #6c757d;
            margin-top: 6px;
        }

        .skills {
            font-size: 18px;
            margin-top: 8px;
            color: #444;
        }

        .profile-grid {
            margin-top: 40px;
        }

        .card {
            border: 0;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        }

        .card-body {
            padding: 22px;
        }

        .card-body p {
            font-size: 15.5px !important;
            line-height: 1.7;
            color: #4b4b4b;
        }

        h4 {
            letter-spacing: -0.3px;
        }

        .badge {
            font-weight: 400;
            border-radius: 999px;
            font-size: 16px;
            padding: 10px 16px;
            letter-spacing: 0.3px;
        }

        .timeline-dot {
            width: 10px;
            height: 10px;
            background: #111;
            border-radius: 50%;
            position: absolute;
            left: 6px;
            top: 10px;
        }

        .edu-title {
            font-size: 18px;
            font-weight: bold;
        }

        .edu-school {
            font-size: 16px;
            color: #555;
        }

        .edu-year {
            font-size: 14px;
            color: #888;
        }

        .hobby-card {
            transition: all 0.2s ease;
            background: #fff;
        }

        .hobby-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            border-color: #000;
        }

        .marquee {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-track {
            display: inline-block;
            white-space: nowrap;
            animation: scrollText 12s linear infinite;
        }

        .marquee-track span {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        @keyframes scrollText {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .contact-wrapper {
            gap: 10px;
        }

        .contact-pill {
            flex: 1 1 calc(50% - 10px);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            padding: 14px;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;

            transition: all 0.25s ease;
            border: 1px solid #ddd;
            color: #111;
            background: #fff;
        }

        /* FULL WIDTH ON MOBILE */
        @media (max-width: 576px) {
            .contact-pill {
                flex: 1 1 100%;
            }
        }

        .contact-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        /* FIXED WIDTH CALCULATION */
        .contact-pill {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            padding: 14px;
            border-radius: 999px;

            text-decoration: none;
            font-weight: 600;
            font-size: 15px;

            border: 1px solid #ddd;
            background: #fff;
            color: #111;

            transition: all 0.25s ease;
        }

        /* Hover */
        .contact-pill:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        /* Colors */
        .linkedin:hover {
            background: #0a66c2;
            color: #fff;
        }

        .facebook:hover {
            background: #1877f2;
            color: #fff;
        }

        .tiktok:hover {
            background: #000;
            color: #fff;
        }

        .email:hover {
            background: #333;
            color: #fff;
        }

        /* DARK MODE BASE */
        body.dark-mode {
            background: #121212;
            color: #e4e4e4;
        }

        /* CARDS */
        body.dark-mode .card {
            background: #1e1e1e;
            color: #e4e4e4;
            box-shadow: none;
        }

        /* TEXT */
        body.dark-mode .text-muted,
        body.dark-mode .location,
        body.dark-mode .edu-school,
        body.dark-mode .edu-year {
            color: #aaa !important;
        }

        /* BORDERS */
        body.dark-mode .border {
            border-color: #333 !important;
        }

        /* BUTTON */
        body.dark-mode .btn-outline-dark {
            border-color: #aaa;
            color: #fff;
        }

        /* CONTACT PILLS */
        body.dark-mode .contact-pill {
            background: #1e1e1e;
            border-color: #333;
            color: #eee;
        }

        /* HOVER COLORS STILL APPLY */
        body.dark-mode .contact-pill:hover {
            color: #fff;
        }

        /* BADGES */
        body.dark-mode .badge {
            background: #333 !important;
        }

        /* MARQUEE */
        body.dark-mode .marquee-track span {
            color: #ccc;
        }

        .profile-image-wrapper {
            position: relative;
            width: 180px;
            height: 180px;
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 16px;
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        /* default image */
        .main-img {
            opacity: 1;
            z-index: 1;
        }

        /* hover image */
        .hover-img {
            opacity: 0;
            transform: scale(1.05);
        }

        /* HOVER EFFECT */
        .profile-image-wrapper:hover .hover-img {
            opacity: 1;
            transform: scale(1);
        }

        .profile-image-wrapper:hover .main-img {
            opacity: 0;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="d-flex justify-content-end mt-3">
            <button id="darkToggle" class="btn btn-outline-dark btn-sm">
                🌙 Dark Mode
            </button>
        </div>
        <!-- PROFILE HEADER -->
        <div class="profile-box">

            <div class="profile-image-wrapper">
                <img src="{{ asset('images/PortfolioImage.png') }}" class="profile-img main-img" alt="Profile">
                <img src="{{ asset('images/imghove.jpg') }}" class="profile-img hover-img" alt="Hover Profile">
            </div>

            <div>

                <div class="name">Liam Flores</div>

                <div class="location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4" />
                    </svg>
                    Pateros, Metro Manila
                </div>

                <div class="skills">
                    IT \ Graphic Designer \ Looking for Opportunities
                </div>

                <div class="d-flex gap-2 mt-3">

                    <a href="{{ asset('FloresCV.pdf') }}" download class="btn btn-dark btn-lg w-50">
                        Download CV
                    </a>

                    <a href="https://www.linkedin.com/in/liam-flores-a843983a6/" target="_blank"
                        class="btn btn-dark btn-lg w-50">
                        LinkedIn
                    </a>

                </div>

            </div>

        </div>



        <!-- MAIN GRID -->
        <div class="row mt-5 profile-grid">

            <!-- LEFT: ABOUT + PROJECTS -->
            <div class="col-md-7 d-flex flex-column">

                <!-- ABOUT -->
                <div class="card">
                    <div class="card-body">

                        <h4 class="fw-bold mb-3">About</h4>

                        <p>
                            I am Liam Jed M. Flores, a Magna Cum Laude graduate with a Bachelor of Science in
                            Information Technology from the Technological Institute of the Philippines – Manila.
                            I have a strong foundation in web development, systems analysis, and software design,
                            with hands-on experience in building real-world applications.
                        </p>

                        <p>
                            I specialize in Laravel, PHP, JavaScript, HTML, CSS, Bootstrap, and database systems like
                            MySQL, PostgreSQL, and Firebase.
                        </p>

                        <p>
                            I completed my internship at Highly Succeed Inc., working on government systems and UI/UX
                            tasks.
                        </p>

                    </div>
                </div>

                <!-- PROJECTS -->
                <div class="card mt-4">
                    <div class="card-body">

                        <h4 class="fw-bold mb-3">Projects</h4>

                        <div class="d-flex flex-column gap-3">

                            <div class="p-3 border rounded-3">
                                <div style="font-size:18px; font-weight:600;">Portfolio Website</div>
                                <div style="font-size:15px; color:#555;">
                                    Personal portfolio built using Laravel + Bootstrap.
                                </div>
                                <div style="font-size:13px; color:#888; margin-top:6px;">
                                    Laravel • Bootstrap • MySQL
                                </div>
                            </div>

                            <div class="p-3 border rounded-3">
                                <div style="font-size:18px; font-weight:600;">DILG Pre-Registration System</div>
                                <div style="font-size:15px; color:#555;">
                                    Government registration and data processing system.
                                </div>
                                <div style="font-size:13px; color:#888; margin-top:6px;">
                                    Laravel • PHP • MySQL
                                </div>
                            </div>

                            <div class="p-3 border rounded-3">
                                <div style="font-size:18px; font-weight:600;">UI/UX Design Works</div>
                                <div style="font-size:15px; color:#555;">
                                    Branding and publication materials.
                                </div>
                                <div style="font-size:13px; color:#888; margin-top:6px;">
                                    Figma • Canva
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- MARQUEE CONTACT CARD -->
                <div class="card mt-4 flex-grow-1">
                    <div class="card-body text-center overflow-hidden d-flex align-items-center justify-content-center">

                        <div class="marquee">
                            <div class="marquee-track">
                                <span>LET'S WORK TOGETHER • LET'S WORK TOGETHER • LET'S WORK TOGETHER • LET'S WORK
                                    TOGETHER •</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- RIGHT: EXPERIENCE + TECH STACK + EDUCATION -->
            <div class="col-md-5 d-flex flex-column">

                <!-- EXPERIENCE -->
                <div class="card">
                    <div class="card-body">

                        <h4 class="fw-bold mb-4">Experience</h4>

                        <div class="position-relative">

                            <div class="position-absolute top-0 bottom-0 border-start border-2" style="left: 10px;">
                            </div>

                            <div class="d-flex justify-content-between mb-4 position-relative">
                                <div class="timeline-dot"></div>
                                <div class="ps-4 d-flex flex-column">
                                    <span style="font-size:18px; font-weight:600;">Web Developer</span>
                                    <span style="font-size:16px; color:#555;">Highly Succeed Inc</span>
                                </div>
                                <span style="font-size:14px; color:#888;">2025</span>
                            </div>

                            <div class="d-flex justify-content-between mb-4 position-relative">
                                <div class="timeline-dot"></div>
                                <div class="ps-4 d-flex flex-column">
                                    <span style="font-size:18px; font-weight:600;">Graphics Designer</span>
                                    <span style="font-size:16px; color:#555;">Highly Succeed Inc</span>
                                </div>
                                <span style="font-size:14px; color:#888;">2024</span>
                            </div>

                            <div class="d-flex justify-content-between position-relative">
                                <div class="timeline-dot"></div>
                                <div class="ps-4 d-flex flex-column">
                                    <span style="font-size:18px; font-weight:600;">Internship / Projects</span>
                                    <span style="font-size:16px; color:#555;">DILG / Unleash Graphics / HSI</span>
                                </div>
                                <span style="font-size:14px; color:#888;">2024</span>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- TECH STACK -->
                <div class="card mt-3">
                    <div class="card-body">

                        <h4 class="fw-bold mb-3">Tech Stack</h4>

                        <div class="d-flex flex-wrap gap-2">

                            <span class="badge bg-dark p-2">Laravel</span>
                            <span class="badge bg-dark p-2">PHP</span>
                            <span class="badge bg-dark p-2">JavaScript</span>
                            <span class="badge bg-dark p-2">HTML</span>
                            <span class="badge bg-dark p-2">CSS</span>
                            <span class="badge bg-dark p-2">Bootstrap</span>

                        </div>

                    </div>
                </div>

                <!-- EDUCATION -->
                <div class="card mt-3">
                    <div class="card-body">

                        <h4 class="fw-bold mb-3">Education</h4>

                        <div class="edu-block">
                            <div class="edu-title">BS in Information Technology</div>
                            <div class="edu-school">Technological Institute of the Philippines - Manila</div>
                            <div class="edu-year">2021 - 2025</div>
                        </div>

                    </div>
                </div>
                <!-- HOBBIES -->
                <div class="card mt-3 h-100">
                    <div class="card-body">

                        <h4 class="fw-bold mb-3">Hobbies</h4>

                        <div class="row g-2">

                            <div class="col-6">
                                <div class="p-3 border rounded-3 hobby-card">
                                    <div class="fw-semibold" style="font-size: 18px;">🎨 Design</div>
                                    <div class="text-muted" style="font-size:13px;">UI/UX & layouts</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="p-3 border rounded-3 hobby-card">
                                    <div class="fw-semibold" style="font-size: 18px;">💻 Coding</div>
                                    <div class="text-muted" style="font-size:13px;">Building web apps</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="p-3 border rounded-3 hobby-card">
                                    <div class="fw-semibold" style="font-size: 18px;">🎮 Gaming</div>
                                    <div class="text-muted" style="font-size:13px;">Strategy & RPG</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="p-3 border rounded-3 hobby-card">
                                    <div class="fw-semibold" style="font-size: 18px;">🎥 Editing</div>
                                    <div class="text-muted" style="font-size:13px;">Video & visuals</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="p-3 border rounded-3 hobby-card">
                                    <div class="fw-semibold" style="font-size: 18px;">📷 Photography</div>
                                    <div class="text-muted" style="font-size:13px;">Capturing moments</div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="p-3 border rounded-3 hobby-card">
                                    <div class="fw-semibold" style="font-size: 18px;">📚 Learning</div>
                                    <div class="text-muted" style="font-size:13px;">New tech & tools</div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="card mt-3 mb-5">
            <div class="card-body">

                <h4 class="fw-bold mb-4">Contact</h4>

                <div class="row g-2">

                    <div class="col-12 col-sm-6">
                        <a href="https://www.linkedin.com/in/liam-flores-a843983a6/"
                            class="contact-pill linkedin w-100">
                            <span>🔗</span> LinkedIn
                        </a>
                    </div>

                    <div class="col-12 col-sm-6">
                        <a href="https://www.facebook.com/liamjedd.flores" class="contact-pill facebook w-100">
                            <span>📘</span> Facebook
                        </a>
                    </div>

                    <div class="col-12 col-sm-6">
                        <a href="https://www.tiktok.com/@.tamidesu" class="contact-pill tiktok w-100">
                            <span>🎵</span> TikTok
                        </a>
                    </div>

                    <div class="col-12 col-sm-6">
                        <a href="mailto:liamjedmflores@email.com" class="contact-pill email w-100">
                            <span>✉️</span> Email
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>
        const toggleBtn = document.getElementById("darkToggle");

        // Load saved mode
        if (localStorage.getItem("theme") === "dark") {
            document.body.classList.add("dark-mode");
            toggleBtn.textContent = "☀️ Light Mode";
        }

        toggleBtn.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");

            if (document.body.classList.contains("dark-mode")) {
                localStorage.setItem("theme", "dark");
                toggleBtn.textContent = "☀️ Light Mode";
            } else {
                localStorage.setItem("theme", "light");
                toggleBtn.textContent = "🌙 Dark Mode";
            }
        });
    </script>

</body>

</html>