@extends('layouts.main')

@section('title', 'About Us | Broadway Global | Study Abroad & Visa Consultancy')

@section('extra-styles')
    <style>
        /* Hero Section */
        .about-hero {
            height: 50vh;
            background: linear-gradient(rgba(10, 29, 55, 0.85), rgba(10, 29, 55, 0.85)), url('https://images.unsplash.com/photo-1541339903292-87044c067274?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: var(--white);
            text-align: center;
            padding: 0 8%;
        }

        .about-hero h1 {
            font-size: 4rem; font-weight: 800; margin-bottom: 15px; letter-spacing: -1px;
            opacity: 0; transform: translateY(40px);
            animation: heroFadeUp 1s cubic-bezier(0.4,0,0.2,1) 0.3s forwards;
        }
        .breadcrumb {
            display: flex; gap: 10px; font-weight: 600; font-size: 1rem; color: var(--accent);
            opacity: 0; animation: heroFadeUp 1s cubic-bezier(0.4,0,0.2,1) 0.6s forwards;
        }
        .breadcrumb a { color: var(--white); opacity: 0.8; }
        .breadcrumb a:hover { opacity: 1; }

        @keyframes heroFadeUp {
            from { opacity: 0; transform: translateY(40px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* Story Section */
        .story-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }
        .story-image { position: relative; }
        .story-image img { width: 100%; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); transition: transform 0.5s ease, box-shadow 0.5s ease; }
        .story-image img:hover { transform: translateY(-10px); box-shadow: 0 30px 60px rgba(0,0,0,0.15); }
        .experience-badge {
            position: absolute;
            bottom: -30px;
            right: -30px;
            background: var(--accent);
            color: var(--white);
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(197, 160, 89, 0.4);
        }
        .experience-badge h2 { font-size: 3rem; font-weight: 800; line-height: 1; }
        .experience-badge p { font-size: 0.9rem; font-weight: 700; text-transform: uppercase; }

        .story-content h2 { font-size: 2.8rem; font-weight: 800; margin-bottom: 25px; color: var(--primary); }
        .story-content p { margin-bottom: 20px; font-size: 1.1rem; color: var(--text-muted); }
        
        .highlight-box {
            background: linear-gradient(135deg, rgba(124,58,237,0.15), rgba(8,145,178,0.15));
            padding: 25px 30px;
            border-left: 5px solid #7C3AED;
            margin-top: 30px;
            border-radius: 0 12px 12px 0;
            font-style: italic;
            font-weight: 600;
            color: #E2E8F0;
        }

        /* Mission & Vision */
        .mission-vision { background: linear-gradient(135deg, #0A1D37 0%, #7C3AED 50%, #0891B2 100%); color: var(--white); }
        .mv-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .mv-card {
            background: rgba(255,255,255,0.08);
            padding: 50px;
            border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.15);
            transition: 0.4s;
            position: relative; overflow: hidden;
        }
        .mv-card::after {
            content: '';
            position: absolute; bottom: -30px; right: -30px;
            width: 150px; height: 150px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }
        .mv-card:hover { background: rgba(255,255,255,0.14); transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.2); }
        .mv-icon { font-size: 3rem; color: #FCD34D; margin-bottom: 25px; }
        .mv-card h3 { font-size: 2rem; font-weight: 700; margin-bottom: 20px; }
        .mv-card p { opacity: 0.85; font-size: 1.05rem; }

        /* Values Section */
        .values-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; }
        .value-card {
            text-align: center;
            padding: 40px 20px;
            border-radius: 20px;
            transition: 0.4s;
            color: var(--white);
        }
        .value-card:hover { transform: translateY(-10px) scale(1.03); box-shadow: 0 25px 50px rgba(0,0,0,0.2); }
        .value-card:nth-child(1) { background: linear-gradient(135deg, #7C3AED, #4F46E5); }
        .value-card:nth-child(2) { background: linear-gradient(135deg, #0891B2, #0D9488); }
        .value-card:nth-child(3) { background: linear-gradient(135deg, #EA580C, #EAB308); }
        .value-card:nth-child(4) { background: linear-gradient(135deg, #DB2777, #9333EA); }
        .value-icon { 
            width: 80px; height: 80px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 2rem; color: var(--white); margin: 0 auto 25px;
            border: 2px solid rgba(255,255,255,0.35);
            transition: 0.3s;
        }
        .value-card:hover .value-icon { background: rgba(255,255,255,0.35); transform: rotate(10deg) scale(1.1); }
        .value-card h4 { font-size: 1.3rem; font-weight: 700; margin-bottom: 12px; }
        .value-card p { font-size: 0.95rem; opacity: 0.88; }

        /* Team Section */
        .team-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; }
        .team-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            text-align: center;
            transition: 0.4s;
            border-bottom: 4px solid transparent;
            border: 1px solid rgba(255,255,255,0.05);
        }
        .team-card:nth-child(1) { border-bottom: 4px solid #7C3AED; }
        .team-card:nth-child(2) { border-bottom: 4px solid #0891B2; }
        .team-card:nth-child(3) { border-bottom: 4px solid #DB2777; }
        .team-card:nth-child(4) { border-bottom: 4px solid #EA580C; }
        .team-card:hover { transform: translateY(-12px); box-shadow: 0 25px 50px rgba(0,0,0,0.5); }
        .team-img { width: 100%; height: 300px; object-fit: cover; transition: transform 0.5s ease; }
        .team-card:hover .team-img { transform: scale(1.05); }
        .team-info { padding: 25px; }
        .team-info h4 { font-size: 1.2rem; font-weight: 700; margin-bottom: 5px; }
        .team-info span { color: var(--accent); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; }
        .team-social { display: flex; justify-content: center; gap: 15px; margin-top: 15px; }
        .team-social a { color: var(--text-muted); font-size: 1.1rem; transition: 0.3s; }
        .team-social a:hover { color: var(--primary); transform: translateY(-3px); }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #7C3AED 0%, #4F46E5 30%, #0891B2 70%, #0D9488 100%);
            color: var(--white);
            text-align: center;
            padding: 90px 8%;
            border-radius: 30px;
            margin: 0 8% 100px;
            position: relative;
            overflow: hidden;
        }
        .cta-section::before {
            content: '';
            position: absolute;
            top: -60%; left: -30%;
            width: 160%; height: 220%;
            background: radial-gradient(ellipse at center, rgba(255,255,255,0.08) 0%, transparent 60%);
            animation: rotateBg 8s ease-in-out infinite alternate;
        }
        @keyframes rotateBg { from { transform: translateX(-10%) rotate(0deg); } to { transform: translateX(10%) rotate(20deg); } }
        .cta-section h2 { font-size: 3rem; font-weight: 800; margin-bottom: 20px; position: relative; z-index: 2; -webkit-text-fill-color: var(--white); }
        .cta-section p { font-size: 1.2rem; margin-bottom: 40px; opacity: 0.9; position: relative; z-index: 2; }
        .btn-cta {
            background: var(--card-bg);
            color: var(--white);
            padding: 18px 50px;
            border-radius: 50px;
            font-weight: 800;
            font-size: 1.1rem;
            display: inline-block;
            position: relative;
            z-index: 2;
            transition: 0.3s;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .btn-cta:hover { background: var(--white); color: var(--bg-deep); transform: scale(1.05); }

        /* CEO Section Styles */
        .ceo-section { text-align: center; max-width: 900px; margin: 0 auto; }
        .ceo-card {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            margin-bottom: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .ceo-card:hover { transform: translateY(-8px); box-shadow: 0 30px 60px rgba(0,0,0,0.15); }
        .ceo-img { width: 100%; height: 500px; object-fit: cover; object-position: top; }
        .ceo-overlay {
            position: absolute;
            bottom: 0; left: 0; width: 100%;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            padding: 40px;
            text-align: left;
            color: var(--white);
        }
        .ceo-overlay h3 { font-size: 2.5rem; font-weight: 800; margin-bottom: 5px; }
        .ceo-overlay p { color: var(--accent); font-weight: 700; font-size: 1.1rem; text-transform: uppercase; }
        .ceo-text { font-size: 1.2rem; color: var(--text-muted); line-height: 1.8; text-align: left; }

        @media (max-width: 992px) {
            .section-padding { padding: 60px 5%; }
            .section-title { font-size: 2rem; }
            .about-hero h1 { font-size: 2.2rem; }
            .story-section, .mv-grid { grid-template-columns: 1fr; gap: 40px; }
            .values-grid, .team-grid { grid-template-columns: 1fr 1fr; }
            .cta-section { margin: 0 5% 60px; }
        }

        @media (max-width: 768px) {
            .ceo-img { height: 400px; }
            .ceo-overlay h3 { font-size: 1.8rem; }
            .ceo-overlay { padding: 25px; }
            .values-grid, .team-grid { grid-template-columns: 1fr; }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="about-hero">
        <h1>About Broadway Global</h1>
        <div class="breadcrumb">
            <a href="/">Home</a>
            <i class="fas fa-chevron-right" style="font-size: 0.8rem;"></i>
            <span>About Us</span>
        </div>
    </section>

    <!-- Our Story -->
    <section class="section-padding">
        <div class="story-section">
            <div class="story-image reveal-left">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="About Us">
                <div class="experience-badge">
                    <h2>23+</h2>
                    <p>Years of<br>Excellence</p>
                </div>
            </div>
            <div class="story-content reveal-right">
                <h2>Our Journey Towards Global Education</h2>
                <p>Broadway Global was founded with a single vision: to bridge the gap between ambitious students and world-class international education. Over the past two decades, we have evolved into a trusted leader in study abroad consultancy.</p>
                <p>We believe that every student deserves the opportunity to explore global horizons. Our team of experts provides personalized guidance, ensuring that every step of the journey—from university selection to visa approval—is handled with utmost professionalism and transparency.</p>
                <div class="highlight-box">
                    "We don't just process applications; we build futures. Our success is measured by the success of our students in global universities."
                </div>
            </div>
        </div>
    </section>

    <!-- Words from CEO -->
    <section class="section-padding" style="background: var(--bg-alt);">
        <div class="ceo-section">
            <h2 class="section-title reveal">Words from Our CEO</h2>
            <div class="ceo-card reveal">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="ceo-img" alt="CEO">
                <div class="ceo-overlay">
                    <h3>Khurshid Alom Ripon</h3>
                    <p>CEO & Founder</p>
                </div>
            </div>
            <div class="ceo-text reveal">
                <p>With over 22 years of experience in international education consultancy, I have witnessed countless success stories of students who dared to dream big. At Broadway Global, our mission is to provide you with the most transparent and professional guidance to help you reach your goals.</p>
                <p>We understand that choosing the right path for your education is one of the most important decisions of your life. That's why we are committed to being your trusted partner throughout this journey.</p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="section-padding mission-vision">
        <div class="mv-grid">
            <div class="mv-card reveal-left">
                <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
                <h3>Our Mission</h3>
                <p>To empower students by providing accessible, honest, and comprehensive consultancy services that pave the way for their international academic success and personal growth.</p>
            </div>
            <div class="mv-card reveal-right">
                <div class="mv-icon"><i class="fas fa-eye"></i></div>
                <h3>Our Vision</h3>
                <p>To be the most trusted global education consultancy, recognized for our commitment to student success, ethical practices, and innovation in the field of international education.</p>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="section-padding">
        <div class="text-center reveal">
            <h2 class="section-title">Our Core Values</h2>
            <p class="section-subtitle">The principles that guide our every action and decision.</p>
        </div>
        <div class="values-grid">
            <div class="value-card reveal-zoom reveal-delay-1">
                <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                <h4>Integrity</h4>
                <p>We uphold the highest standards of honesty and ethical behavior in all our dealings.</p>
            </div>
            <div class="value-card reveal-zoom reveal-delay-2">
                <div class="value-icon"><i class="fas fa-handshake"></i></div>
                <h4>Transparency</h4>
                <p>Clear and open communication with students and partners at every stage of the process.</p>
            </div>
            <div class="value-card reveal-zoom reveal-delay-3">
                <div class="value-icon"><i class="fas fa-star"></i></div>
                <h4>Excellence</h4>
                <p>Striving for the best results for our students through expert knowledge and dedication.</p>
            </div>
            <div class="value-card reveal-zoom reveal-delay-4">
                <div class="value-icon"><i class="fas fa-users"></i></div>
                <h4>Student-Centric</h4>
                <p>Putting the needs and aspirations of our students at the heart of everything we do.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding" style="background: var(--bg-deep);">
        <div class="text-center reveal">
            <h2 class="section-title">Meet Our Leadership</h2>
            <p class="section-subtitle">Dedicated professionals committed to guiding your global education journey.</p>
        </div>
        <div class="team-grid">
            <div class="team-card reveal reveal-delay-1">
                <img src="https://i.pravatar.cc/300?u=1" class="team-img" alt="CEO">
                <div class="team-info">
                    <h4>Sarah Johnson</h4>
                    <span>Founder & CEO</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-card reveal reveal-delay-2">
                <img src="https://i.pravatar.cc/300?u=2" class="team-img" alt="Director">
                <div class="team-info">
                    <h4>David Miller</h4>
                    <span>Director of Admissions</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-card reveal reveal-delay-3">
                <img src="https://i.pravatar.cc/300?u=3" class="team-img" alt="Consultant">
                <div class="team-info">
                    <h4>Elena Rodriguez</h4>
                    <span>Senior Visa Specialist</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-card reveal reveal-delay-4">
                <img src="https://i.pravatar.cc/300?u=4" class="team-img" alt="Consultant">
                <div class="team-info">
                    <h4>Michael Chen</h4>
                    <span>Global Partnerships</span>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section reveal">
        <h2>Ready to Start Your Journey?</h2>
        <p>Join thousands of successful students who achieved their dreams with Broadway Global.</p>
        <a href="#" class="btn-cta">Book a Free Consultation <i class="fas fa-arrow-right" style="margin-left: 10px;"></i></a>
    </section>
@endsection
