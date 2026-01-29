<?php
$currentPage = 'lichtplan';
$pageTitle = 'Lichtplan - Fotografie Technieken';
?>

<div class="lichtplan-page">
    <div class="container">
        <!-- Lighting Setups Grid -->
        <section class="lighting-setups">
            <!-- Portret Opstelling -->
            <div class="lighting-card">
                <div class="card-header">
                    <span class="icon-light">💡</span>
                    <h2>Portret Opstelling</h2>
                </div>
                <p class="card-description">Eén enkele lichtbron van de linker zijkant voor dramatisch contrast (Rembrandt/Split lighting).</p>
                
                <div class="lighting-visual side-light">
                    <div class="light-diagram">
                        <div class="subject-icon">
                            <div class="person-silhouette"></div>
                            <span class="label">Subject</span>
                        </div>
                        <div class="light-source sun" style="top: 50%; left: 10%; transform: translateY(-50%);">
                            <div class="light-rays"></div>
                            <span class="light-label">SIDE/BACK LIGHT</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Natuurlijk Licht -->
            <div class="lighting-card">
                <div class="card-header">
                    <span class="icon-sun">☀️</span>
                    <h2>Natuurlijk Licht</h2>
                </div>
                <p class="card-description">Bij architectuur en landschap is de zon mijn primaire lichtbron. Planning is cruciaal. Mijn aanpak omvat het bestuderen van de zonnestand en weersvoorspelling.</p>
                
                <div class="natural-light-list">
                    <div class="light-time">
                        <span class="bullet">•</span>
                        <div class="time-info">
                            <h3>Golden Hour</h3>
                            <p>Warme tinten, lange schaduwen. Ideaal voor landschap en portret op locatie.</p>
                        </div>
                    </div>
                    <div class="light-time">
                        <span class="bullet">•</span>
                        <div class="time-info">
                            <h3>Blue Hour</h3>
                            <p>Koel licht voor zonsopkomst of na zonsondergang. Perfect voor stadsarchitectuur.</p>
                        </div>
                    </div>
                    <div class="light-time">
                        <span class="bullet">•</span>
                        <div class="time-info">
                            <h3>Hard Light</h3>
                            <p>Midden op de dag. Gebruikt voor high-contrast zwart-wit architectuur.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Opstelling -->
            <div class="lighting-card">
                <div class="card-header">
                    <span class="icon-light">💡</span>
                    <h2>Product Opstelling</h2>
                </div>
                <p class="card-description">Frontale belichting voor maximale helderheid en minimale schaduwen.</p>
                
                <div class="lighting-visual product-light">
                    <div class="light-diagram">
                        <div class="product-item-center">
                            <div class="item-box"></div>
                            <span class="label">Item</span>
                        </div>
                        
                        <div class="light-source" style="top: 20%; left: 50%; transform: translateX(-50%);">
                            <div class="light-circle"></div>
                            <span class="light-label-center">FRONT LIGHT</span>
                        </div>
                        
                        <div class="light-beam-center"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<style>
/* Lichtplan Page Styles */
.lichtplan-page {
    padding-top: 120px;
    padding-bottom: 60px;
    min-height: 100vh;
    background: #000000;
}

.lichtplan-page .container {
    max-width: 1400px;
}

/* Lighting Setups Grid */
.lighting-setups {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 3rem;
    padding: 2rem 0;
}

/* Lighting Card */
.lighting-card {
    background: rgba(20, 20, 20, 0.8);
    border-radius: 15px;
    padding: 2.5rem;
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
}

.lighting-card:hover {
    border-color: rgba(231, 76, 60, 0.3);
    transform: translateY(-5px);
}

.card-header {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    margin-bottom: 1.5rem;
}

.icon-light,
.icon-sun {
    font-size: 1.8rem;
    filter: grayscale(100%) brightness(1.5);
}

.card-header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    color: var(--primary-color);
    margin: 0;
}

.card-description {
    color: rgba(255, 255, 255, 0.8);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 2rem;
}


/* Lighting Visual */
.lighting-visual {
    position: relative;
    height: 350px;
    background: rgba(10, 10, 10, 0.9);
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.05);
}

.light-diagram {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Subject Icons */
.subject-icon {
    position: relative;
    z-index: 2;
    text-align: center;
}

.person-silhouette {
    width: 50px;
    height: 85px;
    background: linear-gradient(180deg, #555 0%, #333 100%);
    border-radius: 25px 25px 8px 8px;
    position: relative;
    margin: 0 auto 8px;
}

.person-silhouette::before {
    content: '';
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    width: 35px;
    height: 35px;
    background: #555;
    border-radius: 50%;
}

.label {
    display: block;
    color: #666;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Light Sources */
.light-source {
    position: absolute;
    z-index: 3;
}

.light-source.sun {
    width: 45px;
    height: 45px;
    background: radial-gradient(circle, #D4A655 0%, #B8935A 100%);
    border-radius: 50%;
    box-shadow: 0 0 30px rgba(212, 166, 85, 0.5);
}

.light-rays {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 250px;
    height: 250px;
    background: radial-gradient(circle, rgba(212, 166, 85, 0.2) 0%, transparent 60%);
}

.light-label {
    position: absolute;
    top: -25px;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
    font-size: 0.7rem;
    color: #D4A655;
    font-weight: 600;
    letter-spacing: 1.5px;
}

/* Side Light Background */
.side-light {
    background: linear-gradient(90deg, rgba(212, 166, 85, 0.15) 0%, #0a0a0a 50%, #0a0a0a 100%);
}

/* Natural Light List */
.natural-light-list {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.light-time {
    display: flex;
    gap: 1rem;
    align-items: flex-start;
}

.bullet {
    color: #D4A655;
    font-size: 1.5rem;
    line-height: 1;
    margin-top: 0.2rem;
}

.time-info h3 {
    font-size: 1.2rem;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
    font-weight: 600;
}

.time-info p {
    color: rgba(255, 255, 255, 0.75);
    font-size: 0.95rem;
    line-height: 1.5;
}

/* Product Light */
.product-light {
    background: rgba(10, 10, 10, 0.9);
}

.product-item-center {
    position: relative;
    z-index: 2;
    text-align: center;
}

.item-box {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #555 0%, #333 100%);
    border-radius: 8px;
    margin: 0 auto 8px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
}

.light-circle {
    width: 40px;
    height: 40px;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.9) 0%, rgba(212, 166, 85, 0.6) 100%);
    border-radius: 50%;
    box-shadow: 0 0 30px rgba(255, 255, 255, 0.4);
}

.light-label-center {
    position: absolute;
    top: -22px;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
    font-size: 0.7rem;
    color: #ccc;
    font-weight: 600;
    letter-spacing: 1.5px;
}

.light-beam-center {
    position: absolute;
    top: 60px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 180px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.15) 0%, transparent 100%);
    clip-path: polygon(30% 0%, 70% 0%, 100% 100%, 0% 100%);
    z-index: 1;
}

/* Responsive */
@media (max-width: 1200px) {
    .lighting-setups {
        grid-template-columns: 1fr;
        max-width: 700px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .lighting-card {
        padding: 2rem;
    }
    
    .card-header h2 {
        font-size: 1.5rem;
    }
    
    .lighting-visual {
        height: 300px;
    }
}
</style>
