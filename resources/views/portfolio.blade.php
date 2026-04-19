<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Portfolio | Liam Flores</title>

    <!-- Bootstrap 5 (responsive core) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

        .contact-card {
            border-radius: 24px !important;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1) !important;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .contact-subtitle {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 0;
        }

        .contact-info-wrapper {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-bottom: 28px;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 12px 16px;
            background: #f8f9fa;
            border-radius: 16px;
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .contact-icon {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            color: #111;
        }

        .contact-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .contact-label {
            font-size: 12px;
            font-weight: 600;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .contact-value {
            font-size: 15px;
            font-weight: 500;
            color: #1e293b;
            text-decoration: none;
            transition: color 0.2s;
        }

        .contact-value:hover {
            color: #0a66c2;
        }

        .social-links-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 24px;
        }

        .social-btn {
            flex: 1;
            min-width: calc(50% - 12px);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
            background: #fff;
            color: #333;
        }

        .social-btn svg {
            transition: transform 0.2s;
        }

        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.1);
        }

        .social-btn:hover svg {
            transform: scale(1.1);
        }

        /* Individual button hover colors */
        .linkedin-btn:hover {
            background: #0a66c2;
            border-color: #0a66c2;
            color: white;
        }

        .facebook-btn:hover {
            background: #1877f2;
            border-color: #1877f2;
            color: white;
        }

        .tiktok-btn:hover {
            background: #000000;
            border-color: #000000;
            color: white;
        }

        .email-btn:hover {
            background: #ea4335;
            border-color: #ea4335;
            color: white;
        }

        .contact-footer {
            text-align: center;
            padding-top: 16px;
            border-top: 1px solid #e9ecef;
            font-size: 13px;
            color: #6c757d;
        }

        /* Dark mode styles */
        body.dark-mode .contact-card {
            background: #1e1e1e;
        }

        body.dark-mode .contact-subtitle {
            color: #aaa;
        }

        body.dark-mode .contact-info-item {
            background: #2a2a2a;
        }

        body.dark-mode .contact-info-item:hover {
            background: #353535;
        }

        body.dark-mode .contact-icon {
            background: #1e1e1e;
            color: #ddd;
        }

        body.dark-mode .contact-label {
            color: #999;
        }

        body.dark-mode .contact-value {
            color: #e0e0e0;
        }

        body.dark-mode .contact-value:hover {
            color: #0a66c2;
        }

        body.dark-mode .social-btn {
            background: #2a2a2a;
            border-color: #3a3a3a;
            color: #ddd;
        }

        body.dark-mode .social-btn:hover {
            border-color: transparent;
        }

        body.dark-mode .contact-footer {
            border-top-color: #333;
            color: #999;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .contact-info-item {
                padding: 10px 14px;
            }

            .contact-icon {
                width: 38px;
                height: 38px;
            }

            .contact-value {
                font-size: 13px;
            }

            .social-btn {
                padding: 10px 12px;
                font-size: 13px;
                min-width: calc(50% - 8px);
            }

            .social-btn svg {
                width: 16px;
                height: 16px;
            }

            .contact-footer {
                font-size: 11px;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            .social-btn {
                min-width: calc(50% - 8px);
            }
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

        /* Project Card Carousel Styles - Image on top, button below */
        .project-card-carousel {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            margin: 10px 40px;
            display: flex;
            flex-direction: column;
        }

        .project-card-carousel .project-image {
            width: 100%;
            height: 220px;
            overflow: hidden;
        }

        .project-card-carousel .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .project-card-carousel:hover .project-image img {
            transform: scale(1.05);
        }

        .project-card-carousel .project-content {
            padding: 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .project-card-carousel .project-title {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 12px;
            color: #1e293b;
        }

        .project-card-carousel .project-description {
            font-size: 15px;
            color: #5a6a7e;
            line-height: 1.6;
            margin-bottom: 14px;
        }

        .project-card-carousel .project-tech {
            font-size: 13px;
            color: #8895a7;
            margin-bottom: 20px;
            letter-spacing: 0.3px;
            font-weight: 500;
        }

        .project-card-carousel .project-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: #111;
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 40px;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.25s ease;
            border: none;
            cursor: pointer;
            width: fit-content;
            margin-top: auto;
        }

        .project-card-carousel .project-btn:hover {
            background: #333;
            transform: translateX(6px);
            color: white;
        }

        /* Carousel Control Styling - FIXED for better visibility */
        .carousel-control-prev,
        .carousel-control-next {
            width: 44px;
            height: 44px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .carousel-control-prev {
            left: -15px;
        }

        .carousel-control-next {
            right: -15px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
            background-color: rgba(0, 0, 0, 0.85);
            transform: translateY(-50%) scale(1.05);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 24px;
            height: 24px;
        }

        .carousel-indicators {
            bottom: -35px;
        }

        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 0 6px;
            background-color: #bbb;
        }

        .carousel-indicators button.active {
            background-color: #111;
        }

        /* Dark mode support */
        body.dark-mode .project-card-carousel {
            background: #1e1e1e;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
        }

        body.dark-mode .project-card-carousel .project-title {
            color: #f0f0f0;
        }

        body.dark-mode .project-card-carousel .project-description {
            color: #b0b0b0;
        }

        body.dark-mode .project-card-carousel .project-tech {
            color: #8a8a8a;
        }

        body.dark-mode .project-card-carousel .project-btn {
            background: #2c2c2c;
            color: #eee;
        }

        body.dark-mode .project-card-carousel .project-btn:hover {
            background: #444;
        }

        body.dark-mode .carousel-indicators button {
            background-color: #555;
        }

        body.dark-mode .carousel-indicators button.active {
            background-color: #fff;
        }

        body.dark-mode .carousel-control-prev,
        body.dark-mode .carousel-control-next {
            background-color: rgba(255, 255, 255, 0.2);
        }

        body.dark-mode .carousel-control-prev:hover,
        body.dark-mode .carousel-control-next:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .project-card-carousel {
                margin: 10px 20px;
            }

            .project-card-carousel .project-image {
                height: 180px;
            }

            .project-card-carousel .project-content {
                padding: 18px;
            }

            .project-card-carousel .project-title {
                font-size: 18px;
            }

            .project-card-carousel .project-description {
                font-size: 13px;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 36px;
                height: 36px;
            }

            .carousel-control-prev {
                left: -8px;
            }

            .carousel-control-next {
                right: -8px;
            }
        }

        @media (max-width: 576px) {
            .project-card-carousel {
                margin: 10px 10px;
            }

            .project-card-carousel .project-image {
                height: 150px;
            }

            .project-card-carousel .project-content {
                padding: 14px;
            }

            .project-card-carousel .project-title {
                font-size: 16px;
            }

            .project-card-carousel .project-description {
                font-size: 12px;
            }

            .project-card-carousel .project-tech {
                font-size: 11px;
            }

            .project-card-carousel .project-btn {
                padding: 8px 16px;
                font-size: 13px;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 30px;
                height: 30px;
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                width: 16px;
                height: 16px;
            }
        }

        .project-tech-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 16px 0 12px 0;
        }

        .tech-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #f0f2f5;
            padding: 6px 12px;
            border-radius: 40px;
            font-size: 12px;
            font-weight: 600;
            color: #1a1e24;
            transition: all 0.2s ease;
            letter-spacing: 0.2px;
        }

        .badge-icon {
            width: 14px;
            height: 14px;
            stroke-width: 2;
        }

        /* Dark mode support */
        body.dark-mode .tech-badge {
            background: #2a2d35;
            color: #e4e6eb;
        }

        /* Hover effect */
        .tech-badge:hover {
            transform: translateY(-2px);
            background: #e4e6ea;
        }

        body.dark-mode .tech-badge:hover {
            background: #3a3f4a;
        }

        /* Responsive */
        @media (max-width: 576px) {
            .tech-badge {
                font-size: 11px;
                padding: 4px 10px;
            }

            .badge-icon {
                width: 12px;
                height: 12px;
            }

            .project-tech-badges {
                gap: 8px;
            }
        }

        /* GALLERY STYLES - FIXED WITH LARGER IMAGES */
        .gallery-tabs {
            border-bottom: 2px solid #e9ecef;
            margin-bottom: 20px;
            gap: 8px;
        }

        .gallery-tabs .nav-link {
            border: none;
            font-weight: 600;
            font-size: 15px;
            padding: 10px 24px;
            color: #6c757d;
            background: transparent;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .gallery-tabs .nav-link:hover {
            color: #111;
            background: #f8f9fa;
        }

        .gallery-tabs .nav-link.active {
            color: #fff;
            background: #111;
            border: none;
        }

        body.dark-mode .gallery-tabs {
            border-bottom-color: #333;
        }

        body.dark-mode .gallery-tabs .nav-link {
            color: #aaa;
        }

        body.dark-mode .gallery-tabs .nav-link:hover {
            color: #fff;
            background: #2a2a2a;
        }

        body.dark-mode .gallery-tabs .nav-link.active {
            background: #fff;
            color: #111;
        }

        .marquee-gallery {
            width: 100%;
            overflow: hidden;
            position: relative;
            border-radius: 16px;
        }

        .marquee-track-gallery {
            display: flex;
            overflow: hidden;
        }

        .marquee-slide {
            display: flex;
            animation: marqueeScroll 25s linear infinite;
            gap: 16px;
        }

        .marquee-gallery.reverse .marquee-slide {
            animation: marqueeScrollReverse 25s linear infinite;
        }

        .marquee-gallery:hover .marquee-slide {
            animation-play-state: paused;
        }

        @keyframes marqueeScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes marqueeScrollReverse {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }

        /* LARGER GALLERY IMAGES */
        .gallery-item {
            position: relative;
            width: 280px;
            height: 200px;
            flex-shrink: 0;
            border-radius: 16px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.85), transparent);
            padding: 12px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-overlay span {
            color: white;
            font-size: 14px;
            font-weight: 600;
            display: block;
            text-align: center;
        }

        /* TESTIMONIES STYLES */
        .testimonies-marquee {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 10px 0;
        }

        .testimonies-track {
            display: flex;
            gap: 20px;
            animation: scrollTestimonies 35s linear infinite;
            width: fit-content;
        }

        .testimonies-marquee:hover .testimonies-track {
            animation-play-state: paused;
        }

        @keyframes scrollTestimonies {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .testimonial-item {
            width: 280px;
            flex-shrink: 0;
            background: #f8f9fa;
            border-radius: 16px;
            padding: 18px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .testimonial-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
            background: #fff;
        }

        .quote-icon {
            font-size: 42px;
            font-family: Georgia, serif;
            color: #ddd;
            line-height: 1;
            margin-bottom: -15px;
            font-weight: bold;
        }

        .testimonial-text {
            font-size: 13px;
            line-height: 1.55;
            color: #4a5568;
            margin: 10px 0 12px 0;
            font-style: italic;
        }

        .testimonial-author strong {
            display: block;
            font-size: 13px;
            color: #1e293b;
            margin-bottom: 4px;
        }

        .testimonial-author span {
            font-size: 11px;
            color: #718096;
        }

        .testimonial-stars {
            margin-top: 10px;
            color: #fbbf24;
            font-size: 12px;
            letter-spacing: 2px;
        }

        .testimonies-footer {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 16px;
            padding-top: 12px;
            border-top: 1px solid #e9ecef;
            font-size: 12px;
            color: #6c757d;
        }

        body.dark-mode .testimonial-item {
            background: #2a2a2a;
        }

        body.dark-mode .testimonial-item:hover {
            background: #353535;
        }

        body.dark-mode .quote-icon {
            color: #444;
        }

        body.dark-mode .testimonial-text {
            color: #cbd5e1;
        }

        body.dark-mode .testimonial-author strong {
            color: #f0f0f0;
        }

        body.dark-mode .testimonial-author span {
            color: #9ca3af;
        }

        body.dark-mode .testimonies-footer {
            border-top-color: #333;
            color: #999;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .gallery-item {
                width: 220px;
                height: 160px;
            }
        }

        @media (max-width: 768px) {
            .gallery-item {
                width: 200px;
                height: 150px;
            }

            .testimonial-item {
                width: 260px;
                padding: 14px;
            }

            .gallery-tabs .nav-link {
                font-size: 13px;
                padding: 8px 18px;
            }
        }

        @media (max-width: 576px) {
            .gallery-item {
                width: 170px;
                height: 130px;
            }

            .gallery-tabs .nav-link {
                font-size: 12px;
                padding: 6px 14px;
            }

            .testimonial-item {
                width: 240px;
            }

            .testimonies-footer {
                flex-direction: column;
                gap: 5px;
                text-align: center;
            }

            .testimonies-footer span:nth-child(2) {
                display: none;
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="margin-right: 8px;">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                            <polyline points="7 10 12 15 17 10" />
                            <line x1="12" y1="15" x2="12" y2="3" />
                        </svg>
                        Download CV
                    </a>
                    <a href="https://www.linkedin.com/in/liam-flores-a843983a6/" target="_blank"
                        class="btn btn-dark btn-lg" style="flex:1; min-width:140px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            style="margin-right: 8px;">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
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

                <!-- PROJECTS CARD - 3 Cards with Carousel -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3">Projects</h4>

                        <!-- Carousel -->
                        <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="5000">
                            <!-- Carousel Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>

                            <!-- Carousel Inner - 3 Slides -->
                            <div class="carousel-inner">
                                <!-- Project 1 -->
                                <div class="carousel-item active">
                                    <div class="project-card-carousel">
                                        <div class="project-image">
                                            <img src="{{ asset('images/portfoliobg.png') }}"
                                                alt="Portfolio Website Project">
                                        </div>
                                        <div class="project-content">
                                            <div class="project-title">Portfolio Website</div>
                                            <div class="project-description">
                                                Personal portfolio built using Laravel + Bootstrap. Fully responsive
                                                with dark mode, interactive elements, and smooth animations.
                                            </div>
                                            <div class="project-tech-badges">
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="badge-icon">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path
                                                            d="M15.5 8h-7l.5 4h6l-.5 3.5l-2.5 .75l-2.5 -.75l-.1 -.5" />
                                                    </svg>
                                                    Laravel
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="badge-icon">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    Bootstrap
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="badge-icon">
                                                        <path
                                                            d="M2 12a2 2 0 0 0 2-2v-4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2" />
                                                        <path
                                                            d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a2 2 0 0 1 2-2" />
                                                        <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4" />
                                                    </svg>
                                                    MySQL
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="badge-icon">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    JavaScript
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="badge-icon">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    HTML
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="badge-icon">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    CSS
                                                </span>
                                            </div>
                                            <a href="https://liamflores.onrender.com" class="project-btn"
                                                target="_blank">
                                                View Project →
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 2 -->
                                <div class="carousel-item">
                                    <div class="project-card-carousel">
                                        <div class="project-image">
                                            <img src="{{ asset('images/capstonebg.png') }}"
                                                alt="Applicant Tracking System Project">
                                        </div>
                                        <div class="project-content">
                                            <div class="project-title">Capstone Project [Applicant Tracking System]
                                            </div>
                                            <div class="project-description">
                                                Applicant Tracking System, built using Laravel. Developed to streamline
                                                the recruitment process for a local company, featuring job posting,
                                                application management, and candidate tracking functionalities.
                                            </div>
                                            <div class="project-tech">
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M2 12a2 2 0 0 0 2-2v-4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2" />
                                                        <path
                                                            d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a2 2 0 0 1 2-2" />
                                                        <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4" />
                                                    </svg>
                                                    Laravel
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    PHP 8.2
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M12 2v4" />
                                                        <path d="M12 18v4" />
                                                        <path d="M4.93 4.93l2.83 2.83" />
                                                        <path d="M16.24 16.24l2.83 2.83" />
                                                        <path d="M2 12h4" />
                                                        <path d="M18 12h4" />
                                                        <path d="M4.93 19.07l2.83-2.83" />
                                                        <path d="M16.24 7.76l2.83-2.83" />
                                                        <circle cx="12" cy="12" r="3" />
                                                    </svg>
                                                    PostgreSQL
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    Bootstrap 5
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    JavaScript
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    HTML5
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    CSS3
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M21 12a9 9 0 0 1-9 9m9-9a9 9 0 0 0-9-9m9 9H3m9 9a9 9 0 0 1-9-9m9 9c1.66 0 3-4 3-9s-1.34-9-3-9m0 18c-1.66 0-3-4-3-9s1.34-9 3-9" />
                                                        <path d="M12 3a9 9 0 0 0-9 9" />
                                                    </svg>
                                                    jQuery
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    Chart.js
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5l16 0" />
                                                        <path d="M7.5 8h3v8l-2 -1" />
                                                        <path
                                                            d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5" />
                                                    </svg>
                                                    AJAX
                                                </span>
                                                <span class="tech-badge">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path
                                                            d="M2 12a2 2 0 0 0 2-2v-4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2" />
                                                        <path
                                                            d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a2 2 0 0 1 2-2" />
                                                        <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4" />
                                                    </svg>
                                                    Tabler.io
                                                </span>
                                            </div>
                                            <a href="{{ route('project.capstone') }}" target="_blank"
                                                class="project-btn">
                                                View Project →
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project 3 -->
                                <div class="carousel-item">
                                    <div class="project-card-carousel">
                                        <div class="project-image">
                                            <img src="https://placehold.co/600x400/2c3e50/white?text=Yeyeniya's Pilot Service"
                                                alt="Yeyeniya's Pilot Service">
                                        </div>
                                        <div class="project-content">
                                            <div class="project-title">Yeyeniya's Pilot Service</div>
                                            <div class="project-description">
                                                Pilot Service for Yeyeniya, a Professional Player of Magic Chess: Go Go
                                            </div>
                                            <div class="project-tech">
                                                Ongoing
                                            </div>
                                            <a href="#" class="project-btn">View Project →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel Controls - Previous/Next Buttons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
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

        <!-- GALLERY & TESTIMONIES SIDE BY SIDE - FIXED LAYOUT -->
        <div class="row g-4 mt-4">
            <!-- LEFT COLUMN: GALLERY CARD -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3">Creative Gallery</h4>

                        <!-- Tabs Navigation -->
                        <ul class="nav nav-tabs gallery-tabs" id="galleryTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="art-tab" data-bs-toggle="tab" data-bs-target="#art"
                                    type="button" role="tab">
                                    🎨 Art
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ojt-tab" data-bs-toggle="tab" data-bs-target="#ojt"
                                    type="button" role="tab">
                                    🖼️ OJT Graphics
                                </button>
                            </li>
                        </ul>

                        <!-- Tabs Content -->
                        <div class="tab-content" id="galleryTabContent">
                            <!-- Art Tab -->
                            <div class="tab-pane fade show active" id="art" role="tabpanel" aria-labelledby="art-tab">
                                <div class="marquee-gallery">
                                    <div class="marquee-track-gallery">
                                        <div class="marquee-slide">
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/loonie.jpg') }}" alt="Loonie">
                                                <div class="gallery-overlay"><span>Loonie</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/ivos1.jpg') }}" alt="Ivos1">
                                                <div class="gallery-overlay"><span>Ivos1</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/ivos2.jpg') }}" alt="Ivos2">
                                                <div class="gallery-overlay"><span>Ivos2</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/ivos3.jpg') }}" alt="Ivos3">
                                                <div class="gallery-overlay"><span>Ivos3</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/21savage.jpg') }}" alt="21 Savage">
                                                <div class="gallery-overlay"><span>21 Savage</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/chrisbrown.jpg') }}" alt="Chris Brown">
                                                <div class="gallery-overlay"><span>Chris Brown</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/drake.jpg') }}" alt="Drake">
                                                <div class="gallery-overlay"><span>Drake</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/eminem.jpg') }}" alt="Eminem">
                                                <div class="gallery-overlay"><span>Eminem</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/icecube.jpg') }}" alt="Ice Cube">
                                                <div class="gallery-overlay"><span>Ice Cube</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/juice.jpg') }}" alt="Juice WRLD">
                                                <div class="gallery-overlay"><span>Juice WRLD</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/lilpump.jpg') }}" alt="Lil Pump">
                                                <div class="gallery-overlay"><span>Lil Pump</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/luhkel.jpg') }}" alt="Luh Kel">
                                                <div class="gallery-overlay"><span>Luh Kel</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/xxx.jpg') }}" alt="XXXTentacion">
                                                <div class="gallery-overlay"><span>XXXTentacion</span></div>
                                            </div>
                                            <!-- Duplicate for seamless loop -->
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/loonie.jpg') }}" alt="Loonie">
                                                <div class="gallery-overlay"><span>Loonie</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/ivos1.jpg') }}" alt="Ivos1">
                                                <div class="gallery-overlay"><span>Ivos1</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/ivos2.jpg') }}" alt="Ivos2">
                                                <div class="gallery-overlay"><span>Ivos2</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/ivos3.jpg') }}" alt="Ivos3">
                                                <div class="gallery-overlay"><span>Ivos3</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/21savage.jpg') }}" alt="21 Savage">
                                                <div class="gallery-overlay"><span>21 Savage</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/chrisbrown.jpg') }}" alt="Chris Brown">
                                                <div class="gallery-overlay"><span>Chris Brown</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/drake.jpg') }}" alt="Drake">
                                                <div class="gallery-overlay"><span>Drake</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/eminem.jpg') }}" alt="Eminem">
                                                <div class="gallery-overlay"><span>Eminem</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/icecube.jpg') }}" alt="Ice Cube">
                                                <div class="gallery-overlay"><span>Ice Cube</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/juice.jpg') }}" alt="Juice WRLD">
                                                <div class="gallery-overlay"><span>Juice WRLD</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/lilpump.jpg') }}" alt="Lil Pump">
                                                <div class="gallery-overlay"><span>Lil Pump</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/luhkel.jpg') }}" alt="Luh Kel">
                                                <div class="gallery-overlay"><span>Luh Kel</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/art/xxx.jpg') }}" alt="XXXTentacion">
                                                <div class="gallery-overlay"><span>XXXTentacion</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- OJT Graphics Tab -->
                            <div class="tab-pane fade" id="ojt" role="tabpanel" aria-labelledby="ojt-tab">
                                <div class="marquee-gallery reverse">
                                    <div class="marquee-track-gallery reverse">
                                        <div class="marquee-slide">
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/1.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/2.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/3.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/4.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/5.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/6.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/7.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/8.png') }}" alt="Live Stream Banner">
                                                <div class="gallery-overlay"><span>Live Stream Banner</span></div>
                                            </div>
                                            <!-- Duplicate for seamless loop -->
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/1.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/2.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/3.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/4.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/5.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/6.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/7.png') }}" alt="Unleash Stickers">
                                                <div class="gallery-overlay"><span>Unleash Stickers</span></div>
                                            </div>
                                            <div class="gallery-item">
                                                <img src="{{ asset('images/ojt/8.png') }}" alt="Live Stream Banner">
                                                <div class="gallery-overlay"><span>Live Stream Banner</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: TESTIMONIES CARD -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3 text-center">What People Say</h4>

                        <div class="testimonies-marquee">
                            <div class="testimonies-track">
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">Liam is an exceptional developer and a good team
                                            leader.</p>
                                        <div class="testimonial-author"><strong>— Jen Aranas</strong><span>Capstone
                                                Adviser, TIP Manila</span></div>

                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>

                                        <p class="testimonial-text">
                                            Working with Liam was a pleasure. His attention to detail and creative
                                            problem-solving skills are top-notch.
                                        </p>

                                        <div class="testimonial-author">
                                            <strong class="d-flex align-items-center gap-1">
                                                — Vmiguel Gonzales

                                                <!-- Verified Badge -->
                                                <svg width="16" height="16" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="12" r="10" fill="#1877F2" />
                                                    <path d="M9.5 12.5l1.8 1.8 3.7-3.7" fill="none" stroke="#fff"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </strong>

                                            <span> Internet Personality</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">
                                            Helped improve our system a lot. Smooth and reliable work.
                                        </p>
                                        <div class="testimonial-author">
                                            <strong>— Client</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">
                                            Skilled and consistent. Shows strong potential in development.
                                        </p>
                                        <div class="testimonial-author">
                                            <strong>— Mentor</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">
                                            Great design sense. The output looked clean and professional.
                                        </p>
                                        <div class="testimonial-author">
                                            <strong>— Project Partner</strong>
                                        </div>
                                    </div>
                                </div>
                                <!-- Duplicate for seamless loop -->
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">Liam is an exceptional developer and a good team
                                            leader.</p>
                                        <div class="testimonial-author"><strong>— Jen Aranas</strong><span>Capstone
                                                Adviser, TIP Manila</span></div>

                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>

                                        <p class="testimonial-text">
                                            Working with Liam was a pleasure. His attention to detail and creative
                                            problem-solving skills are top-notch.
                                        </p>

                                        <div class="testimonial-author">
                                            <strong class="d-flex align-items-center gap-1">
                                                — Vmiguel Gonzales

                                                <!-- Verified Badge -->
                                                <svg width="16" height="16" viewBox="0 0 24 24">
                                                    <circle cx="12" cy="12" r="10" fill="#1877F2" />
                                                    <path d="M9.5 12.5l1.8 1.8 3.7-3.7" fill="none" stroke="#fff"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </strong>

                                            <span> Internet Personality</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">
                                            Helped improve my business a lot, great designing skills and smooth work.
                                        </p>
                                        <div class="testimonial-author">
                                            <strong>— Client</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">
                                            Skilled and consistent. Shows strong potential in development.
                                        </p>
                                        <div class="testimonial-author">
                                            <strong>— Mentor</strong>
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">
                                            Great design sense. The output looked clean and professional.
                                        </p>
                                        <div class="testimonial-author">
                                            <strong>— Project Partner</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 
                        <div class="testimonies-footer">
                            <span>⭐ 5.0 Average Rating</span>
                            <span>•</span>
                            <span>💬 15+ Happy Clients</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>




        <!-- CONTACT CARD -->
        <div class="card mt-3 mb-5 contact-card">
            <div class="card-body">
                <div class="contact-header">
                    <h4 class="fw-bold mb-2">Let's Connect</h4>
                    <p class="contact-subtitle">Feel free to reach out for collaborations or just a chat</p>
                </div>

                <div class="contact-info-wrapper">
                    <!-- Email Info -->
                    <div class="contact-info-item">
                        <div class="contact-icon email-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zM16 4.697v7.104l-5.803-3.558z" />
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Email</span>
                            <a href="mailto:liamjedmflores@email.com" class="contact-value">liamjedmflores@email.com</a>
                        </div>
                    </div>

                    <!-- Location Info -->
                    <div class="contact-info-item">
                        <div class="contact-icon location-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4" />
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Location</span>
                            <span class="contact-value">Pateros, Metro Manila</span>
                        </div>
                    </div>
                </div>

                <div class="social-links-wrapper">
                    <a href="https://www.linkedin.com/in/liam-flores-a843983a6/" target="_blank"
                        class="social-btn linkedin-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg>
                        LinkedIn
                    </a>
                    <a href="https://www.facebook.com/liamjedd.flores" target="_blank" class="social-btn facebook-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                        Facebook
                    </a>
                    <a href="https://www.tiktok.com/@.tamidesu" target="_blank" class="social-btn tiktok-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                        TikTok
                    </a>
                    <a href="mailto:liamjedmflores@email.com" class="social-btn email-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zM16 4.697v7.104l-5.803-3.558z" />
                        </svg>
                        Email Me
                    </a>
                </div>

                <!-- Optional: Quick response note -->
                <div class="contact-footer">
                    <span>📱 Usually responds within 24 hours</span>
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

    <!-- Make sure Bootstrap JS is loaded and initialize carousel -->
    <script>
        // Ensure carousel works properly when page loads
        document.addEventListener('DOMContentLoaded', function () {
            // Check if Bootstrap is loaded
            if (typeof bootstrap !== 'undefined') {
                // Initialize carousel with proper settings
                var carouselElement = document.querySelector('#projectsCarousel');
                if (carouselElement) {
                    new bootstrap.Carousel(carouselElement, {
                        interval: 5000,
                        wrap: true,
                        ride: 'carousel'
                    });
                }
            }
        });
    </script>
</body>

</html>