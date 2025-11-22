@extends('layouts.app')

@section('title', 'Home - Apex Certification Company Limited')



@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <video autoplay muted loop class="video-background">
            <source src="https://assets.mixkit.co/videos/21738/21738-720.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="hero-badge">Nigeria's Premier Certification Company</span>
                    <h1 class="hero-title fade-in-up">World Class <span class="text-warning">Certification</span> & Training Services</h1>
                    <p class="lead mb-4 fade-in-up delay-1">Providing excellence in Quality Management, Health & Safety, Environmental, and Food Safety Management Systems with internationally recognized certifications.</p>
                    <div class="hero-buttons fade-in-up delay-2">
                        <a href="{{ route('services') }}" class="btn btn-primary btn-lg">Our Services</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in-up">Our Services</h2>
            <p class="section-subtitle fade-in-up delay-1">Comprehensive certification and training solutions tailored to your organizational needs</p>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 fade-in-up delay-1">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>ISO Certification</h4>
                            <p class="text-muted">Comprehensive ISO certification services for various management systems including Quality, Safety, and Environmental standards.</p>
                            <a href="{{ route('services') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in-up delay-2">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h4>Training Services</h4>
                            <p class="text-muted">Professional training and manpower development programs including Auditor Training and Competency Management.</p>
                            <a href="{{ route('services') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fade-in-up delay-3">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4>Competency Management</h4>
                            <p class="text-muted">Complete competency management services for organizations to ensure workforce capability and compliance.</p>
                            <a href="{{ route('services') }}" class="btn btn-outline-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accreditation Section -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title fade-in-up">Our Accreditations</h2>
            <p class="section-subtitle fade-in-up delay-1">Recognized by leading international accreditation bodies</p>
            
            <div class="accreditation-badges">
                <div class="badge-item fade-in-up delay-1">
                    <i class="fas fa-award badge-icon"></i>
                    <h5>NiNAS</h5>
                    <p class="small text-muted">Nigeria National Accreditation Service</p>
                </div>
                <div class="badge-item fade-in-up delay-2">
                    <i class="fas fa-globe badge-icon"></i>
                    <h5>IAF</h5>
                    <p class="small text-muted">International Accreditation Forum</p>
                </div>
                <div class="badge-item fade-in-up delay-3">
                    <i class="fas fa-certificate badge-icon"></i>
                    <h5>CQI-UK</h5>
                    <p class="small text-muted">Chartered Quality Institute</p>
                </div>
                <div class="badge-item fade-in-up delay-1">
                    <i class="fas fa-user-tie badge-icon"></i>
                    <h5>IRCA</h5>
                    <p class="small text-muted">International Register of Certificated Auditors</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonial-section">
        <div class="container">
            <h2 class="section-title text-white fade-in-up">What Our Clients Say</h2>
            <p class="section-subtitle text-white fade-in-up delay-1">Hear from organizations that have achieved excellence with our certification services</p>
            
            <div class="testimonial-slider">
                <div class="testimonial-slide fade-in-up">
                    <div class="testimonial-text">
                        "Apex Certification provided exceptional service throughout our ISO 9001 certification process. Their auditors were knowledgeable, professional, and helped us identify areas for improvement we hadn't considered."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar bg-warning d-flex align-items-center justify-content-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">James Okafor</h5>
                            <p class="text-light mb-0">Quality Manager, Prime Manufacturing Ltd.</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-slide fade-in-up" style="display: none;">
                    <div class="testimonial-text">
                        "The training programs offered by Apex Certification have significantly improved our internal audit capabilities. Their trainers are industry experts who provide practical, real-world examples."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar bg-warning d-flex align-items-center justify-content-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Amina Mohammed</h5>
                            <p class="text-light mb-0">HR Director, Global Foods Inc.</p>
                        </div>
                    </div>
                </div>
                
                <div class="slider-controls">
                    <button class="slider-btn prev-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-btn next-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Add animation classes to elements when they come into view
    document.addEventListener('DOMContentLoaded', function() {
        const animatedElements = document.querySelectorAll('.fade-in-up');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        animatedElements.forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    });
</script>
@endpush