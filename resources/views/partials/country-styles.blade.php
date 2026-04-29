<style>
    /* ── HERO ───────────────────────────────────────── */
    .country-hero {
        height: 60vh; position: relative;
        display: flex; flex-direction: column;
        justify-content: flex-end; padding: 0 8% 60px;
        color: var(--white); overflow: hidden;
    }
    .country-hero-bg {
        position: absolute; inset: 0;
        background-size: cover; background-position: center;
        transform: scale(1.05); transition: transform 6s ease;
    }
    .country-hero:hover .country-hero-bg { transform: scale(1); }
    .country-hero-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(to top, rgba(10,29,55,0.95) 0%, rgba(10,29,55,0.35) 60%, transparent 100%);
    }
    .country-hero-content { position: relative; z-index: 2; }
    .country-flag { width: 60px; border-radius: 6px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); margin-bottom: 16px; opacity:0; animation: heroFadeUp 0.8s ease 0.3s forwards; }
    .country-hero h1 { font-size: 4rem; font-weight: 800; line-height: 1.1; margin-bottom: 12px; opacity:0; animation: heroFadeUp 0.8s ease 0.5s forwards; -webkit-text-fill-color: var(--white); }
    .country-hero p { font-size: 1.2rem; max-width: 650px; opacity:0; animation: heroFadeUp 0.8s ease 0.7s forwards; }
    .breadcrumb { display:flex; gap:8px; font-weight:600; font-size:0.9rem; color: var(--accent); margin-bottom:20px; opacity:0; animation: heroFadeUp 0.8s ease 0.2s forwards; }
    .breadcrumb a { color: rgba(255,255,255,0.7); }
    .breadcrumb a:hover { color: var(--white); }
    @keyframes heroFadeUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:translateY(0); } }

    /* ── STATS BAR ───────────────────────────────────── */
    .country-stats {
        padding: 0 8%;
        display: grid; grid-template-columns: repeat(4, 1fr);
        background: linear-gradient(135deg, #0A1D37 0%, #7C3AED 50%, #0891B2 100%);
    }
    .c-stat {
        color: var(--white);
        padding: 35px 20px;
        text-align: center;
        border-right: 1px solid rgba(255,255,255,0.12);
        transition: 0.3s;
    }
    .c-stat:last-child { border-right: none; }
    .c-stat:hover { background: rgba(255,255,255,0.08); }
    .c-stat h3 { font-size: 2.2rem; font-weight: 800; color: #FCD34D; margin-bottom: 5px; }
    .c-stat p { font-size: 0.82rem; opacity: 0.8; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }

    /* ── WHY CARDS ───────────────────────────────────── */
    .why-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; }
    .why-card {
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        position: relative;
        overflow: hidden;
        transition: 0.4s;
        color: var(--white);
    }
    .why-card::before {
        content: '';
        position: absolute; inset: 0;
        background: inherit;
        z-index: 0;
        transition: 0.4s;
    }
    .why-card:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 25px 50px rgba(0,0,0,0.2); }
    .why-card > * { position: relative; z-index: 1; }

    .why-card:nth-child(1)  { background: linear-gradient(135deg, #7C3AED, #4F46E5); }
    .why-card:nth-child(2)  { background: linear-gradient(135deg, #0891B2, #0D9488); }
    .why-card:nth-child(3)  { background: linear-gradient(135deg, #EA580C, #EAB308); }
    .why-card:nth-child(4)  { background: linear-gradient(135deg, #DB2777, #9333EA); }
    .why-card:nth-child(5)  { background: linear-gradient(135deg, #16A34A, #0891B2); }
    .why-card:nth-child(6)  { background: linear-gradient(135deg, #2563EB, #7C3AED); }

    .why-icon {
        font-size: 2.8rem;
        margin-bottom: 18px;
        display: inline-block;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
    }
    .why-card h4 { font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; }
    .why-card p { font-size: 0.95rem; opacity: 0.9; }

    /* ── UNIVERSITY CARDS ────────────────────────────── */
    .uni-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
    .uni-card {
        border-radius: 16px;
        padding: 25px 30px;
        display: flex;
        align-items: center;
        gap: 20px;
        transition: 0.4s;
        position: relative;
        overflow: hidden;
        color: var(--white);
    }
    .uni-card:nth-child(1) { background: linear-gradient(135deg, #0A1D37, #2563EB); }
    .uni-card:nth-child(2) { background: linear-gradient(135deg, #7C3AED, #DB2777); }
    .uni-card:nth-child(3) { background: linear-gradient(135deg, #0D9488, #16A34A); }
    .uni-card:nth-child(4) { background: linear-gradient(135deg, #EA580C, #EAB308); }
    .uni-card:hover { transform: translateX(8px) scale(1.02); box-shadow: 0 15px 35px rgba(0,0,0,0.2); }
    .uni-rank {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        color: var(--white);
        width: 55px; height: 55px;
        border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        font-weight: 800; font-size: 1.1rem;
        flex-shrink: 0;
        border: 2px solid rgba(255,255,255,0.3);
    }
    .uni-info h5 { font-weight: 700; margin-bottom: 4px; font-size: 1rem; }
    .uni-info span { font-size: 0.82rem; opacity: 0.8; }

    /* ── PROCESS STEPS ───────────────────────────────── */
    .process-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
    .step-card {
        text-align: center;
        padding: 40px 25px;
        border-radius: 20px;
        position: relative;
        transition: 0.4s;
        color: var(--white);
    }
    .step-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.15); }
    .step-card:nth-child(1) { background: linear-gradient(135deg, #7C3AED, #4F46E5); }
    .step-card:nth-child(2) { background: linear-gradient(135deg, #0891B2, #0D9488); }
    .step-card:nth-child(3) { background: linear-gradient(135deg, #DB2777, #EA580C); }
    .step-card:nth-child(4) { background: linear-gradient(135deg, #16A34A, #2563EB); }
    .step-card::after { display: none; }
    .step-num {
        width: 65px; height: 65px;
        background: rgba(255,255,255,0.25);
        backdrop-filter: blur(10px);
        color: var(--white);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.5rem; font-weight: 800;
        margin: 0 auto 20px;
        border: 2px solid rgba(255,255,255,0.4);
    }
    .step-card h4 { font-weight: 700; margin-bottom: 8px; font-size: 1.1rem; }
    .step-card p { font-size: 0.9rem; opacity: 0.85; }

    /* ── CTA ─────────────────────────────────────────── */
    .country-cta {
        background: linear-gradient(135deg, #7C3AED 0%, #4F46E5 30%, #0891B2 70%, #0D9488 100%);
        color: var(--white);
        text-align: center;
        padding: 90px 8%;
        border-radius: 30px;
        margin: 0 8% 100px;
        position: relative;
        overflow: hidden;
    }
    .country-cta::before {
        content: '';
        position: absolute;
        top: -60%; left: -30%;
        width: 160%; height: 220%;
        background: radial-gradient(ellipse at center, rgba(255,255,255,0.08) 0%, transparent 60%);
        animation: ctaGlow 8s ease-in-out infinite alternate;
    }
    @keyframes ctaGlow { from { transform: translateX(-10%) rotate(0deg); } to { transform: translateX(10%) rotate(20deg); } }
    .country-cta h2 { font-size: 2.8rem; font-weight: 800; margin-bottom: 15px; position: relative; z-index: 2; -webkit-text-fill-color: var(--white); }
    .country-cta p { font-size: 1.1rem; opacity: 0.9; margin-bottom: 35px; position: relative; z-index: 2; }
    .btn-cta {
        background: var(--white);
        color: #7C3AED;
        padding: 18px 45px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 1rem;
        display: inline-block;
        transition: 0.3s;
        position: relative; z-index: 2;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .btn-cta:hover { background: #FCD34D; color: #0A1D37; transform: translateY(-4px) scale(1.05); box-shadow: 0 15px 35px rgba(0,0,0,0.25); }

    /* ── RESPONSIVE ──────────────────────────────────── */
    @media (max-width: 992px) {
        .country-hero { height: 50vh; padding: 0 5% 40px; }
        .country-hero h1 { font-size: 2.5rem; }
        .country-stats { grid-template-columns: repeat(2, 1fr); padding: 0 5%; }
        .c-stat { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.12); }
        .why-grid, .uni-grid { grid-template-columns: 1fr; }
        .process-steps { grid-template-columns: repeat(2, 1fr); }
        .country-cta { margin: 0 5% 60px; }
    }
    @media (max-width: 480px) {
        .country-hero h1 { font-size: 1.8rem; }
        .process-steps { grid-template-columns: 1fr; }
    }
</style>
