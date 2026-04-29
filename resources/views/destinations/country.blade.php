@extends('layouts.main')

@section('title', 'Study in ' . $country['name'] . ' | Broadway Global')

@section('extra-styles')
<style>
    /* Country Hero */
    .country-hero {
        height: 60vh;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 0 8% 60px;
        color: var(--white);
        overflow: hidden;
    }
    .country-hero-bg {
        position: absolute;
        inset: 0;
        background: url('{{ $country["hero_image"] }}') center/cover no-repeat;
        transform: scale(1.05);
        transition: transform 6s ease;
    }
    .country-hero:hover .country-hero-bg { transform: scale(1); }
    .country-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(10,29,55,0.92) 0%, rgba(10,29,55,0.3) 60%, transparent 100%);
    }
    .country-hero-content { position: relative; z-index: 2; }
    .country-flag {
        width: 60px;
        border-radius: 6px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        margin-bottom: 16px;
        opacity: 0;
        animation: heroFadeUp 0.8s ease 0.3s forwards;
    }
    .country-hero h1 {
        font-size: 4rem; font-weight: 800; line-height: 1.1; margin-bottom: 12px;
        opacity: 0; animation: heroFadeUp 0.8s ease 0.5s forwards;
    }
    .country-hero p {
        font-size: 1.2rem; max-width: 650px; opacity: 0;
        animation: heroFadeUp 0.8s ease 0.7s forwards;
    }
    .breadcrumb {
        display: flex; gap: 8px; font-weight: 600; font-size: 0.9rem;
        color: var(--accent); margin-bottom: 20px;
        opacity: 0; animation: heroFadeUp 0.8s ease 0.2s forwards;
    }
    .breadcrumb a { color: rgba(255,255,255,0.7); }
    .breadcrumb a:hover { color: var(--white); }

    @keyframes heroFadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* Quick Stats Bar */
    .country-stats {
        background: var(--primary);
        padding: 30px 8%;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        text-align: center;
    }
    .c-stat { color: var(--white); }
    .c-stat h3 { font-size: 2rem; font-weight: 800; color: var(--accent); margin-bottom: 4px; }
    .c-stat p { font-size: 0.85rem; opacity: 0.8; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }

    /* Why Study Here */
    .why-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
    .why-card {
        background: var(--white);
        border-radius: 16px;
        padding: 35px 25px;
        text-align: center;
        border: 1px solid #eee;
        transition: 0.4s;
        box-shadow: 0 5px 20px rgba(0,0,0,0.03);
    }
    .why-card:hover { border-color: var(--accent); transform: translateY(-8px); box-shadow: 0 20px 40px rgba(197,160,89,0.1); }
    .why-icon { font-size: 2.5rem; color: var(--accent); margin-bottom: 18px; }
    .why-card h4 { font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; }
    .why-card p { color: var(--text-muted); font-size: 0.95rem; }

    /* University list */
    .uni-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
    .uni-card {
        background: var(--white);
        border-radius: 12px;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 20px;
        border: 1px solid #eee;
        transition: 0.3s;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    }
    .uni-card:hover { border-color: var(--accent); transform: translateX(5px); }
    .uni-rank {
        background: var(--primary);
        color: var(--white);
        width: 50px; height: 50px;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-weight: 800; font-size: 1rem;
        flex-shrink: 0;
    }
    .uni-info h5 { font-weight: 700; margin-bottom: 4px; }
    .uni-info span { font-size: 0.82rem; color: var(--text-muted); }

    /* Process steps */
    .process-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
    .step-card {
        text-align: center;
        padding: 35px 20px;
        position: relative;
    }
    .step-card::after {
        content: '→';
        position: absolute;
        right: -12px;
        top: 40px;
        font-size: 1.5rem;
        color: var(--accent);
    }
    .step-card:last-child::after { display: none; }
    .step-num {
        width: 60px; height: 60px;
        background: var(--accent);
        color: var(--white);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.4rem; font-weight: 800;
        margin: 0 auto 20px;
    }
    .step-card h4 { font-weight: 700; margin-bottom: 8px; }
    .step-card p { font-size: 0.9rem; color: var(--text-muted); }

    /* CTA */
    .country-cta {
        background: linear-gradient(135deg, var(--primary), #1a3a5f);
        color: var(--white);
        text-align: center;
        padding: 80px 8%;
        border-radius: 30px;
        margin: 0 8% 100px;
        position: relative;
        overflow: hidden;
    }
    .country-cta h2 { font-size: 2.8rem; font-weight: 800; margin-bottom: 15px; }
    .country-cta p { font-size: 1.1rem; opacity: 0.9; margin-bottom: 35px; }
    .btn-cta {
        background: var(--accent);
        color: var(--white);
        padding: 16px 40px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 1rem;
        display: inline-block;
        transition: 0.3s;
    }
    .btn-cta:hover { background: var(--white); color: var(--primary); transform: translateY(-3px); }

    @media (max-width: 992px) {
        .country-hero { height: 50vh; padding: 0 5% 40px; }
        .country-hero h1 { font-size: 2.5rem; }
        .country-stats { grid-template-columns: repeat(2, 1fr); }
        .why-grid { grid-template-columns: 1fr; }
        .uni-grid { grid-template-columns: 1fr; }
        .process-steps { grid-template-columns: repeat(2, 1fr); }
        .process-steps .step-card::after { display: none; }
        .country-cta { margin: 0 5% 60px; }
    }
    @media (max-width: 480px) {
        .country-hero h1 { font-size: 1.8rem; }
        .process-steps { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')

    <!-- Hero -->
    <section class="country-hero">
        <div class="country-hero-bg"></div>
        <div class="country-hero-overlay"></div>
        <div class="country-hero-content">
            <div class="breadcrumb">
                <a href="/">Home</a>
                <i class="fas fa-chevron-right" style="font-size:0.7rem;"></i>
                <a href="#">Destinations</a>
                <i class="fas fa-chevron-right" style="font-size:0.7rem;"></i>
                <span>{{ $country['name'] }}</span>
            </div>
            <img class="country-flag" src="https://flagcdn.com/{{ $country['code'] }}.svg" alt="{{ $country['name'] }}">
            <h1>Study in {{ $country['name'] }}</h1>
            <p>{{ $country['tagline'] }}</p>
        </div>
    </section>

    <!-- Quick Stats -->
    <div class="country-stats">
        @foreach ($country['stats'] as $stat)
            <div class="c-stat reveal">
                <h3>{{ $stat['value'] }}</h3>
                <p>{{ $stat['label'] }}</p>
            </div>
        @endforeach
    </div>

    <!-- Why Study Here -->
    <section class="section-padding">
        <div class="text-center reveal">
            <h2 class="section-title">Why Study in {{ $country['name'] }}?</h2>
            <p class="section-subtitle">{{ $country['why_subtitle'] }}</p>
        </div>
        <div class="why-grid">
            @foreach ($country['reasons'] as $i => $reason)
                <div class="why-card reveal reveal-delay-{{ ($i % 3) + 1 }}">
                    <div class="why-icon"><i class="{{ $reason['icon'] }}"></i></div>
                    <h4>{{ $reason['title'] }}</h4>
                    <p>{{ $reason['text'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Top Universities -->
    <section class="section-padding" style="background: var(--bg-alt);">
        <div class="text-center reveal">
            <h2 class="section-title">Top Universities</h2>
            <p class="section-subtitle">World-class institutions waiting for you in {{ $country['name'] }}.</p>
        </div>
        <div class="uni-grid">
            @foreach ($country['universities'] as $i => $uni)
                <div class="uni-card reveal reveal-delay-{{ ($i % 2) + 1 }}">
                    <div class="uni-rank">#{{ $i + 1 }}</div>
                    <div class="uni-info">
                        <h5>{{ $uni['name'] }}</h5>
                        <span>{{ $uni['location'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Application Process -->
    <section class="section-padding">
        <div class="text-center reveal">
            <h2 class="section-title">Application Process</h2>
            <p class="section-subtitle">Our simple 4-step process to get you enrolled in {{ $country['name'] }}.</p>
        </div>
        <div class="process-steps">
            <div class="step-card reveal reveal-delay-1">
                <div class="step-num">1</div>
                <h4>Free Consultation</h4>
                <p>Meet our experts and assess your profile for the best-fit universities.</p>
            </div>
            <div class="step-card reveal reveal-delay-2">
                <div class="step-num">2</div>
                <h4>Document Preparation</h4>
                <p>We guide you through every document requirement and application form.</p>
            </div>
            <div class="step-card reveal reveal-delay-3">
                <div class="step-num">3</div>
                <h4>Visa Application</h4>
                <p>Our visa specialists handle your application with full transparency.</p>
            </div>
            <div class="step-card reveal reveal-delay-4">
                <div class="step-num">4</div>
                <h4>Pre-Departure</h4>
                <p>Accommodation, flights, and orientation support before you fly.</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="country-cta reveal">
        <h2>Ready to Study in {{ $country['name'] }}?</h2>
        <p>Book a free consultation today and let our experts guide your journey.</p>
        <a href="#" class="btn-cta">Book Free Consultation <i class="fas fa-arrow-right" style="margin-left:8px;"></i></a>
    </section>

@endsection
