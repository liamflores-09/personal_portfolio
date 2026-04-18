<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Portfolio | Liam Flores</title>

    <!-- Bootstrap 5 (responsive core) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Nunito Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        /* ----- GLOBAL RESET & RESPONSIVE FOUNDATIONS ----- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
            background: #f8f9fa;
            color: #1e293b;
            line-height: 1.5;
            overflow-x: hidden;
            width: 100%;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .container {
            max-width: 1280px;
            width: 100%;
            padding-left: 1rem;
            padding-right: 1rem;
            margin-left: auto;
            margin-right: auto;
        }

        /* ----- PROFILE BOX: fully responsive stack on mobile ----- */
        .profile-box {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-top: 70px;
            flex-wrap: wrap;
        }

        /* Mobile: center content, column layout */
        @media (max-width: 768px) {
            .profile-box {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }

            .profile-box .d-flex.gap-2 {
                justify-content: center;
            }

            .name {
                font-size: 32px !important;
            }
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

        /* buttons on mobile */
        @media (max-width: 576px) {
            .profile-box .btn-dark {
                font-size: 14px;
                padding: 8px 12px;
            }

            .d-flex.gap-2 {
                flex-wrap: wrap;
            }
        }

        .profile-grid {
            margin-top: 40px;
        }

        /* CARDS: responsive padding, always flexible */
        .card {
            border: 0;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
            transition: transform 0.2s, box-shadow 0.2s;
            background: #fff;
        }

        .card-body {
            padding: 22px;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 18px;
            }

            .card-body p {
                font-size: 14px !important;
            }
        }

        .card-body p {
            font-size: 15.5px !important;
            line-height: 1.7;
            color: #4b4b4b;
        }

        h4 {
            letter-spacing: -0.3px;
            font-weight: 800;
        }

        /* badges responsive wrap */
        .badge {
            font-weight: 400;
            border-radius: 999px;
            font-size: 16px;
            padding: 10px 16px;
            letter-spacing: 0.3px;
        }

        @media (max-width: 480px) {
            .badge {
                font-size: 13px;
                padding: 6px 12px;
            }
        }

        /* timeline dot — preserve but adjust for mobile */
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

        /* HOBBIES CARD - FIXED EVEN LAYOUT */
        .row.g-3 {
            display: flex;
            flex-wrap: wrap;
            margin-left: -8px;
            margin-right: -8px;
        }

        /* Each column becomes a flex container */
        .row.g-3>[class*="col-"] {
            display: flex;
            margin-bottom: 0;
            padding-left: 8px;
            padding-right: 8px;
        }

        /* The card inside fills the column height completely */
        .hobby-card {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: all 0.2s ease;
            background: #fff;
            border-radius: 12px;
            /* Fixed minimum height ensures consistency */
            min-height: 110px;
        }

        /* Ensures consistent spacing inside */
        .hobby-card .fw-semibold {
            margin-bottom: 6px;
            line-height: 1.3;
        }

        .hobby-card .text-muted {
            line-height: 1.4;
        }

        /* Hover effect */
        .hobby-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            border-color: #000;
        }

        /* Dark mode support */
        body.dark-mode .hobby-card {
            background: #262626;
            border-color: #3a3a3a !important;
        }

        body.dark-mode .hobby-card .text-muted {
            color: #aaa !important;
        }

        /* Mobile: slightly smaller but still perfectly even */
        @media (max-width: 576px) {
            .hobby-card {
                min-height: 95px;
                padding: 10px !important;
            }

            .hobby-card .fw-semibold {
                font-size: 16px !important;
            }

            .hobby-card .text-muted {
                font-size: 12px !important;
            }
        }

        /* Tablet adjustment */
        @media (min-width: 577px) and (max-width: 768px) {
            .hobby-card {
                min-height: 105px;
            }
        }

        /* Marquee — fully responsive */
        .marquee {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-track {
            display: inline-block;
            white-space: nowrap;
            animation: scrollText 12s linear infinite;
            padding-left: 10px;
        }

        .marquee-track span {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        @media (max-width: 576px) {
            .marquee-track span {
                font-size: 16px;
                letter-spacing: 1px;
            }
        }

        @keyframes scrollText {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Contact pills wrapper responsive */
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
            transition: all 0.25s ease;
            border: 1px solid #ddd;
            color: #111;
            background: #fff;
        }

        @media (max-width: 576px) {
            .contact-pill {
                width: 100%;
            }
        }

        .contact-pill:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        /* social hover colors */
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

        /* DARK MODE STYLES */
        body.dark-mode {
            background: #121212;
            color: #e4e4e4;
        }

        body.dark-mode .card {
            background: #1e1e1e;
            color: #e4e4e4;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        body.dark-mode .text-muted,
        body.dark-mode .location,
        body.dark-mode .edu-school,
        body.dark-mode .edu-year,
        body.dark-mode .skills,
        body.dark-mode .card-body p {
            color: #bbb !important;
        }

        body.dark-mode .border,
        body.dark-mode .border-2,
        body.dark-mode .border-start {
            border-color: #333 !important;
        }

        body.dark-mode .btn-outline-dark {
            border-color: #aaa;
            color: #fff;
        }

        body.dark-mode .contact-pill {
            background: #1e1e1e;
            border-color: #444;
            color: #eee;
        }

        body.dark-mode .badge {
            background: #2c2c2c !important;
            color: #f0f0f0;
        }

        body.dark-mode .marquee-track span {
            color: #ddd;
        }

        body.dark-mode .hobby-card {
            background: #262626;
            border-color: #3a3a3a !important;
        }

        body.dark-mode .hobby-card .text-muted {
            color: #aaa !important;
        }

        body.dark-mode .timeline-dot {
            background: #ccc;
        }

        body.dark-mode .p-3.border.rounded-3 {
            border-color: #2c2c2c !important;
        }

        /* profile image hover */
        .profile-image-wrapper {
            position: relative;
            width: 180px;
            height: 180px;
            flex-shrink: 0;
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

        .main-img {
            opacity: 1;
            z-index: 1;
        }

        .hover-img {
            opacity: 0;
            transform: scale(1.05);
        }

        .profile-image-wrapper:hover .hover-img {
            opacity: 1;
            transform: scale(1);
        }

        .profile-image-wrapper:hover .main-img {
            opacity: 0;
        }

        /* timeline responsive fixes */
        @media (max-width: 576px) {
            .timeline-dot {
                left: 4px;
                top: 8px;
            }

            .position-relative .d-flex {
                flex-wrap: wrap;
            }

            .d-flex.justify-content-between.mb-4 {
                flex-direction: column;
                gap: 6px;
            }

            .d-flex.justify-content-between.mb-4 span:last-child {
                margin-left: 28px;
            }

            .d-flex.justify-content-between.position-relative {
                flex-direction: column;
                gap: 4px;
            }

            .ps-4 {
                padding-left: 1.2rem !important;
            }
        }

        /* extra responsive for project cards */
        @media (max-width: 480px) {
            .p-3.border.rounded-3 {
                padding: 12px !important;
            }

            .hobby-card {
                padding: 0.75rem !important;
            }

            .hobby-card .fw-semibold {
                font-size: 16px !important;
            }
        }

        /* ensure proper flex behavior */
        .row.profile-grid {
            display: flex;
            flex-wrap: wrap;
        }

        /* contact section full width behavior */
        .row.g-3>div {
            display: flex;
        }

        /* force even hobby grid on all screen sizes */
        @media (min-width: 576px) {
            .hobby-card {
                min-height: 100px;
            }
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

        <!-- PROFILE HEADER - FULLY RESPONSIVE -->
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
                <div class="d-flex gap-2 mt-3 flex-wrap">
                    <a href="{{ asset('FloresCV.pdf') }}" download class="btn btn-dark btn-lg" style="flex:1; min-width:140px;">
                        Download CV
                    </a>
                    <a href="https://www.linkedin.com/in/liam-flores-a843983a6/" target="_blank"
                        class="btn btn-dark btn-lg" style="flex:1; min-width:140px;">
                        LinkedIn
                    </a>
                </div>
            </div>
        </div>

        <!-- MAIN GRID: LEFT + RIGHT (fully responsive due to bootstrap columns) -->
        <div class="row mt-5 profile-grid">
            <!-- LEFT COLUMN (7 on md+) -->
            <div class="col-md-7 d-flex flex-column">
                <!-- ABOUT CARD -->
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

                <!-- PROJECTS CARD -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3">Projects</h4>
                        <div class="d-flex flex-column gap-3">
                            <div class="p-3 border rounded-3">
                                <div style="font-size:18px; font-weight:600;">Portfolio Website</div>
                                <div style="font-size:15px; color:#555;">Personal portfolio built using Laravel +
                                    Bootstrap.</div>
                                <div style="font-size:13px; color:#888; margin-top:6px;">Laravel • Bootstrap • MySQL
                                </div>
                            </div>
                            <div class="p-3 border rounded-3">
                                <div style="font-size:18px; font-weight:600;">DILG Pre-Registration System</div>
                                <div style="font-size:15px; color:#555;">Government registration and data processing
                                    system.</div>
                                <div style="font-size:13px; color:#888; margin-top:6px;">Laravel • PHP • MySQL</div>
                            </div>
                            <div class="p-3 border rounded-3">
                                <div style="font-size:18px; font-weight:600;">UI/UX Design Works</div>
                                <div style="font-size:15px; color:#555;">Branding and publication materials.</div>
                                <div style="font-size:13px; color:#888; margin-top:6px;">Figma • Canva</div>
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

            <!-- RIGHT COLUMN (5 on md+) -->
            <div class="col-md-5 d-flex flex-column">
                <!-- EXPERIENCE CARD -->
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

                <!-- EDUCATION CARD -->
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

                <!-- HOBBIES CARD - FIXED: EVENLY DISTRIBUTED & ALIGNED -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3">Hobbies</h4>
                        <div class="row g-3">
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">
                                    <div class="fw-semibold" style="font-size: 18px;">🎨 Design</div>
                                    <div class="text-muted" style="font-size:13px;">UI/UX & layouts</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">
                                    <div class="fw-semibold" style="font-size: 18px;">💻 Coding</div>
                                    <div class="text-muted" style="font-size:13px;">Building web apps</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">
                                    <div class="fw-semibold" style="font-size: 18px;">🎮 Gaming</div>
                                    <div class="text-muted" style="font-size:13px;">Strategy & RPG</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">
                                    <div class="fw-semibold" style="font-size: 18px;">🎥 Editing</div>
                                    <div class="text-muted" style="font-size:13px;">Video & visuals</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">
                                    <div class="fw-semibold" style="font-size: 18px;">📷 Photography</div>
                                    <div class="text-muted" style="font-size:13px;">Capturing moments</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">
                                    <div class="fw-semibold" style="font-size: 18px;">📚 Learning</div>
                                    <div class="text-muted" style="font-size:13px;">New tech & tools</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTACT SECTION: fully responsive contact pills -->
        <div class="card mt-3 mb-5">
            <div class="card-body">
                <h4 class="fw-bold mb-4">Contact</h4>
                <div class="row g-3">
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
        (function () {
            const toggleBtn = document.getElementById("darkToggle");
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
        })();
    </script>
</body>

</html>