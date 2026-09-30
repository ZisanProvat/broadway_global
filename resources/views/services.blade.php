@extends('layouts.main')

@section('title', 'Our Services | Broadway Global | Study Abroad & Visa Consultancy')

@section('extra-styles')
<style>
    /* Hero Section */
    .services-hero {
        height: 52vh;
        background: linear-gradient(135deg, rgba(10, 29, 55, 0.92), rgba(124, 58, 237, 0.85)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: var(--white);
        text-align: center;
        padding: 0 8%;
        position: relative;
    }

    .services-hero h1 {
        font-size: 3.8rem;
        font-weight: 800;
        margin-bottom: 15px;
        letter-spacing: -1.5px;
        opacity: 0;
        transform: translateY(30px);
        animation: heroFadeUp 0.8s cubic-bezier(0.4,0,0.2,1) 0.2s forwards;
    }

    .services-hero p {
        font-size: 1.2rem;
        max-width: 750px;
        color: #E2E8F0;
        opacity: 0;
        transform: translateY(30px);
        animation: heroFadeUp 0.8s cubic-bezier(0.4,0,0.2,1) 0.4s forwards;
    }

    .breadcrumb {
        display: flex;
        gap: 10px;
        font-weight: 600;
        font-size: 0.95rem;
        color: #FCD34D;
        margin-top: 20px;
        opacity: 0;
        animation: heroFadeUp 0.8s cubic-bezier(0.4,0,0.2,1) 0.6s forwards;
    }
    .breadcrumb a { color: var(--white); text-decoration: none; opacity: 0.85; transition: 0.3s; }
    .breadcrumb a:hover { opacity: 1; color: #FCD34D; }

    @keyframes heroFadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* Section Header */
    .section-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 60px;
    }
    .badge-pill {
        display: inline-block;
        padding: 6px 18px;
        border-radius: 50px;
        background: rgba(124, 58, 237, 0.12);
        color: #7C3AED;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 15px;
        border: 1px solid rgba(124, 58, 237, 0.25);
    }
    .section-header h2 {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--primary);
        letter-spacing: -1px;
        margin-bottom: 15px;
    }
    .section-header p {
        font-size: 1.1rem;
        color: var(--text-muted);
        line-height: 1.7;
    }

    /* Services Grid */
    .services-grid-wrapper {
        padding: 90px 8%;
        background: #F8FAFC;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 35px;
    }

    .service-card {
        background: var(--white);
        border-radius: 20px;
        padding: 40px 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        border: 1px solid #E2E8F0;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #7C3AED, #0891B2);
        opacity: 0;
        transition: 0.4s;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(124, 58, 237, 0.12);
        border-color: rgba(124, 58, 237, 0.3);
    }

    .service-card:hover::before {
        opacity: 1;
    }

    .service-icon {
        width: 70px;
        height: 70px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 25px;
        transition: 0.4s;
    }

    .icon-purple { background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(79, 70, 229, 0.15)); color: #7C3AED; }
    .icon-cyan   { background: linear-gradient(135deg, rgba(8, 145, 178, 0.1), rgba(13, 148, 136, 0.15)); color: #0891B2; }
    .icon-pink   { background: linear-gradient(135deg, rgba(219, 39, 119, 0.1), rgba(147, 51, 234, 0.15)); color: #DB2777; }
    .icon-orange { background: linear-gradient(135deg, rgba(234, 88, 12, 0.1), rgba(234, 179, 8, 0.15)); color: #EA580C; }
    .icon-green  { background: linear-gradient(135deg, rgba(22, 163, 74, 0.1), rgba(16, 185, 129, 0.15)); color: #16A34A; }
    .icon-blue   { background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(59, 130, 246, 0.15)); color: #2563EB; }

    .service-card:hover .service-icon {
        transform: scale(1.1) rotate(4deg);
    }

    .service-card h3 {
        font-size: 1.45rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 15px;
    }

    .service-card p {
        color: var(--text-muted);
        font-size: 0.98rem;
        line-height: 1.6;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .service-features {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
    }

    .service-features li {
        font-size: 0.9rem;
        color: #475569;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
    }

    .service-features li i {
        color: #16A34A;
        font-size: 0.8rem;
    }

    .btn-service {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-weight: 700;
        font-size: 0.95rem;
        color: #7C3AED;
        text-decoration: none;
        transition: 0.3s;
        margin-top: auto;
    }

    .btn-service i {
        transition: transform 0.3s;
    }

    .btn-service:hover {
        color: #4F46E5;
    }

    .btn-service:hover i {
        transform: translateX(5px);
    }

    /* Process Flow */
    .process-section {
        padding: 90px 8%;
        background: linear-gradient(135deg, #0A1D37 0%, #1E1B4B 100%);
        color: var(--white);
    }

    .process-section .badge-pill {
        background: rgba(255, 255, 255, 0.1);
        color: #FCD34D;
        border-color: rgba(255, 255, 255, 0.2);
    }

    .process-section .section-header h2 {
        color: var(--white);
    }

    .process-section .section-header p {
        color: #94A3B8;
    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        position: relative;
    }

    .process-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 35px 25px;
        text-align: center;
        position: relative;
        backdrop-filter: blur(10px);
        transition: 0.4s;
    }

    .process-card:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-8px);
        border-color: #7C3AED;
    }

    .process-step-number {
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #7C3AED, #0891B2);
        color: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 1.1rem;
        box-shadow: 0 5px 15px rgba(124, 58, 237, 0.4);
    }

    .process-card h4 {
        font-size: 1.3rem;
        font-weight: 700;
        margin: 20px 0 12px;
        color: var(--white);
    }

    .process-card p {
        font-size: 0.92rem;
        color: #CBD5E1;
        line-height: 1.6;
    }

    /* CTA Box */
    .cta-banner {
        margin: 80px 8%;
        background: linear-gradient(135deg, #7C3AED 0%, #0891B2 100%);
        border-radius: 30px;
        padding: 60px;
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 20px 50px rgba(124, 58, 237, 0.3);
        position: relative;
        overflow: hidden;
    }

    .cta-content h3 {
        font-size: 2.4rem;
        font-weight: 800;
        margin-bottom: 12px;
        letter-spacing: -0.5px;
    }

    .cta-content p {
        font-size: 1.1rem;
        opacity: 0.9;
        max-width: 600px;
    }

    .btn-cta-gold {
        background: #FCD34D;
        color: #0A1D37;
        padding: 18px 40px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 1.05rem;
        text-decoration: none;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        white-space: nowrap;
    }

    .btn-cta-gold:hover {
        background: var(--white);
        transform: scale(1.05);
        color: #7C3AED;
    }

    @media (max-width: 992px) {
        .services-grid { grid-template-columns: repeat(2, 1fr); }
        .process-grid { grid-template-columns: repeat(2, 1fr); gap: 40px 25px; }
        .cta-banner { flex-direction: column; text-align: center; gap: 30px; padding: 40px 30px; }
        .services-hero h1 { font-size: 2.8rem; }
    }

    @media (max-width: 600px) {
        .services-grid { grid-template-columns: 1fr; }
        .process-grid { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<div class="services-hero">
    <h1>Our Comprehensive Services</h1>
    <p>Empowering students and professionals worldwide with expert guidance, transparent processing, and dedicated support at every stage of their global journey.</p>
    <div class="breadcrumb">
        <a href="/">Home</a> <span>/</span> <span>Our Services</span>
    </div>
</div>

<!-- Services Grid Section -->
<div class="services-grid-wrapper">
    <div class="section-header">
        <span class="badge-pill">What We Offer</span>
        <h2>End-to-End International Solutions</h2>
        <p>Whether you are seeking top-tier university admissions, scholarship guidance, or skilled work permits, our certified consultants are here to make your vision a reality.</p>
    </div>

    <div class="services-grid">
        <!-- Service 1: University Admissions -->
        <div class="service-card" id="admissions">
            <div class="service-icon icon-purple">
                <i class="fas fa-university"></i>
            </div>
            <h3>University Admissions</h3>
            <p>Personalized selection of top-ranked universities and degree programs tailored to your academic background, career objectives, and financial plan.</p>
            <ul class="service-features">
                <li><i class="fas fa-check-circle"></i> Profile & GPA Evaluation</li>
                <li><i class="fas fa-check-circle"></i> Direct Partner Application Filing</li>
                <li><i class="fas fa-check-circle"></i> SOP & LOR Drafting Guidance</li>
            </ul>
            <a href="/contact" class="btn-service">Get Admission Assistance <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Service 2: Visa Processing & Guidance -->
        <div class="service-card" id="visa-assistance">
            <div class="service-icon icon-cyan">
                <i class="fas fa-passport"></i>
            </div>
            <h3>Student Visa Processing</h3>
            <p>Meticulous document preparation, financial verification guidance, and intensive mock interview sessions to maximize your student visa approval rate.</p>
            <ul class="service-features">
                <li><i class="fas fa-check-circle"></i> Complete Financial Audit</li>
                <li><i class="fas fa-check-circle"></i> Mock Embassy Interview Prep</li>
                <li><i class="fas fa-check-circle"></i> 99.2% Visa Success Record</li>
            </ul>
            <a href="/contact" class="btn-service">Apply for Visa Support <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Service 3: Scholarship Guidance -->
        <div class="service-card" id="scholarships">
            <div class="service-icon icon-pink">
                <i class="fas fa-award"></i>
            </div>
            <h3>Scholarships & Aid</h3>
            <p>Identify and secure lucrative merit-based scholarships, tuition fee waivers, and government research grants available in top study destinations.</p>
            <ul class="service-features">
                <li><i class="fas fa-check-circle"></i> Partial & Full Fee Waiver Search</li>
                <li><i class="fas fa-check-circle"></i> Scholarship Essay Review</li>
                <li><i class="fas fa-check-circle"></i> Government Fellowship Guidance</li>
            </ul>
            <a href="/contact" class="btn-service">Explore Scholarships <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Service 4: IELTS & Language Coaching -->
        <div class="service-card" id="ielts-coaching">
            <div class="service-icon icon-orange">
                <i class="fas fa-book-reader"></i>
            </div>
            <h3>IELTS & Test Coaching</h3>
            <p>High-impact test preparation courses for IELTS, PTE Academic, TOEFL, and Duolingo delivered by experienced certified language trainers.</p>
            <ul class="service-features">
                <li><i class="fas fa-check-circle"></i> Small Class Sizes & 1-on-1 Mentorship</li>
                <li><i class="fas fa-check-circle"></i> Full-length Mock Tests & Feedback</li>
                <li><i class="fas fa-check-circle"></i> Band 7.5+ Target Strategies</li>
            </ul>
            <a href="/contact" class="btn-service">Enroll in Coaching <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Service 5: Skilled Migration & Work Permits -->
        <div class="service-card" id="skilled-work">
            <div class="service-icon icon-green">
                <i class="fas fa-briefcase"></i>
            </div>
            <h3>Immigration & Skill Work</h3>
            <p>Dedicated pathways for skilled workers, tech professionals, healthcare workers, and engineers to work and settle legally abroad.</p>
            <ul class="service-features">
                <li><i class="fas fa-check-circle"></i> Points Calculation & ECA Audit</li>
                <li><i class="fas fa-check-circle"></i> Work Permit & Employer Visa Filing</li>
                <li><i class="fas fa-check-circle"></i> Permanent Residency (PR) Guidance</li>
            </ul>
            <a href="/immigration-skill-work" class="btn-service">Learn More About Immigration <i class="fas fa-arrow-right"></i></a>
        </div>

        <!-- Service 6: Pre-Departure & Housing Support -->
        <div class="service-card">
            <div class="service-icon icon-blue">
                <i class="fas fa-plane-departure"></i>
            </div>
            <h3>Pre-Departure & Housing</h3>
            <p>Comprehensive briefings, student accommodation booking, air ticketing, forex transfer, and airport pick-up arrangement before you travel.</p>
            <ul class="service-features">
                <li><i class="fas fa-check-circle"></i> Verified Student Housing Options</li>
                <li><i class="fas fa-check-circle"></i> Flight Ticketing & Forex Card</li>
                <li><i class="fas fa-check-circle"></i> Airport Pick-up & Local SIM Card</li>
            </ul>
            <a href="/contact" class="btn-service">Get Pre-Departure Support <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>

<!-- Process Section -->
<div class="process-section">
    <div class="section-header">
        <span class="badge-pill">Step-by-Step Flow</span>
        <h2>How We Guide You to Success</h2>
        <p>A streamlined, stress-free 4-step process engineered to turn your global aspirations into reality.</p>
    </div>

    <div class="process-grid">
        <div class="process-card">
            <div class="process-step-number">1</div>
            <h4>Free Consultation</h4>
            <p>Meet our senior counselors to evaluate your academic profile, budget, and long-term career goals.</p>
        </div>

        <div class="process-card">
            <div class="process-step-number">2</div>
            <h4>Application & Offer</h4>
            <p>We prepare your documents, SOPs, and submit university/work applications to secure offer letters.</p>
        </div>

        <div class="process-card">
            <div class="process-step-number">3</div>
            <h4>Visa Filing</h4>
            <p>Our visa experts review financial statements and prepare you for embassy submission & interview.</p>
        </div>

        <div class="process-card">
            <div class="process-step-number">4</div>
            <h4>Fly Abroad & Settle</h4>
            <p>Receive pre-departure briefing, flight bookings, accommodation assistance, and ongoing support.</p>
        </div>
    </div>
</div>

<!-- CTA Banner -->
<div class="cta-banner">
    <div class="cta-content">
        <h3>Ready to Take the First Step?</h3>
        <p>Schedule a complimentary 1-on-1 counseling session with our international education and visa experts today.</p>
    </div>
    <a href="/contact" class="btn-cta-gold">Book Free Appointment</a>
</div>
@endsection
