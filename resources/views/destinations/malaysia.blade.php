@extends('layouts.main')
@section('title', 'Study in Malaysia | Broadway Global')
@section('extra-styles') @include('partials.country-styles') @endsection
@section('content')
<section class="country-hero">
    <div class="country-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1596422846543-75c6fc197f07?auto=format&fit=crop&w=1920&q=80')"></div>
    <div class="country-hero-overlay"></div>
    <div class="country-hero-content">
        <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <a href="#">Destinations</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <span>Malaysia</span></div>
        <img class="country-flag" src="https://flagcdn.com/my.svg" alt="Malaysia">
        <h1>Study in Malaysia</h1>
        <p>Affordable world-class education in the heart of Southeast Asia.</p>
    </div>
</section>
<div class="country-stats">
    <div class="c-stat reveal"><h3>500+</h3><p>Universities</p></div>
    <div class="c-stat reveal reveal-delay-1"><h3>170K+</h3><p>Int'l Students</p></div>
    <div class="c-stat reveal reveal-delay-2"><h3>60%</h3><p>Lower Cost vs UK</p></div>
    <div class="c-stat reveal reveal-delay-3"><h3>99%</h3><p>Visa Success</p></div>
</div>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Why Study in Malaysia?</h2><p class="section-subtitle">Malaysia blends quality education with affordability and multicultural living.</p></div>
    <div class="why-grid">
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-dollar-sign"></i></div><h4>Affordable Tuition</h4><p>Study at world-class institutions at a fraction of Western costs.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-globe"></i></div><h4>English Medium</h4><p>Most programs are taught entirely in English.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-city"></i></div><h4>Modern Infrastructure</h4><p>State-of-the-art campuses and student facilities.</p></div>
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-briefcase"></i></div><h4>Work Opportunities</h4><p>Students can work 20 hrs/week during studies.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-plane"></i></div><h4>Easy Visa</h4><p>Straightforward student visa with high approval rates.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-utensils"></i></div><h4>Diverse Culture</h4><p>Vibrant multicultural environment with amazing food.</p></div>
    </div>
</section>
<section class="section-padding" style="background:var(--bg-alt)">
    <div class="text-center reveal"><h2 class="section-title">Top Universities</h2><p class="section-subtitle">World-class institutions waiting for you in Malaysia.</p></div>
    <div class="uni-grid">
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#1</div><div class="uni-info"><h5>University of Malaya</h5><span>Kuala Lumpur</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#2</div><div class="uni-info"><h5>Universiti Putra Malaysia</h5><span>Serdang, Selangor</span></div></div>
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#3</div><div class="uni-info"><h5>HELP University</h5><span>Kuala Lumpur</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#4</div><div class="uni-info"><h5>Sunway University</h5><span>Petaling Jaya</span></div></div>
    </div>
</section>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Application Process</h2><p class="section-subtitle">Our simple 4-step process to get you enrolled in Malaysia.</p></div>
    <div class="process-steps">
        <div class="step-card reveal reveal-delay-1"><div class="step-num">1</div><h4>Free Consultation</h4><p>Meet our experts and assess your profile.</p></div>
        <div class="step-card reveal reveal-delay-2"><div class="step-num">2</div><h4>Document Preparation</h4><p>We guide you through every requirement.</p></div>
        <div class="step-card reveal reveal-delay-3"><div class="step-num">3</div><h4>Visa Application</h4><p>Our specialists handle your visa with full transparency.</p></div>
        <div class="step-card reveal reveal-delay-4"><div class="step-num">4</div><h4>Pre-Departure</h4><p>Accommodation, flights, and orientation support.</p></div>
    </div>
</section>
<section class="country-cta reveal"><h2>Ready to Study in Malaysia?</h2><p>Book a free consultation today and let our experts guide your journey.</p><a href="#" class="btn-cta">Book Free Consultation <i class="fas fa-arrow-right" style="margin-left:8px"></i></a></section>
@endsection
