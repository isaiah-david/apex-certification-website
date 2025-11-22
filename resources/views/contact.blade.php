@extends('layouts.app')

@section('title', 'Contact Us - Apex Certification Company Limited')

@section('content')
    <!-- Page Header -->
    <section class="py-5 bg-primary text-white" style="margin-top: 76px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Contact Us</h1>
                    <p class="lead">Get in touch with our certification experts</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Send us a Message</h4>
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif
                            
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                               id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                               id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone" class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                               id="phone" name="phone" value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="subject" class="form-label">Subject *</label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                               id="subject" name="subject" value="{{ old('subject') }}" required>
                                        @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="message" class="form-label">Message *</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" 
                                                  id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <h4 class="mb-4">Contact Information</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            No. 80 Stadium Road, Port Harcourt, Rivers State, Nigeria   
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone-alt text-primary me-2"></i>
                            +234 800 123 4567   
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            apexcertification.ng@gmail.com
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-globe text-primary me-2"></i>
                            www.apexcertification.com   
                        </li>
                    </ul>


    <!-- Map Section -->
    <section class="section bg-light">
        <div class="container">
            <h3 class="text-center fw-bold mb-4">Our Location</h3>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="ratio ratio-16x9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.654954874262!2d6.998377774820453!3d4.824608241209902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce0b804d4c5d%3A0x78572e668802c060!2sPort%20Harcourt%2C%20Nigeria!5e0!3m2!1sen!2s!4v169876543210!5m2!1sen!2s" 
                            width="600" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection