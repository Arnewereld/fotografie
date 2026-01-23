# Fotografie Portfolio (PHP)

Een modern fotografie portfolio gebouwd met PHP, gebaseerd op het React fotoportfolio van Ingmar van Rheenen.

## Functionaliteiten

- **Responsive Design**: Volledig responsive met Tailwind CSS
- **Portfolio Categorieën**: Meerdere categorieën (Bewegingsfoto's, Portretten, Architectuur, Productfotografie, Best of)
- **Gedetailleerde Foto-informatie**: Elke foto bevat uitgebreide technische details, analyse en kritiek
- **Lichtplan Sectie**: Overzicht van studioverlichting technieken
- **Inhoudsopgave**: Volledige navigatie door het portfolio
- **Modern UI**: Gouden accent kleuren, gradient effecten, smooth transitions

## Technische Stack

- **Backend**: PHP 7.4+
- **Frontend**: Tailwind CSS (via CDN)
- **Fonts**: Google Fonts (Outfit & Playfair Display)
- **Routing**: Apache .htaccess mod_rewrite

## Structuur

```
/
├── index.php              # Main router
├── .htaccess             # URL rewriting
├── data/
│   └── portfolioData.php # Portfolio content data
├── includes/
│   ├── layout.php        # Main layout wrapper
│   ├── header.php        # Navigation
│   └── footer.php        # Footer
├── pages/
│   ├── home.php          # Landing page
│   ├── gallery.php       # Portfolio gallery
│   ├── info.php          # About page
│   ├── lighting.php      # Lighting setup info
│   ├── toc.php           # Table of contents
│   └── 404.php           # Not found page
└── assets/
    └── images/           # Portfolio images
```

## Installatie

1. Clone de repository
2. Zorg dat Apache mod_rewrite is ingeschakeld
3. Upload naar een PHP-enabled webserver
4. Navigeer naar de website

## URL Routes

- `/` - Home page
- `/gallery` - Portfolio overzicht
- `/gallery?category=motion` - Categorie detail
- `/gallery?category=motion&photo=m1` - Foto detail
- `/info` - Over het project
- `/lighting` - Lichtplan
- `/toc` - Inhoudsopgave

## Features

### Portfolio Categorieën
- Bewegingsfoto's (Motion)
- Portretten Studio (Portrait)
- Architectuur / Landschap
- Productfotografie
- Mooiste Foto's (Best of)

### Foto Details
Elke foto bevat:
- Camera instellingen (shutter, aperture, ISO, camera)
- Lichtanalyse (direction, intensity, source)
- Compositie analyse
- Kritiek en waarom de foto interessant is
- Bewerkingsproces

## Credits

Gebaseerd op het React fotoportfolio van Ingmar van Rheenen
- Original repo: https://github.com/ingmarvanrheenen/fotoportfolio.git