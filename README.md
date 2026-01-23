# Fotografie Portfolio

Een moderne fotografie portfolio website gebouwd met PHP, geïnspireerd door professionele portfolio-designs.

## Functies

- **Responsive Design**: Werkt op alle apparaten (desktop, tablet, mobiel)
- **Portfolio Galerij**: Georganiseerd in categorieën (Beweging, Portret, Architectuur, Product, Best)
- **Foto Details**: Uitgebreide informatie per foto met technische specificaties
- **Lichtplan**: Visuele representatie van studio- en natuurlijke lichtopstellingen
- **Over Pagina**: Informatie over het project en de fotograaf
- **Inhoudsopgave**: Volledig overzicht van alle foto's

## Installatie

1. Clone deze repository
2. Upload de bestanden naar je webserver met PHP ondersteuning
3. Zorg dat je webserver is geconfigureerd om `index.php` als index bestand te gebruiken
4. Open de website in je browser

## Structuur

```
├── config/          # Configuratie bestanden
├── data/            # Portfolio data (categorieën en items)
├── includes/        # Header, footer en helper functies
├── pages/           # Individuele pagina's
├── public/          # Statische bestanden (CSS, JS)
│   ├── css/
│   └── js/
└── index.php        # Hoofd entry point met routing
```

## Aanpassen

### Portfolio Items Toevoegen

Bewerk het bestand `data/portfolio_data.php` om nieuwe categorieën of foto's toe te voegen.

### Styling Aanpassen

Pas het bestand `public/css/styles.css` aan om de kleuren en stijl te wijzigen.

### Site Informatie

Bewerk `config/config.php` om de site titel, naam van de fotograaf, etc. te wijzigen.

## Technologieën

- **PHP**: Server-side rendering
- **CSS3**: Custom styling met animaties
- **JavaScript**: Interactieve elementen en scroll effecten
- **Responsive Design**: Mobile-first approach

## Licentie

© 2026 Ivan Rheenen. Alle rechten voorbehouden.