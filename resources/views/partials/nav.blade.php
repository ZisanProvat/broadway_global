<div class="nav-overlay" id="navOverlay"></div>
<nav style="z-index: 3000;">
    <div class="logo-area-nav" style="display: none;">
        <i class="fas fa-graduation-cap"></i>
        <span class="logo-text">BROADWAY</span>
    </div>
    <button class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars"></i>
    </button>
    <div class="nav-links" id="navLinks">
        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About Us</a>
        <a href="#">Our Services</a>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle">Destinations <i class="fas fa-chevron-down" style="font-size: 0.7rem;"></i></a>
            <div class="dropdown-menu">
                <a href="/destinations/malaysia"><img src="https://flagcdn.com/my.svg" alt="Malaysia"> Study in Malaysia</a>
                <a href="/destinations/cyprus"><img src="https://flagcdn.com/cy.svg" alt="Cyprus"> Study in Cyprus</a>
                <a href="/destinations/france"><img src="https://flagcdn.com/fr.svg" alt="France"> Study in France</a>
                <a href="/destinations/italy"><img src="https://flagcdn.com/it.svg" alt="Italy"> Study in Italy</a>
                <a href="/destinations/croatia"><img src="https://flagcdn.com/hr.svg" alt="Croatia"> Study in Croatia</a>
                <a href="/destinations/netherlands"><img src="https://flagcdn.com/nl.svg" alt="Netherlands"> Study in Netherlands</a>
                <a href="/destinations/new-zealand"><img src="https://flagcdn.com/nz.svg" alt="New Zealand"> Study in New Zealand</a>
                <a href="/destinations/denmark"><img src="https://flagcdn.com/dk.svg" alt="Denmark"> Study in Denmark</a>
                <a href="/destinations/hungary"><img src="https://flagcdn.com/hu.svg" alt="Hungary"> Study in Hungary</a>
                <a href="/destinations/usa"><img src="https://flagcdn.com/us.svg" alt="USA"> Study in USA</a>
                <a href="/destinations/canada"><img src="https://flagcdn.com/ca.svg" alt="Canada"> Study in Canada</a>
                <a href="/destinations/uk"><img src="https://flagcdn.com/gb.svg" alt="UK"> Study in UK</a>
                <a href="/destinations/australia"><img src="https://flagcdn.com/au.svg" alt="Australia"> Study in Australia</a>
            </div>
        </div>
        <a href="#">Immigration & Skill Work</a>
        <a href="#">Testimonials</a>
        <a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
    </div>
    <div class="nav-btns">
        <a href="#" class="btn-book">Book Appointment</a>
    </div>
</nav>
