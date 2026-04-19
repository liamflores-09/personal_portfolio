<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capstone Project - Applicant Tracking System | Liam Flores</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Nunito Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
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
        }

        .project-hero {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 50px;
            position: relative;
        }

        .project-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.05)" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
            opacity: 0.3;
            pointer-events: none;
        }

        .project-title {
            font-size: 52px;
            font-weight: 800;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
            position: relative;
        }

        .project-subtitle {
            font-size: 18px;
            opacity: 0.9;
            position: relative;
        }

        .back-btn {
            background: white;
            color: #1e293b;
            border: none;
            padding: 10px 24px;
            border-radius: 40px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .back-btn:hover {
            transform: translateX(-5px);
            color: #1e293b;
            background: white;
        }

        .notice-banner {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border-left: 5px solid #ff9800;
            padding: 18px 24px;
            border-radius: 16px;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .notice-banner .notice-icon {
            font-size: 28px;
        }

        .notice-banner .notice-text {
            flex: 1;
            color: #856404;
            font-size: 14px;
            font-weight: 500;
        }

        .notice-banner .notice-text strong {
            font-weight: 800;
        }

        body.dark-mode .notice-banner {
            background: linear-gradient(135deg, #2a2a2a 0%, #333 100%);
            border-left-color: #ff9800;
        }

        body.dark-mode .notice-banner .notice-text {
            color: #ffd970;
        }

        .info-card {
            background: #fff;
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 24px;
            border-left: 4px solid #111;
            padding-left: 14px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #6c757d;
            font-size: 14px;
        }

        .info-value {
            font-weight: 700;
            color: #1e293b;
            font-size: 14px;
        }

        .timeline-badge {
            background: linear-gradient(135deg, #111 0%, #333 100%);
            color: white;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }

        .collaborators-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .collaborators-list li {
            padding: 12px 0;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .collaborators-list li:last-child {
            border-bottom: none;
        }

        .collaborator-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .tech-stack-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 20px;
        }

        .tech-item {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            color: #1e293b;
            transition: all 0.2s ease;
        }

        .tech-item:hover {
            background: #111;
            color: white;
            transform: translateY(-2px);
        }

        .deployment-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .timeline-card {
            background: #fff;
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .timeline-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.1);
        }

        .timeline-item-compact {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .timeline-item-compact:last-child {
            border-bottom: none;
        }

        .timeline-label {
            font-weight: 600;
            color: #6c757d;
            font-size: 13px;
        }

        .timeline-value {
            font-weight: 700;
            color: #1e293b;
            font-size: 14px;
        }

        .two-column-equal {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 40px;
        }

        .right-stack {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .left-card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .objective-item {
            display: flex;
            gap: 16px;
            margin-bottom: 20px;
            padding: 18px;
            background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
            border-radius: 18px;
            transition: all 0.3s ease;
        }

        .objective-item:hover {
            background: #fff;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            transform: translateX(6px);
        }

        .objective-icon {
            font-size: 28px;
            flex-shrink: 0;
            width: 48px;
            color: #111;
        }

        .objective-text h5 {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .objective-text p {
            font-size: 13px;
            color: #6c757d;
            margin: 0;
            line-height: 1.5;
        }

        .section-title {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 28px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-title::after {
            content: '';
            flex: 1;
            height: 2px;
            background: linear-gradient(90deg, #e9ecef 0%, transparent 100%);
        }

        hr {
            margin: 20px 0;
            border-top: 2px solid #e9ecef;
            opacity: 1;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .feature-card {
            background: #fff;
            border-radius: 20px;
            padding: 22px 18px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12);
        }

        .feature-icon {
            font-size: 36px;
            margin-bottom: 16px;
            display: inline-block;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            width: 64px;
            height: 64px;
            line-height: 64px;
            text-align: center;
            border-radius: 20px;
            color: #111;
        }

        .feature-card h5 {
            font-size: 15px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .feature-card p {
            font-size: 12px;
            color: #6c757d;
            margin: 0;
        }

        body.dark-mode {
            background: #121212;
            color: #e4e4e4;
        }

        body.dark-mode .info-card,
        body.dark-mode .timeline-card {
            background: #1e1e1e;
            border-color: #2a2a2a;
        }

        body.dark-mode .info-row,
        body.dark-mode .collaborators-list li,
        body.dark-mode .timeline-item-compact {
            border-bottom-color: #2a2a2a;
        }

        body.dark-mode .info-value,
        body.dark-mode .timeline-value {
            color: #e0e0e0;
        }

        body.dark-mode .collaborator-icon,
        body.dark-mode .tech-item,
        body.dark-mode .feature-icon {
            background: linear-gradient(135deg, #2a2a2a 0%, #333 100%);
            color: #ddd;
        }

        body.dark-mode .tech-item:hover {
            background: #fff;
            color: #111;
        }

        body.dark-mode .objective-item {
            background: linear-gradient(135deg, #1e1e1e 0%, #252525 100%);
        }

        body.dark-mode .objective-item:hover {
            background: #2a2a2a;
        }

        body.dark-mode .objective-text p {
            color: #aaa;
        }

        body.dark-mode .objective-icon {
            color: #fff;
        }

        body.dark-mode .feature-card {
            background: #1e1e1e;
            border-color: #2a2a2a;
        }

        body.dark-mode .feature-card p {
            color: #aaa;
        }

        body.dark-mode .card-title {
            border-left-color: #fff;
        }

        body.dark-mode .timeline-label {
            color: #aaa;
        }

        .screenshot-tabs {
            display: flex;
            gap: 12px;
            margin-bottom: 28px;
            border-bottom: 2px solid #e9ecef;
            list-style: none;
        }

        .screenshot-tab {
            background: transparent;
            border: none;
            padding: 12px 32px;
            font-size: 16px;
            font-weight: 600;
            color: #6c757d;
            border-radius: 50px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .screenshot-tab:hover {
            color: #111;
            background: #f8f9fa;
        }

        .screenshot-tab.active {
            background: #111;
            color: white;
        }

        body.dark-mode .screenshot-tabs {
            border-bottom-color: #2a2a2a;
        }

        body.dark-mode .screenshot-tab {
            color: #aaa;
        }

        body.dark-mode .screenshot-tab:hover {
            color: #fff;
            background: #2a2a2a;
        }

        body.dark-mode .screenshot-tab.active {
            background: #fff;
            color: #111;
        }

        .browser-mockup {
            background: #f1f3f4;
            border-radius: 12px 12px 0 0;
            overflow: hidden;
        }

        .browser-bar {
            background: #f1f3f4;
            padding: 10px 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 1px solid #e0e0e0;
        }

        .browser-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
        }

        .browser-dot.red {
            background: #ff5f56;
        }

        .browser-dot.yellow {
            background: #ffbd2e;
        }

        .browser-dot.green {
            background: #27c93f;
        }

        .browser-url {
            flex: 1;
            background: white;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            color: #6c757d;
            text-align: center;
            font-family: monospace;
        }

        body.dark-mode .browser-mockup {
            background: #2a2a2a;
        }

        body.dark-mode .browser-bar {
            background: #2a2a2a;
            border-bottom-color: #3a3a3a;
        }

        body.dark-mode .browser-url {
            background: #1e1e1e;
            color: #aaa;
        }

        .screenshots-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .screenshot-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #eef2f6;
            display: flex;
            flex-direction: column;
        }

        .screenshot-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12);
        }

        .screenshot-image img,
        .carousel-inner img {
            width: 100%;
            height: auto;
            display: block;
        }

        .screenshot-info {
            padding: 20px;
            flex: 1;
        }

        .screenshot-info h5 {
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 12px;
            color: #1e293b;
        }

        .screenshot-info p {
            font-size: 13px;
            color: #6c757d;
            line-height: 1.55;
            margin-bottom: 12px;
        }

        .screenshot-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 12px;
        }

        .tag {
            background: #f8f9fa;
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 600;
            color: #6c757d;
        }

        body.dark-mode .screenshot-card {
            background: #1e1e1e;
            border-color: #2a2a2a;
        }

        body.dark-mode .screenshot-info h5 {
            color: #f0f0f0;
        }

        body.dark-mode .screenshot-info p {
            color: #aaa;
        }

        body.dark-mode .tag {
            background: #2a2a2a;
            color: #aaa;
        }

        .screenshot-carousel {
            position: relative;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 36px;
            height: 36px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .screenshot-card:hover .carousel-control-prev,
        .screenshot-card:hover .carousel-control-next {
            opacity: 1;
        }

        .screenshot-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .screenshot-image {
            position: relative;
        }

        .screenshot-image:hover .screenshot-overlay {
            opacity: 1;
        }

        .screenshot-overlay i {
            color: white;
            font-size: 32px;
        }

        @media (max-width: 1200px) {
            .features-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 992px) {
            .two-column-equal {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .screenshots-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .project-title {
                font-size: 32px;
            }

            .project-hero {
                padding: 50px 0;
            }

            .section-title {
                font-size: 24px;
            }

            .info-card,
            .timeline-card {
                padding: 20px;
            }

            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .screenshot-tab {
                padding: 8px 18px;
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .features-grid {
                grid-template-columns: 1fr;
            }

            .feature-card {
                padding: 18px;
                text-align: left;
                display: flex;
                gap: 16px;
                align-items: center;
            }

            .feature-icon {
                margin-bottom: 0;
                width: 50px;
                height: 50px;
                line-height: 50px;
                font-size: 24px;
            }

            .screenshot-tab {
                padding: 6px 14px;font-size: 12px; }
        }
    </style>
</head>

<body>

    <!-- ============================================================ -->
    <!-- HERO SECTION -->
    <!-- ============================================================ -->
    <div class="project-hero">
        <div class="container">
            <a href="/" class="back-btn d-inline-flex"><i class="fas fa-arrow-left"></i> Back to Portfolio</a>
            <h1 class="project-title">Applicant Tracking System</h1>
            <p class="project-subtitle">Capstone Project </p>
        </div>
    </div>

    <div class="container mb-5">

        <!-- ============================================================ -->
        <!-- NOTICE BANNER -->
        <!-- ============================================================ -->
        <div class="notice-banner">
            <i class="fas fa-info-circle notice-icon"></i>
            <span class="notice-text"><strong>Note:</strong> This project is currently not deployed online. This page serves as a portfolio showcase to demonstrate the features, architecture, and development work behind the Applicant Tracking System capstone project.</span>
        </div>

        <!-- ============================================================ -->
        <!-- SECTION 1: PROJECT OVERVIEW + TECH STACK + TIMELINE -->
        <!-- ============================================================ -->
        <div class="two-column-equal">
            <div class="left-card">
                <div class="info-card" style="height: 100%;">
                    <h4 class="card-title"><i class="fas fa-clipboard-list me-2"></i> Project Overview</h4>
                    <div class="info-row"><span class="info-label"><i class="fas fa-user me-2"></i> Lead Developer</span><span class="info-value">Liam Flores</span></div>
                    <div class="info-row"><span class="info-label"><i class="fas fa-code-branch me-2"></i> Architecture</span><span class="info-value">Model-View-Controller (MVC)</span></div>
                    <div class="info-row"><span class="info-label"><i class="fas fa-flask me-2"></i> Software Development Methodology</span><span class="info-value">Prototyping</span></div>
                    <div class="info-row"><span class="info-label"><i class="fas fa-globe me-2"></i> Type</span><span class="info-value">Web Platform</span></div>
                    <hr>
                    <div class="info-label mb-2"><i class="fas fa-users me-2"></i> Developed in collaboration with</div>
                    <ul class="collaborators-list">
                        <li><span class="collaborator-icon"><i class="fas fa-user-graduate"></i></span>Ms. Jenelyn Aranas</li>
                        <li><span class="collaborator-icon"><i class="fas fa-user-graduate"></i></span>Jenny Mae Araneta</li>
                        <li><span class="collaborator-icon"><i class="fas fa-user-graduate"></i></span>Jaleel Nicole De Guzman</li>
                    </ul>
                </div>
            </div>

            <div class="right-stack">
                <div class="info-card">
                    <h4 class="card-title"><i class="fas fa-microchip me-2"></i> Tech Stack</h4>
                    <div class="tech-stack-grid">
                        <span class="tech-item"><i class="fab fa-laravel me-1"></i> Laravel</span>
                        <span class="tech-item"><i class="fab fa-php me-1"></i> PHP 8.2</span>
                        <span class="tech-item"><i class="fas fa-database me-1"></i> PostgreSQL</span>
                        <span class="tech-item"><i class="fas fa-chart-line me-1"></i> Tabler.io</span>
                        <span class="tech-item"><i class="fas fa-chart-pie me-1"></i> Chart.js</span>
                        <span class="tech-item"><i class="fab fa-salesforce me-1"></i> Heroku</span>
                        <span class="tech-item"><i class="fab fa-bootstrap me-1"></i> Bootstrap 5</span>
                        <span class="tech-item"><i class="fab fa-js me-1"></i> jQuery</span>
                        <span class="tech-item"><i class="fas fa-sync-alt me-1"></i> AJAX</span>
                    </div>
                    <hr>
                    <div class="info-label mb-2"><i class="fas fa-rocket me-2"></i> Deployment</div>
                    <div class="deployment-grid">
                        <span class="tech-item"><i class="fas fa-cloud me-1"></i> Heroku Cloud</span>
                        <span class="tech-item"><i class="fas fa-database me-1"></i> PostgreSQL Database</span>
                        <span class="tech-item"><i class="fas fa-cubes me-1"></i> Laravel Forge</span>
                    </div>
                </div>

                <div class="timeline-card">
                    <h4 class="card-title"><i class="fas fa-calendar-alt me-2"></i> Project Timeline</h4>
                    <div class="timeline-item-compact"><span class="timeline-label"><i class="fas fa-play me-2"></i> Start Date</span><span class="timeline-value">June 3, 2024</span></div>
                    <div class="timeline-item-compact"><span class="timeline-label"><i class="fas fa-flag-checkered me-2"></i> End Date</span><span class="timeline-value">December 13, 2024</span></div>
                    <div class="timeline-item-compact"><span class="timeline-label"><i class="fas fa-hourglass-half me-2"></i> Duration</span><span class="timeline-value">6+ Months</span></div>
                    <hr>
                    <div class="timeline-item-compact"><span class="timeline-label"><i class="fas fa-check-circle me-2"></i> Current Status</span><span class="timeline-badge"><i class="fas fa-trophy me-1"></i> Completed</span></div>
                </div>
            </div>
        </div>

        <!-- ============================================================ -->
        <!-- SECTION 2: SYSTEM OBJECTIVES -->
        <!-- ============================================================ -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="info-card">
                    <h4 class="card-title"><i class="fas fa-bullseye me-2"></i> System Objectives</h4>
                    <div class="row g-3">
                        <div class="col-md-6"><div class="objective-item"><div class="objective-icon"><i class="fas fa-file-alt"></i></div><div class="objective-text"><h5>Streamline Application Process</h5><p>Digitize and automate the entire applicant registration and tracking workflow.</p></div></div></div>
                        <div class="col-md-6"><div class="objective-item"><div class="objective-icon"><i class="fas fa-chart-line"></i></div><div class="objective-text"><h5>Real-time Status Tracking</h5><p>Provide applicants with instant updates on their application progress.</p></div></div></div>
                        <div class="col-md-6"><div class="objective-item"><div class="objective-icon"><i class="fas fa-lock"></i></div><div class="objective-text"><h5>Secure Data Management</h5><p>Implement role-based access control and encrypted data storage.</p></div></div></div>
                        <div class="col-md-6"><div class="objective-item"><div class="objective-icon"><i class="fas fa-chart-pie"></i></div><div class="objective-text"><h5>Analytics & Reporting</h5><p>Generate comprehensive reports and insights for administrators.</p></div></div></div>
                        <div class="col-md-6"><div class="objective-item"><div class="objective-icon"><i class="fas fa-envelope"></i></div><div class="objective-text"><h5>Automated Notifications</h5><p>Send email and SMS alerts for important application milestones.</p></div></div></div>
                        <div class="col-md-6"><div class="objective-item"><div class="objective-icon"><i class="fas fa-folder-open"></i></div><div class="objective-text"><h5>Document Management</h5><p>Automated document verification, storage, and retrieval system.</p></div></div></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================ -->
        <!-- SECTION 3: KEY FEATURES -->
        <!-- ============================================================ -->
        <div class="mb-5">
            <h4 class="section-title"><i class="fas fa-star me-2"></i> Key Features</h4>
            <div class="features-grid">
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-file-upload"></i></div><h5>Resume Parsing</h5><p>Extract and analyze key information from resumes</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-chart-simple"></i></div><h5>Candidate Ranking</h5><p>AI-powered ranking per job requirements</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-pen-to-square"></i></div><h5>Evaluation Test</h5><p>Online assessment for skill tests</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-clipboard"></i></div><h5>Evaluation Form (HR)</h5><p>Comprehensive HR assessment forms</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-tasks"></i></div><h5>Application Status</h5><p>Real-time tracking</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-chart-line"></i></div><h5>Analytics</h5><p>Visual hiring dashboards</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-briefcase"></i></div><h5>Add Job</h5><p>Easy job posting interface</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-comments"></i></div><h5>Communication Hub</h5><p>Centralized messaging</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-user"></i></div><h5>Candidate Dashboard</h5><p>Personalized applicant portal</p></div>
                <div class="feature-card"><div class="feature-icon"><i class="fas fa-star"></i></div><h5>Feedback Form</h5><p>Collect user feedback</p></div>
            </div>
        </div>

        <!-- ============================================================ -->
        <!-- SECTION 4: PROJECT SCREENSHOTS -->
        <!-- ============================================================ -->
        <div class="mb-5">
            <h4 class="section-title"><i class="fas fa-camera me-2"></i> Project Screenshots</h4>

            <ul class="screenshot-tabs" id="screenshotTab" role="tablist">
                <li class="nav-item"><button class="screenshot-tab active" id="client-tab" data-bs-toggle="tab" data-bs-target="#client" type="button"><i class="fas fa-user me-2"></i> Client Side</button></li>
                <li class="nav-item"><button class="screenshot-tab" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" type="button"><i class="fas fa-user-shield me-2"></i> Admin Side</button></li>
            </ul>

            <div class="tab-content">
                <!-- ====================================================== -->
                <!-- CLIENT SIDE -->
                <!-- ====================================================== -->
                <div class="tab-pane fade show active" id="client" role="tabpanel">
                    <div class="screenshots-grid">
                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/login</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/authentication.png') }}" alt="Authentication Page"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-sign-in-alt me-2"></i> Authentication Page</h5><p>Login and Register pages. Role-based redirect to Admin or Client dashboard.</p><div class="screenshot-tags"><span class="tag">Login</span><span class="tag">Register</span><span class="tag">Role Redirect</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/register</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/register.png') }}" alt="Sign Up Form"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-user-plus me-2"></i> Sign Up Form</h5><p>New users create accounts to access platform features.</p><div class="screenshot-tags"><span class="tag">Registration</span><span class="tag">User Creation</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/email/verify</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/email-verification.png') }}" alt="Email Verification"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-envelope me-2"></i> Email Verification</h5><p>Laravel built-in email verification for account confirmation.</p><div class="screenshot-tags"><span class="tag">Laravel Mail</span><span class="tag">Verification</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/services</span></div>
                            <div id="servicesCarousel" class="carousel slide screenshot-carousel" data-bs-ride="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="{{ asset('images/capstone/services1.png') }}" class="d-block w-100" alt="Service 1"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/services2.png') }}" class="d-block w-100" alt="Service 2"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/services3.png') }}" class="d-block w-100" alt="Service 3"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/services4.png') }}" class="d-block w-100" alt="Service 4"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/services5.png') }}" class="d-block w-100" alt="Service 5"></div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                            </div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-concierge-bell me-2"></i> Services Page</h5><p>Services and product features with button leading to Careers page.</p><div class="screenshot-tags"><span class="tag">Services</span><span class="tag">Features</span><span class="tag">CTA</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/careers</span></div>
                            <div id="careersCarousel" class="carousel slide screenshot-carousel" data-bs-ride="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="{{ asset('images/capstone/careers1.png') }}" class="d-block w-100" alt="Career 1"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/careers2.png') }}" class="d-block w-100" alt="Career 2"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/careers3.png') }}" class="d-block w-100" alt="Career 3"></div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#careersCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#careersCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                            </div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-briefcase me-2"></i> Careers Page</h5><p>Job listings with work arrangement details.</p><div class="screenshot-tags"><span class="tag">Job Listings</span><span class="tag">Work Arrangement</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/contact</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/contact.png') }}" alt="Contact Page"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-address-card me-2"></i> Contact Page</h5><p>Feedback form with company location map.</p><div class="screenshot-tags"><span class="tag">Feedback</span><span class="tag">Location Map</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/job/apply/123</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/appform.png') }}" alt="Application Form"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-file-alt me-2"></i> Application Form</h5><p>Job details with CV/Resume upload form.</p><div class="screenshot-tags"><span class="tag">Job Details</span><span class="tag">CV Upload</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/dashboard/status</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/appstatus2.png') }}" alt="Application Status"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-chart-line me-2"></i> Application Status</h5><p>Real-time application tracking for applicants.</p><div class="screenshot-tags"><span class="tag">Status Tracking</span><span class="tag">Real-time</span></div></div>
                        </div>
                    </div>
                </div>

                <!-- ====================================================== -->
                <!-- ADMIN SIDE -->
                <!-- ====================================================== -->
                <div class="tab-pane fade" id="admin" role="tabpanel">
                    <div class="screenshots-grid">
                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/jobs/create</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/joblisting.png') }}" alt="Job Listing Page"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-list-alt me-2"></i> Job Listing Page</h5><p>Create job posts with rich text editor, Job Time, Job Schedule.</p><div class="screenshot-tags"><span class="tag">Job Creation</span><span class="tag">Rich Text Editor</span><span class="tag">Job Schedule</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/jobs/edit/123</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/editjob.png') }}" alt="Edit Job Page"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-edit me-2"></i> Edit Job Page</h5><p>Modify existing job listings.</p><div class="screenshot-tags"><span class="tag">Edit Job</span><span class="tag">Update</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/jobs/delete</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/deletejob.png') }}" alt="Delete Job Page"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-trash-alt me-2"></i> Delete Job</h5><p>Delete with confirmation modal to prevent accidents.</p><div class="screenshot-tags"><span class="tag">Delete</span><span class="tag">Confirmation</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/candidate/456</span></div>
                            <div id="candidateCarousel" class="carousel slide screenshot-carousel" data-bs-ride="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="{{ asset('images/capstone/summary.png') }}" class="d-block w-100" alt="Summary Tab"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/resumedisplay.png') }}" class="d-block w-100" alt="Resume Tab"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/notes.png') }}" class="d-block w-100" alt="Notes Tab"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/appstatus.png') }}" class="d-block w-100" alt="Application Status Tab"></div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#candidateCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#candidateCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                            </div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-id-card me-2"></i> Candidate Info Page</h5><p>Profile with tabs: Summary, Resume, Notes, and Application Status.</p><div class="screenshot-tags"><span class="tag">Profile View</span><span class="tag">Tab Navigation</span><span class="tag">Candidate Details</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/candidate/456/resume</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/resumedisplay.png') }}" alt="Resume Display"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-file-pdf me-2"></i> Resume Display</h5><p>View and parse applicant resumes.</p><div class="screenshot-tags"><span class="tag">Resume View</span><span class="tag">Parsing</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/candidate/456/notes</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/notes.png') }}" alt="Notes Tab"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-sticky-note me-2"></i> Notes Tab</h5><p>Where admins can add remarks and comments about the applicant for internal reference.</p><div class="screenshot-tags"><span class="tag">Internal Notes</span><span class="tag">Remarks</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/candidate/456/status</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/appstatus.png') }}" alt="Application Status Tab"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-tasks me-2"></i> Application Status Tab</h5><p>Where admin/HR can change the status of the application (e.g., Reviewing, Interview, Hired, Rejected).</p><div class="screenshot-tags"><span class="tag">Status Update</span><span class="tag">Workflow Management</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/feedback</span></div>
                            <div id="feedbackCarousel" class="carousel slide screenshot-carousel" data-bs-ride="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="{{ asset('images/capstone/feedback1.png') }}" class="d-block w-100" alt="Feedback List"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/feedback2.png') }}" class="d-block w-100" alt="Delete Feedback"></div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                            </div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-comment-dots me-2"></i> Feedback Page</h5><p>Where admins can view feedbacks submitted from the client side. HR/Admin can delete feedback upon viewing.</p><div class="screenshot-tags"><span class="tag">View Feedback</span><span class="tag">Delete Feedback</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/activities</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/activity.png') }}" alt="Activity Page"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-comments me-2"></i> Activity Page</h5><p>Serves as the communication platform. The admin acts as the assignee and can select who to communicate with.</p><div class="screenshot-tags"><span class="tag">Communication Hub</span><span class="tag">Assignee System</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/ranking</span></div>
                            <div class="screenshot-image"><img src="{{ asset('images/capstone/candidateranking.png') }}" alt="Candidate Ranking"><div class="screenshot-overlay"><i class="fas fa-search-plus"></i></div></div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-trophy me-2"></i> Candidate Ranking</h5><p>Lists the ranking of candidates based on years of experience, matched skills, and evaluation answers.</p><div class="screenshot-tags"><span class="tag">AI Ranking</span><span class="tag">Skills Match</span><span class="tag">Experience Score</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/evaluation</span></div>
                            <div id="evalCarousel" class="carousel slide screenshot-carousel" data-bs-ride="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="{{ asset('images/capstone/evaluation1.png') }}" class="d-block w-100" alt="Evaluation Form - Admin Create Test"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/evaluation2.png') }}" class="d-block w-100" alt="Evaluation Test - Client Take Test"></div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#evalCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#evalCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                            </div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-clipboard-list me-2"></i> Evaluation Form</h5><p>Admin adds evaluation tests for each job. The tests are displayed to applicants on the client side upon application.</p><div class="screenshot-tags"><span class="tag">Admin: Create Test</span><span class="tag">Client: Take Test</span></div></div>
                        </div>

                        <div class="screenshot-card">
                            <div class="browser-mockup"><div class="browser-bar"><span class="browser-dot red"></span><span class="browser-dot yellow"></span><span class="browser-dot green"></span><span class="browser-url">https://atsystem.com/admin/analytics</span></div>
                            <div id="analyticsCarousel" class="carousel slide screenshot-carousel" data-bs-ride="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img src="{{ asset('images/capstone/analytics1.png') }}" class="d-block w-100" alt="Jobs Applied & Skills Distribution"></div>
                                    <div class="carousel-item"><img src="{{ asset('images/capstone/analytics2.png') }}" class="d-block w-100" alt="Sex Distribution & Job Types"></div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#analyticsCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#analyticsCarousel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                            </div></div>
                            <div class="screenshot-info"><h5><i class="fas fa-chart-pie me-2"></i> Descriptive Analytics</h5><p>Displays the total count of jobs applied by users, total number of skills listed by candidates, chart visualizing the distribution of respondents by sex, and chart illustrating the distribution of job types among the dataset.</p><div class="screenshot-tags"><span class="tag">Jobs Applied Count</span><span class="tag">Skills Analytics</span><span class="tag">Demographics</span><span class="tag">Job Type Distribution</span></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        if (localStorage.getItem("theme") === "dark") {
            document.body.classList.add("dark-mode");
        }
    </script>
</body>

</html>