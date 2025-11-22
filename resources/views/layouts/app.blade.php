<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Apex Certification Company Limited - ISO Certification & Training Services')</title>
    
    <!-- Primary Meta Tags -->
    <meta name="title" content="@yield('meta_title', 'Apex Certification Company Limited - ISO Certification & Training Services')">
    <meta name="description" content="@yield('meta_description', 'Apex Certification Company Limited provides world-class ISO certification, training, and competency management services in Nigeria. Get ISO 9001, ISO 14001, ISO 45001 certifications.')">
    <meta name="keywords" content="@yield('meta_keywords', 'ISO certification Nigeria, ISO 9001 certification, ISO 14001, ISO 45001, quality management system, certification company Nigeria, training services, apex certification, occupational health safety, environmental management')">
    <meta name="author" content="Apex Certification Company Limited">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical_url', url()->current())">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', 'Apex Certification Company Limited - ISO Certification & Training Services')">
    <meta property="og:description" content="@yield('og_description', 'Nigeria&#39;s premier certification company providing ISO 9001, ISO 14001, ISO 45001 certifications and professional training services.')">
    <meta property="og:image" content="@yield('og_image', asset('images/apex-certification-og-image.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Apex Certification Company Limited - Quality Certification Services">
    <meta property="og:site_name" content="Apex Certification Company Limited">
    <meta property="og:locale" content="en_NG">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="@yield('twitter_url', url()->current())">
    <meta property="twitter:title" content="@yield('twitter_title', 'Apex Certification Company Limited - ISO Certification & Training Services')">
    <meta property="twitter:description" content="@yield('twitter_description', 'Professional ISO certification and training services in Nigeria. Get certified with Apex Certification Company.')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('images/apex.jpeg'))">
    <meta property="twitter:image:alt" content="Apex Certification Company Limited">
    <meta property="twitter:site" content="@apexcertification">
    
    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#1a365d">
    <meta name="msapplication-TileColor" content="#1a365d">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Apex Certification">
    
    <!-- Favicon and App Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apex-round.jpeg') }}">
    <link rel="icon" type="image/jpeg" sizes="32x32" href="{{ asset('images/apex-round.jpeg') }}">
    <link rel="icon" type="image/jpeg" sizes="16x16" href="{{ asset('images/apex-round.jpeg') }}">
    <link rel="manifest" href="{{ asset('icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/apex-round.jpeg') }}" color="#1a365d">
    <link rel="shortcut icon" href="{{ asset('images/apex-round.jpeg') }}">
    <meta name="msapplication-config" content="{{ asset('images/apex-round.jpeg') }}">
    
    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    
    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2b6cb0;
            --accent-color: #e53e3e;
            --gold-color: #d4af37;
            --light-blue: #ebf8ff;
            --text-dark: #2d3748;
            --text-light: #718096;
            --background-light: #f7fafc;
            --white: #ffffff;
            --gradient-primary: linear-gradient(135deg, #1a365d 0%, #2b6cb0 100%);
            --gradient-gold: linear-gradient(135deg, #d4af37 0%, #f7ef8a 100%);
            --shadow-light: 0 4px 6px rgba(0, 0, 0, 0.05);
            --shadow-medium: 0 10px 15px rgba(0, 0, 0, 0.1);
            --shadow-large: 0 20px 25px rgba(0, 0, 0, 0.15);
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--background-light);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .display-1, .display-2, .display-3, .display-4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        p.lead {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
            font-size: 1.25rem;
        }
        
        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-light);
            padding: 1rem 0;
            transition: var(--transition);
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: var(--shadow-medium);
        }
        
        .navbar-brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        
        .nav-link {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: var(--text-dark) !important;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 50px;
            transition: var(--transition);
            position: relative;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--white) !important;
            background: var(--gradient-primary);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gradient-gold);
            transition: var(--transition);
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after, .nav-link.active::after {
            width: 80%;
        }
        
        /* Mobile Navbar Improvements */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(255, 255, 255, 0.98);
                padding: 1rem;
                border-radius: 10px;
                margin-top: 10px;
                box-shadow: var(--shadow-medium);
            }
            
            .nav-link {
                margin: 0.25rem 0;
                text-align: center;
            }
        }
        
        /* Hero Section with Video Background */
        .hero-section {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            color: var(--white);
            overflow: hidden;
        }
        
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            object-fit: cover;
        }
        
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(26, 54, 93, 0.85);
            z-index: -1;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-badge {
            display: inline-block;
            background: var(--gradient-gold);
            color: var(--primary-color);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            box-shadow: var(--shadow-light);
        }
        
        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
        }
        
        .hero-buttons .btn {
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            margin-right: 1rem;
            margin-bottom: 1rem;
            transition: var(--transition);
            box-shadow: var(--shadow-medium);
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            border: none;
        }
        
        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-large);
        }
        
        /* Section Styling */
        .section {
            padding: 5rem 0;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 3rem;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-gold);
            border-radius: 2px;
        }
        
        .section-subtitle {
            color: var(--text-light);
            text-align: center;
            max-width: 700px;
            margin: 0 auto 3rem;
            font-size: 1.2rem;
        }
        
        /* Cards */
        .service-card {
            background: var(--white);
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            height: 100%;
            overflow: hidden;
            position: relative;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-primary);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-large);
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .icon-box {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-medium);
        }
        
        .icon-box i {
            font-size: 2rem;
            color: var(--white);
        }
        
        /* Testimonial Slider */
        .testimonial-section {
            background: var(--gradient-primary);
            color: var(--white);
            position: relative;
        }
        
        .testimonial-slider {
            position: relative;
            overflow: hidden;
            padding: 2rem 0;
        }
        
        .testimonial-slide {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: var(--border-radius);
            padding: 2.5rem;
            margin: 1rem;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
        }
        
        .testimonial-slide:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            position: relative;
        }
        
        .testimonial-text::before, .testimonial-text::after {
            content: '"';
            font-size: 3rem;
            color: var(--gold-color);
            opacity: 0.5;
            position: absolute;
        }
        
        .testimonial-text::before {
            top: -20px;
            left: -10px;
        }
        
        .testimonial-text::after {
            bottom: -40px;
            right: -10px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 1rem;
            border: 3px solid var(--gold-color);
        }
        
        .slider-controls {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }
        
        .slider-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            margin: 0 0.5rem;
            transition: var(--transition);
        }
        
        .slider-btn:hover {
            background: var(--gold-color);
            color: var(--primary-color);
        }
        
        /* Accreditation Badges */
        .accreditation-badges {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .badge-item {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            text-align: center;
            min-width: 150px;
        }
        
        .badge-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .badge-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        /* Footer */
        footer {
            background: var(--primary-color);
            color: var(--white);
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-gold);
        }
        
        .footer-section {
            padding: 4rem 0 2rem;
        }
        
        .footer-links h5 {
            position: relative;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
        }
        
        .footer-links h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--gold-color);
        }
        
        .footer-links ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: var(--gold-color);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--white);
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background: var(--gold-color);
            color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.5rem 0;
        }
        
        /* Service Icons Grid */
        .service-icon-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .service-icon-item {
            text-align: center;
            padding: 2rem 1rem;
            border-radius: var(--border-radius);
            transition: var(--transition);
            background: var(--white);
            box-shadow: var(--shadow-light);
        }
        
        .service-icon-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .service-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        /* Contact Info Cards */
        .contact-info-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            height: 100%;
            margin-bottom: 1.5rem;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .contact-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        /* Business Approach Cards */
        .approach-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            height: 100%;
            text-align: center;
        }
        
        .approach-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }
        
        .approach-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            color: var(--white);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-medium);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }
        
        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background: var(--gradient-gold);
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        /* Loader Styles */
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        .loader-content {
            text-align: center;
            color: white;
        }
        
        .loader-logo {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            animation: pulse 2s infinite;
        }
        
        .loader-text {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .loader-subtext {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        .loader-spinner {
            width: 60px;
            height: 60px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-top: 5px solid var(--gold-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .loader-hidden {
            opacity: 0;
            visibility: hidden;
        }
    </style>
</head>
<body>
    <!-- Loader -->
    <div id="loader">
        <div class="loader-content">
            <div class="loader-logo">
                <i class="fas fa-certificate"></i>
            </div>
            <div class="loader-text">Apex Certification</div>
            <div class="loader-subtext">Setting the Standard for Excellence</div>
            <center>
            <div class="loader-spinner"></div>
            </center>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <!-- Logo Placeholder - Replace with actual logo -->
                <div style="width: 40px; height: 40px; background: var(--gradient-primary); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">
                    <i class="fas fa-certificate text-white"></i>
                </div>
                Apex Certification
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5">
                        <h3 class="mb-4"><i class="fas fa-certificate me-2"></i>Apex Certification</h3>
                        <p class="mb-4">Your trusted partner for world-class certification and training services. We deliver excellence in Quality Management, Health & Safety, Environmental, and Food Safety Management Systems.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-5 footer-links">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 footer-links">
                        <h5>Our Services</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('services') }}">ISO Certification</a></li>
                            <li><a href="{{ route('services') }}">Training Services</a></li>
                            <li><a href="{{ route('services') }}">Competency Management</a></li>
                            <li><a href="{{ route('services') }}">Auditor Training</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 footer-links">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>No. 80 Stadium Road, Port Harcourt</li>
                            <li class="mb-2"><i class="fas fa-phone me-2"></i>+234 803 317 0571</li>
                            <li class="mb-2"><i class="fas fa-phone me-2"></i>+234 807 324 0291</li>
                            <li class="mb-2"><i class="fas fa-envelope me-2"></i>apexcertification.ng@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <p>&copy; 2025 Apex Certification Company Limited. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p>Designed with <i class="fas fa-heart text-danger"></i> for Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Loader functionality
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            setTimeout(function() {
                loader.classList.add('loader-hidden');
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500);
            }, 2000); // Show loader for 2 seconds
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Back to top button
            const backToTop = document.querySelector('.back-to-top');
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        
        // Back to top functionality
        document.querySelector('.back-to-top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Simple testimonial slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.testimonial-slide');
        const totalSlides = slides.length;
        
        function showSlide(n) {
            slides.forEach(slide => slide.style.display = 'none');
            currentSlide = (n + totalSlides) % totalSlides;
            slides[currentSlide].style.display = 'block';
        }
        
        function nextSlide() {
            showSlide(currentSlide + 1);
        }
        
        function prevSlide() {
            showSlide(currentSlide - 1);
        }
        
        // Initialize testimonial slider if it exists
        document.addEventListener('DOMContentLoaded', function() {
            if (slides.length > 0) {
                showSlide(0);
                
                // Auto advance slides every 5 seconds
                setInterval(nextSlide, 5000);
                
                // Add click events to slider buttons
                const nextBtn = document.querySelector('.next-btn');
                const prevBtn = document.querySelector('.prev-btn');
                
                if (nextBtn) nextBtn.addEventListener('click', nextSlide);
                if (prevBtn) prevBtn.addEventListener('click', prevSlide);
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>