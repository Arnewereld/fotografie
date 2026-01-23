<nav class="navbar">
    <div class="container">
        <div class="nav-brand">
            <a href="<?php echo url(); ?>">
                <h1>IVR</h1>
            </a>
        </div>
        <ul class="nav-menu">
            <li><a href="<?php echo url(); ?>" class="nav-link <?php echo (!isset($currentPage) || $currentPage === 'home') ? 'active' : ''; ?>">START</a></li>
            <li><a href="<?php echo url('over'); ?>" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'over') ? 'active' : ''; ?>">INHOUD</a></li>
            <li><a href="<?php echo url('portfolio'); ?>" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'portfolio') ? 'active' : ''; ?>">PORTFOLIO</a></li>
            <li><a href="<?php echo url('contact'); ?>" class="nav-link <?php echo (isset($currentPage) && $currentPage === 'contact') ? 'active' : ''; ?>">INFO</a></li>
        </ul>
        <div class="hamburger" onclick="toggleMobileMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
