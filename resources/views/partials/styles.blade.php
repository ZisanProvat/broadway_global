<style>
    :root {
        --primary: #0A1D37;
        --accent: #C5A059;
        --white: #FFFFFF;
        --light-gray: #F3F4F6;
        --text-dark: #111827;
        --text-muted: #6B7280;
        --bg-alt: #F9FAFB;
        --glass: rgba(255, 255, 255, 0.1);
        /* Vibrant palette */
        --violet: #7C3AED;
        --indigo: #4F46E5;
        --blue: #2563EB;
        --cyan: #0891B2;
        --teal: #0D9488;
        --green: #16A34A;
        --orange: #EA580C;
        --rose: #E11D48;
        --pink: #DB2777;
        --purple: #9333EA;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Outfit', sans-serif;
        color: var(--text-dark);
        line-height: 1.6;
        background-color: var(--white);
        overflow-x: hidden;
    }

    a {
        text-decoration: none;
        transition: 0.3s;
    }

    ul {
        list-style: none;
    }

    .section-padding {
        padding: 100px 8%;
    }

    .text-center {
        text-align: center;
    }

    .section-title {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 20px;
        line-height: 1.2;
        background: linear-gradient(135deg, var(--primary) 0%, var(--violet) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: inline-block;
    }

    .section-subtitle {
        color: var(--text-muted);
        max-width: 700px;
        margin: 0 auto 60px;
        font-size: 1.1rem;
    }

    /* Colorful section backgrounds */
    .bg-violet {
        background: linear-gradient(135deg, #7C3AED 0%, #4F46E5 100%);
    }

    .bg-teal {
        background: linear-gradient(135deg, #0D9488 0%, #0891B2 100%);
    }

    .bg-orange {
        background: linear-gradient(135deg, #EA580C 0%, #DB2777 100%);
    }

    .bg-gradient-warm {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    /* Top Bar */
    .top-bar {
        background: var(--white);
        padding: 12px 8%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #eee;
    }

    .logo-area {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .logo-area i {
        font-size: 2.2rem;
        color: var(--primary);
    }

    .logo-text {
        font-weight: 800;
        font-size: 1.6rem;
        color: var(--primary);
        letter-spacing: -1px;
    }

    .top-contact {
        display: flex;
        gap: 30px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .contact-icon {
        width: 35px;
        height: 35px;
        background: var(--primary);
        color: var(--white);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
    }

    .contact-details {
        display: flex;
        flex-direction: column;
    }

    .contact-label {
        font-size: 0.7rem;
        font-weight: 600;
        color: var(--text-muted);
        text-transform: uppercase;
    }

    .contact-value {
        font-size: 0.85rem;
        font-weight: 700;
        color: var(--primary);
    }

    .top-social {
        display: flex;
        gap: 10px;
    }

    .top-social a {
        color: var(--primary);
        width: 32px;
        height: 32px;
        background: var(--light-gray);
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
    }

    .top-social a:hover {
        background: var(--primary);
        color: var(--white);
        transform: translateY(-3px);
    }

    /* Navbar */
    nav {
        background: var(--primary);
        padding: 0 8%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .nav-links {
        display: flex;
    }

    .nav-links a {
        color: var(--white);
        padding: 22px 20px;
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        opacity: 0.9;
    }

    .nav-links a:hover {
        background: rgba(255, 255, 255, 0.05);
        opacity: 1;
    }

    .nav-links a.active {
        color: #FCD34D;
    }

    .btn-book {
        background: var(--white);
        color: #7C3AED;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 0.85rem;
        text-transform: uppercase;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .btn-book:hover {
        background: linear-gradient(135deg, #FCD34D, #F9A8D4);
        color: var(--primary);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Dropdown Styles */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-toggle {
        display: flex;
        align-items: center;
        gap: 5px;
        cursor: pointer;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%) translateY(20px);
        background: var(--white);
        min-width: 260px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        border-radius: 12px;
        padding: 15px 0;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s all cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 5000;
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }

    .dropdown-menu a {
        display: flex !important;
        align-items: center;
        gap: 15px;
        padding: 12px 25px !important;
        color: var(--primary) !important;
        font-size: 0.85rem !important;
        font-weight: 700 !important;
        text-transform: uppercase;
        border: none !important;
        transition: 0.2s;
    }

    .dropdown-menu a:hover {
        background: linear-gradient(135deg, #F5F0FF, #E0F2FE);
        color: #7C3AED !important;
        padding-left: 30px !important;
    }

    .dropdown-menu a img {
        width: 24px;
        border-radius: 3px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 992px) {
        .dropdown-menu {
            position: static;
            transform: none;
            opacity: 1;
            visibility: visible;
            box-shadow: none;
            background: rgba(255, 255, 255, 0.05);
            margin: 10px 0;
            padding: 0;
            display: none;
            min-width: 100%;
        }

        .dropdown.active .dropdown-menu {
            display: block;
        }

        .dropdown-menu a {
            color: var(--white) !important;
            padding: 12px 20px !important;
        }
    }

    /* WhatsApp */
    .whatsapp-float {
        position: fixed;
        bottom: 40px;
        right: 40px;
        background: #25D366;
        color: white;
        width: 65px;
        height: 65px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3);
        z-index: 1000;
    }

    /* Mobile Menu Toggles */
    .menu-toggle {
        display: none;
        color: var(--white);
        font-size: 1.5rem;
        cursor: pointer;
        background: none;
        border: none;
        z-index: 2100;
        position: relative;
    }

    .mobile-nav-active {
        overflow: hidden;
    }

    @media (max-width: 1100px) {
        .top-bar {
            padding: 15px 5%;
        }

        .top-contact {
            gap: 15px;
        }

        .logo-text {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 992px) {
        .top-bar {
            display: none;
        }

        nav {
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-toggle {
            display: block;
            order: 2;
        }

        .logo-area-nav {
            display: flex !important;
            align-items: center;
            gap: 8px;
            order: 1;
        }

        .logo-area-nav i {
            color: var(--white);
            font-size: 1.5rem;
        }

        .logo-area-nav .logo-text {
            color: var(--white);
            font-size: 1.2rem;
        }

        .nav-links {
            position: fixed;
            top: 0;
            right: 0;
            width: 80%;
            height: 100vh;
            background: var(--primary);
            flex-direction: column;
            padding: 100px 40px;
            transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 2000;
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.2);
            overflow-y: auto;
            transform: translateX(100%);
        }

        .nav-links.active {
            transform: translateX(0);
        }

        .nav-links a {
            font-size: 1.1rem;
            padding: 18px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
            display: block;
        }

        .nav-btns {
            display: none;
        }

        .btn-book-mobile {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .logo-text {
            font-size: 1.1rem;
        }

        .contact-item {
            flex-direction: column;
            text-align: center;
        }
    }

    /* Overlay */
    .nav-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 1500;
    }

    .nav-overlay.active {
        display: block;
    }

    /* =====================================================
       FLOATING / SCROLL-REVEAL ANIMATION SYSTEM
    ===================================================== */

    /* Base hidden state */
    .reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.7s cubic-bezier(0.4, 0, 0.2, 1),
            transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Visible state triggered by JS */
    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Staggered delays for child items */
    .reveal-delay-1 {
        transition-delay: 0.1s;
    }

    .reveal-delay-2 {
        transition-delay: 0.2s;
    }

    .reveal-delay-3 {
        transition-delay: 0.3s;
    }

    .reveal-delay-4 {
        transition-delay: 0.4s;
    }

    .reveal-delay-5 {
        transition-delay: 0.5s;
    }

    /* Slide in from left */
    .reveal-left {
        opacity: 0;
        transform: translateX(-60px);
        transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1),
            transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .reveal-left.visible {
        opacity: 1;
        transform: translateX(0);
    }

    /* Slide in from right */
    .reveal-right {
        opacity: 0;
        transform: translateX(60px);
        transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1),
            transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .reveal-right.visible {
        opacity: 1;
        transform: translateX(0);
    }

    /* Zoom in */
    .reveal-zoom {
        opacity: 0;
        transform: scale(0.85);
        transition: opacity 0.7s cubic-bezier(0.4, 0, 0.2, 1),
            transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .reveal-zoom.visible {
        opacity: 1;
        transform: scale(1);
    }

    /* Floating pulse on cards */
    @keyframes floatPulse {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    /* Footer */
    footer {
        background: #050E1A;
        color: var(--white);
        padding: 100px 8% 40px;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1.5fr;
        gap: 60px;
        margin-bottom: 60px;
    }

    .footer-col h4 {
        font-size: 1.2rem;
        margin-bottom: 30px;
        color: var(--white);
        position: relative;
    }

    .footer-col h4::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #7C3AED, #0891B2);
        border-radius: 2px;
    }

    .footer-col p,
    .footer-col li a {
        color: #9ca3af;
        font-size: 0.95rem;
        line-height: 1.8;
    }

    .footer-col li {
        margin-bottom: 12px;
    }

    .footer-col a:hover {
        color: #FCD34D !important;
        padding-left: 5px;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        padding-top: 30px;
        display: flex;
        justify-content: space-between;
        font-size: 0.9rem;
        color: #6b7280;
    }

    @media (max-width: 992px) {
        .footer-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }
    }
</style>