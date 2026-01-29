<?php
$pageTitle = "Werkwijze & Mappenstructuur";
$currentPage = "werkwijze";
?>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen fade-in" style="margin-top: 80px;">
    <div class="mb-8">
        <h1 class="text-4xl md:text-5xl font-serif text-white mb-4">Mappenstructuur & Werkwijze</h1>
        <div class="h-1 w-20 bg-brand-accent"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-8 mb-12">
        <div class="bg-neutral-900 border border-white/5 rounded-2xl p-8">
            <h2 class="text-2xl font-serif text-brand-accent mb-6">Mappenstructuur</h2>
            <div class="font-mono text-sm text-gray-300 bg-black/50 p-6 rounded-lg overflow-x-auto">
                <pre>Fotografie Portfolio/
├── 01_Bewegingsfotografie/
│   ├── Origineel/
│   └── Bewerkt/
├── 02_Portretten_Studio/
│   ├── Origineel/
│   └── Bewerkt/
├── 03_Architectuur_Landschap/
│   ├── Origineel/
│   └── Bewerkt/
├── 04_Productfotografie/
│   ├── Origineel/
│   └── Bewerkt/
├── 05_Beste_Fotos/
│   ├── Origineel/
│   └── Bewerkt/
└── Lichtplannen/</pre>
            </div>
        </div>

        <div class="bg-neutral-900 border border-white/5 rounded-2xl p-8">
            <h2 class="text-2xl font-serif text-brand-accent mb-6">Workflow per Les</h2>
            <ol class="space-y-4 text-gray-300">
                <li class="flex items-start">
                    <span class="text-brand-accent font-bold mr-3 mt-1">1.</span>
                    <span>Originele foto's van SD-kaart uploaden naar Origineel map</span>
                </li>
                <li class="flex items-start">
                    <span class="text-brand-accent font-bold mr-3 mt-1">2.</span>
                    <span>Foto's beoordelen: selectie maken op basis van scherpte en belichting</span>
                </li>
                <li class="flex items-start">
                    <span class="text-brand-accent font-bold mr-3 mt-1">3.</span>
                    <span>Geselecteerde foto's bewerken in Lightroom</span>
                </li>
                <li class="flex items-start">
                    <span class="text-brand-accent font-bold mr-3 mt-1">4.</span>
                    <span>Bewerkte foto's opslaan in Bewerkt map met maximale kwaliteit</span>
                </li>
                <li class="flex items-start">
                    <span class="text-brand-accent font-bold mr-3 mt-1">5.</span>
                    <span>Foto's documenteren met technische specs en analyse</span>
                </li>
            </ol>
        </div>
    </div>

    <div class="bg-neutral-900 border border-white/5 rounded-2xl p-8 mb-8">
        <h2 class="text-2xl font-serif text-brand-accent mb-6">Naamgevingsconventie</h2>
        <div class="space-y-4">
            <div class="flex items-center space-x-4">
                <div class="bg-black/50 rounded px-4 py-2 font-mono text-sm text-brand-accent">
                    [Onderwerp]_[Origineel_Nummer].jpg
                </div>
                <span class="text-gray-400">→</span>
                <div class="text-gray-300">Voorbeeld: Portret_DSC_0042.jpg</div>
            </div>
        </div>
    </div>

    <div class="bg-neutral-900 border border-white/5 rounded-2xl p-8">
        <h2 class="text-2xl font-serif text-brand-accent mb-6">Bewerkingsproces</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-black/30 rounded-lg p-6">
                <div class="text-3xl mb-2">📸</div>
                <h3 class="text-white font-semibold mb-2">Foto Recht</h3>
                <p class="text-gray-400 text-sm">Horizon en verticalen recht zetten voor professionele uitstraling</p>
            </div>
            <div class="bg-black/30 rounded-lg p-6">
                <div class="text-3xl mb-2">✂️</div>
                <h3 class="text-white font-semibold mb-2">Bijsnijden</h3>
                <p class="text-gray-400 text-sm">Focus op 1 onderwerp, verwijder afleidende elementen</p>
            </div>
            <div class="bg-black/30 rounded-lg p-6">
                <div class="text-3xl mb-2">💡</div>
                <h3 class="text-white font-semibold mb-2">Licht & Donker</h3>
                <p class="text-gray-400 text-sm">Belichting aanpassen, schaduwen en highlights optimaliseren</p>
            </div>
            <div class="bg-black/30 rounded-lg p-6">
                <div class="text-3xl mb-2">🎨</div>
                <h3 class="text-white font-semibold mb-2">Kleuren</h3>
                <p class="text-gray-400 text-sm">Kleurbalans, verzadiging en temperatuur aanpassen</p>
            </div>
            <div class="bg-black/30 rounded-lg p-6">
                <div class="text-3xl mb-2">✨</div>
                <h3 class="text-white font-semibold mb-2">Scherpte</h3>
                <p class="text-gray-400 text-sm">Details versterken en ruis reduceren</p>
            </div>
            <div class="bg-black/30 rounded-lg p-6">
                <div class="text-3xl mb-2">🔍</div>
                <h3 class="text-white font-semibold mb-2">Details</h3>
                <p class="text-gray-400 text-sm">Finale retouches en lokale aanpassingen</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-12">
        <a href="/gallery" class="inline-flex items-center text-brand-accent hover:text-white transition-colors text-lg">
            Bekijk de foto's
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</div>
