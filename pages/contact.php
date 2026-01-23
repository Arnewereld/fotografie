<?php
$pageTitle = "Contact";
$currentPage = "contact";
?>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <p class="section-subtitle">Contact</p>
        <h2 class="section-title">Neem Contact Op</h2>
        
        <div class="contact-content">
            <form class="contact-form" method="POST" action="<?php echo url('contact-handler.php'); ?>">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Jouw Naam" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Jouw Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" rows="5" placeholder="Jouw Bericht" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Verstuur Bericht</button>
            </form>
            
            <div class="contact-info">
                <div class="info-item">
                    <h3>Email</h3>
                    <p>info@arnemeevis.nl</p>
                </div>
                <div class="info-item">
                    <h3>Telefoon</h3>
                    <p>+31 6 1234 5678</p>
                </div>
                <div class="info-item">
                    <h3>Volg Mij</h3>
                    <div class="social-links">
                        <a href="#" class="social-link">Instagram</a>
                        <a href="#" class="social-link">LinkedIn</a>
                        <a href="#" class="social-link">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
