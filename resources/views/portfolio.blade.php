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
                    <a href="{{ asset('FloresCV.pdf') }}" download class="btn btn-dark btn-lg"
                        style="flex:1; min-width:140px;">
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

                        <!-- Frontend -->
                        <h6 class="fw-semibold">Frontend</h6>
                        <div class="d-flex flex-wrap gap-2 mb-3">

                            <!-- HTML -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <!-- your HTML svg -->
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                    <path d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" />
                                </svg>
                                HTML
                            </span>

                            <!-- CSS -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 640 640" fill="currentColor">
                                    <path
                                        d="M128 96L162.9 491.8L320 544L477.1 491.8L512 96L128 96zM441.1 176L436.3 223.3L321 272.6L320.7 272.7L432.2 272.7L419.4 419.3L321.2 448L222.4 418.8L216 344.9L264.9 344.9L268.1 383.2L320.7 396.5L375.4 381.1L379.1 319.5L212.8 319L212.8 318.9L212.6 319L209 272.7L321.1 226L327.6 223.3L204.7 223.3L198.9 176L441.1 176z" />
                                </svg>
                                CSS
                            </span>

                            <!-- JavaScript -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                    <path d="M7.5 8h3v8l-2 -1" />
                                    <path
                                        d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                </svg>
                                JavaScript
                            </span>

                            <!-- Bootstrap -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2" />
                                    <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2" />
                                    <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4" />
                                </svg>
                                Bootstrap
                            </span>
                        </div>

                        <!-- Backend -->
                        <h6 class="fw-semibold">Backend</h6>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <!-- PHP -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M2 12a10 9 0 1 0 20 0a10 9 0 1 0 -20 0" />
                                    <path
                                        d="M5.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653" />
                                    <path
                                        d="M15.5 15l.395 -1.974l.605 -3.026h1.32a1 1 0 0 1 .986 1.164l-.167 1a1 1 0 0 1 -.986 .836h-1.653" />
                                    <path d="M12 7.5l-1 5.5" />
                                    <path d="M11.6 10h2.4l-.5 3" />
                                </svg>
                                PHP
                            </span>

                            <!-- Laravel -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 17l8 5l7 -4v-8l-4 -2.5l4 -2.5l4 2.5v4l-11 6.5l-4 -2.5v-7.5l-4 -2.5l0 11.5" />
                                    <path d="M11 18v4" />
                                    <path d="M7 15.5l7 -4" />
                                    <path d="M14 7.5v4" />
                                    <path d="M14 11.5l4 2.5" />
                                    <path d="M11 13v-7.5l-4 -2.5l-4 2.5" />
                                    <path d="M7 8l4 -2.5" />
                                    <path d="M18 10l4 -2.5" />
                                </svg>
                                Laravel
                            </span>

                            <!-- MySQL -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M12 8a2 2 0 0 1 2 2v4a2 2 0 1 1 -4 0v-4a2 2 0 0 1 2 -2" />
                                    <path d="M17 8v8h4" />
                                    <path d="M13 15l1 1" />
                                    <path
                                        d="M3 15a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1h-2a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1" />
                                </svg>
                                MySQL
                            </span>

                            <!--  Node -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 640 640" fill="currentColor">
                                    <path
                                        d="M316.3 516C314.2 516 312.1 515.4 310.2 514.4L291 503C288.1 501.4 289.5 500.8 290.5 500.5C294.3 499.2 295.1 498.9 299.2 496.5C299.6 496.3 300.2 496.4 300.6 496.6L315.4 505.4C315.9 505.7 316.7 505.7 317.2 505.4L375 472C375.5 471.7 375.9 471.1 375.9 470.4L375.9 403.7C375.9 403 375.6 402.4 375 402.1L317.2 368.8C316.7 368.5 316 368.5 315.4 368.8L257.6 402.1C257 402.4 256.7 403.1 256.7 403.7L256.7 470.4C256.7 471 257.1 471.6 257.6 471.9L273.4 481C282 485.3 287.3 480.2 287.3 475.2L287.3 409.3C287.3 408.4 288 407.6 289 407.6L296.3 407.6C297.2 407.6 298 408.3 298 409.3L298 475.2C298 486.7 291.8 493.2 280.9 493.2C277.6 493.2 274.9 493.2 267.6 489.6L252.4 480.9C248.7 478.7 246.3 474.7 246.3 470.4L246.3 403.7C246.3 399.4 248.6 395.3 252.4 393.2L310.2 359.8C313.9 357.7 318.7 357.7 322.3 359.8L380.1 393.2C383.8 395.4 386.2 399.4 386.2 403.7L386.2 470.4C386.2 474.7 383.9 478.8 380.1 480.9L322.3 514.3C320.6 515.4 318.5 516 316.3 516z" />
                                </svg>
                                Node.js
                            </span>
                        </div>

                        <!-- Tools -->
                        <h6 class="fw-semibold">Tools</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <!-- Git -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 12a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M11 8a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M12 15v-6" />
                                    <path d="M15 11l-2 -2" />
                                    <path d="M11 7l-1.9 -1.9" />
                                    <path
                                        d="M13.446 2.6l7.955 7.954a2.045 2.045 0 0 1 0 2.892l-7.955 7.955a2.045 2.045 0 0 1 -2.892 0l-7.955 -7.955a2.045 2.045 0 0 1 0 -2.892l7.955 -7.955a2.045 2.045 0 0 1 2.892 0" />
                                </svg>
                                Git
                            </span>

                            <!-- GitHub -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                </svg>
                                GitHub
                            </span>

                            <!-- VS Code -->
                            <span class="badge bg-dark p-2 d-flex align-items-center gap-1">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M16 3v18l4 -2.5v-13l-4 -2.5" />
                                    <path
                                        d="M9.165 13.903l-4.165 3.597l-2 -1l4.333 -4.5m1.735 -1.802l6.932 -7.198v5l-4.795 4.141" />
                                    <path d="M16 16.5l-11 -10l-2 1l13 13.5" />
                                </svg>
                                VS Code
                            </span>
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

                                    <!-- Icon -->
                                    <div class="mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21v-4a4 4 0 1 1 4 4h-4" />
                                            <path d="M21 3a16 16 0 0 0 -12.8 10.2" />
                                            <path d="M21 3a16 16 0 0 1 -10.2 12.8" />
                                            <path d="M10.6 9a9 9 0 0 1 4.4 4.4" />
                                        </svg>
                                    </div>

                                    <div class="fw-semibold" style="font-size: 18px;">Digital Art</div>
                                    <div class="text-muted" style="font-size:13px;">Vector/Vexel</div>

                                </div>
                            </div>
                            <!-- Coding -->
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">

                                    <div class="mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M2 8a2 2 0 0 1 2 -2h16a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-16a2 2 0 0 1 -2 -2z" />
                                            <path d="M6 10l0 .01" />
                                            <path d="M10 10l0 .01" />
                                            <path d="M14 10l0 .01" />
                                            <path d="M18 10l0 .01" />
                                            <path d="M6 14l0 .01" />
                                            <path d="M18 14l0 .01" />
                                            <path d="M10 14l4 .01" />
                                        </svg>
                                    </div>

                                    <div class="fw-semibold" style="font-size:18px;">Coding</div>
                                    <div class="text-muted" style="font-size:13px;">Web Development</div>

                                </div>
                            </div>

                            <!-- Gaming -->
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">

                                    <div class="mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M12 5h3.5a5 5 0 0 1 0 10h-5.5l-4.015 4.227a2.3 2.3 0 0 1 -3.923 -2.035l1.634 -8.173a5 5 0 0 1 4.904 -4.019h3.4" />
                                            <path d="M14 15l4.07 4.284a2.3 2.3 0 0 0 3.925 -2.023l-1.6 -8.232" />
                                            <path d="M8 9v2" />
                                            <path d="M7 10h2" />
                                            <path d="M14 10h2" />
                                        </svg>
                                    </div>

                                    <div class="fw-semibold" style="font-size:18px;">Gaming</div>
                                    <div class="text-muted" style="font-size:13px;">Mobile & PC Games</div>

                                </div>
                            </div>

                            <!-- Watching Anime -->
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">

                                    <div class="mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 3l10 18h-4l-10 -18l4 0" />
                                            <path d="M5 3v18h4v-10.5" />
                                            <path d="M19 21v-18h-4v10.5" />
                                        </svg>
                                    </div>

                                    <div class="fw-semibold" style="font-size:18px;">Anime</div>
                                    <div class="text-muted" style="font-size:13px;">Watching Series</div>

                                </div>
                            </div>

                            <!-- Photography -->
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">

                                    <div class="mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                            <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        </svg>
                                    </div>

                                    <div class="fw-semibold" style="font-size:18px;">Photography</div>
                                    <div class="text-muted" style="font-size:13px;">Capturing Moments</div>

                                </div>
                            </div>

                            <!-- Learning -->
                            <div class="col-6 col-sm-6 col-md-6">
                                <div class="p-3 border rounded-3 hobby-card text-center">

                                    <div class="mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                            <path d="M3 6l0 13" />
                                            <path d="M12 6l0 13" />
                                            <path d="M21 6l0 13" />
                                        </svg>
                                    </div>

                                    <div class="fw-semibold" style="font-size:18px;">Learning</div>
                                    <div class="text-muted" style="font-size:13px;">Continuous Growth</div>

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