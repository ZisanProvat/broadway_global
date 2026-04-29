@extends('layouts.main')
@section('title', 'Study in Hungary | Broadway Global')
@section('extra-styles') @include('partials.country-styles') @endsection
@section('content')
<section class="country-hero">
    <div class="country-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1549923746-c502d488b3ea?auto=format&fit=crop&w=1920&q=80')"></div>
    <div class="country-hero-overlay"></div>
    <div class="country-hero-content">
        <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <a href="#">Destinations</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <span>Hungary</span></div>
        <img class="country-flag" src="https://flagcdn.com/hu.svg" alt="Hungary">
        <h1>Study in Hungary</h1>
        <p>Affordable EU education in the cultural heart of Central Europe.</p>
    </div>
</section>
<div class="country-stats">
    <div class="c-stat reveal"><h3>65+</h3><p>Universities</p></div>
    <div class="c-stat reveal reveal-delay-1"><h3>40K+</h3><p>Int'l Students</p></div>
    <div class="c-stat reveal reveal-delay-2"><h3>EU</h3><p>Recognized Degree</p></div>
    <div class="c-stat reveal reveal-delay-3"><h3>98%</h3><p>Visa Success</p></div>
</div>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Why Study in Hungary?</h2><p class="section-subtitle">Hungary offers EU-recognized degrees at very affordable tuition in English.</p></div>
    <div class="why-grid">
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-euro-sign"></i></div><h4>Very Affordable</h4><p>Low tuition fees compared to other EU countries.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-university"></i></div><h4>EU Degree</h4><p>Degrees recognized across the European Union.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-heartbeat"></i></div><h4>Medical Programs</h4><p>World-famous medical and pharmacy schools.</p></div>
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-map-marker-alt"></i></div><h4>Central Europe</h4><p>Explore Europe easily from Budapest.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-language"></i></div><h4>English Programs</h4><p>Full English-medium degree programs available.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-music"></i></div><h4>Rich Culture</h4><p>Historic cities, thermal baths, and vibrant nightlife.</p></div>
    </div>
</section>
<section class="section-padding" style="background:var(--bg-alt)">
    <div class="text-center reveal"><h2 class="section-title">Top Universities</h2><p class="section-subtitle">World-class institutions waiting for you in Hungary.</p></div>
    <div class="uni-grid">
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#1</div><div class="uni-info"><h5>University of Debrecen</h5><span>Debrecen</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#2</div><div class="uni-info"><h5>University of Pécs</h5><span>Pécs</span></div></div>
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#3</div><div class="uni-info"><h5>Semmelweis University</h5><span>Budapest</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#4</div><div class="uni-info"><h5>Budapest University of Technology</h5><span>Budapest</span></div></div>
    </div>
</section>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Application Process</h2><p class="section-subtitle">Our simple 4-step process to get you enrolled in Hungary.</p></div>
    <div class="process-steps">
        <div class="step-card reveal reveal-delay-1"><div class="step-num">1</div><h4>Free Consultation</h4><p>Meet our experts and assess your profile.</p></div>
        <div class="step-card reveal reveal-delay-2"><div class="step-num">2</div><h4>Document Preparation</h4><p>We guide you through every requirement.</p></div>
        <div class="step-card reveal reveal-delay-3"><div class="step-num">3</div><h4>Visa Application</h4><p>Our specialists handle your visa with full transparency.</p></div>
        <div class="step-card reveal reveal-delay-4"><div class="step-num">4</div><h4>Pre-Departure</h4><p>Accommodation, flights, and orientation support.</p></div>
    </div>
</section>
<section class="country-cta reveal"><h2>Ready to Study in Hungary?</h2><p>Book a free consultation today and let our experts guide your journey.</p><a href="#" class="btn-cta">Book Free Consultation <i class="fas fa-arrow-right" style="margin-left:8px"></i></a></section>
@endsection
