@extends('layouts.main')
@section('title', 'Study in Australia | Broadway Global')
@section('extra-styles') @include('partials.country-styles') @endsection
@section('content')
<section class="country-hero">
    <div class="country-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?auto=format&fit=crop&w=1920&q=80')"></div>
    <div class="country-hero-overlay"></div>
    <div class="country-hero-content">
        <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <a href="#">Destinations</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <span>Australia</span></div>
        <img class="country-flag" src="https://flagcdn.com/au.svg" alt="Australia">
        <h1>Study in Australia</h1>
        <p>World-class education with stunning landscapes and quality of life.</p>
    </div>
</section>
<div class="country-stats">
    <div class="c-stat reveal"><h3>43+</h3><p>Universities</p></div>
    <div class="c-stat reveal reveal-delay-1"><h3>700K+</h3><p>Int'l Students</p></div>
    <div class="c-stat reveal reveal-delay-2"><h3>7</h3><p>Top 100 Uni's</p></div>
    <div class="c-stat reveal reveal-delay-3"><h3>99%</h3><p>Visa Success</p></div>
</div>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Why Study in Australia?</h2><p class="section-subtitle">Australia consistently ranks among the top study destinations globally.</p></div>
    <div class="why-grid">
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-graduation-cap"></i></div><h4>World Rankings</h4><p>7 Australian universities rank in global top 100.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-briefcase"></i></div><h4>Work Rights</h4><p>Work up to 48 hrs/fortnight while studying.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-leaf"></i></div><h4>Quality of Life</h4><p>Ranked among the best countries for living.</p></div>
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-users"></i></div><h4>Multicultural</h4><p>Welcoming and diverse society.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-id-card"></i></div><h4>Post-Study Visa</h4><p>Up to 4-year Graduate Temporary Visa (485).</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-flask"></i></div><h4>Research Focus</h4><p>Strong investment in research and innovation.</p></div>
    </div>
</section>
<section class="section-padding" style="background:var(--bg-alt)">
    <div class="text-center reveal"><h2 class="section-title">Top Universities</h2><p class="section-subtitle">World-class institutions waiting for you in Australia.</p></div>
    <div class="uni-grid">
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#1</div><div class="uni-info"><h5>University of Melbourne</h5><span>Melbourne, VIC</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#2</div><div class="uni-info"><h5>University of Sydney</h5><span>Sydney, NSW</span></div></div>
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#3</div><div class="uni-info"><h5>Monash University</h5><span>Clayton, VIC</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#4</div><div class="uni-info"><h5>Australian National University</h5><span>Canberra, ACT</span></div></div>
    </div>
</section>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Application Process</h2><p class="section-subtitle">Our simple 4-step process to get you enrolled in Australia.</p></div>
    <div class="process-steps">
        <div class="step-card reveal reveal-delay-1"><div class="step-num">1</div><h4>Free Consultation</h4><p>Meet our experts and assess your profile.</p></div>
        <div class="step-card reveal reveal-delay-2"><div class="step-num">2</div><h4>Document Preparation</h4><p>We guide you through every requirement.</p></div>
        <div class="step-card reveal reveal-delay-3"><div class="step-num">3</div><h4>Visa Application</h4><p>Our specialists handle your visa with full transparency.</p></div>
        <div class="step-card reveal reveal-delay-4"><div class="step-num">4</div><h4>Pre-Departure</h4><p>Accommodation, flights, and orientation support.</p></div>
    </div>
</section>
<section class="country-cta reveal"><h2>Ready to Study in Australia?</h2><p>Book a free consultation today and let our experts guide your journey.</p><a href="#" class="btn-cta">Book Free Consultation <i class="fas fa-arrow-right" style="margin-left:8px"></i></a></section>
@endsection
