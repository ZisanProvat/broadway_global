@extends('layouts.main')

@section('title', 'Student Testimonials | Broadway Global | Success Stories & Reviews')

@section('extra-styles')
<style>
    /* Hero Section */
    .testi-hero {
        height: 52vh;
        background: linear-gradient(135deg, rgba(10, 29, 55, 0.92), rgba(219, 39, 119, 0.82)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: var(--white);
        text-align: center;
        padding: 0 8%;
        position: relative;
    }

    .testi-hero h1 {
        font-size: 3.8rem;
        font-weight: 800;
        margin-bottom: 15px;
        letter-spacing: -1.5px;
        opacity: 0;
        transform: translateY(30px);
        animation: heroFadeUp 0.8s cubic-bezier(0.4,0,0.2,1) 0.2s forwards;
    }

    .testi-hero p {
        font-size: 1.2rem;
        max-width: 780px;
        color: #E2E8F0;
        opacity: 0;
        transform: translateY(30px);
        animation: heroFadeUp 0.8s cubic-bezier(0.4,0,0.2,1) 0.4s forwards;
    }

    .breadcrumb {
        display: flex;
        gap: 10px;
        font-weight: 600;
        font-size: 0.95rem;
        color: #FCD34D;
        margin-top: 20px;
        opacity: 0;
        animation: heroFadeUp 0.8s cubic-bezier(0.4,0,0.2,1) 0.6s forwards;
    }
    .breadcrumb a { color: var(--white); text-decoration: none; opacity: 0.85; transition: 0.3s; }
    .breadcrumb a:hover { opacity: 1; color: #FCD34D; }

    @keyframes heroFadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* Stats Bar */
    .testi-stats-bar {
        background: linear-gradient(135deg, #0A1D37 0%, #1E1B4B 100%);
        padding: 40px 8%;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        border-bottom: 4px solid #DB2777;
    }

    .stat-box {
        text-align: center;
        color: var(--white);
    }

    .stat-box h3 {
        font-size: 2.6rem;
        font-weight: 800;
        background: linear-gradient(135deg, #FCD34D, #F9A8D4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 5px;
    }

    .stat-box p {
        font-size: 0.9rem;
        color: #CBD5E1;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Filters Bar */
    .filter-wrapper {
        padding: 50px 8% 20px;
        background: #F8FAFC;
        text-align: center;
    }

    .filter-btn-group {
        display: inline-flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
        background: var(--white);
        padding: 10px;
        border-radius: 50px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        border: 1px solid #E2E8F0;
    }

    .filter-btn {
        border: none;
        background: transparent;
        padding: 10px 24px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.95rem;
        color: var(--text-muted);
        cursor: pointer;
        transition: 0.3s;
    }

    .filter-btn:hover, .filter-btn.active {
        background: linear-gradient(135deg, #DB2777, #7C3AED);
        color: var(--white);
        box-shadow: 0 4px 15px rgba(219, 39, 119, 0.3);
    }

    /* Testimonials Grid */
    .testimonials-grid-wrapper {
        padding: 50px 8% 90px;
        background: #F8FAFC;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .testi-card {
        background: var(--white);
        border-radius: 24px;
        padding: 35px 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border: 1px solid #E2E8F0;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .testi-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(219, 39, 119, 0.12);
        border-color: rgba(219, 39, 119, 0.3);
    }

    .testi-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 20px;
    }

    .student-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #FBCFE8;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .student-info h4 {
        font-size: 1.15rem;
        font-weight: 800;
        color: var(--primary);
        margin: 0 0 4px 0;
    }

    .student-info p {
        font-size: 0.85rem;
        color: var(--text-muted);
        margin: 0;
    }

    .country-flag-badge {
        margin-left: auto;
        display: flex;
        align-items: center;
        gap: 6px;
        background: #F1F5F9;
        padding: 5px 12px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.8rem;
        color: #334155;
    }

    .country-flag-badge img {
        width: 20px;
        height: 14px;
        border-radius: 2px;
    }

    .stars-rating {
        color: #F59E0B;
        font-size: 0.9rem;
        margin-bottom: 15px;
        display: flex;
        gap: 3px;
    }

    .quote-text {
        font-size: 0.98rem;
        color: #475569;
        line-height: 1.7;
        font-style: italic;
        margin-bottom: 20px;
        flex-grow: 1;
        position: relative;
    }

    .quote-text::before {
        content: '“';
        font-size: 3rem;
        color: #FBCFE8;
        position: absolute;
        top: -15px;
        left: -15px;
        z-index: 0;
        font-family: Georgia, serif;
    }

    .quote-text span {
        position: relative;
        z-index: 1;
    }

    .visa-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(22, 163, 74, 0.1);
        color: #16A34A;
        font-weight: 700;
        font-size: 0.85rem;
        padding: 8px 16px;
        border-radius: 50px;
        align-self: flex-start;
        margin-top: auto;
    }

    /* Google Reviews Banner */
    .google-reviews-bar {
        margin: 60px 8% 90px;
        background: var(--white);
        border-radius: 24px;
        padding: 40px 50px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.06);
        border: 1px solid #E2E8F0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .google-brand {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .google-icon {
        font-size: 3rem;
        background: linear-gradient(135deg, #4285F4, #EA4335, #FBBC05, #34A853);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .google-text h3 {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 4px;
    }

    .google-text p {
        font-size: 0.95rem;
        color: var(--text-muted);
        margin: 0;
    }

    .google-score {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .score-number {
        font-size: 3rem;
        font-weight: 800;
        color: var(--primary);
    }

    @media (max-width: 992px) {
        .testimonials-grid { grid-template-columns: repeat(2, 1fr); }
        .testi-stats-bar { grid-template-columns: repeat(2, 1fr); }
        .google-reviews-bar { flex-direction: column; text-align: center; gap: 20px; }
        .testi-hero h1 { font-size: 2.8rem; }
    }

    @media (max-width: 600px) {
        .testimonials-grid { grid-template-columns: 1fr; }
        .testi-stats-bar { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<div class="testi-hero">
    <h1>Student Success Stories</h1>
    <p>Read inspiring journeys of students and professionals who achieved their international education and visa dreams with Broadway Global.</p>
    <div class="breadcrumb">
        <a href="/">Home</a> <span>/</span> <span>Testimonials</span>
    </div>
</div>

<!-- Stats Bar -->
<div class="testi-stats-bar">
    <div class="stat-box">
        <h3>10,000+</h3>
        <p>Students Advised</p>
    </div>
    <div class="stat-box">
        <h3>99.2%</h3>
        <p>Visa Success Rate</p>
    </div>
    <div class="stat-box">
        <h3>500+</h3>
        <p>Partner Universities</p>
    </div>
    <div class="stat-box">
        <h3>4.9 / 5</h3>
        <p>Client Satisfaction</p>
    </div>
</div>

<!-- Filters Bar -->
<div class="filter-wrapper">
    <div class="filter-btn-group">
        <button class="filter-btn active" onclick="filterTestimonials('all', this)">All Stories</button>
        <button class="filter-btn" onclick="filterTestimonials('uk', this)">🇬🇧 United Kingdom</button>
        <button class="filter-btn" onclick="filterTestimonials('canada', this)">🇨🇦 Canada</button>
        <button class="filter-btn" onclick="filterTestimonials('australia', this)">🇦🇺 Australia</button>
        <button class="filter-btn" onclick="filterTestimonials('europe', this)">🇪🇺 Europe</button>
        <button class="filter-btn" onclick="filterTestimonials('malaysia', this)">🇲🇾 Malaysia</button>
    </div>
</div>

<!-- Testimonials Grid -->
<div class="testimonials-grid-wrapper">
    <div class="testimonials-grid" id="testimonialsGrid">
        
        <!-- Testimonial 1 -->
        <div class="testi-card" data-category="uk">
            <div class="testi-header">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Tanvir Hossain" class="student-avatar">
                <div class="student-info">
                    <h4>Tanvir Hossain</h4>
                    <p>MSc Data Science, Univ. of Greenwich</p>
                </div>
                <div class="country-flag-badge">
                    <img src="https://flagcdn.com/gb.svg" alt="UK"> UK
                </div>
            </div>
            <div class="stars-rating">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="quote-text">
                <span>"Broadway Global made my UK study visa process completely seamless! From offer letter to CAS letter and visa interview prep, their counselors were supportive at every single step."</span>
            </div>
            <div class="visa-tag">
                <i class="fas fa-check-circle"></i> UK Student Visa Approved in 10 Days
            </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testi-card" data-category="canada">
            <div class="testi-header">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Nusrat Jahan" class="student-avatar">
                <div class="student-info">
                    <h4>Nusrat Jahan</h4>
                    <p>Post-Graduate Diploma, Seneca College</p>
                </div>
                <div class="country-flag-badge">
                    <img src="https://flagcdn.com/ca.svg" alt="Canada"> Canada
                </div>
            </div>
            <div class="stars-rating">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="quote-text">
                <span>"Getting a Canada study visa felt daunting, but the team at Broadway Global structured my financial documents and SOP so well that my visa got approved without any hassle!"</span>
            </div>
            <div class="visa-tag">
                <i class="fas fa-check-circle"></i> Canada SDS Visa Approved
            </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testi-card" data-category="australia">
            <div class="testi-header">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Arafat Rahman" class="student-avatar">
                <div class="student-info">
                    <h4>Arafat Rahman</h4>
                    <p>Bachelor of IT, Deakin University</p>
                </div>
                <div class="country-flag-badge">
                    <img src="https://flagcdn.com/au.svg" alt="Australia"> Australia
                </div>
            </div>
            <div class="stars-rating">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="quote-text">
                <span>"I am extremely grateful to Broadway Global for guiding me towards a $10,000 scholarship at Deakin University. Highly recommended for genuine Australian consultancy!"</span>
            </div>
            <div class="visa-tag">
                <i class="fas fa-check-circle"></i> Australia Subclass 500 Granted
            </div>
        </div>

        <!-- Testimonial 4 -->
        <div class="testi-card" data-category="europe">
            <div class="testi-header">
                <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Farzana Akter" class="student-avatar">
                <div class="student-info">
                    <h4>Farzana Akter</h4>
                    <p>Master in Management, Sapienza Univ.</p>
                </div>
                <div class="country-flag-badge">
                    <img src="https://flagcdn.com/it.svg" alt="Italy"> Italy
                </div>
            </div>
            <div class="stars-rating">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="quote-text">
                <span>"Studying in Italy with a 100% regional scholarship was a dream come true. Broadway Global helped me secure admission and guided me through pre-enrollment!"</span>
            </div>
            <div class="visa-tag">
                <i class="fas fa-check-circle"></i> Italy Student Visa Approved
            </div>
        </div>

        <!-- Testimonial 5 -->
        <div class="testi-card" data-category="europe">
            <div class="testi-header">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Mahmudul Hasan" class="student-avatar">
                <div class="student-info">
                    <h4>Mahmudul Hasan</h4>
                    <p>Skilled Technician Permit</p>
                </div>
                <div class="country-flag-badge">
                    <img src="https://flagcdn.com/hr.svg" alt="Croatia"> Croatia
                </div>
            </div>
            <div class="stars-rating">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="quote-text">
                <span>"I applied for a Croatian skilled work permit through Broadway Global. Everything was transparent, legal, and fast. Now I am working happily in Croatia!"</span>
            </div>
            <div class="visa-tag">
                <i class="fas fa-check-circle"></i> Croatia Work Permit Issued
            </div>
        </div>

        <!-- Testimonial 6 -->
        <div class="testi-card" data-category="malaysia">
            <div class="testi-header">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Sumiya Islam" class="student-avatar">
                <div class="student-info">
                    <h4>Sumiya Islam</h4>
                    <p>BBA, Asia Pacific University (APU)</p>
                </div>
                <div class="country-flag-badge">
                    <img src="https://flagcdn.com/my.svg" alt="Malaysia"> Malaysia
                </div>
            </div>
            <div class="stars-rating">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="quote-text">
                <span>"Fast processing, friendly behavior, and zero hidden costs! My EMGS approval came within 3 weeks. Thank you Broadway Global team."</span>
            </div>
            <div class="visa-tag">
                <i class="fas fa-check-circle"></i> Malaysia Student Visa Approved
            </div>
        </div>

    </div>
</div>

<!-- Google Trust Banner -->
<div class="google-reviews-bar">
    <div class="google-brand">
        <i class="fab fa-google google-icon"></i>
        <div class="google-text">
            <h3>Verified Google Reviews</h3>
            <p>Based on over 1,200+ authentic reviews from students & clients.</p>
        </div>
    </div>
    <div class="google-score">
        <span class="score-number">4.9</span>
        <div>
            <div class="stars-rating" style="font-size: 1.2rem; margin: 0;">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <span style="color:#64748B; font-weight:600; font-size:0.85rem;">Overall Rating</span>
        </div>
    </div>
</div>
@endsection

@section('extra-scripts')
<script>
    function filterTestimonials(category, btnElement) {
        // Update active button
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(btn => btn.classList.remove('active'));
        btnElement.classList.add('active');

        // Filter cards
        const cards = document.querySelectorAll('.testi-card');
        cards.forEach(card => {
            if (category === 'all' || card.getAttribute('data-category') === category) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
@endsection
