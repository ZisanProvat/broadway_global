@extends('layouts.main')
@section('title', 'Study in UK | Broadway Global')
@section('extra-styles') @include('partials.country-styles') @endsection
@section('content')
<section class="country-hero">
    <div class="country-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1920&q=80')"></div>
    <div class="country-hero-overlay"></div>
    <div class="country-hero-content">
        <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <a href="#">Destinations</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <span>UK</span></div>
        <img class="country-flag" src="https://flagcdn.com/gb.svg" alt="UK">
        <h1>Study in UK</h1>
        <p>Study at the world's most historic and prestigious universities.</p>
    </div>
</section>
<div class="country-stats">
    <div class="c-stat reveal"><h3>160+</h3><p>Universities</p></div>
    <div class="c-stat reveal reveal-delay-1"><h3>600K+</h3><p>Int'l Students</p></div>
    <div class="c-stat reveal reveal-delay-2"><h3>4</h3><p>Top 10 Global Unis</p></div>
    <div class="c-stat reveal reveal-delay-3"><h3>98%</h3><p>Visa Success</p></div>
</div>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Why Study in UK?</h2><p class="section-subtitle">The UK offers century-old academic tradition with cutting-edge innovation.</p></div>
    <div class="why-grid">
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-crown"></i></div><h4>Prestige</h4><p>Oxford and Cambridge are recognized globally.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-clock"></i></div><h4>Shorter Degrees</h4><p>Bachelor's in 3 years, Master's in 1 year.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-id-card"></i></div><h4>Graduate Route</h4><p>2-year post-study work visa available.</p></div>
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-book"></i></div><h4>Research Excellence</h4><p>Leading global research output per institution.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-globe"></i></div><h4>Global Network</h4><p>UK degree opens doors worldwide.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-theater-masks"></i></div><h4>Rich Culture</h4><p>Experience centuries of art, history, and culture.</p></div>
    </div>
</section>
<section class="section-padding" style="background:var(--bg-alt)">
    <div class="text-center reveal"><h2 class="section-title">Top Universities</h2><p class="section-subtitle">World-class institutions waiting for you in the UK.</p></div>
    <div class="uni-grid">
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#1</div><div class="uni-info"><h5>University of Oxford</h5><span>Oxford, England</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#2</div><div class="uni-info"><h5>University of Cambridge</h5><span>Cambridge, England</span></div></div>
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#3</div><div class="uni-info"><h5>Imperial College London</h5><span>London, England</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#4</div><div class="uni-info"><h5>University of Edinburgh</h5><span>Edinburgh, Scotland</span></div></div>
    </div>
</section>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Application Process</h2><p class="section-subtitle">Our simple 4-step process to get you enrolled in the UK.</p></div>
    <div class="process-steps">
        <div class="step-card reveal reveal-delay-1"><div class="step-num">1</div><h4>Free Consultation</h4><p>Meet our experts and assess your profile.</p></div>
        <div class="step-card reveal reveal-delay-2"><div class="step-num">2</div><h4>Document Preparation</h4><p>We guide you through every requirement.</p></div>
        <div class="step-card reveal reveal-delay-3"><div class="step-num">3</div><h4>Visa Application</h4><p>Our specialists handle your visa with full transparency.</p></div>
        <div class="step-card reveal reveal-delay-4"><div class="step-num">4</div><h4>Pre-Departure</h4><p>Accommodation, flights, and orientation support.</p></div>
    </div>
</section>
<section class="country-cta reveal"><h2>Ready to Study in the UK?</h2><p>Book a free consultation today and let our experts guide your journey.</p><a href="#" class="btn-cta">Book Free Consultation <i class="fas fa-arrow-right" style="margin-left:8px"></i></a></section>
@endsection
