<?php
$pageTitle = "404 - Pagina Niet Gevonden";
?>

<section style="min-height: 80vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 2rem;">
    <div>
        <h1 style="font-size: 8rem; color: var(--primary-color); margin: 0; font-family: 'Playfair Display', serif;">404</h1>
        <h2 style="font-size: 2rem; color: var(--light-color); margin: 1rem 0;">Pagina Niet Gevonden</h2>
        <p style="color: var(--text-color); margin-bottom: 2rem;">De pagina die je zoekt bestaat niet of is verplaatst.</p>
        <a href="<?php echo url(); ?>" class="btn btn-primary">Terug naar Home</a>
    </div>
</section>
