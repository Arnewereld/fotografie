<nav class="navbar">
    <div class="container">
        <div class="nav-brand">
            <a href="<?php echo url(); ?>">
                <h1>Arne Meevis</h1>
            </a>
        </div>
        <ul class="nav-menu">
            <li><a href="<?php echo url(); ?>" class="nav-link <?php echo (!isset($currentPage) || $currentPage === 'home') ? 'active' : ''; ?>">HOME</a></li>
            <li><a href="<?php echo url('voorwoord'); ?>" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'voorwoord') ? 'active' : ''; ?>">VOORWOORD</a></li>
            <li><a href="<?php echo url('inhoudsopgave'); ?>" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'inhoudsopgave') ? 'active' : ''; ?>">INHOUD</a></li>
            <li><a href="<?php echo url('gallery'); ?>" class="nav-link <?php echo (isset($currentPage) && ($currentPage === 'gallery' || $currentPage === 'portfolio')) ? 'active' : ''; ?>">PORTFOLIO</a></li>
            <li><a href="<?php echo url('nawoord'); ?>" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'nawoord') ? 'active' : ''; ?>">NAWOORD</a></li>
        </ul>
        <div class="hamburger" onclick="toggleMobileMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
