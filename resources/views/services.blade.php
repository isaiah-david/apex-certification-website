@extends('layouts.app')

@section('title', 'Our Services - Apex Certification Company Limited')

@section('content')
    <!-- Page Header -->
    <section class="py-5 bg-primary text-white" style="margin-top: 76px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Our Services</h1>
                    <p class="lead">Comprehensive certification and training solutions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Professional Certification Services</h2>
            <p class="section-subtitle">Comprehensive certification and training solutions for your organization</p>
            
            <div class="row mb-5">
                <div class="col-lg-6 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body">
                            <h4 class="mb-3"><i class="fas fa-certificate text-primary me-2"></i> ISO Certification Services</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ISO 9001:2015 - Quality Management System</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ISO 45001:2018 - Occupational Health and Safety</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ISO 14001:2015 - Environmental Management System</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ISO 22000:2018 - Food Safety Management System</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ISO 21001:2018 - Management Systems for Educational Organizations</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ISO 30401:2018 - Human Resource Management</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> ISO 39001:2012 - Road Traffic Safety Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card service-card h-100">
                        <div class="card-body">
                            <h4 class="mb-3"><i class="fas fa-graduation-cap text-primary me-2"></i> Training Services</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Auditor/Lead Auditor Training</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Internal Auditor Training</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Workplace Safety & Environmental Training</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Quality Assurance & Document Control Training</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Competency Management Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Icons Grid -->
            <h2 class="section-title">Our Service Areas</h2>
            <p class="section-subtitle">Specialized services across various industries and standards</p>
            
            <div class="service-icon-grid">
                <div class="service-icon-item">
                    <div class="service-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h4>Manufacturing</h4>
                    <p>Quality management systems for manufacturing industries with global standards compliance.</p>
                </div>
                <div class="service-icon-item">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h4>Food Safety</h4>
                    <p>Food safety management systems for food industry ensuring HACCP compliance.</p>
                </div>
                <div class="service-icon-item">
                    <div class="service-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h4>Healthcare</h4>
                    <p>Quality and safety standards for healthcare organizations and medical facilities.</p>
                </div>
                <div class="service-icon-item">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Education</h4>
                    <p>Management systems for educational organizations and learning institutions.</p>
                </div>
                <div class="service-icon-item">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h4>Logistics</h4>
                    <p>Quality and safety standards for logistics and supply chain companies.</p>
                </div>
                <div class="service-icon-item">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4>Construction</h4>
                    <p>Safety and quality standards for construction industry and engineering firms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Programs -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title">Training Programs</h2>
            <p class="section-subtitle">Professional development and capacity building programs</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4>Lead Auditor Training</h4>
                            <p>Comprehensive lead auditor training for various ISO standards with IRCA certification.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h4>Internal Auditor Training</h4>
                            <p>Internal auditor training programs for organizational compliance and improvement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Safety Training</h4>
                            <p>Workplace safety and environmental training for hazard prevention and control.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection