@extends('layouts.main')
@section('title', 'Study in USA | Broadway Global')
@section('extra-styles') @include('partials.country-styles') @endsection
@section('content')
<section class="country-hero">
    <div class="country-hero-bg" style="background-image:url('https://images.unsplash.com/photo-1501466044931-62695aada8e9?auto=format&fit=crop&w=1920&q=80')"></div>
    <div class="country-hero-overlay"></div>
    <div class="country-hero-content">
        <div class="breadcrumb"><a href="/">Home</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <a href="#">Destinations</a> <i class="fas fa-chevron-right" style="font-size:.7rem"></i> <span>USA</span></div>
        <img class="country-flag" src="https://flagcdn.com/us.svg" alt="USA">
        <h1>Study in USA</h1>
        <p>The land of opportunity — home to the world's top universities.</p>
    </div>
</section>
<div class="country-stats">
    <div class="c-stat reveal"><h3>4000+</h3><p>Universities</p></div>
    <div class="c-stat reveal reveal-delay-1"><h3>1M+</h3><p>Int'l Students</p></div>
    <div class="c-stat reveal reveal-delay-2"><h3>17</h3><p>Top 20 Globally</p></div>
    <div class="c-stat reveal reveal-delay-3"><h3>97%</h3><p>Visa Success</p></div>
</div>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Why Study in USA?</h2><p class="section-subtitle">The USA hosts more international students than any other country in the world.</p></div>
    <div class="why-grid">
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-medal"></i></div><h4>Top Rankings</h4><p>MIT, Harvard, Stanford — the world's best.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-lightbulb"></i></div><h4>Innovation Hub</h4><p>Access to Silicon Valley and leading tech companies.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-dollar-sign"></i></div><h4>Scholarships</h4><p>Wide range of scholarships and financial aid.</p></div>
        <div class="why-card reveal reveal-delay-1"><div class="why-icon"><i class="fas fa-briefcase"></i></div><h4>OPT / CPT</h4><p>Work experience opportunities during and after studies.</p></div>
        <div class="why-card reveal reveal-delay-2"><div class="why-icon"><i class="fas fa-flask"></i></div><h4>Research</h4><p>Unmatched research facilities and funding.</p></div>
        <div class="why-card reveal reveal-delay-3"><div class="why-icon"><i class="fas fa-university"></i></div><h4>Flexibility</h4><p>Flexible curriculum to explore multiple disciplines.</p></div>
    </div>
</section>
<section class="section-padding" style="background:var(--bg-alt)">
    <div class="text-center reveal"><h2 class="section-title">Top Universities</h2><p class="section-subtitle">World-class institutions waiting for you in the USA.</p></div>
    <div class="uni-grid">
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#1</div><div class="uni-info"><h5>Massachusetts Institute of Technology</h5><span>Cambridge, MA</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#2</div><div class="uni-info"><h5>Harvard University</h5><span>Cambridge, MA</span></div></div>
        <div class="uni-card reveal reveal-delay-1"><div class="uni-rank">#3</div><div class="uni-info"><h5>Stanford University</h5><span>Stanford, CA</span></div></div>
        <div class="uni-card reveal reveal-delay-2"><div class="uni-rank">#4</div><div class="uni-info"><h5>University of Texas at Arlington</h5><span>Arlington, TX</span></div></div>
    </div>
</section>
<section class="section-padding">
    <div class="text-center reveal"><h2 class="section-title">Application Process</h2><p class="section-subtitle">Our simple 4-step process to get you enrolled in the USA.</p></div>
    <div class="process-steps">
        <div class="step-card reveal reveal-delay-1"><div class="step-num">1</div><h4>Free Consultation</h4><p>Meet our experts and assess your profile.</p></div>
        <div class="step-card reveal reveal-delay-2"><div class="step-num">2</div><h4>Document Preparation</h4><p>We guide you through every requirement.</p></div>
        <div class="step-card reveal reveal-delay-3"><div class="step-num">3</div><h4>Visa Application</h4><p>Our specialists handle your visa with full transparency.</p></div>
        <div class="step-card reveal reveal-delay-4"><div class="step-num">4</div><h4>Pre-Departure</h4><p>Accommodation, flights, and orientation support.</p></div>
    </div>
</section>
<section class="country-cta reveal"><h2>Ready to Study in the USA?</h2><p>Book a free consultation today and let our experts guide your journey.</p><a href="#" class="btn-cta">Book Free Consultation <i class="fas fa-arrow-right" style="margin-left:8px"></i></a></section>
@endsection
