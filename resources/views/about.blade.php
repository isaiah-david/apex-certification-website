@extends('layouts.app')

@section('title', 'About Us - Apex Certification Company Limited')

@section('content')
    <!-- Page Header -->
    <section class="py-5 bg-primary text-white" style="margin-top: 76px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">About Apex Certification</h1>
                    <p class="lead">Excellence in Certification and Training Services</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-5">
                            <h3 class="mb-4">Company Overview</h3>
                            <p class="mb-4">
                                Apex Certification Company Limited is registered under the Corporate and Allied Matters Act of the Federal Republic of Nigeria, incorporated as a Consultancy and Training organization with the main objective of providing its services in the areas of Quality Management System, Occupational Health and Safety Management System, Environmental Management System, Food Safety Management System and Management System for Educational Organizations, Human Resource Management (Knowledge Management) & Road Traffic Safety Management and offers its certifications under the trade name "Apex Certification".
                            </p>
                            <p class="mb-4">
                                Apex Certification Company is a member of C&M Associates Limited, established as a professional organization backed by committed, highly qualified and experienced Assessment, Training and Certification personnel. We offer a wide spectrum of customer oriented certification and Training services in an efficient and cost effective manner.
                            </p>
                            
                            <div class="row mt-5">
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <i class="fas fa-bullseye fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h4>Our Mission</h4>
                                            <p>To provide world-class certification and training services that enable organizations to achieve excellence, compliance, and competitive advantage through internationally recognized standards.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <i class="fas fa-eye fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h4>Our Vision</h4>
                                            <p>To be Nigeria's leading certification body, recognized for excellence, integrity, and commitment to customer success.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Approach -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title">Our Business Approach</h2>
            <p class="section-subtitle">How we deliver exceptional value to our clients</p>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Distinguish Ourselves</h4>
                        <p>Service delivery in a friendly, detailed and unique manner that sets us apart from competitors.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4>Creating Customer Needs</h4>
                        <p>Identify and meet customer expectations effectively through proactive engagement.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-tag"></i>
                        </div>
                        <h4>Unique Pricing</h4>
                        <p>Competitive prices commensurate with the exceptional services provided.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Foundation of Competence</h4>
                        <p>Ensuring our personnel are competent based on knowledge and skill.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-walking"></i>
                        </div>
                        <h4>Walking the Talk</h4>
                        <p>We ensure that we do exactly as we agree we would do with our clients.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="approach-card">
                        <div class="approach-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Industry Best Practice</h4>
                        <p>Staying abreast with industry best practices to deliver modern services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Structure -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Our Structure</h2>
            <p class="section-subtitle">Professional team dedicated to excellence</p>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th>Position</th>
                                    <th>Responsibilities</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Managing Consultant</td>
                                    <td>Head of organization, oversees Database Administrator/Programmer and Quality Assurance/Control Manager</td>
                                </tr>
                                <tr>
                                    <td>General Manager</td>
                                    <td>Head of Operations</td>
                                </tr>
                                <tr>
                                    <td>Human Resource/Admin Manager</td>
                                    <td>Coordinates recruitment and company administration</td>
                                </tr>
                                <tr>
                                    <td>Training Manager</td>
                                    <td>Coordinates all training activities and trainers/tutors</td>
                                </tr>
                                <tr>
                                    <td>Certification Manager</td>
                                    <td>Coordinates certification services</td>
                                </tr>
                                <tr>
                                    <td>Business Development Manager</td>
                                    <td>Manages customer relations and business development</td>
                                </tr>
                                <tr>
                                    <td>Finance Manager</td>
                                    <td>Oversees financial operations and accounting</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection