@extends('layouts.main')

@section('title', 'Immigration & Skill Work | Broadway Global | Skilled Migration & Work Permits')

@section('extra-styles')
<style>
    /* Hero Section */
    .imm-hero {
        height: 52vh;
        background: linear-gradient(135deg, rgba(10, 29, 55, 0.92), rgba(8, 145, 178, 0.85)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
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

    .imm-hero h1 {
        font-size: 3.8rem;
        font-weight: 800;
        margin-bottom: 15px;
        letter-spacing: -1.5px;
        opacity: 0;
        transform: translateY(30px);
        animation: heroFadeUp 0.8s cubic-bezier(0.4,0,0.2,1) 0.2s forwards;
    }

    .imm-hero p {
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

    /* Section Header */
    .section-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 60px;
    }
    .badge-pill {
        display: inline-block;
        padding: 6px 18px;
        border-radius: 50px;
        background: rgba(8, 145, 178, 0.12);
        color: #0891B2;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 15px;
        border: 1px solid rgba(8, 145, 178, 0.25);
    }
    .section-header h2 {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--primary);
        letter-spacing: -1px;
        margin-bottom: 15px;
    }
    .section-header p {
        font-size: 1.1rem;
        color: var(--text-muted);
        line-height: 1.7;
    }

    /* Migration Destinations Grid */
    .destinations-section {
        padding: 90px 8%;
        background: #F8FAFC;
    }

    .imm-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 35px;
    }

    .imm-card {
        background: var(--white);
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border: 1px solid #E2E8F0;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
    }

    .imm-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(8, 145, 178, 0.15);
        border-color: rgba(8, 145, 178, 0.3);
    }

    .imm-card-header {
        height: 180px;
        position: relative;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: flex-end;
        padding: 20px;
    }

    .imm-card-header::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(10, 29, 55, 0.85), transparent);
    }

    .imm-country-badge {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--white);
    }

    .imm-country-badge img {
        width: 38px;
        height: 26px;
        border-radius: 4px;
        object-fit: cover;
        box-shadow: 0 2px 8px rgba(0,0,0,0.3);
    }

    .imm-country-badge h3 {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--white);
        margin: 0;
    }

    .imm-card-body {
        padding: 30px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .imm-program-tag {
        display: inline-block;
        font-size: 0.82rem;
        font-weight: 700;
        color: #7C3AED;
        background: rgba(124, 58, 237, 0.1);
        padding: 4px 12px;
        border-radius: 50px;
        margin-bottom: 15px;
        align-self: flex-start;
    }

    .imm-card-body p {
        font-size: 0.96rem;
        color: var(--text-muted);
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .imm-specs {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
    }

    .imm-specs li {
        font-size: 0.88rem;
        color: #475569;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
    }

    .imm-specs li i {
        color: #0891B2;
        font-size: 0.85rem;
    }

    .btn-apply-imm {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background: linear-gradient(135deg, #0891B2, #0D9488);
        color: var(--white);
        padding: 14px 24px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.95rem;
        text-decoration: none;
        transition: 0.3s;
        margin-top: auto;
    }

    .btn-apply-imm:hover {
        background: linear-gradient(135deg, #7C3AED, #4F46E5);
        box-shadow: 0 8px 20px rgba(124, 58, 237, 0.3);
    }

    /* Key Assessment Criteria */
    .criteria-section {
        padding: 90px 8%;
        background: linear-gradient(135deg, #0A1D37 0%, #0F172A 100%);
        color: var(--white);
    }

    .criteria-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .criteria-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 35px 25px;
        text-align: center;
        backdrop-filter: blur(10px);
        transition: 0.4s;
    }

    .criteria-card:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-8px);
        border-color: #0891B2;
    }

    .criteria-icon {
        width: 65px;
        height: 65px;
        background: linear-gradient(135deg, #0891B2, #0D9488);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
        color: var(--white);
        margin: 0 auto 20px;
        box-shadow: 0 8px 20px rgba(8, 145, 178, 0.3);
    }

    .criteria-card h4 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .criteria-card p {
        font-size: 0.9rem;
        color: #94A3B8;
        line-height: 1.6;
    }

    /* Assessment CTA Box */
    .assessment-box {
        margin: 90px 8%;
        background: linear-gradient(135deg, #0A1D37 0%, #1E1B4B 100%);
        border: 1px solid rgba(124, 58, 237, 0.3);
        border-radius: 30px;
        padding: 60px;
        color: var(--white);
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        gap: 50px;
        align-items: center;
        box-shadow: 0 25px 60px rgba(0,0,0,0.3);
    }

    .assessment-text h3 {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 15px;
        background: linear-gradient(135deg, #FCD34D, #F9A8D4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .assessment-text p {
        font-size: 1.05rem;
        color: #CBD5E1;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .btn-gold {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background: #FCD34D;
        color: #0A1D37;
        padding: 16px 36px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 1.05rem;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-gold:hover {
        background: var(--white);
        transform: scale(1.05);
        color: #7C3AED;
    }

    .assessment-stats {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .stat-card-mini {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        padding: 25px;
        border-radius: 16px;
        text-align: center;
    }

    .stat-card-mini h4 {
        font-size: 2.2rem;
        font-weight: 800;
        color: #FCD34D;
        margin-bottom: 5px;
    }

    .stat-card-mini p {
        font-size: 0.85rem;
        color: #94A3B8;
        font-weight: 600;
        text-transform: uppercase;
    }

    @media (max-width: 992px) {
        .imm-grid { grid-template-columns: repeat(2, 1fr); }
        .criteria-grid { grid-template-columns: repeat(2, 1fr); }
        .assessment-box { grid-template-columns: 1fr; text-align: center; }
        .imm-hero h1 { font-size: 2.8rem; }
    }

    @media (max-width: 600px) {
        .imm-grid { grid-template-columns: 1fr; }
        .criteria-grid { grid-template-columns: 1fr; }
        .assessment-stats { grid-template-columns: 1fr; }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<div class="imm-hero">
    <h1>Immigration & Skilled Work Permits</h1>
    <p>Unlock worldwide career growth, residency opportunities, and employer sponsorship programs for skilled workers, tech talent, and experienced professionals.</p>
    <div class="breadcrumb">
        <a href="/">Home</a> <span>/</span> <span>Immigration & Skill Work</span>
    </div>
</div>

<!-- Destinations Section -->
<div class="destinations-section">
    <div class="section-header">
        <span class="badge-pill">Popular Pathways</span>
        <h2>Top Countries for Skilled Migration</h2>
        <p>Explore official work permits, job seeker visas, and direct permanent residency programs offered by leading economies.</p>
    </div>

    <div class="imm-grid">
        <!-- Canada -->
        <div class="imm-card">
            <div class="imm-card-header" style="background-image: url('https://images.unsplash.com/photo-1503614472-8c93d56e92ce?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                <div class="imm-country-badge">
                    <img src="https://flagcdn.com/ca.svg" alt="Canada">
                    <h3>Canada</h3>
                </div>
            </div>
            <div class="imm-card-body">
                <span class="imm-program-tag">Express Entry & PNP</span>
                <p>Fast-track Permanent Residency (PR) for tech leads, healthcare specialists, accountants, and engineers through Federal & Provincial programs.</p>
                <ul class="imm-specs">
                    <li><i class="fas fa-check-circle"></i> Direct PR Pathway Available</li>
                    <li><i class="fas fa-check-circle"></i> Family Sponsorship Included</li>
                    <li><i class="fas fa-check-circle"></i> High Quality of Life & Healthcare</li>
                </ul>
                <a href="/contact" class="btn-apply-imm">Assess Express Entry Eligibility <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Australia -->
        <div class="imm-card">
            <div class="imm-card-header" style="background-image: url('https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                <div class="imm-country-badge">
                    <img src="https://flagcdn.com/au.svg" alt="Australia">
                    <h3>Australia</h3>
                </div>
            </div>
            <div class="imm-card-body">
                <span class="imm-program-tag">General Skilled Migration (Subclass 189/190)</span>
                <p>Point-based migration system for qualified professionals looking to live and work anywhere in Australia with permanent residence.</p>
                <ul class="imm-specs">
                    <li><i class="fas fa-check-circle"></i> Subclass 189 Independent Visa</li>
                    <li><i class="fas fa-check-circle"></i> Subclass 190 State Nomination</li>
                    <li><i class="fas fa-check-circle"></i> High Demand in IT & Engineering</li>
                </ul>
                <a href="/contact" class="btn-apply-imm">Check Points Score <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- UK Skilled Worker -->
        <div class="imm-card">
            <div class="imm-card-header" style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                <div class="imm-country-badge">
                    <img src="https://flagcdn.com/gb.svg" alt="UK">
                    <h3>United Kingdom</h3>
                </div>
            </div>
            <div class="imm-card-body">
                <span class="imm-program-tag">Skilled Worker Visa (Tier 2)</span>
                <p>Work for an approved UK employer with a valid Certificate of Sponsorship (CoS). Lead to ILR (Indefinite Leave to Remain) after 5 years.</p>
                <ul class="imm-specs">
                    <li><i class="fas fa-check-circle"></i> Sponsor License Employer List</li>
                    <li><i class="fas fa-check-circle"></i> Health & Care Worker Fast-Track</li>
                    <li><i class="fas fa-check-circle"></i> ILR & Citizenship Pathway</li>
                </ul>
                <a href="/contact" class="btn-apply-imm">Explore UK Sponsorship <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Croatia & European Work Permits -->
        <div class="imm-card">
            <div class="imm-card-header" style="background-image: url('https://images.unsplash.com/photo-1533105079780-92b9be482077?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                <div class="imm-country-badge">
                    <img src="https://flagcdn.com/hr.svg" alt="Croatia">
                    <h3>Croatia & EU Work Permits</h3>
                </div>
            </div>
            <div class="imm-card-body">
                <span class="imm-program-tag">European Union Work Permits</span>
                <p>Official legal employment permits in Croatia, Romania, Hungary, and Serbia for skilled workers, chefs, drivers, construction, and IT experts.</p>
                <ul class="imm-specs">
                    <li><i class="fas fa-check-circle"></i> Guaranteed Employer Contract</li>
                    <li><i class="fas fa-check-circle"></i> Schengen Area Travel Freedom</li>
                    <li><i class="fas fa-check-circle"></i> Fast Document Processing</li>
                </ul>
                <a href="/contact" class="btn-apply-imm">Apply for EU Work Permit <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Germany Opportunity Card & Job Seeker -->
        <div class="imm-card">
            <div class="imm-card-header" style="background-image: url('https://images.unsplash.com/photo-1467269204594-9661b134dd2b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                <div class="imm-country-badge">
                    <img src="https://flagcdn.com/de.svg" alt="Germany">
                    <h3>Germany</h3>
                </div>
            </div>
            <div class="imm-card-body">
                <span class="imm-program-tag">Opportunity Card (Chancenkarte)</span>
                <p>Move to Germany to look for employment with the new points-based Opportunity Card for graduates and skilled technicians.</p>
                <ul class="imm-specs">
                    <li><i class="fas fa-check-circle"></i> 1-Year Job Seeker Residence</li>
                    <li><i class="fas fa-check-circle"></i> Part-Time Work Allowed (20h/wk)</li>
                    <li><i class="fas fa-check-circle"></i> EU Blue Card Conversion</li>
                </ul>
                <a href="/contact" class="btn-apply-imm">Check Germany Eligibility <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- New Zealand AEWV -->
        <div class="imm-card">
            <div class="imm-card-header" style="background-image: url('https://images.unsplash.com/photo-1507699622108-4be3abd695ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                <div class="imm-country-badge">
                    <img src="https://flagcdn.com/nz.svg" alt="New Zealand">
                    <h3>New Zealand</h3>
                </div>
            </div>
            <div class="imm-card-body">
                <span class="imm-program-tag">Accredited Employer Work Visa (AEWV)</span>
                <p>Work in New Zealand with accredited employers in construction, agriculture, healthcare, IT, and hospitality industries.</p>
                <ul class="imm-specs">
                    <li><i class="fas fa-check-circle"></i> Green List Skilled Residence</li>
                    <li><i class="fas fa-check-circle"></i> High Minimum Wage Standards</li>
                    <li><i class="fas fa-check-circle"></i> Spouse Work Rights Included</li>
                </ul>
                <a href="/contact" class="btn-apply-imm">Apply NZ Work Visa <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Key Requirements Section -->
<div class="criteria-section">
    <div class="section-header">
        <span class="badge-pill" style="background:rgba(255,255,255,0.1);color:#FCD34D;border-color:rgba(255,255,255,0.2);">Evaluation Standards</span>
        <h2 style="color:#fff;">What You Need for Skilled Migration</h2>
        <p style="color:#94A3B8;">Most skilled work programs use a point system. Here are the core factors analyzed for your assessment:</p>
    </div>

    <div class="criteria-grid">
        <div class="criteria-card">
            <div class="criteria-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h4>Educational Degree</h4>
            <p>Bachelor's or Master's degree evaluated by international bodies like WES, VETASSESS, or UK ENIC.</p>
        </div>

        <div class="criteria-card">
            <div class="criteria-icon">
                <i class="fas fa-user-clock"></i>
            </div>
            <h4>Work Experience</h4>
            <p>1 to 5+ years of verified professional work experience in a recognized occupation list.</p>
        </div>

        <div class="criteria-card">
            <div class="criteria-icon">
                <i class="fas fa-language"></i>
            </div>
            <h4>Language Proficiency</h4>
            <p>IELTS General / PTE Academic results meeting minimum band requirements for your target country.</p>
        </div>

        <div class="criteria-card">
            <div class="criteria-icon">
                <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <h4>Financial Proof & PCC</h4>
            <p>Sufficient settlement funds proof and clean police clearance certificate from your home country.</p>
        </div>
    </div>
</div>

<!-- Assessment Box -->
<div class="assessment-box">
    <div class="assessment-text">
        <h3>Free Profile Assessment</h3>
        <p>Not sure which immigration program or country suits your qualifications best? Speak with our certified migration consultants for a free detailed points calculation and document check.</p>
        <a href="/contact" class="btn-gold"><i class="fas fa-calculator"></i> Book Free Immigration Evaluation</a>
    </div>

    <div class="assessment-stats">
        <div class="stat-card-mini">
            <h4>1,500+</h4>
            <p>Work Visas Issued</p>
        </div>
        <div class="stat-card-mini">
            <h4>98.5%</h4>
            <p>Approval Rate</p>
        </div>
        <div class="stat-card-mini">
            <h4>15+</h4>
            <p>EU & Global Destinations</p>
        </div>
        <div class="stat-card-mini">
            <h4>100%</h4>
            <p>Transparent Guidance</p>
        </div>
    </div>
</div>
@endsection
