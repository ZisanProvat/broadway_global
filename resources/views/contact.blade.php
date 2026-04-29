@extends('layouts.main')

@section('title', 'Contact Us | Broadway Global')

@section('extra-styles')
<style>
    /* Hero Section */
    .contact-hero {
        background: linear-gradient(135deg, #0A1D37 0%, #1e0a3c 50%, #0c2a4a 100%);
        padding: 120px 8% 80px;
        text-align: center;
        color: var(--white);
        position: relative;
        overflow: hidden;
    }
    .contact-hero::before {
        content: '';
        position: absolute; top: -50%; left: -50%; width: 200%; height: 200%;
        background: radial-gradient(circle, rgba(124,58,237,0.15) 0%, transparent 60%);
        animation: rotateBg 15s linear infinite;
    }
    @keyframes rotateBg { to { transform: rotate(360deg); } }
    .contact-hero h1 { font-size: 3.5rem; font-weight: 800; margin-bottom: 15px; position: relative; z-index: 2; }
    .contact-hero p { font-size: 1.1rem; opacity: 0.85; max-width: 600px; margin: 0 auto; position: relative; z-index: 2; }

    /* Contact Info Cards */
    .contact-info-section {
        padding: -50px 8% 80px;
        margin-top: -50px;
        position: relative;
        z-index: 10;
    }
    .info-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
    .info-card {
        background: var(--white);
        padding: 35px 25px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        transition: 0.4s;
        border-bottom: 4px solid transparent;
    }
    .info-card:nth-child(1) { border-bottom-color: #7C3AED; }
    .info-card:nth-child(2) { border-bottom-color: #0891B2; }
    .info-card:nth-child(3) { border-bottom-color: #DB2777; }
    .info-card:nth-child(4) { border-bottom-color: #EA580C; }
    .info-card:hover { transform: translateY(-10px); box-shadow: 0 25px 50px rgba(0,0,0,0.12); }
    .info-icon {
        width: 65px; height: 65px;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.5rem; color: var(--white);
        margin: 0 auto 20px;
    }
    .info-card:nth-child(1) .info-icon { background: linear-gradient(135deg, #7C3AED, #4F46E5); }
    .info-card:nth-child(2) .info-icon { background: linear-gradient(135deg, #0891B2, #0D9488); }
    .info-card:nth-child(3) .info-icon { background: linear-gradient(135deg, #DB2777, #9333EA); }
    .info-card:nth-child(4) .info-icon { background: linear-gradient(135deg, #EA580C, #EAB308); }
    .info-card h4 { font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; }
    .info-card p { font-size: 0.95rem; color: var(--text-muted); }

    /* Contact Form & Map Layout */
    .contact-layout {
        padding: 40px 8% 100px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
    }

    /* Form Styles */
    .form-wrapper {
        background: var(--white);
        padding: 50px;
        border-radius: 24px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.05);
        border: 1px solid #f1f5f9;
    }
    .form-wrapper h2 {
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 10px;
        background: linear-gradient(135deg, #7C3AED, #0891B2);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }
    .form-wrapper > p { color: var(--text-muted); margin-bottom: 30px; font-size: 0.95rem; }
    
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 8px; color: var(--text-dark); }
    .form-control {
        width: 100%;
        padding: 15px 20px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        font-family: inherit;
        font-size: 0.95rem;
        color: var(--text-dark);
        transition: 0.3s;
    }
    .form-control:focus { outline: none; border-color: #7C3AED; background: #fff; box-shadow: 0 0 0 4px rgba(124,58,237,0.1); }
    textarea.form-control { resize: vertical; min-height: 150px; }
    
    .btn-submit {
        background: linear-gradient(135deg, #7C3AED, #0891B2);
        color: var(--white);
        padding: 18px 40px;
        border: none;
        border-radius: 50px;
        font-weight: 800;
        font-size: 1rem;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }
    .btn-submit:hover { transform: translateY(-3px); box-shadow: 0 15px 35px rgba(0,0,0,0.25); filter: brightness(1.1); }

    /* Map Styles */
    .map-wrapper {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 15px 50px rgba(0,0,0,0.05);
        height: 100%;
        min-height: 500px;
        border: 1px solid #f1f5f9;
        position: relative;
    }
    .map-wrapper iframe { width: 100%; height: 100%; border: none; }

    @media (max-width: 992px) {
        .info-grid { grid-template-columns: repeat(2, 1fr); }
        .contact-layout { grid-template-columns: 1fr; gap: 40px; }
        .map-wrapper { min-height: 400px; }
    }
    @media (max-width: 480px) {
        .info-grid { grid-template-columns: 1fr; }
        .form-wrapper { padding: 30px 20px; }
    }
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="contact-hero">
    <h1>Get In Touch</h1>
    <p>Have questions about studying abroad? Our expert counselors are here to help you every step of the way.</p>
</section>

<!-- Info Cards -->
<section class="contact-info-section">
    <div class="info-grid">
        <div class="info-card reveal">
            <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
            <h4>Our Office</h4>
            <p>Dhaka, Bangladesh</p>
        </div>
        <div class="info-card reveal reveal-delay-1">
            <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
            <h4>Phone Number</h4>
            <p>+8801322916086</p>
        </div>
        <div class="info-card reveal reveal-delay-2">
            <div class="info-icon"><i class="fas fa-envelope"></i></div>
            <h4>Email Address</h4>
            <p>info@broadway-global.com</p>
        </div>
        <div class="info-card reveal reveal-delay-3">
            <div class="info-icon"><i class="fas fa-clock"></i></div>
            <h4>Working Hours</h4>
            <p>Sun - Thu: 10AM - 6PM</p>
        </div>
    </div>
</section>

<!-- Form & Map -->
<section class="contact-layout">
    <!-- Contact Form -->
    <div class="form-wrapper reveal reveal-left">
        <h2>Send Us a Message</h2>
        <p>Fill out the form below and we will get back to you within 24 hours.</p>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" class="form-control" placeholder="John Doe" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" class="form-control" placeholder="john@example.com" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" class="form-control" placeholder="+880 1234 567890">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" class="form-control" placeholder="How can we help?">
            </div>
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" class="form-control" placeholder="Tell us about your study abroad goals..." required></textarea>
            </div>
            <button type="submit" class="btn-submit">
                Send Message <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>

    <!-- Google Map -->
    <div class="map-wrapper reveal reveal-right">
        <!-- Embedding a generic Dhaka map for demonstration -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.0097779035!2d90.3372881743513!3d23.780777744474706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1714138096181!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

@endsection
