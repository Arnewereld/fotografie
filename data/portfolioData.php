<?php

// Portfolio Categories
$portfolioCategories = [
    [
        'id' => 'motion',
        'title' => 'Bewegingsfoto\'s',
        'description' => 'Dynamiek en snelheid vastgelegd in een enkel moment.',
        'image' => 'assets/images/motion_cover.jpg'
    ],
    [
        'id' => 'portrait',
        'title' => 'Portretten Studio',
        'description' => 'Karakter en emotie in gecontroleerd licht.',
        'image' => 'assets/images/portrait_cover.jpg'
    ],
    [
        'id' => 'architecture',
        'title' => 'Architectuur / Landschap',
        'description' => 'Lijnen, vormen en de omgeving.',
        'image' => 'assets/images/architecture_cover.jpg'
    ],
    [
        'id' => 'product',
        'title' => 'Productfotografie',
        'description' => 'Commerciële perfectie en detail.',
        'image' => 'assets/images/product_cover.jpg'
    ],
    [
        'id' => 'best',
        'title' => 'Mooiste Foto\'s',
        'description' => 'Mijn persoonlijke favorieten.',
        'image' => 'assets/images/best_cover.jpg'
    ],
];

// Portfolio Items
$portfolioItems = [
    // --- Motion ---
    [
        'id' => 'm1',
        'categoryId' => 'motion',
        'title' => 'De Eindsprint',
        'image' => 'https://images.unsplash.com/photo-1552674605-469455302436?q=80&w=2070&auto=format&fit=crop',
        'imageOriginal' => 'https://images.unsplash.com/photo-1552674605-469455302436?q=80&w=2070&auto=format&fit=crop&grayscale',
        'description' => 'Het beslissende moment tijdens de lokale atletiekwedstrijd.',
        'whyInteresting' => 'De gezichtsuitdrukking toont pure wilskracht en uitputting.',
        'critique' => 'De onscherpe achtergrond isoleert het onderwerp goed. De sluitertijd was perfect om de beweging te bevriezen maar toch snelheid te suggereren.',
        'specs' => [
            'shutter' => '1/1000s',
            'aperture' => 'f/2.8',
            'iso' => '400',
            'camera' => 'Sony A7IV'
        ],
        'analysis' => [
            'composition' => 'Centraal perspectief met leidende lijnen van de baan.',
            'frame' => 'Ruim kader om de context van het stadion te tonen.',
            'format' => 'Landschap',
            'perspective' => 'Ooghoogte',
            'lighting' => [
                'direction' => 'Tegenlicht',
                'intensity' => 'Harde zon',
                'source' => 'Natuurlijk'
            ],
            'depthOfField' => 'Gering (f/2.8)',
        ],
        'editing' => [
            'process' => 'Contrast verhoogd, schaduwen opgehelderd, kleurtemperatuur warmer.',
            'comparison' => ['Crop', 'Color Grade']
        ]
    ],
    [
        'id' => 'm2',
        'categoryId' => 'motion',
        'title' => 'Urban Dance',
        'image' => 'https://images.unsplash.com/photo-1535525153412-5a42439a210d?q=80&w=2070&auto=format&fit=crop',
        'imageOriginal' => 'https://images.unsplash.com/photo-1535525153412-5a42439a210d?q=80&w=2070&auto=format&fit=crop&sepia',
        'description' => 'Breakdancer in de lucht bevroren tegen een betonnen achtergrond.',
        'whyInteresting' => 'Het contrast tussen de menselijke vorm en de harde architectuur.',
        'critique' => 'Lichtval is mooi, maar de rechterhoek leidt wat af.',
        'specs' => [
            'shutter' => '1/2000s',
            'aperture' => 'f/4',
            'iso' => '800',
            'camera' => 'Canon R6'
        ],
        'analysis' => [
            'composition' => 'Driehoekscompositie door de ledematen.',
            'frame' => 'Full body shot.',
            'format' => 'Landschap',
            'perspective' => 'Kikkerperspectief',
            'lighting' => [
                'direction' => 'Zijlicht',
                'intensity' => 'Diffuus (bewolkt)',
                'source' => 'Daglicht'
            ],
            'depthOfField' => 'Middelgroot',
        ],
        'editing' => [
            'process' => 'Zwart-wit conversie met hoog contrast.',
            'comparison' => ['B&W', 'Dodge & Burn']
        ]
    ],

    // --- Portrait ---
    [
        'id' => 'p1',
        'categoryId' => 'portrait',
        'title' => 'De CEO',
        'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop',
        'imageOriginal' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop&contrast=0.5',
        'description' => 'Zakelijk portret met een naderbare uitstraling.',
        'whyInteresting' => 'De blik is direct en zelfverzekerd.',
        'critique' => 'Rembrandt-verlichting is goed gelukt, schaduwzijde niet te donker.',
        'specs' => [
            'shutter' => '1/160s',
            'aperture' => 'f/8',
            'iso' => '100',
            'camera' => 'Sony A7IV'
        ],
        'analysis' => [
            'composition' => 'Gulden snede (ogen op de lijn).',
            'frame' => 'Borstbeeld (Bust shot).',
            'format' => 'Portret',
            'perspective' => 'Ooghoogte',
            'lighting' => [
                'direction' => '45 graden',
                'intensity' => 'Softbox',
                'source' => 'Studio'
            ],
            'depthOfField' => 'Scherp van neus tot oren',
        ],
        'editing' => [
            'process' => 'Huidretouche (frequentie separatie), tanden licht gewit.',
            'comparison' => ['Retouch', 'Color Balance']
        ]
    ],
    [
        'id' => 'p2',
        'categoryId' => 'portrait',
        'title' => 'Vintage Mood',
        'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1964&auto=format&fit=crop',
        'imageOriginal' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1964&auto=format&fit=crop&saturate=0',
        'description' => 'Artistiek portret met een moderne, tikje rebelse sfeer.',
        'whyInteresting' => 'De kleuren en de houding vertellen een verhaal.',
        'critique' => 'Compositie is sterk, wellicht iets te veel hoofdruimte.',
        'specs' => [
            'shutter' => '1/200s',
            'aperture' => 'f/1.8',
            'iso' => '200',
            'camera' => 'Fuji X-T4'
        ],
        'analysis' => [
            'composition' => 'Centraal',
            'frame' => 'Medium shot',
            'format' => 'Portret',
            'perspective' => 'Ooghoogte',
            'lighting' => [
                'direction' => 'Diffuus frontaal',
                'intensity' => 'Zacht',
                'source' => 'Daglicht/Reflectiescherm'
            ],
            'depthOfField' => 'Zeer gering (bokeh)',
        ],
        'editing' => [
            'process' => 'Film simulatie toegepast, grain toegevoegd.',
            'comparison' => ['Grade', 'Grain']
        ]
    ],

    // --- Architecture ---
    [
        'id' => 'a1',
        'categoryId' => 'architecture',
        'title' => 'Symmetrie in Beton',
        'image' => 'https://images.unsplash.com/photo-1486325212027-80816489863b?q=80&w=2071&auto=format&fit=crop',
        'imageOriginal' => 'https://images.unsplash.com/photo-1486325212027-80816489863b?q=80&w=2071&auto=format&fit=crop&rotate=5',
        'description' => 'Moderne kantoorgebouwen tegen een strakblauwe lucht.',
        'whyInteresting' => 'De herhaling van patronen werkt rustgevend.',
        'critique' => 'Perfecte symmetrie bereikt door perspectiefcorrectie in nabewerking.',
        'specs' => [
            'shutter' => '1/500s',
            'aperture' => 'f/11',
            'iso' => '100',
            'camera' => 'Canon R5'
        ],
        'analysis' => [
            'composition' => 'Symmetrisch',
            'frame' => 'Totaalshot',
            'format' => 'Landschap',
            'perspective' => 'Kikkerperspectief',
            'lighting' => [
                'direction' => 'Zonlicht (Hoog)',
                'intensity' => 'Hard',
                'source' => 'Zon'
            ],
            'depthOfField' => 'Groot (alles scherp)',
        ],
        'editing' => [
            'process' => 'Keystone correctie, blauwverzadiging verhoogd.',
            'comparison' => ['Perspective', 'Saturation']
        ]
    ],
    [
        'id' => 'a2',
        'categoryId' => 'architecture',
        'title' => 'De Brug bij Nacht',
        'image' => 'https://plus.unsplash.com/premium_photo-1661962692059-55d5a4319814?q=80&w=2070&auto=format&fit=crop',
        'imageOriginal' => 'https://plus.unsplash.com/premium_photo-1661962692059-55d5a4319814?q=80&w=2070&auto=format&fit=crop&exposure=-1',
        'description' => 'Long exposure van stadsverkeer op de brug.',
        'whyInteresting' => 'Lichtstrepen geven de dynamiek van de stad weer.',
        'critique' => 'Balans tussen kunstlicht en de lucht (blauwe uurtje) is goed.',
        'specs' => [
            'shutter' => '30s',
            'aperture' => 'f/16',
            'iso' => '50',
            'camera' => 'Nikon D850'
        ],
        'analysis' => [
            'composition' => 'Leidende lijnen',
            'frame' => 'Wide angle',
            'format' => 'Landschap',
            'perspective' => 'Vogelperspectief',
            'lighting' => [
                'direction' => 'Divers',
                'intensity' => 'Kunstlicht',
                'source' => 'Stad'
            ],
            'depthOfField' => 'Maximaal',
        ],
        'editing' => [
            'process' => 'Hooglichten getemperd, schaduwen iets open.',
            'comparison' => ['Highlights', 'Shadows']
        ]
    ],

    // --- Product ---
    [
        'id' => 'pr1',
        'categoryId' => 'product',
        'title' => 'Tijdloos Uurwerk',
        'image' => 'https://images.unsplash.com/photo-1524592094714-0f0654e20314?q=80&w=1999&auto=format&fit=crop',
        'imageOriginal' => 'https://images.unsplash.com/photo-1524592094714-0f0654e20314?q=80&w=1999&auto=format&fit=crop&brightness=0.6',
        'description' => 'Luxe horloge met focus op de wijzerplaat.',
        'whyInteresting' => 'De weerspiegeling in het glas en de metalen details.',
        'critique' => 'Reflecties goed onder controle gehouden d.m.v. polarisatiefilter.',
        'specs' => [
            'shutter' => '1/125s',
            'aperture' => 'f/16',
            'iso' => '100',
            'camera' => 'Macro Lens 100mm'
        ],
        'analysis' => [
            'composition' => 'Centraal',
            'frame' => 'Macro',
            'format' => 'Vierkant',
            'perspective' => 'Top down',
            'lighting' => [
                'direction' => 'Rondom',
                'intensity' => 'Diffuus',
                'source' => 'Lichttent'
            ],
            'depthOfField' => 'Groot voor macrobegrippen',
        ],
        'editing' => [
            'process' => 'Focus stacking voor maximale scherpte, stofjes weggepoetst.',
            'comparison' => ['Stacking', 'Cleanup']
        ]
    ],
    [
        'id' => 'pr2',
        'categoryId' => 'product',
        'title' => 'Parfum Noir',
        'image' => 'https://images.unsplash.com/photo-1595180632367-9323f478fc45?q=80&w=1974&auto=format&fit=crop',
        'imageOriginal' => 'https://images.unsplash.com/photo-1595180632367-9323f478fc45?q=80&w=1974&auto=format&fit=crop&hue=30',
        'description' => 'Productfotografie met low-key verlichting.',
        'whyInteresting' => 'De mysterieuze sfeer past bij het merk.',
        'critique' => 'Randverlichting (rim light) scheidt het zwarte flesje goed van de zwarte achtergrond.',
        'specs' => [
            'shutter' => '1/200s',
            'aperture' => 'f/11',
            'iso' => '100',
            'camera' => 'Sony A7IV'
        ],
        'analysis' => [
            'composition' => 'Asymmetrisch',
            'frame' => 'Medium',
            'format' => 'Portret',
            'perspective' => 'Ooghoogte',
            'lighting' => [
                'direction' => 'Tegenlicht/Zijlicht',
                'intensity' => 'Accent',
                'source' => 'Snoots'
            ],
            'depthOfField' => 'Scherp',
        ],
        'editing' => [
            'process' => 'Lokale contrasten, kleurkalibratie.',
            'comparison' => ['Contrast', 'Color']
        ]
    ],

    // --- Best Of ---
    [
        'id' => 'b1',
        'categoryId' => 'best',
        'title' => 'Misty Mountains',
        'image' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop',
        'imageOriginal' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop&exposure=1',
        'description' => 'Zonsopkomst in de bergen met laaghangende bewolking.',
        'whyInteresting' => 'De lagen in het landschap creëren diepte.',
        'critique' => 'Mijn favoriete foto van het jaar vanwege de serene sfeer.',
        'specs' => [
            'shutter' => '1/60s',
            'aperture' => 'f/8',
            'iso' => '200',
            'camera' => 'Drone'
        ],
        'analysis' => [
            'composition' => 'Lagen/Coulissenwerking',
            'frame' => 'Panorama',
            'format' => 'Landschap',
            'perspective' => 'Vogelperspectief',
            'lighting' => [
                'direction' => 'Zacht',
                'intensity' => 'Diffuus',
                'source' => 'Zon achter wolken'
            ],
            'depthOfField' => 'Oneindig',
        ],
        'editing' => [
            'process' => 'Dehaze, verzadiging in de schaduwen.',
            'comparison' => ['Dehaze', 'Vibrance']
        ]
    ]
];
