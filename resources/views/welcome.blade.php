@extends('layouts.main')

@section('title', 'Broadway Global | Study Abroad & Visa Consultancy')

@section('extra-styles')
    <style>
        /* Parallax Master */
        .parallax-master {
            width: 100%;
            height: 85vh; /* Reduced from 100vh */
            position: relative;
            background: #020617;
            overflow: hidden;
            z-index: 1;
        }

        .parallax-scene {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            will-change: transform;
        }

        /* Layer 1: Sky */
        .layer-sky {
            background: linear-gradient(180deg, #1e1b4b 0%, #4c1d95 50%, #9d174d 100%);
            z-index: 1;
        }

        /* Sun / Moon */
        .layer-sun {
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .sun-orb {
            width: 40vw;
            height: 40vw;
            border-radius: 50%;
            background: radial-gradient(circle, #fcd34d 0%, #f59e0b 40%, transparent 70%);
            filter: blur(20px);
            opacity: 0.8;
            transform: translateY(20vh);
        }

        /* Layer 2: Mountains BG */
        .layer-mountains {
            z-index: 3;
            bottom: -5%;
            top: auto;
            height: 60vh;
        }
        .layer-mountains svg {
            width: 100vw;
            height: 100%;
            display: block;
        }

        /* Layer 3: Mountains FG */
        .layer-mountains-fg {
            z-index: 5;
            bottom: -10%;
            top: auto;
            height: 40vh;
        }
        .layer-mountains-fg svg {
            width: 100vw;
            height: 100%;
            display: block;
        }

        /* Magical Glowing Waterfall (CSS Art) */
        .waterfall-container {
            position: absolute;
            left: 15%;
            top: 0;
            width: 15vw;
            height: 100%;
            z-index: 4;
            opacity: 0; /* Hidden in phase 1 */
            filter: drop-shadow(0 0 30px rgba(124, 58, 237, 0.6));
        }
        .waterfall {
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(167, 139, 250, 0.8) 0%, rgba(139, 92, 246, 0.4) 50%, transparent 100%);
            mask-image: linear-gradient(to bottom, black 0%, black 80%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 0%, black 80%, transparent 100%);
        }
        .waterfall::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 200%;
            background: repeating-linear-gradient(to bottom, transparent, transparent 10px, rgba(255,255,255,0.2) 10px, rgba(255,255,255,0.2) 20px);
            animation: waterfallFlow 2s linear infinite;
        }
        @keyframes waterfallFlow {
            0% { transform: translateY(0); }
            100% { transform: translateY(-50%); }
        }

        /* Compass Object */
        .hero-object-layer {
            z-index: 6;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }
        .obj-compass {
            width: 30vw;
            max-width: 400px;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.8)) drop-shadow(0 0 20px rgba(252, 211, 77, 0.4));
        }

        /* Text Phases */
        .text-phase {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 10%;
            opacity: 0; /* Managed by GSAP */
            pointer-events: none;
        }
        
        .text-phase.active {
            pointer-events: auto;
        }

        .huge-title {
            font-size: 10vw;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -2px;
            color: rgba(255,255,255,0.9);
            margin: 0;
            line-height: 1;
            /* Mix blend mode for cinematic effect over the sun */
            mix-blend-mode: overlay;
        }

        .huge-title-solid {
            font-size: 10vw;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -2px;
            margin: 0;
            line-height: 1;
            background: linear-gradient(to bottom, #ffffff 20%, #a5b4fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 10px 20px rgba(0,0,0,0.5));
        }

        .phase-content {
            width: 40vw;
            margin-top: 20px;
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            line-height: 1.6;
            text-shadow: 0 5px 15px rgba(0,0,0,0.8);
        }
        
        .phase-content.right-aligned {
            align-self: flex-end;
            text-align: right;
        }
        .phase-content.right-aligned .btn-text {
            justify-content: flex-end;
        }

        .btn-explore {
            margin-top: 30px;
            padding: 15px 30px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            font-weight: 700;
            font-size: 1rem;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        .btn-explore:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .btn-text {
            margin-top: 30px;
            background: none;
            border: none;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border-bottom: 2px solid transparent;
            padding-bottom: 5px;
            transition: 0.3s;
        }
        .btn-text:hover {
            border-bottom-color: #FCD34D;
            color: #FCD34D;
            gap: 15px;
        }
        
        /* Custom Birds */
        .bird {
            position: absolute;
            width: 20px;
            height: 10px;
            border-radius: 50%;
            border-top: 2px solid white;
            z-index: 6;
            opacity: 0.6;
        }
        .bird::before, .bird::after {
            content: '';
            position: absolute;
            width: 12px;
            height: 10px;
            border-top: 2px solid white;
            border-radius: 50%;
            top: 0;
        }
        .bird::before { left: -8px; transform: rotate(20deg); }
        .bird::after { right: -8px; transform: rotate(-20deg); }
        
        .bird-1 { top: 30%; left: 20%; transform: scale(1); }
        .bird-2 { top: 25%; left: 25%; transform: scale(0.8); }
        .bird-3 { top: 32%; left: 28%; transform: scale(0.6); }

        /* Hero Features Grid */
        .hero-features-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 30px;
        }
        .hero-feat-item {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            padding: 12px 15px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            font-weight: 600;
        }
        .hero-feat-item i {
            color: #FCD34D;
        }

        /* General Cinematic Overrides for Homepage */
        .scroll-progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, #7C3AED, #0891B2, #DB2777);
            z-index: 9999;
            box-shadow: 0 0 10px rgba(124, 58, 237, 0.5);
            pointer-events: none;
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

        .service-list {
            display: none;
        }
        .service-list.active {
            display: grid;
        }

        /* Popular Destinations */
        .dest-section {
            background: #fff;
            position: relative;
            z-index: 5;
        }
        .dest-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }
        .dest-card {
            position: relative;
            height: 350px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .dest-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.6s;
        }
        .dest-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(10, 29, 55, 0.9), transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
            color: white;
            transition: 0.4s;
        }
        .dest-card:hover img { transform: scale(1.1); }
        .dest-card:hover .dest-overlay { background: linear-gradient(to top, rgba(124, 58, 237, 0.9), transparent); }
        
        .dest-info h4 { font-size: 1.5rem; font-weight: 800; margin-bottom: 5px; }
        .dest-info p { font-size: 0.85rem; opacity: 0.8; margin: 0; }
        .dest-flag {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 30px;
            border-radius: 4px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            object-fit: cover;
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
            background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 60%, #020617 100%);
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
            .hero-text-container {
                transform: translateY(20px);
            }

            .hero-text-container h1 {
                font-size: 2.5rem;
                line-height: 1.2;
                margin-bottom: 20px;
            }

            .hero-text-container p {
                font-size: 1rem;
                margin-bottom: 30px;
            }

            .initial-title h1 {
                font-size: 8vw;
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

            .hero-actions {
                flex-direction: column;
                gap: 15px;
            }

            .btn-apply, .btn-outline-light {
                width: 100%;
                justify-content: center;
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
            .hero-text-container h1 {
                font-size: 2.2rem;
            }
        }

        .scroll-down-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }

        .scroll-arrow {
            width: 40px;
            height: 40px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            animation: bounce 2s infinite;
        }

        .scroll-down-indicator:hover .scroll-arrow {
            background: rgba(255, 255, 255, 0.1);
            border-color: #fff;
        }

        @keyframes scrollWheel {
            0% { transform: translate(-50%, 0); opacity: 1; }
            100% { transform: translate(-50%, 15px); opacity: 0; }
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-50%) translateY(-5px); }
        }
    </style>
@endsection

@section('content')
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress-bar"></div>

    <!-- Hero Section -->
    <section class="parallax-master">
        <div class="parallax-scene">
            <!-- Layers -->
            <div class="layer layer-sky"></div>
            <div class="layer layer-sun">
                <div class="sun-orb"></div>
            </div>
            <div class="layer layer-mountains">
                <!-- SVG mountain silhouette -->
                <svg viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill="#1e1b4b" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            </div>
            
            <div class="waterfall-container">
                <div class="waterfall"></div>
            </div>

            <div class="layer layer-mountains-fg">
                <svg viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill="#020617" fill-opacity="1" d="M0,256L60,245.3C120,235,240,213,360,213.3C480,213,600,235,720,240C840,245,960,235,1080,208C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
            </div>
            
            <div class="layer moving-objects">
                <div class="bird bird-1"></div>
                <div class="bird bird-2"></div>
                <div class="bird bird-3"></div>
            </div>

            <!-- Compass Object -->
            <div class="layer hero-object-layer">
                <img src="{{ asset('images/compass.png') }}" alt="Compass" class="obj-compass">
            </div>

            <!-- Text Phases -->
            <div class="text-phase phase-1">
                <h1 class="huge-title">DISCOVER</h1>
                <div class="phase-content">
                    <p>Away from the ordinary, begins your journey to global success. Find your perfect study destination with Broadway Global.</p>
                    
                    <!-- Restored Features -->
                    <div class="hero-features-grid">
                        <div class="hero-feat-item"><i class="fas fa-check-circle"></i> Expert Team</div>
                        <div class="hero-feat-item"><i class="fas fa-check-circle"></i> Trusted Support</div>
                        <div class="hero-feat-item"><i class="fas fa-check-circle"></i> Free Counseling</div>
                        <div class="hero-feat-item"><i class="fas fa-check-circle"></i> 100% Transparent</div>
                    </div>

                    <button class="btn-explore" style="margin-top: 40px;">Start the journey <i class="fas fa-play"></i></button>
                </div>
            </div>

            <div class="text-phase phase-2">
                <h1 class="huge-title-solid">GUIDANCE</h1>
                <div class="phase-content right-aligned">
                    <p>Navigating the complexities of university admissions and visa processing. We provide the tranquility of expert, transparent support.</p>
                    <button class="btn-text">Learn more <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="text-phase phase-3">
                <h1 class="huge-title-solid">SUCCESS</h1>
                <div class="phase-content">
                    <p>Join a diverse ecosystem of successful students across top global universities. Your future is waiting.</p>
                    <button class="btn-explore" style="background: linear-gradient(135deg, #7C3AED, #0891B2); border: none;">Apply Now <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="scroll-down-indicator" onclick="window.lenis.scrollTo('.partners')">
                <div class="scroll-arrow">
                    <i class="fas fa-chevron-down"></i>
                </div>
                <p>Explore</p>
            </div>
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
                <button class="tab-btn active" onclick="switchTab(event, 'post-visa')">POST VISA SERVICES</button>
                <button class="tab-btn" onclick="switchTab(event, 'pre-visa')">PRE VISA SERVICES</button>
            </div>
            
            <div id="post-visa" class="service-list active">
                <div class="service-item"><i class="fas fa-chevron-right"></i> Pre Departure Guidance</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Assessment on Profile</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Ticketing Assistance</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Application with Scholarship</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Support For Accommodate</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Advice on Bank Sponsor</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Assistance to Finding Jobs</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Legal & Immigration Support</div>
            </div>

            <div id="pre-visa" class="service-list">
                <div class="service-item"><i class="fas fa-chevron-right"></i> Course Selection</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> University Selection</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Scholarship Assistance</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Document Preparation</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> SOP & LOR Guidance</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Interview Preparation</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Financial Counseling</div>
                <div class="service-item"><i class="fas fa-chevron-right"></i> Career Path Mapping</div>
            </div>
        </div>
        <div class="why-images reveal-right">
            <div class="img-large">
                <img src="{{ asset('images/consultancy_side.png') }}" alt="Consultancy">
            </div>
            <img src="{{ asset('images/students_collage.png') }}" alt="Students">
            <img src="{{ asset('images/hero_study.png') }}" alt="University">
        </div>
    </section>

    <!-- Popular Destinations -->
    <section class="section-padding dest-section">
        <div class="text-center reveal">
            <h2 class="section-title">Popular Destinations</h2>
            <p class="section-subtitle">Choose from over 15+ countries to begin your international education journey.</p>
        </div>
        <div class="dest-grid">
            <!-- USA -->
            <div class="dest-card reveal reveal-delay-1" onclick="window.location.href='/destinations/usa'">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=600&q=80" alt="USA">
                <img src="https://flagcdn.com/us.svg" class="dest-flag" alt="USA Flag">
                <div class="dest-overlay">
                    <div class="dest-info">
                        <h4>USA</h4>
                        <p>World-class education and innovation.</p>
                    </div>
                </div>
            </div>
            <!-- UK -->
            <div class="dest-card reveal reveal-delay-2" onclick="window.location.href='/destinations/uk'">
                <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=600&q=80" alt="UK">
                <img src="https://flagcdn.com/gb.svg" class="dest-flag" alt="UK Flag">
                <div class="dest-overlay">
                    <div class="dest-info">
                        <h4>United Kingdom</h4>
                        <p>Rich history and academic excellence.</p>
                    </div>
                </div>
            </div>
            <!-- Canada -->
            <div class="dest-card reveal reveal-delay-3" onclick="window.location.href='/destinations/canada'">
                <img src="https://images.unsplash.com/photo-1503614472-8c93d56e92ce?auto=format&fit=crop&w=600&q=80" alt="Canada">
                <img src="https://flagcdn.com/ca.svg" class="dest-flag" alt="Canada Flag">
                <div class="dest-overlay">
                    <div class="dest-info">
                        <h4>Canada</h4>
                        <p>Welcoming environment and post-grad options.</p>
                    </div>
                </div>
            </div>
            <!-- Australia -->
            <div class="dest-card reveal reveal-delay-4" onclick="window.location.href='/destinations/australia'">
                <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?auto=format&fit=crop&w=600&q=80" alt="Australia">
                <img src="https://flagcdn.com/au.svg" class="dest-flag" alt="Australia Flag">
                <div class="dest-overlay">
                    <div class="dest-info">
                        <h4>Australia</h4>
                        <p>High quality of life and great universities.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center" style="margin-top: 50px;">
            <a href="#" class="btn-read" style="justify-content: center; font-size: 1.1rem; color: #7C3AED;">Explore All 15+ Countries <i class="fas fa-globe"></i></a>
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

@section('extra-scripts')
<script>
    function switchTab(event, tabId) {
        // Remove active class from all buttons
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        event.currentTarget.classList.add('active');
        
        // Hide all lists
        document.querySelectorAll('.service-list').forEach(list => {
            list.classList.remove('active');
            gsap.to(list, { opacity: 0, y: 10, duration: 0.2, display: 'none' });
        });
        
        // Show target list
        const target = document.getElementById(tabId);
        target.classList.add('active');
        gsap.fromTo(target, 
            { opacity: 0, y: 10, display: 'grid' }, 
            { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" }
        );
    }

    document.addEventListener("DOMContentLoaded", (event) => {
        gsap.registerPlugin(ScrollTrigger);

        let mm = gsap.matchMedia();

        mm.add("(min-width: 992px)", () => {
            // ==========================================
            // 1. HERO PARALLAX MASTER
            // ==========================================
            gsap.set(".phase-1", { opacity: 1, y: 0 });
            gsap.set(".phase-2", { opacity: 0, y: 50 });
            gsap.set(".phase-3", { opacity: 0, y: 50 });
            gsap.set(".waterfall-container", { opacity: 0, y: -100 });
            gsap.set(".layer-mountains", { y: 0 });
            gsap.set(".layer-mountains-fg", { y: 0 });
            gsap.set(".sun-orb", { y: 0, scale: 1 });
            gsap.set(".obj-compass", { x: "0vw", y: "0vh", scale: 1, rotation: 0 });

            const tlHero = gsap.timeline({
                scrollTrigger: {
                    trigger: ".parallax-master",
                    start: "top top",
                    end: "+=1500",
                    scrub: 1,
                    pin: true,
                }
            });

            tlHero.to(".scroll-down-indicator", { opacity: 0, duration: 0.5 }, 0)
                  .to(".phase-1", { opacity: 0, y: -50, duration: 1 }, 0)
                  .to(".layer-sky", { background: "linear-gradient(180deg, #0f172a 0%, #312e81 50%, #1e1b4b 100%)", duration: 2 }, 0)
                  .to(".sun-orb", { y: "-30vh", scale: 0.8, opacity: 0.4, duration: 2 }, 0)
                  .to(".layer-mountains", { y: "20vh", duration: 2 }, 0)
                  .to(".layer-mountains-fg", { y: "10vh", duration: 2 }, 0)
                  .to(".obj-compass", { x: "20vw", y: "10vh", scale: 0.7, rotation: 15, duration: 2, ease: "power1.inOut" }, 0)
                  .to(".bird", { x: "20vw", y: "-20vh", opacity: 0, duration: 1.5 }, 0)
                  .to(".waterfall-container", { opacity: 1, y: 0, duration: 1.5 }, 0.5)
                  .to(".phase-2", { opacity: 1, y: 0, duration: 1 }, 1);
                  
            tlHero.to({}, { duration: 1 });
            
            tlHero.to(".phase-2", { opacity: 0, y: -50, duration: 1 }, 3)
                  .to(".layer-sky", { background: "linear-gradient(180deg, #1e1b4b 0%, #4c1d95 30%, #ec4899 100%)", duration: 2 }, 3)
                  .to(".waterfall-container", { x: "-10vw", opacity: 0.2, duration: 2 }, 3)
                  .to(".layer-mountains", { y: "40vh", opacity: 0.5, duration: 2 }, 3)
                  .to(".layer-mountains-fg", { y: "30vh", duration: 2 }, 3)
                  .to(".obj-compass", { x: "-20vw", y: "0vh", scale: 1.2, rotation: -10, duration: 2, ease: "power1.inOut" }, 3)
                  .to(".phase-3", { opacity: 1, y: 0, duration: 1 }, 4);
                  
            tlHero.to({}, { duration: 1 });

            // ==========================================
            // 2. PARTNERS MARQUEE SKEW
            // ==========================================
            // Disable original CSS marquee if we want GSAP to control it, 
            // or just use ScrollTrigger to alter the existing CSS animation speed/skew.
            gsap.to(".marquee-track", {
                scrollTrigger: {
                    trigger: ".partners",
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 1,
                    onUpdate: self => {
                        let skewAmount = self.getVelocity() / 100;
                        let scaleAmount = 1 + Math.abs(self.getVelocity() / 4000);
                        gsap.to(".marquee-track", { 
                            skewX: skewAmount, 
                            scale: Math.min(scaleAmount, 1.05),
                            overwrite: "auto", 
                            duration: 0.5 
                        });
                    }
                }
            });

            // ==========================================
            // 3. STATS STAGGER REVEAL
            // ==========================================
            gsap.from(".stat-item", {
                scrollTrigger: {
                    trigger: ".stats",
                    start: "top 80%",
                },
                y: 50,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: "power3.out"
            });

            // ==========================================
            // 4. WHY CHOOSE US - IMAGE PARALLAX PIN
            // ==========================================
            // Pin the images while text scrolls past
            ScrollTrigger.create({
                trigger: ".why-choose",
                start: "top top",
                end: "bottom bottom",
                pin: ".why-images",
                pinSpacing: false,
            });

            gsap.from(".service-item", {
                scrollTrigger: {
                    trigger: ".why-choose",
                    start: "top 60%",
                },
                x: -50,
                opacity: 0,
                stagger: 0.1,
                duration: 0.8,
                ease: "power2.out"
            });

            // ==========================================
            // 5. FEATURED VIDEOS 3D FLOAT
            // ==========================================
            gsap.from(".video-card", {
                scrollTrigger: {
                    trigger: ".videos-section",
                    start: "top 70%",
                },
                y: 100,
                rotationX: -15,
                opacity: 0,
                transformOrigin: "top center",
                stagger: 0.2,
                duration: 1.2,
                ease: "back.out(1.7)"
            });

            // ==========================================
            // 6. AWARDS GRID STAGGER
            // ==========================================
            gsap.from(".award-card", {
                scrollTrigger: {
                    trigger: ".awards-grid",
                    start: "top 85%",
                },
                scale: 0.8,
                opacity: 0,
                stagger: 0.15,
                duration: 1,
                ease: "elastic.out(1, 0.7)"
            });

            // ==========================================
            // 7. TESTIMONIALS STAGGER ANIMATION
            // ==========================================
            gsap.from(".t-card", {
                scrollTrigger: {
                    trigger: ".testimonials",
                    start: "top 75%",
                },
                y: 80,
                opacity: 0,
                scale: 0.9,
                stagger: 0.2,
                duration: 1,
                ease: "power3.out"
            });

            // ==========================================
            // 8. POPULAR DESTINATIONS STAGGER
            // ==========================================
            gsap.from(".dest-card", {
                scrollTrigger: {
                    trigger: ".dest-grid",
                    start: "top 80%",
                },
                y: 60,
                opacity: 0,
                stagger: 0.15,
                duration: 1,
                ease: "power2.out"
            });

            // ==========================================
            // 8. ARTICLES IMAGE PARALLAX
            // ==========================================
            gsap.utils.toArray(".article-card").forEach(card => {
                let img = card.querySelector(".article-img");
                gsap.to(img, {
                    yPercent: 20,
                    ease: "none",
                    scrollTrigger: {
                        trigger: card,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true
                    }
                });
            });

            // ==========================================
            // 9. SCROLL PROGRESS BAR
            // ==========================================
            gsap.to(".scroll-progress-bar", {
                width: "100%",
                ease: "none",
                scrollTrigger: {
                    trigger: document.body,
                    start: "top top",
                    end: "bottom bottom",
                    scrub: true
                }
            });

            return () => { 
                ScrollTrigger.getAll().forEach(t => t.kill()); 
            };
        });

        // Mobile fallback
        mm.add("(max-width: 991px)", () => {
            gsap.set(".phase-1", { opacity: 1, y: 0 });
            gsap.set(".phase-2", { opacity: 0, y: 20 });
            gsap.set(".phase-3", { opacity: 0, y: 20 });
            gsap.set(".obj-compass", { scale: 0.5, y: "-20vh" });

            const tlMobile = gsap.timeline({
                scrollTrigger: {
                    trigger: ".parallax-master",
                    start: "top top",
                    end: "+=1000",
                    scrub: 1,
                    pin: true,
                }
            });

            tlMobile.to(".scroll-down-indicator", { opacity: 0, duration: 0.5 }, 0)
                    .to(".phase-1", { opacity: 0, duration: 1 }, 0)
                    .to(".phase-2", { opacity: 1, y: 0, duration: 1 }, 1)
                    .to(".phase-2", { opacity: 0, duration: 1 }, 3)
                    .to(".phase-3", { opacity: 1, y: 0, duration: 1 }, 4);
        });
    });
</script>
@endsection