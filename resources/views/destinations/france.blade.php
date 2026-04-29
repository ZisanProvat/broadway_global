@extends('layouts.main')
@section('title', 'Study in France | Broadway Global')
@section('extra-styles') @include('partials.country-styles') @endsection
@section('content')
<section class="country-hero">
    <div class="country-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1920&q=80')"></div>
    <div class="country-hero-overlay"></div>
    <div class="country-hero-content">
        <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <a href="#">Destinations</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <span>France</span></div>
        <img class="country-flag" src="https://flagcdn.com/fr.svg" alt="France">
        <h1>Study in France</h1>
        <p>Experience world-class education in the heart of Europe.</p>
    </div>
</section>
<div class="country-stats">
    <div class="c-stat reveal"><h3>3500+</h3><p>Institutions</p></div>
    <div class="c-stat reveal reveal-delay-1"><h3>370K+</h3><p>Int'l Students</p></div>
    <div class="c-stat reveal reveal-delay-2"><h3>Top 5</h3><p>Global Education</p></div>
    <div class="c-stat reveal reveal-delay-3"><h3>97%</h3><p>Visa Success</p></div>
</div>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Why Study in France?</h2><p class="section-subtitle">France is home to some of the world's most prestigious universities and research centers.</p></div>
    <div class="why-grid">
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-trophy"></i></div><h4>Prestigious Institutions</h4><p>Home to grandes écoles and top-ranked universities.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-paint-brush"></i></div><h4>Arts & Culture</h4><p>Unmatched cultural experiences and lifestyle.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-flask"></i></div><h4>Research Excellence</h4><p>World-leading research and innovation hubs.</p></div>
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-euro-sign"></i></div><h4>Low Tuition Fees</h4><p>Public universities charge very low annual fees.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-briefcase"></i></div><h4>Post-Study Work</h4><p>Up to 2 years post-study work permit available.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-train"></i></div><h4>Travel Hub</h4><p>Explore all of Europe easily from France.</p></div>
    </div>
</section>
<section class="section-padding" style="background:var(--bg-alt)">
    <div class="text-center reveal"><h2 class="section-title">Top Universities</h2><p class="section-subtitle">World-class institutions waiting for you in France.</p></div>
    <div class="uni-grid">
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#1</div><div class="uni-info"><h5>Sorbonne University</h5><span>Paris</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#2</div><div class="uni-info"><h5>École Polytechnique</h5><span>Palaiseau</span></div></div>
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#3</div><div class="uni-info"><h5>Sciences Po</h5><span>Paris</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#4</div><div class="uni-info"><h5>HEC Paris</h5><span>Jouy-en-Josas</span></div></div>
    </div>
</section>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Application Process</h2><p class="section-subtitle">Our simple 4-step process to get you enrolled in France.</p></div>
    <div class="process-steps">
        <div class="step-card reveal reveal-delay-1"><div class="step-num">1</div><h4>Free Consultation</h4><p>Meet our experts and assess your profile.</p></div>
        <div class="step-card reveal reveal-delay-2"><div class="step-num">2</div><h4>Document Preparation</h4><p>We guide you through every requirement.</p></div>
        <div class="step-card reveal reveal-delay-3"><div class="step-num">3</div><h4>Visa Application</h4><p>Our specialists handle your visa with full transparency.</p></div>
        <div class="step-card reveal reveal-delay-4"><div class="step-num">4</div><h4>Pre-Departure</h4><p>Accommodation, flights, and orientation support.</p></div>
    </div>
</section>
<section class="country-cta reveal"><h2>Ready to Study in France?</h2><p>Book a free consultation today and let our experts guide your journey.</p><a href="#" class="btn-cta">Book Free Consultation <i class="fas fa-arrow-right" style="margin-left:8px"></i></a></section>
@endsection
