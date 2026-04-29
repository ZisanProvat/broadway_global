@extends('layouts.main')
@section('title', 'Study in New Zealand | Broadway Global')
@section('extra-styles') @include('partials.country-styles') @endsection
@section('content')
<section class="country-hero">
    <div class="country-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1507699622108-4be3abd695ad?auto=format&fit=crop&w=1920&q=80')"></div>
    <div class="country-hero-overlay"></div>
    <div class="country-hero-content">
        <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <a href="#">Destinations</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <span>New Zealand</span></div>
        <img class="country-flag" src="https://flagcdn.com/nz.svg" alt="New Zealand">
        <h1>Study in New Zealand</h1>
        <p>World-class education in one of the world's most beautiful countries.</p>
    </div>
</section>
<div class="country-stats">
    <div class="c-stat reveal"><h3>8</h3><p>Universities</p></div>
    <div class="c-stat reveal reveal-delay-1"><h3>50K+</h3><p>Int'l Students</p></div>
    <div class="c-stat reveal reveal-delay-2"><h3>3 yrs</h3><p>Post-Study Work</p></div>
    <div class="c-stat reveal reveal-delay-3"><h3>99%</h3><p>Visa Success</p></div>
</div>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Why Study in New Zealand?</h2><p class="section-subtitle">New Zealand combines quality education with breathtaking natural beauty.</p></div>
    <div class="why-grid">
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-leaf"></i></div><h4>Natural Beauty</h4><p>Stunning landscapes, clean air and outdoor life.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-shield-alt"></i></div><h4>Extremely Safe</h4><p>One of the safest countries in the world.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-graduation-cap"></i></div><h4>Quality Education</h4><p>Qualifications recognized and valued worldwide.</p></div>
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-briefcase"></i></div><h4>Work Rights</h4><p>Work 20 hrs/week while studying.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-id-card"></i></div><h4>Post-Study Visa</h4><p>Up to 3-year post-study work visa.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-users"></i></div><h4>Friendly People</h4><p>Welcoming Kiwi culture and open communities.</p></div>
    </div>
</section>
<section class="section-padding" style="background:var(--bg-alt)">
    <div class="text-center reveal"><h2 class="section-title">Top Universities</h2><p class="section-subtitle">World-class institutions waiting for you in New Zealand.</p></div>
    <div class="uni-grid">
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#1</div><div class="uni-info"><h5>University of Auckland</h5><span>Auckland</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#2</div><div class="uni-info"><h5>Victoria University of Wellington</h5><span>Wellington</span></div></div>
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#3</div><div class="uni-info"><h5>University of Otago</h5><span>Dunedin</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#4</div><div class="uni-info"><h5>University of Canterbury</h5><span>Christchurch</span></div></div>
    </div>
</section>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Application Process</h2><p class="section-subtitle">Our simple 4-step process to get you enrolled in New Zealand.</p></div>
    <div class="process-steps">
        <div class="step-card reveal reveal-delay-1"><div class="step-num">1</div><h4>Free Consultation</h4><p>Meet our experts and assess your profile.</p></div>
        <div class="step-card reveal reveal-delay-2"><div class="step-num">2</div><h4>Document Preparation</h4><p>We guide you through every requirement.</p></div>
        <div class="step-card reveal reveal-delay-3"><div class="step-num">3</div><h4>Visa Application</h4><p>Our specialists handle your visa with full transparency.</p></div>
        <div class="step-card reveal reveal-delay-4"><div class="step-num">4</div><h4>Pre-Departure</h4><p>Accommodation, flights, and orientation support.</p></div>
    </div>
</section>
<section class="country-cta reveal"><h2>Ready to Study in New Zealand?</h2><p>Book a free consultation today and let our experts guide your journey.</p><a href="#" class="btn-cta">Book Free Consultation <i class="fas fa-arrow-right" style="margin-left:8px"></i></a></section>
@endsection
