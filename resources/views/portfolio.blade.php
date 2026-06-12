<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Portfolio | Liam Flores</title>
    <link rel="icon" type="image/png" href="{{ asset('images/PortfolioImage2.png') }}">
    <!-- Bootstrap 5 (responsive core) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Fonts: Inter for headings, Nunito Sans for body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        /* ============================================================
           CSS CUSTOM PROPERTIES — Design Tokens
           ============================================================ */
        :root {
            /* Accent */
            --accent: #2563eb;
            --accent-hover: #1d4ed8;
            --accent-light: #eff6ff;
            --accent-dark: #1e40af;
            --accent-glow: rgba(37, 99, 235, 0.15);

            /* Neutral */
            --bg: #f5f6f8;
            --bg-card: #ffffff;
            --bg-elevated: #ffffff;
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #94a3b8;
            --border: #e2e8f0;
            --border-light: #f1f5f9;

            /* Shadows */
            --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.04);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 12px 40px rgba(0, 0, 0, 0.08);
            --shadow-xl: 0 24px 64px rgba(0, 0, 0, 0.1);
            --shadow-accent: 0 8px 32px rgba(37, 99, 235, 0.2);

            /* Typography */
            --font-heading: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            --font-body: 'Nunito Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            --fs-xs: clamp(0.7rem, 0.65rem + 0.25vw, 0.75rem);
            --fs-sm: clamp(0.8rem, 0.75rem + 0.25vw, 0.875rem);
            --fs-base: clamp(0.9rem, 0.85rem + 0.25vw, 1rem);
            --fs-lg: clamp(1rem, 0.9rem + 0.5vw, 1.125rem);
            --fs-xl: clamp(1.2rem, 1rem + 1vw, 1.5rem);
            --fs-2xl: clamp(1.5rem, 1.2rem + 1.5vw, 2rem);
            --fs-3xl: clamp(1.8rem, 1.4rem + 2vw, 2.5rem);
            --fs-4xl: clamp(2rem, 1.6rem + 2vw, 3rem);

            /* Spacing (8px grid) */
            --sp-1: 4px;
            --sp-2: 8px;
            --sp-3: 12px;
            --sp-4: 16px;
            --sp-5: 20px;
            --sp-6: 24px;
            --sp-8: 32px;
            --sp-10: 40px;
            --sp-12: 48px;
            --sp-16: 64px;

            /* Radius */
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
            --radius-full: 9999px;

            /* Transitions */
            --ease-out: cubic-bezier(0.16, 1, 0.3, 1);
            --ease-spring: cubic-bezier(0.34, 1.56, 0.64, 1);
            --duration-fast: 150ms;
            --duration-normal: 250ms;
            --duration-slow: 400ms;
        }

        /* Dark mode tokens */
        body.dark-mode {
            --bg: #0b0f19;
            --bg-card: #111827;
            --bg-elevated: #1e293b;
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --text-muted: #64748b;
            --border: #1e293b;
            --border-light: #1e293b;
            --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.2);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.3);
            --shadow-lg: 0 12px 40px rgba(0, 0, 0, 0.4);
            --shadow-xl: 0 24px 64px rgba(0, 0, 0, 0.5);
            --accent-glow: rgba(37, 99, 235, 0.1);
        }

        /* ============================================================
           GLOBAL RESET & BASE
           ============================================================ */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: var(--font-body);
            background: var(--bg);
            color: var(--text-primary);
            line-height: 1.7;
            overflow-x: hidden;
            width: 100%;
            transition: background var(--duration-slow) var(--ease-out),
                        color var(--duration-slow) var(--ease-out);
        }

        /* Subtle background texture — static, no repaints */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background:
                radial-gradient(circle at 20% 20%, var(--accent-glow) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
            will-change: auto;
            transform: translateZ(0);
        }

        .container {
            max-width: 1140px;
            width: 100%;
            padding-left: var(--sp-5);
            padding-right: var(--sp-5);
            margin-left: auto;
            margin-right: auto;
        }

        /* ============================================================
           SCROLLBAR
           ============================================================ */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--text-muted);
            border-radius: var(--radius-full);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--text-secondary);
        }

        /* ============================================================
           TYPOGRAPHY
           ============================================================ */
        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            color: var(--text-primary);
            letter-spacing: -0.025em;
        }

        h4 {
            font-size: var(--fs-xl);
            font-weight: 800;
            letter-spacing: -0.03em;
        }

        p {
            line-height: 1.75;
        }

        /* ============================================================
           DARK MODE TOGGLE — Floating Pill
           ============================================================ */
        .dark-mode-toggle-wrap {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: var(--sp-3);
            margin-top: var(--sp-6);
        }

        .theme-label {
            font-size: var(--fs-sm);
            font-weight: 600;
            color: var(--text-muted);
            user-select: none;
            display: flex;
            align-items: center;
            gap: var(--sp-2);
        }

        .theme-switch {
            position: relative;
            width: 52px;
            height: 28px;
            flex-shrink: 0;
        }

        .theme-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .switch-slider {
            position: absolute;
            cursor: pointer;
            inset: 0;
            background: var(--border);
            border-radius: var(--radius-full);
            transition: background var(--duration-normal) var(--ease-out);
        }

        .switch-slider::before {
            content: '';
            position: absolute;
            width: 22px;
            height: 22px;
            left: 3px;
            bottom: 3px;
            background: var(--bg-card);
            border-radius: 50%;
            transition: transform var(--duration-normal) var(--ease-spring),
                        background var(--duration-normal) var(--ease-out);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.15);
            z-index: 1;
        }

        .switch-slider::after {
            content: '☀️';
            position: absolute;
            left: 6px;
            bottom: 5px;
            width: 18px;
            height: 18px;
            font-size: 12px;
            line-height: 18px;
            text-align: center;
            z-index: 0;
            transition: opacity var(--duration-normal);
        }

        .theme-switch input:checked + .switch-slider {
            background: var(--accent);
        }

        .theme-switch input:checked + .switch-slider::before {
            transform: translateX(24px);
        }

        .theme-switch input:checked + .switch-slider::after {
            content: '🌙';
            left: auto;
            right: 6px;
        }

        .theme-switch input:focus-visible + .switch-slider {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
        }

        body.dark-mode .switch-slider {
            background: var(--accent-dark);
        }

        /* ============================================================
           PROFILE BOX
           ============================================================ */
        .profile-box {
            display: flex;
            align-items: center;
            gap: var(--sp-8);
            margin-top: var(--sp-12);
            flex-wrap: wrap;
        }

        .profile-image-wrapper {
            position: relative;
            width: 160px;
            height: 160px;
            flex-shrink: 0;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 3px solid var(--bg-card);
            transition: transform var(--duration-slow) var(--ease-spring),
                        box-shadow var(--duration-slow) var(--ease-out);
        }

        .profile-image-wrapper:hover {
            transform: scale(1.03);
            box-shadow: var(--shadow-xl);
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity var(--duration-slow) var(--ease-out),
                        transform var(--duration-slow) var(--ease-out);
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

        .name {
            font-family: var(--font-heading);
            font-size: var(--fs-3xl);
            font-weight: 800;
            letter-spacing: -0.04em;
            line-height: 1.1;
        }

        .location {
            font-size: var(--fs-sm);
            color: var(--text-muted);
            margin-top: var(--sp-2);
            display: flex;
            align-items: center;
            gap: var(--sp-2);
        }

        .skills {
            font-size: var(--fs-base);
            margin-top: var(--sp-2);
            color: var(--text-secondary);
            font-weight: 500;
        }

        /* Profile CTA Buttons */
        .profile-box .btn-dark,
        .profile-box .btn-accent {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: var(--sp-2);
            background: var(--text-primary);
            color: var(--bg-card);
            border: none;
            padding: var(--sp-3) var(--sp-6);
            border-radius: var(--radius-full);
            font-size: var(--fs-sm);
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: all var(--duration-normal) var(--ease-out);
            box-shadow: var(--shadow-md);
        }

        .profile-box .btn-dark:hover,
        .profile-box .btn-accent:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            background: var(--accent);
            color: #fff;
        }

        .profile-box .btn-dark:active,
        .profile-box .btn-accent:active {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .profile-box {
                flex-direction: column;
                text-align: center;
                gap: var(--sp-6);
            }

            .profile-box .d-flex.gap-2 {
                justify-content: center;
            }

            .location {
                justify-content: center;
            }

            .name {
                font-size: var(--fs-2xl) !important;
            }
        }

        @media (max-width: 576px) {
            .profile-box .btn-dark,
            .profile-box .btn-accent {
                font-size: var(--fs-xs);
                padding: var(--sp-2) var(--sp-4);
            }
        }

        /* ============================================================
           CARDS
           ============================================================ */
        .card {
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            transition: transform var(--duration-normal) var(--ease-out),
                        box-shadow var(--duration-normal) var(--ease-out),
                        border-color var(--duration-normal) var(--ease-out);
            background: var(--bg-card);
        }

        .card:hover {
            box-shadow: var(--shadow-md);
        }

        .card-body {
            padding: var(--sp-6);
        }

        .card-body p {
            font-size: var(--fs-base) !important;
            line-height: 1.8;
            color: var(--text-secondary);
        }

        @media (max-width: 576px) {
            .card-body {
                padding: var(--sp-5);
            }

            .card-body p {
                font-size: var(--fs-sm) !important;
            }
        }

        /* ============================================================
           BADGES (Tech Stack)
           ============================================================ */
        .badge {
            font-weight: 500;
            font-size: var(--fs-sm);
            padding: var(--sp-2) var(--sp-4);
            letter-spacing: 0.01em;
            border-radius: var(--radius-full);
        }

        @media (max-width: 480px) {
            .badge {
                font-size: var(--fs-xs);
                padding: var(--sp-1) var(--sp-3);
            }
        }

        /* ============================================================
           TECH BADGES (Project Cards)
           ============================================================ */
        .project-tech-badges {
            display: flex;
            flex-wrap: wrap;
            gap: var(--sp-2);
            margin: var(--sp-4) 0 var(--sp-3) 0;
        }

        .tech-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--sp-1);
            background: var(--accent-light);
            color: var(--accent-dark);
            padding: var(--sp-1) var(--sp-3);
            border-radius: var(--radius-full);
            font-size: var(--fs-xs);
            font-weight: 600;
            transition: all var(--duration-fast) var(--ease-out);
            letter-spacing: 0.01em;
            border: 1px solid transparent;
        }

        body.dark-mode .tech-badge {
            background: rgba(37, 99, 235, 0.1);
            color: #93c5fd;
        }

        .tech-badge:hover {
            transform: translateY(-1px);
            border-color: var(--accent);
            box-shadow: 0 2px 8px var(--accent-glow);
        }

        .badge-icon {
            width: 13px;
            height: 13px;
            stroke-width: 2;
        }

        @media (max-width: 576px) {
            .tech-badge {
                font-size: 10px;
                padding: 3px 8px;
            }

            .badge-icon {
                width: 11px;
                height: 11px;
            }
        }

        /* ============================================================
           TIMELINE & EDUCATION
           ============================================================ */
        .timeline-dot {
            width: 10px;
            height: 10px;
            background: var(--text-primary);
            border-radius: 50%;
            position: absolute;
            left: 6px;
            top: 10px;
        }

        .edu-title {
            font-family: var(--font-heading);
            font-size: var(--fs-lg);
            font-weight: 700;
        }

        .edu-school {
            font-size: var(--fs-base);
            color: var(--text-secondary);
        }

        .edu-year {
            font-size: var(--fs-sm);
            color: var(--text-muted);
        }

        /* ============================================================
           HOBBY CARDS
           ============================================================ */
        .row.g-3 {
            display: flex;
            flex-wrap: wrap;
            margin-left: calc(var(--sp-2) * -1);
            margin-right: calc(var(--sp-2) * -1);
        }

        .row.g-3 > [class*="col-"] {
            display: flex;
            margin-bottom: 0;
            padding-left: var(--sp-2);
            padding-right: var(--sp-2);
        }

        .hobby-card {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: all var(--duration-normal) var(--ease-out);
            background: var(--bg-card);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            min-height: 110px;
            cursor: default;
        }

        .hobby-card .fw-semibold {
            margin-bottom: var(--sp-1);
            line-height: 1.3;
            font-family: var(--font-heading);
        }

        .hobby-card .text-muted {
            line-height: 1.4;
        }

        .hobby-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
            border-color: var(--accent);
        }

        body.dark-mode .hobby-card {
            background: var(--bg-card);
            border-color: var(--border);
        }

        body.dark-mode .hobby-card .text-muted {
            color: var(--text-muted) !important;
        }

        @media (max-width: 576px) {
            .hobby-card {
                min-height: 95px;
                padding: var(--sp-3) !important;
            }

            .hobby-card .fw-semibold {
                font-size: 15px !important;
            }

            .hobby-card .text-muted {
                font-size: 11px !important;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            .hobby-card {
                min-height: 105px;
            }
        }

        /* ============================================================
           MARQUEE
           ============================================================ */
        .marquee {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-track {
            display: inline-block;
            white-space: nowrap;
            animation: scrollText 14s linear infinite;
            padding-left: var(--sp-3);
        }

        .marquee-track span {
            font-family: var(--font-heading);
            font-size: var(--fs-xl);
            font-weight: 800;
            letter-spacing: 3px;
            color: var(--text-primary);
        }

        @media (max-width: 576px) {
            .marquee-track span {
                font-size: var(--fs-base);
                letter-spacing: 1.5px;
            }
        }

        @keyframes scrollText {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }

        /* ============================================================
           PROJECT CARD CAROUSEL
           ============================================================ */
        .project-card-carousel {
            background: var(--bg-card);
            border-radius: var(--radius-xl);
            overflow: hidden;
            transition: all var(--duration-normal) var(--ease-out);
            box-shadow: var(--shadow-md);
            margin: var(--sp-3) var(--sp-10);
            display: flex;
            flex-direction: column;
            border: 1px solid var(--border-light);
        }

        .project-card-carousel .project-image {
            width: 100%;
            height: 280px;
            overflow: hidden;
            position: relative;
        }

        .project-card-carousel .project-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60px;
            background: linear-gradient(to top, var(--bg-card), transparent);
            pointer-events: none;
        }

        .project-card-carousel .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s var(--ease-out);
        }

        .project-card-carousel:hover .project-image img {
            transform: scale(1.04);
        }

        .project-card-carousel .project-content {
            padding: var(--sp-6);
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .project-card-carousel .project-title {
            font-family: var(--font-heading);
            font-size: var(--fs-xl);
            font-weight: 800;
            margin-bottom: var(--sp-3);
            color: var(--text-primary);
            letter-spacing: -0.03em;
        }

        .project-card-carousel .project-description {
            font-size: var(--fs-sm);
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: var(--sp-3);
        }

        .project-card-carousel .project-tech {
            font-size: var(--fs-xs);
            color: var(--text-muted);
            margin-bottom: var(--sp-5);
            letter-spacing: 0.02em;
            font-weight: 500;
        }

        .project-card-carousel .project-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: var(--sp-2);
            background: var(--text-primary);
            color: var(--bg-card);
            text-decoration: none;
            padding: var(--sp-3) var(--sp-6);
            border-radius: var(--radius-full);
            font-size: var(--fs-sm);
            font-weight: 700;
            transition: all var(--duration-normal) var(--ease-out);
            border: none;
            cursor: pointer;
            width: fit-content;
            margin-top: auto;
        }

        .project-card-carousel .project-btn:hover {
            background: var(--accent);
            transform: translateX(4px);
            box-shadow: var(--shadow-accent);
            color: #fff;
        }

        /* Carousel Controls */
        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.9;
            transition: all var(--duration-normal) var(--ease-out);
            box-shadow: var(--shadow-md);
        }

        .carousel-control-prev {
            left: -12px;
        }

        .carousel-control-next {
            right: -12px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
            background-color: var(--accent);
            border-color: var(--accent);
            transform: translateY(-50%) scale(1.08);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 18px;
            height: 18px;
            filter: invert(1);
        }

        body.dark-mode .carousel-control-prev-icon,
        body.dark-mode .carousel-control-next-icon {
            filter: none;
        }

        .carousel-indicators {
            bottom: -32px;
        }

        .carousel-indicators button {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin: 0 5px;
            background-color: var(--border);
            border: none;
            transition: all var(--duration-normal) var(--ease-out);
        }

        .carousel-indicators button.active {
            background-color: var(--accent);
            width: 24px;
            border-radius: var(--radius-full);
        }

        body.dark-mode .project-card-carousel {
            background: var(--bg-card);
            box-shadow: var(--shadow-md);
        }

        body.dark-mode .project-card-carousel .project-title {
            color: var(--text-primary);
        }

        body.dark-mode .project-card-carousel .project-description {
            color: var(--text-secondary);
        }

        body.dark-mode .project-card-carousel .project-tech {
            color: var(--text-muted);
        }

        body.dark-mode .project-card-carousel .project-btn {
            background: var(--accent);
            color: #fff;
        }

        body.dark-mode .project-card-carousel .project-btn:hover {
            background: var(--accent-hover);
        }

        body.dark-mode .carousel-control-prev,
        body.dark-mode .carousel-control-next {
            background-color: var(--bg-elevated);
            border-color: var(--border);
        }

        @media (max-width: 768px) {
            .project-card-carousel {
                margin: var(--sp-3) var(--sp-5);
            }

            .project-card-carousel .project-image {
                height: 180px;
            }

            .project-card-carousel .project-content {
                padding: var(--sp-5);
            }

            .project-card-carousel .project-title {
                font-size: var(--fs-lg);
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 34px;
                height: 34px;
            }

            .carousel-control-prev { left: -6px; }
            .carousel-control-next { right: -6px; }
        }

        @media (max-width: 576px) {
            .project-card-carousel {
                margin: var(--sp-3);
            }

            .project-card-carousel .project-image {
                height: 150px;
            }

            .project-card-carousel .project-content {
                padding: var(--sp-4);
            }

            .project-card-carousel .project-title {
                font-size: var(--fs-base);
            }

            .project-card-carousel .project-description {
                font-size: var(--fs-xs);
            }

            .project-card-carousel .project-btn {
                padding: var(--sp-2) var(--sp-4);
                font-size: var(--fs-xs);
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 28px;
                height: 28px;
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                width: 14px;
                height: 14px;
            }
        }

        /* ============================================================
           GALLERY
           ============================================================ */
        .gallery-tabs {
            border-bottom: 2px solid var(--border-light);
            margin-bottom: var(--sp-5);
            gap: var(--sp-2);
        }

        .gallery-tabs .nav-link {
            border: none;
            font-family: var(--font-heading);
            font-weight: 600;
            font-size: var(--fs-sm);
            padding: var(--sp-2) var(--sp-5);
            color: var(--text-muted);
            background: transparent;
            border-radius: var(--radius-full);
            transition: all var(--duration-normal) var(--ease-out);
        }

        .gallery-tabs .nav-link:hover {
            color: var(--text-primary);
            background: var(--border-light);
        }

        .gallery-tabs .nav-link.active {
            color: #fff;
            background: var(--text-primary);
            border: none;
        }

        body.dark-mode .gallery-tabs {
            border-bottom-color: var(--border);
        }

        body.dark-mode .gallery-tabs .nav-link {
            color: var(--text-muted);
        }

        body.dark-mode .gallery-tabs .nav-link:hover {
            color: var(--text-primary);
            background: var(--bg-elevated);
        }

        body.dark-mode .gallery-tabs .nav-link.active {
            background: var(--text-primary);
            color: var(--bg);
        }

        .marquee-gallery {
            width: 100%;
            overflow: hidden;
            position: relative;
            border-radius: var(--radius-lg);
        }

        .marquee-track-gallery {
            display: flex;
            overflow: hidden;
        }

        .marquee-slide {
            display: flex;
            animation: marqueeScroll 30s linear infinite;
            gap: var(--sp-4);
        }

        .marquee-gallery.reverse .marquee-slide {
            animation: marqueeScrollReverse 30s linear infinite;
        }

        .marquee-gallery:hover .marquee-slide {
            animation-play-state: paused;
        }

        @keyframes marqueeScroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @keyframes marqueeScrollReverse {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }

        .gallery-item {
            position: relative;
            width: 260px;
            height: 190px;
            flex-shrink: 0;
            border-radius: var(--radius-md);
            overflow: hidden;
            cursor: pointer;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-light);
            transition: transform var(--duration-normal) var(--ease-out),
                        box-shadow var(--duration-normal) var(--ease-out);
        }

        .gallery-item:hover {
            transform: scale(1.04) translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s var(--ease-out);
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 100%);
            padding: var(--sp-4) var(--sp-3) var(--sp-3);
            transform: translateY(100%);
            transition: transform var(--duration-normal) var(--ease-out);
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-overlay span {
            color: white;
            font-family: var(--font-heading);
            font-size: var(--fs-sm);
            font-weight: 600;
            display: block;
            text-align: center;
        }

        @media (max-width: 992px) {
            .gallery-item { width: 210px; height: 155px; }
        }

        @media (max-width: 768px) {
            .gallery-item { width: 190px; height: 140px; }
        }

        @media (max-width: 576px) {
            .gallery-item { width: 160px; height: 120px; }
            .gallery-tabs .nav-link {
                font-size: var(--fs-xs);
                padding: var(--sp-1) var(--sp-3);
            }
        }

        /* ============================================================
           TESTIMONIALS
           ============================================================ */
        .testimonies-marquee {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: var(--sp-3) 0;
        }

        .testimonies-track {
            display: flex;
            gap: var(--sp-5);
            animation: scrollTestimonies 40s linear infinite;
            width: fit-content;
        }

        .testimonies-marquee:hover .testimonies-track {
            animation-play-state: paused;
        }

        @keyframes scrollTestimonies {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .testimonial-item {
            width: 280px;
            flex-shrink: 0;
            background: var(--bg-card);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            padding: var(--sp-5);
            transition: all var(--duration-normal) var(--ease-out);
            box-shadow: var(--shadow-sm);
        }

        .testimonial-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
            border-color: var(--accent);
        }

        .quote-icon {
            font-size: 40px;
            font-family: Georgia, serif;
            color: var(--accent);
            line-height: 1;
            margin-bottom: -12px;
            font-weight: bold;
            opacity: 0.5;
        }

        .testimonial-text {
            font-size: var(--fs-sm);
            line-height: 1.65;
            color: var(--text-secondary);
            margin: var(--sp-3) 0 var(--sp-3) 0;
            font-style: italic;
        }

        .testimonial-author strong {
            display: block;
            font-size: var(--fs-sm);
            color: var(--text-primary);
            margin-bottom: 2px;
            font-family: var(--font-heading);
        }

        .testimonial-author span {
            font-size: var(--fs-xs);
            color: var(--text-muted);
        }

        body.dark-mode .testimonial-item {
            background: var(--bg-card);
        }

        body.dark-mode .quote-icon {
            color: var(--accent);
            opacity: 0.4;
        }

        body.dark-mode .testimonial-text {
            color: var(--text-secondary);
        }

        body.dark-mode .testimonial-author strong {
            color: var(--text-primary);
        }

        body.dark-mode .testimonial-author span {
            color: var(--text-muted);
        }

        @media (max-width: 768px) {
            .testimonial-item { width: 260px; padding: var(--sp-4); }
        }

        @media (max-width: 576px) {
            .testimonial-item { width: 240px; }
        }

        /* ============================================================
           CONTACT CARD
           ============================================================ */
        /* ============================================================
           CONTACT CARD — Redesigned
           ============================================================ */
        .contact-card {
            border-radius: var(--radius-xl) !important;
            overflow: hidden;
            transition: transform var(--duration-normal) var(--ease-out),
                        box-shadow var(--duration-normal) var(--ease-out);
            border: 1px solid var(--border-light) !important;
        }

        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg) !important;
        }

        /* Header */
        .contact-header {
            text-align: center;
            margin-bottom: var(--sp-8);
        }

        .contact-header h4 {
            margin-bottom: var(--sp-2);
        }

        .contact-subtitle {
            color: var(--text-muted);
            font-size: var(--fs-sm);
            margin-bottom: 0;
        }

        /* Contact info grid — 2 columns */
        .contact-info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--sp-4);
            margin-bottom: var(--sp-8);
        }

        .contact-info-card {
            display: flex;
            align-items: center;
            gap: var(--sp-4);
            padding: var(--sp-5);
            background: var(--bg);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border-light);
            transition: all var(--duration-normal) var(--ease-out);
            text-decoration: none;
        }

        .contact-info-card:hover {
            background: var(--accent-light);
            border-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .contact-info-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-card);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
            color: var(--accent);
            flex-shrink: 0;
        }

        .contact-info-text {
            display: flex;
            flex-direction: column;
            gap: 2px;
            min-width: 0;
        }

        .contact-info-label {
            font-size: var(--fs-xs);
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-family: var(--font-heading);
        }

        .contact-info-value {
            font-size: var(--fs-sm);
            font-weight: 600;
            color: var(--text-primary);
            text-decoration: none;
            transition: color var(--duration-fast);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .contact-info-card:hover .contact-info-value {
            color: var(--accent);
        }

        /* Divider */
        .contact-divider {
            height: 1px;
            background: var(--border-light);
            margin: 0 0 var(--sp-6) 0;
        }

        /* Social row */
        .contact-social-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--sp-3);
            margin-bottom: var(--sp-6);
        }

        .social-icon-btn {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid var(--border);
            background: var(--bg-card);
            color: var(--text-secondary);
            text-decoration: none;
            transition: all var(--duration-normal) var(--ease-out);
            flex-shrink: 0;
        }

        .social-icon-btn:hover {
            transform: translateY(-3px) scale(1.08);
            box-shadow: var(--shadow-md);
            color: #fff;
            border-color: transparent;
        }

        .social-icon-btn.linkedin-btn:hover { background: #0a66c2; }
        .social-icon-btn.facebook-btn:hover { background: #1877f2; }
        .social-icon-btn.tiktok-btn:hover { background: #000; }
        .social-icon-btn.email-btn:hover { background: #ea4335; }

        .social-icon-btn svg {
            transition: transform var(--duration-fast) var(--ease-spring);
        }

        .social-icon-btn:hover svg {
            transform: scale(1.1);
        }

        /* Footer */
        .contact-footer {
            text-align: center;
            padding-top: var(--sp-4);
            border-top: 1px solid var(--border-light);
            font-size: var(--fs-xs);
            color: var(--text-muted);
        }

        /* Dark mode */
        body.dark-mode .contact-card {
            background: var(--bg-card);
        }

        body.dark-mode .contact-subtitle {
            color: var(--text-muted);
        }

        body.dark-mode .contact-info-card {
            background: var(--bg-elevated);
            border-color: var(--border);
        }

        body.dark-mode .contact-info-card:hover {
            background: rgba(37, 99, 235, 0.06);
        }

        body.dark-mode .contact-info-icon {
            background: var(--bg);
            color: var(--accent);
        }

        body.dark-mode .social-icon-btn {
            background: var(--bg-elevated);
            border-color: var(--border);
            color: var(--text-muted);
        }

        body.dark-mode .contact-footer {
            border-top-color: var(--border);
            color: var(--text-muted);
        }

        /* Responsive */
        @media (max-width: 576px) {
            .contact-info-grid {
                grid-template-columns: 1fr;
            }

            .contact-info-card {
                padding: var(--sp-4);
            }

            .contact-info-icon {
                width: 42px;
                height: 42px;
            }

            .contact-social-row {
                gap: var(--sp-2);
            }

            .social-icon-btn {
                width: 44px;
                height: 44px;
            }
        }

        /* ============================================================
           DARK MODE GLOBAL
           ============================================================ */
        body.dark-mode {
            background: var(--bg);
            color: var(--text-primary);
        }

        body.dark-mode .card {
            background: var(--bg-card);
            color: var(--text-primary);
            border-color: var(--border);
        }

        body.dark-mode .text-muted,
        body.dark-mode .location,
        body.dark-mode .edu-school,
        body.dark-mode .edu-year,
        body.dark-mode .skills {
            color: var(--text-muted) !important;
        }

        body.dark-mode .border,
        body.dark-mode .border-2,
        body.dark-mode .border-start {
            border-color: var(--border) !important;
        }

        body.dark-mode .btn-outline-dark {
            border-color: var(--border);
            color: var(--text-primary);
        }

        body.dark-mode .badge {
            background: var(--bg-elevated) !important;
            color: var(--text-primary);
        }

        body.dark-mode .marquee-track span {
            color: var(--text-primary);
        }

        body.dark-mode .hobby-card {
            background: var(--bg-card);
            border-color: var(--border) !important;
        }

        body.dark-mode .timeline-dot {
            background: var(--text-muted);
        }

        body.dark-mode .p-3.border.rounded-3 {
            border-color: var(--border) !important;
        }

        /* ============================================================
           CARD NOTE
           ============================================================ */
        .card-note {
            display: flex;
            align-items: flex-start;
            gap: var(--sp-3);
            background: #fffbeb;
            border-left: 4px solid #f59e0b;
            padding: var(--sp-3) var(--sp-4);
            border-radius: var(--radius-sm);
            margin: var(--sp-4) 0;
            transition: all var(--duration-normal) var(--ease-out);
        }

        .card-note-icon {
            flex-shrink: 0;
            margin-top: 1px;
        }

        .card-note-icon svg {
            stroke: #f59e0b;
        }

        .card-note-content {
            flex: 1;
            font-size: var(--fs-xs);
            line-height: 1.5;
            color: #92400e;
        }

        .card-note-content strong {
            font-weight: 700;
            display: block;
            margin-bottom: 2px;
            font-size: var(--fs-sm);
        }

        .card-note:hover {
            background: #fef9c3;
            transform: translateX(2px);
        }

        body.dark-mode .card-note {
            background: rgba(245, 158, 11, 0.08);
            border-left-color: #f59e0b;
        }

        body.dark-mode .card-note-content {
            color: #fcd34d;
        }

        /* ============================================================
           EXPERIENCE CARD
           ============================================================ */
        .experience-card {
            border: 1px solid var(--border-light) !important;
            border-radius: var(--radius-xl) !important;
            background: var(--bg-card);
            box-shadow: var(--shadow-sm);
            transition: all var(--duration-normal) var(--ease-out);
        }

        .experience-card:hover {
            box-shadow: var(--shadow-md);
        }

        .experience-item {
            padding: var(--sp-4) 0;
            border-bottom: 1px solid var(--border-light);
            transition: all var(--duration-normal) var(--ease-out);
        }

        .experience-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .experience-item:first-child {
            padding-top: 0;
        }

        .current-experience {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            margin: calc(var(--sp-2) * -1) calc(var(--sp-4) * -1) 0 calc(var(--sp-4) * -1);
            padding: var(--sp-4) var(--sp-5);
            border-radius: var(--radius-md);
            border-left: 3px solid var(--accent);
            position: relative;
        }

        .experience-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            flex-wrap: wrap;
            gap: var(--sp-2);
            margin-bottom: var(--sp-2);
        }

        .experience-title {
            font-family: var(--font-heading);
            font-size: var(--fs-base);
            font-weight: 700;
            margin: 0;
            color: var(--text-primary);
        }

        .experience-title-current {
            color: #f0f0f0;
            font-weight: 700;
            display: flex;
            font-family: var(--font-heading);
            font-size: var(--fs-base);
        }

        .experience-date {
            font-size: var(--fs-xs);
            font-weight: 600;
            color: var(--text-muted);
            background: var(--bg);
            padding: var(--sp-1) var(--sp-3);
            border-radius: var(--radius-full);
        }

        .current-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--sp-1);
            background: var(--accent);
            color: white;
            font-size: 10px;
            font-weight: 700;
            padding: var(--sp-1) var(--sp-3);
            border-radius: var(--radius-full);
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .pulse-dot {
            display: inline-block;
            width: 7px;
            height: 7px;
            background: white;
            border-radius: 50%;
            animation: pulse-white 1.5s infinite;
        }

        @keyframes pulse-white {
            0% { opacity: 1; transform: scale(1); }
            70% { opacity: 0.5; transform: scale(1.3); }
            100% { opacity: 1; transform: scale(1); }
        }

        .experience-company {
            display: flex;
            align-items: center;
            gap: var(--sp-2);
            margin-top: var(--sp-1);
        }

        .company-logo {
            height: 20px;
            width: auto;
            object-fit: contain;
            border-radius: 50%;
        }

        .company-dot {
            width: 5px;
            height: 5px;
            background: var(--text-muted);
            border-radius: 50%;
            display: inline-block;
        }

        .experience-company span:last-child {
            font-size: var(--fs-sm);
            color: var(--text-muted);
            font-weight: 500;
        }

        .current-experience .experience-company span:last-child {
            color: #e2e8f0;
            font-weight: 600;
        }

        .experience-item:not(.current-experience):hover {
            transform: translateX(4px);
            background: var(--bg);
            margin-left: calc(var(--sp-2) * -1);
            padding-left: var(--sp-2);
            border-radius: var(--radius-sm);
        }

        body.dark-mode .experience-card {
            background: var(--bg-card);
        }

        body.dark-mode .experience-item {
            border-bottom-color: var(--border);
        }

        body.dark-mode .experience-title {
            color: var(--text-primary);
        }

        body.dark-mode .experience-date {
            background: var(--bg-elevated);
            color: var(--text-muted);
        }

        body.dark-mode .current-experience {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
        }

        body.dark-mode .current-experience .experience-title {
            color: #f0f0f0;
        }

        body.dark-mode .current-experience .experience-company span:last-child {
            color: #e2e8f0;
        }

        body.dark-mode .experience-company span:last-child {
            color: var(--text-muted);
        }

        body.dark-mode .company-dot {
            background: var(--text-muted);
        }

        body.dark-mode .experience-item:not(.current-experience):hover {
            background: var(--bg-elevated);
        }

        @media (max-width: 576px) {
            .experience-header {
                flex-direction: column;
                align-items: flex-start;
                gap: var(--sp-1);
            }

            .current-experience {
                margin: calc(var(--sp-2) * -1) calc(var(--sp-3) * -1) 0 calc(var(--sp-3) * -1);
                padding: var(--sp-4);
            }
        }

        /* ============================================================
           PROFILE GRID
           ============================================================ */
        .profile-grid {
            margin-top: var(--sp-10);
        }

        .row.profile-grid {
            display: flex;
            flex-wrap: wrap;
        }

        .row.g-3 > div {
            display: flex;
        }

        /* ============================================================
           BACK TO TOP
           ============================================================ */
        .back-to-top {
            position: fixed;
            bottom: var(--sp-6);
            right: var(--sp-6);
            width: 44px;
            height: 44px;
            background: var(--accent);
            color: #fff;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(12px);
            transition: all var(--duration-normal) var(--ease-out);
            box-shadow: var(--shadow-accent);
            z-index: 100;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(37, 99, 235, 0.35);
        }

        /* ============================================================
           SCROLL REVEAL ANIMATION — GPU composited only
           ============================================================ */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            will-change: opacity, transform;
            transition: opacity 0.6s var(--ease-out), transform 0.6s var(--ease-out);
        }

        .reveal.revealed {
            opacity: 1;
            transform: translateY(0);
            will-change: auto;
        }

        /* ============================================================
           PERFORMANCE HINTS
           ============================================================ */
        .card,
        .hobby-card,
        .gallery-item,
        .testimonial-item,
        .project-card-carousel {
            contain: layout style;
        }

        .marquee-slide,
        .testimonies-track {
            will-change: transform;
        }

        /* ============================================================
           RESPONSIVE HELPERS
           ============================================================ */
        @media (max-width: 480px) {
            .p-3.border.rounded-3 {
                padding: var(--sp-3) !important;
            }

            .hobby-card {
                padding: var(--sp-3) !important;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="dark-mode-toggle-wrap">
            <span class="theme-label">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="4" /><path d="M12 2v2" /><path d="M12 20v2" /><path d="m4.93 4.93 1.41 1.41" /><path d="m17.66 17.66 1.41 1.41" /><path d="M2 12h2" /><path d="M20 12h2" /><path d="m6.34 17.66-1.41 1.41" /><path d="m19.07 4.93-1.41 1.41" />
                </svg>
            </span>
            <label class="theme-switch">
                <input type="checkbox" id="darkToggle">
                <span class="switch-slider"></span>
            </label>
            <span class="theme-label">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                </svg>
            </span>
        </div>

        <!-- PROFILE HEADER - FULLY RESPONSIVE -->
        <div class="profile-box reveal">
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
                    IT \ Graphic Designer \ E-commerce Content Associate
                </div>
                <!-- AVAILABLE FOR WORK BADGE - ADDED -->
                <!-- <div class="availability-badge">
                    <span class="green-dot"></span>
                    <span class="availability-text">Available for work</span>
                </div> -->
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

        <!-- MAIN GRID: LEFT + RIGHT -->
        <div class="row mt-5 profile-grid">
            <!-- LEFT COLUMN (7 on md+) -->
            <div class="col-md-7 d-flex flex-column">
                <!-- ABOUT CARD -->
                <div class="card reveal">
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
                <div class="card mt-4 reveal">
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
                                            <div class="project-tech-badges">
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
                                            <img src="{{ asset('images/yeyeniya.png') }}" alt="Yeyeniya's Pilot Service"
                                                class="img-fluid rounded">
                                        </div>
                                        <div class="project-content">
                                            <div class="project-title">Yeyeniya's Pilot Service</div>
                                            <div class="project-description">
                                                Pilot Service for Yeyeniya, a Professional Player of Magic Chess: Go Go
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
                                            <!-- CARD NOTE - ADDED -->
                                            <div class="card-note">
                                                <div class="card-note-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="10" />
                                                        <line x1="12" y1="8" x2="12" y2="12" />
                                                        <line x1="12" y1="16" x2="12.01" y2="16" />
                                                    </svg>
                                                </div>
                                                <div class="card-note-content">
                                                    <strong>Free Tier Notice</strong>
                                                    This demo is hosted on a free web service (Vercel Hobby Plan). Due
                                                    to platform limitations, the backend runs as a static HTML/CSS/JS
                                                    frontend. The complete Laravel backend with full database
                                                    functionality is available for demonstration upon request.
                                                </div>
                                            </div>
                                            <a href="https://yeyeniya.vercel.app" class="project-btn">Live Demo →</a>
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
                <div class="card mt-4 flex-grow-1 reveal">
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
                <div class="card experience-card reveal">
                    <div class="card-body">
                        <h4 class="fw-bold mb-4">
                            <i class="fas fa-briefcase me-2"></i> Experience
                        </h4>

                        <!-- Current Experience - Highlighted -->
                        <div class="experience-item current-experience">
                            <div class="experience-header">
                                <div class="experience-title-wrapper">
                                    <h5 class="experience-title-current">E-commerce Content Associate</h5>
                                    <!-- <span class="current-badge">
                                        <span class="pulse-dot"></span>
                                        Present
                                    </span> -->
                                </div>
                                <div><span class="current-badge">
                                        <span class="pulse-dot"></span>
                                        Present
                                    </span></div>
                            </div>
                            <div class="experience-company">
                                <img src="{{ asset('images/jg.png') }}" alt="JG Superstore" class="company-logo">
                                <span>JG Superstore</span>
                            </div>
                        </div>

                        <!-- Web Developer -->
                        <div class="experience-item">
                            <div class="experience-header">
                                <h5 class="experience-title">Web Developer</h5>
                                <div class="experience-date">2025</div>
                            </div>
                            <div class="experience-company">
                                <span class="company-dot"></span>
                                <span>Highly Succeed Inc</span>
                            </div>
                        </div>

                        <!-- Graphics Designer -->
                        <div class="experience-item">
                            <div class="experience-header">
                                <h5 class="experience-title">Graphics Designer</h5>
                                <div class="experience-date">2025</div>
                            </div>
                            <div class="experience-company">
                                <span class="company-dot"></span>
                                <span>Highly Succeed Inc / Unleash PH</span>
                            </div>
                        </div>

                        <!-- Freelance Graphic Designer -->
                        <div class="experience-item">
                            <div class="experience-header">
                                <h5 class="experience-title">Freelance Graphic Designer</h5>
                                <div class="experience-date">2019</div>
                            </div>
                            <div class="experience-company">
                                <span class="company-dot"></span>
                                <span>Self-employed</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TECH STACK -->
                <div class="card mt-3 reveal">
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
                <div class="card mt-3 reveal">
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
                <div class="card mt-3 reveal">
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

        <!-- GALLERY & TESTIMONIES SIDE BY SIDE -->
        <div class="row g-4 mt-4">
            <!-- LEFT COLUMN: GALLERY CARD -->
            <div class="col-md-6 reveal">
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
            <div class="col-md-6 reveal">
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
        <div class="card mt-3 mb-5 contact-card reveal">
            <div class="card-body">
                <div class="contact-header">
                    <h4 class="fw-bold mb-2">Let's Connect</h4>
                    <p class="contact-subtitle">Feel free to reach out for collaborations or just a chat</p>
                </div>

                <div class="contact-info-grid">
                    <a href="mailto:liamjedmflores@email.com" class="contact-info-card">
                        <div class="contact-info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zM16 4.697v7.104l-5.803-3.558z" />
                            </svg>
                        </div>
                        <div class="contact-info-text">
                            <span class="contact-info-label">Email</span>
                            <span class="contact-info-value">liamjedmflores@email.com</span>
                        </div>
                    </a>

                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4" />
                            </svg>
                        </div>
                        <div class="contact-info-text">
                            <span class="contact-info-label">Location</span>
                            <span class="contact-info-value">Pateros, Metro Manila</span>
                        </div>
                    </div>
                </div>

                <div class="contact-divider"></div>

                <div class="contact-social-row">
                    <a href="https://www.linkedin.com/in/liam-flores-a843983a6/" target="_blank"
                        class="social-icon-btn linkedin-btn" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/liamjedd.flores" target="_blank"
                        class="social-icon-btn facebook-btn" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@.tamidesu" target="_blank"
                        class="social-icon-btn tiktok-btn" aria-label="TikTok">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                    </a>
                    <a href="mailto:liamjedmflores@email.com"
                        class="social-icon-btn email-btn" aria-label="Email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zM16 4.697v7.104l-5.803-3.558z" />
                        </svg>
                    </a>
                </div>

                <div class="contact-footer">
                    <span>Usually responds within 24 hours</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 15l-6-6-6 6" />
        </svg>
    </button>

    <script>
        (function () {
            // --- Dark Mode Toggle ---
            const toggleSwitch = document.getElementById("darkToggle");

            function applyTheme(theme) {
                if (theme === "dark") {
                    document.body.classList.add("dark-mode");
                    toggleSwitch.checked = true;
                } else {
                    document.body.classList.remove("dark-mode");
                    toggleSwitch.checked = false;
                }
            }

            const saved = localStorage.getItem("theme") || "light";
            applyTheme(saved);

            toggleSwitch.addEventListener("change", () => {
                const isDark = toggleSwitch.checked;
                const theme = isDark ? "dark" : "light";
                localStorage.setItem("theme", theme);
                applyTheme(theme);
            });

            // --- Scroll Reveal ---
            const reveals = document.querySelectorAll(".reveal");
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry, i) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add("revealed");
                        }, i * 60);
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08, rootMargin: "0px 0px -40px 0px" });

            reveals.forEach(el => revealObserver.observe(el));

            // --- Back to Top ---
            const backToTop = document.getElementById("backToTop");
            window.addEventListener("scroll", () => {
                if (window.scrollY > 400) {
                    backToTop.classList.add("visible");
                } else {
                    backToTop.classList.remove("visible");
                }
            }, { passive: true });

            backToTop.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        })();
    </script>
</body>

</html>