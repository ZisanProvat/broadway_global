@extends('layouts.main')

@section('title', 'Broadway Global | Study Abroad & Visa Consultancy')

@section('extra-styles')
    <style>
        /* Hero Section */
        .hero {
            position: relative;
            height: 85vh;
            display: flex;
            align-items: center;
            padding: 0 8%;
            color: var(--white);
            overflow: hidden;
            background: #0A1D37;
            /* Solid fallback */
            z-index: 1;
        }

        .hero-bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://picsum.photos/seed/broadwayglobal/3840/2160') center/cover no-repeat;
            z-index: 2;
            opacity: 0.7;
            animation: cinematicPan 25s ease-in-out infinite alternate;
            transform-origin: center;
        }

        @keyframes cinematicPan {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.15) translate(-20px, -10px);
            }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(10, 29, 55, 0.85), rgba(10, 29, 55, 0.4));
            z-index: 3;
        }

        .hero-content {
            max-width: 850px;
            position: relative;
            z-index: 4;
        }

        .hero-content h1 {
            font-size: 4.8rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 25px;
            letter-spacing: -2px;
            opacity: 0;
            transform: translateY(40px);
            animation: heroFadeUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.3s forwards;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0;
            max-width: 650px;
            animation: heroFadeUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.55s forwards;
        }

        .hero-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 40px;
            max-width: 700px;
            opacity: 0;
            animation: heroFadeUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.75s forwards;
        }

        .btn-apply {
            opacity: 0;
            animation: heroFadeUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.95s forwards;
        }

        @keyframes heroFadeUp {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

            from {
                opacity: 0;
                transform: translateY(40px);
            }
        }

        .h-feature {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 15px 25px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 15px;
            font-weight: 600;
            font-size: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .h-feature i {
            color: #FCD34D;
        }

        .btn-apply {
            background: linear-gradient(135deg, #7C3AED, #0891B2);
            color: var(--white);
            padding: 18px 50px;
            border-radius: 50px;
            font-weight: 800;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transition: 0.3s;
        }

        .btn-apply:hover {
            background: linear-gradient(135deg, #FCD34D, #F9A8D4);
            color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        /* Partners */
        .partners {
            padding: 60px 8%;
            background: linear-gradient(135deg, #F5F0FF 0%, #E0F2FE 50%, #F0FDFA 100%);
            text-align: center;
            border-bottom: 3px solid transparent;
            border-image: linear-gradient(90deg, #7C3AED, #0891B2, #DB2777) 1;
        }

        .partners h2 {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 40px;
            font-weight: 800;
            background: linear-gradient(135deg, #7C3AED, #0891B2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .marquee-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 30px 0;
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }

        .marquee-track {
            display: flex;
            width: max-content;
            animation: marqueeScroll 35s linear infinite;
            gap: 80px;
            align-items: center;
        }

        .marquee-track:hover {
            animation-play-state: paused;
        }

        /* Local Horizontal Logos */
        .uni-logo {
            display: flex;
            align-items: center;
            gap: 15px;
            opacity: 0.7;
            filter: grayscale(1);
            transition: 0.4s all cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 800;
            font-size: 1.3rem;
            color: var(--primary);
            white-space: nowrap;
            cursor: pointer;
        }

        .uni-logo img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            transition: 0.4s;
            object-fit: contain;
            background: rgba(255, 255, 255, 0.8);
            padding: 5px;
        }

        .uni-logo:hover {
            opacity: 1;
            filter: grayscale(0);
            transform: scale(1.08) translateY(-3px);
            color: #7C3AED;
        }

        .uni-logo:hover img {
            filter: drop-shadow(0 5px 15px rgba(124, 58, 237, 0.3));
            background: #fff;
        }

        @keyframes marqueeScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Stats */
        .stats {
            padding: 0 8%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            background: linear-gradient(135deg, #0A1D37 0%, #7C3AED 50%, #0891B2 100%);
        }

        .stat-item {
            padding: 50px 20px;
            text-align: center;
            border-right: 1px solid rgba(255, 255, 255, 0.12);
            transition: 0.3s;
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-item:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .stat-item h3 {
            font-size: 3.5rem;
            font-weight: 800;
            color: #FCD34D;
            margin-bottom: 5px;
        }

        .stat-item p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 600;
        }

        /* Why Choose Us */
        .why-choose {
            padding: 100px 8%;
            display: flex;
            gap: 80px;
            align-items: center;
            background: linear-gradient(135deg, #F0F4FF 0%, #FAF5FF 50%, #F0FDFF 100%);
        }

        .why-content {
            flex: 1;
        }

        .why-content h2 {
            font-size: 3.2rem;
            line-height: 1.1;
            margin-bottom: 30px;
            font-weight: 800;
            background: linear-gradient(135deg, #0A1D37, #7C3AED);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .service-tabs {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 12px 25px;
            background: #eee;
            border: none;
            border-radius: 50px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            font-family: 'Outfit', sans-serif;
            font-size: 0.85rem;
        }

        .tab-btn.active {
            background: linear-gradient(135deg, #7C3AED, #4F46E5);
            color: var(--white);
        }

        .tab-btn:not(.active):hover {
            background: linear-gradient(135deg, #E0E7FF, #EDE9FE);
            color: #7C3AED;
        }

        .service-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .service-item {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            padding: 12px 16px;
            border-radius: 10px;
            background: var(--white);
            border: 1px solid #E0E7FF;
            transition: 0.3s;
            color: var(--primary);
        }

        .service-item:hover {
            background: linear-gradient(135deg, #EDE9FE, #E0F2FE);
            border-color: #7C3AED;
            transform: translateX(4px);
        }

        .service-item i {
            color: #7C3AED;
            font-size: 0.75rem;
            width: 20px;
            height: 20px;
            background: #EDE9FE;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .why-images {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .img-large {
            grid-row: span 2;
        }

        .why-images img {
            width: 100%;
            border-radius: 12px;
            object-fit: cover;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .why-images img:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        /* Featured Videos */
        .videos-section {
            background: linear-gradient(135deg, #0A1D37 0%, #1e0a3c 50%, #0c2a4a 100%);
        }

        .videos-section .section-title {
            background: linear-gradient(135deg, #FCD34D, #F9A8D4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .videos-section .section-subtitle {
            color: rgba(255, 255, 255, 0.7);
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .video-card {
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            position: relative;
        }

        .video-card:nth-child(1) {
            box-shadow: 0 10px 30px rgba(124, 58, 237, 0.3);
        }

        .video-card:nth-child(2) {
            box-shadow: 0 10px 30px rgba(8, 145, 178, 0.3);
        }

        .video-card:nth-child(3) {
            box-shadow: 0 10px 30px rgba(219, 39, 119, 0.3);
        }

        .video-card:hover {
            transform: translateY(-12px);
        }

        .video-card:nth-child(1):hover {
            box-shadow: 0 25px 50px rgba(124, 58, 237, 0.4);
        }

        .video-card:nth-child(2):hover {
            box-shadow: 0 25px 50px rgba(8, 145, 178, 0.4);
        }

        .video-card:nth-child(3):hover {
            box-shadow: 0 25px 50px rgba(219, 39, 119, 0.4);
        }

        .video-thumb {
            position: relative;
            width: 100%;
            aspect-ratio: 16/9;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .video-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.65;
            transition: 0.4s;
        }

        .video-card:hover .video-thumb img {
            opacity: 0.5;
        }

        .play-btn {
            position: absolute;
            width: 65px;
            height: 65px;
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: 0.3s;
            z-index: 2;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .video-card:nth-child(1) .play-btn {
            background: linear-gradient(135deg, #7C3AED, #4F46E5);
        }

        .video-card:nth-child(2) .play-btn {
            background: linear-gradient(135deg, #0891B2, #0D9488);
        }

        .video-card:nth-child(3) .play-btn {
            background: linear-gradient(135deg, #DB2777, #9333EA);
        }

        .video-card:hover .play-btn {
            transform: scale(1.15);
        }

        .video-info {
            padding: 20px 25px 25px;
        }

        .video-card:nth-child(1) .video-info {
            background: linear-gradient(135deg, #1e0a3c, #0A1D37);
        }

        .video-card:nth-child(2) .video-info {
            background: linear-gradient(135deg, #0c2a4a, #062a2a);
        }

        .video-card:nth-child(3) .video-info {
            background: linear-gradient(135deg, #3b0a2a, #1e0a3c);
        }

        .video-info h4 {
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--white);
            font-size: 1rem;
        }

        .video-info .contact-label {
            color: rgba(255, 255, 255, 0.55);
            font-size: 0.82rem;
        }

        /* Awards & Certificates */
        .awards-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .award-card {
            border-radius: 20px;
            padding: 35px 25px;
            text-align: center;
            transition: 0.4s;
            color: var(--white);
        }

        .award-card:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .award-card:nth-child(1) {
            background: linear-gradient(135deg, #7C3AED, #4F46E5);
        }

        .award-card:nth-child(2) {
            background: linear-gradient(135deg, #0891B2, #0D9488);
        }

        .award-card:nth-child(3) {
            background: linear-gradient(135deg, #DB2777, #9333EA);
        }

        .award-card:nth-child(4) {
            background: linear-gradient(135deg, #EA580C, #EAB308);
        }

        .award-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .award-card h5 {
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .award-card .contact-label {
            opacity: 0.85;
        }

        /* Professional Affiliations & Accreditation */
        .affil-section {
            background: linear-gradient(135deg, #0A1D37 0%, #7C3AED 60%, #4F46E5 100%);
            color: var(--white);
        }

        .logo-row {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 50px;
        }

        .logo-item {
            width: 160px;
            filter: brightness(0) invert(1);
            opacity: 0.8;
            transition: 0.3s;
        }

        .logo-item:hover {
            opacity: 1;
            transform: scale(1.1);
            filter: brightness(0) invert(1) sepia(1) saturate(3) hue-rotate(180deg);
        }

        /* Testimonials */
        .testimonials {
            padding: 100px 8%;
            background: linear-gradient(135deg, #F0F4FF 0%, #F5F0FF 50%, #FFF0F5 100%);
            text-align: center;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .t-card {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            text-align: left;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            position: relative;
            transition: 0.4s;
            border-top: 4px solid transparent;
        }

        .t-card:nth-child(1) {
            border-top-color: #7C3AED;
        }

        .t-card:nth-child(2) {
            border-top-color: #0891B2;
        }

        .t-card:nth-child(3) {
            border-top-color: #DB2777;
        }

        .t-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.1);
        }

        .t-user {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .t-user img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .t-user h5 {
            font-size: 1.1rem;
            margin-bottom: 2px;
        }

        .t-user span {
            font-size: 0.8rem;
            color: var(--accent);
            font-weight: 700;
        }

        .t-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            font-style: italic;
        }

        /* Articles */
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .article-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.06);
            transition: 0.4s;
            border-top: 5px solid transparent;
        }

        .article-card:nth-child(1) {
            border-top-color: #7C3AED;
        }

        .article-card:nth-child(2) {
            border-top-color: #0891B2;
        }

        .article-card:nth-child(3) {
            border-top-color: #DB2777;
        }

        .article-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
        }

        .article-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .article-card:hover .article-img {
            transform: scale(1.05);
        }

        .article-content {
            padding: 30px;
        }

        .article-date {
            font-size: 0.78rem;
            font-weight: 700;
            margin-bottom: 12px;
            display: inline-block;
            padding: 4px 12px;
            border-radius: 50px;
            color: var(--white);
        }

        .article-card:nth-child(1) .article-date {
            background: #7C3AED;
        }

        .article-card:nth-child(2) .article-date {
            background: #0891B2;
        }

        .article-card:nth-child(3) .article-date {
            background: #DB2777;
        }

        .article-content h4 {
            font-size: 1.3rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .btn-read {
            font-weight: 700;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .article-card:nth-child(1) .btn-read {
            color: #7C3AED;
        }

        .article-card:nth-child(2) .btn-read {
            color: #0891B2;
        }

        .article-card:nth-child(3) .btn-read {
            color: #DB2777;
        }

        .btn-read:hover {
            opacity: 0.75;
        }

        @media (max-width: 992px) {
            .hero {
                height: auto;
                padding: 100px 5% 60px;
                min-height: 100vh;
                display: flex;
                align-items: center;
            }

            .hero-content h1 {
                font-size: 2.2rem;
                line-height: 1.2;
                margin-bottom: 20px;
            }

            .hero-content p {
                font-size: 1rem;
                margin-bottom: 30px;
            }

            .hero-features {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .h-feature {
                padding: 15px 10px;
                font-size: 0.8rem;
                flex-direction: column;
                text-align: center;
                gap: 8px;
            }

            .h-feature i {
                font-size: 1.2rem;
            }

            .section-padding {
                padding: 60px 5%;
            }

            .section-title {
                font-size: 2rem;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
                padding: 0 5%;
            }

            .stat-item {
                padding: 30px 10px;
            }

            .stat-item h3 {
                font-size: 2.2rem;
            }

            .video-grid,
            .articles-grid,
            .awards-grid,
            .testimonial-grid {
                grid-template-columns: 1fr;
            }

            .why-choose {
                flex-direction: column;
                gap: 40px;
                padding: 60px 5%;
            }

            .why-images {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg-video"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Your Journey to Global Success Starts Here</h1>
            <p>Expert guidance from university selection to visa processing. We make your study abroad dreams a reality with
                100% transparency.</p>
            <div class="hero-features">
                <div class="h-feature"><i class="fas fa-check"></i> Experienced & Expert Team</div>
                <div class="h-feature"><i class="fas fa-check"></i> Trusted Admission Support</div>
                <div class="h-feature"><i class="fas fa-check"></i> Free Counseling & Assessment</div>
                <div class="h-feature"><i class="fas fa-check"></i> 100% Transparent in Processing</div>
            </div>
            <a href="#" class="btn-apply">Apply Now <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>

    <!-- Partners -->
    <section class="partners">
        <h2 class="reveal">Our Students Studying At</h2>
        <div class="marquee-container reveal">
            <div class="marquee-track">
                <!-- Original Set -->
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/monash.png') }}" alt="Monash Logo">
                    <span>Monash University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/macquarie.png') }}" alt="Macquarie Logo">
                    <span>Macquarie University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/latrobe.png') }}" alt="La Trobe Logo">
                    <span>La Trobe University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/griffith.png') }}" alt="Griffith Logo">
                    <span>Griffith University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/flinders.png') }}" alt="Flinders Logo">
                    <span>Flinders University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/deakin.png') }}" alt="Deakin Logo">
                    <span>Deakin University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/rmit.png') }}" alt="RMIT Logo">
                    <span>RMIT University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/sydney.png') }}" alt="Sydney Logo">
                    <span>University of Sydney</span>
                </div>

                <!-- Duplicated Set for Seamless Loop -->
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/monash.png') }}" alt="Monash Logo">
                    <span>Monash University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/macquarie.png') }}" alt="Macquarie Logo">
                    <span>Macquarie University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/latrobe.png') }}" alt="La Trobe Logo">
                    <span>La Trobe University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/griffith.png') }}" alt="Griffith Logo">
                    <span>Griffith University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/flinders.png') }}" alt="Flinders Logo">
                    <span>Flinders University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/deakin.png') }}" alt="Deakin Logo">
                    <span>Deakin University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/rmit.png') }}" alt="RMIT Logo">
                    <span>RMIT University</span>
                </div>
                <div class="uni-logo">
                    <img src="{{ asset('assets/logos/sydney.png') }}" alt="Sydney Logo">
                    <span>University of Sydney</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="stat-item reveal reveal-delay-1">
            <h3>23+</h3>
            <p>Years Experience</p>
        </div>
        <div class="stat-item reveal reveal-delay-2">
            <h3>500+</h3>
            <p>Partner Universities</p>
        </div>
        <div class="stat-item reveal reveal-delay-3">
            <h3>15+</h3>
            <p>Countries Served</p>
        </div>
        <div class="stat-item reveal reveal-delay-4">
            <h3>99%</h3>
            <p>Visa Success Rate</p>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose">
        <div class="why-content reveal-left">
            <h2>Why should you choose Broadway Global Group</h2>
            <div class="service-tabs">
                <button class="tab-btn active">POST VISA SERVICES</button>
                <button class="tab-btn">PRE VISA SERVICES</button>
            </div>
            <div class="service-list">
                <div class="service-item"><i class="fas fa-chevron-right"></i> Pre Departure Guidance</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Assessment on Profile</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Ticketing Assistance</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Application with Scholarship</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Support For Accommodate</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Advice on Bank Sponsor</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Assistance to Finding Jobs</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Legal & Immigration Support</div>
            </div>
        </div>
        <div class="why-images reveal-right">
            <div class="img-large">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                    alt="Consultancy">
            </div>
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Students">
            <img src="https://images.unsplash.com/photo-1541339903292-87044c067274?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="University">
        </div>
    </section>

    <!-- Featured Videos -->
    <section class="section-padding videos-section">
        <div class="text-center reveal">
            <h2 class="section-title">Featured Videos</h2>
            <p class="section-subtitle">Hear from our students and experts about the global education experience.</p>
        </div>
        <div class="video-grid">
            <div class="video-card reveal reveal-delay-1">
                <div class="video-thumb">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Video">
                    <div class="play-btn"><i class="fas fa-play"></i></div>
                </div>
                <div class="video-info">
                    <h4>Student Success Story: USA</h4>
                    <p class="contact-label">Student Interview</p>
                </div>
            </div>
            <div class="video-card reveal reveal-delay-2">
                <div class="video-thumb">
                    <img src="https://images.unsplash.com/photo-1541339903292-87044c067274?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Video">
                    <div class="play-btn"><i class="fas fa-play"></i></div>
                </div>
                <div class="video-info">
                    <h4>Visa Guidance Seminar 2024</h4>
                    <p class="contact-label">Expert Session</p>
                </div>
            </div>
            <div class="video-card reveal reveal-delay-3">
                <div class="video-thumb">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Video">
                    <div class="play-btn"><i class="fas fa-play"></i></div>
                </div>
                <div class="video-info">
                    <h4>Top Universities in Australia</h4>
                    <p class="contact-label">Guidance Video</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Certificates -->
    <section class="section-padding">
        <div class="text-center reveal">
            <h2 class="section-title">Awards & Certificates</h2>
            <p class="section-subtitle">Our commitment to excellence has been recognized by international bodies.</p>
        </div>
        <div class="awards-grid">
            <div class="award-card reveal-zoom reveal-delay-1">
                <div class="award-icon"><i class="fas fa-award"></i></div>
                <h5>Best Consultancy 2023</h5>
                <p class="contact-label">Global Education Awards</p>
            </div>
            <div class="award-card reveal-zoom reveal-delay-2">
                <div class="award-icon"><i class="fas fa-certificate"></i></div>
                <h5>ISO 9001:2015</h5>
                <p class="contact-label">Quality Certified</p>
            </div>
            <div class="award-card reveal-zoom reveal-delay-3">
                <div class="award-icon"><i class="fas fa-medal"></i></div>
                <h5>Top Recruiter Award</h5>
                <p class="contact-label">Australia Universities</p>
            </div>
            <div class="award-card reveal-zoom reveal-delay-4">
                <div class="award-icon"><i class="fas fa-star"></i></div>
                <h5>5-Star Student Service</h5>
                <p class="contact-label">Customer Excellence</p>
            </div>
        </div>
    </section>

    <!-- Affiliations & Accreditation -->
    <section class="section-padding affil-section">
        <div class="text-center reveal">
            <h2 class="section-title" style="color: var(--white);">Professional Affiliation & Accreditation</h2>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.7);">We are proud members of the following
                organizations.</p>
        </div>
        <div class="logo-row reveal">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/05/British_Council_logo.svg/1200px-British_Council_logo.svg.png"
                class="logo-item" alt="Affil">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/IDP_Education_logo.svg/1200px-IDP_Education_logo.svg.png"
                class="logo-item" alt="Affil">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/3e/ICEF_logo.svg/1200px-ICEF_logo.svg.png"
                class="logo-item" alt="Affil">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/PIER_logo.svg/1200px-PIER_logo.svg.png"
                class="logo-item" alt="Affil">
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-padding testimonials" id="testimonials">
        <div class="text-center reveal">
            <h2 class="section-title">Students Experience with Broadway Global</h2>
            <p class="section-subtitle">Hear what our successful students have to say about their journey.</p>
        </div>
        <div class="testimonial-grid">
            <div class="t-card reveal reveal-delay-1">
                <div class="t-user">
                    <img src="https://i.pravatar.cc/150?u=abu" alt="Abu">
                    <div>
                        <h5>Abu Sufian</h5>
                        <span>University of Debrecen • Hungary</span>
                    </div>
                </div>
                <p>"Broadway Global guided me at every stage of my journey to studying in Hungary - from selecting the
                    perfect program to navigating the visa process. I highly recommend them!"</p>
            </div>
            <div class="t-card reveal reveal-delay-2">
                <div class="t-user">
                    <img src="https://i.pravatar.cc/150?u=danial" alt="Danial">
                    <div>
                        <h5>KM. Danial Sadat</h5>
                        <span>University Of Pecs • Hungary</span>
                    </div>
                </div>
                <p>"From the very first consultation all the way to arriving at my university, the team provided flawless
                    guidance and support. They truly deliver results."</p>
            </div>
            <div class="t-card reveal reveal-delay-3">
                <div class="t-user">
                    <img src="https://i.pravatar.cc/150?u=galib" alt="Galib">
                    <div>
                        <h5>Galib Mahtab</h5>
                        <span>University of Texas at Arlington • USA</span>
                    </div>
                </div>
                <p>"I'm really grateful to Broadway Global for their incredible support. They made the entire scholarship
                    and visa application process much easier and more efficient."</p>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="section-padding">
        <div class="text-center reveal">
            <h2 class="section-title">Explore Our Articles</h2>
            <p class="section-subtitle">Stay updated with the latest news and insights on international education.</p>
        </div>
        <div class="articles-grid">
            <div class="article-card reveal reveal-delay-1">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="article-img" alt="Blog">
                <div class="article-content">
                    <span class="article-date">March 15, 2024</span>
                    <h4>How to Choose the Right Country for Your Masters?</h4>
                    <a href="#" class="btn-read">Read Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="article-card reveal reveal-delay-2">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="article-img" alt="Blog">
                <div class="article-content">
                    <span class="article-date">March 10, 2024</span>
                    <h4>Top 10 Scholarships for International Students</h4>
                    <a href="#" class="btn-read">Read Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="article-card reveal reveal-delay-3">
                <img src="https://images.unsplash.com/photo-1454165833767-027ffea89c1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="article-img" alt="Blog">
                <div class="article-content">
                    <span class="article-date">March 05, 2024</span>
                    <h4>Visa Application Tips: Avoid Common Mistakes</h4>
                    <a href="#" class="btn-read">Read Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection