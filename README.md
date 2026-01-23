# Fotografie - Photography Portfolio

A modern, responsive photography portfolio website built with PHP, HTML5, CSS3, and JavaScript.

## Features

- **Responsive Design**: Works seamlessly on desktop, tablet, and mobile devices
- **Dynamic Gallery**: Filterable photo gallery with categories (Portrait, Landscape, Nature, Urban)
- **Lightbox Viewer**: Full-screen image viewing with keyboard navigation
- **Smooth Animations**: Modern CSS animations and transitions
- **Contact Form**: Ajax-powered contact form with validation
- **Custom Color Scheme**: Modern purple, indigo, and pink color palette

## Color Palette

- Primary: `#6366f1` (Indigo)
- Secondary: `#8b5cf6` (Purple)
- Accent: `#ec4899` (Pink)
- Dark: `#1e1b4b` (Deep Blue)
- Light: `#f8fafc` (Off-white)

## Installation

### Option 1: Docker (Recommended)

1. Make sure Docker and Docker Compose are installed on your system
2. Clone or download this repository
3. Navigate to the project directory
4. Run the application:
   ```bash
   docker-compose up -d
   ```
5. Access the site at `http://localhost:8080`
6. To stop the application:
   ```bash
   docker-compose down
   ```

### Option 2: Traditional Setup

1. Clone or download this repository to your web server
2. Ensure PHP 7.0 or higher is installed
3. Open `config.php` and customize your site settings
4. Add your own images by updating the `$galleryImages` array in `config.php`
5. Access the site through your web browser

## File Structure

```
fotografie/
├── index.php          # Main page
├── config.php         # Site configuration
├── gallery.php        # Gallery renderer
├── contact.php        # Contact form handler
├── Dockerfile         # Docker configuration
├── docker-compose.yml # Docker Compose setup
├── .dockerignore      # Docker ignore file
├── css/
│   └── style.css      # Main stylesheet
├── js/
│   └── script.js      # JavaScript functionality
└── README.md          # This file
```

## Usage

### Customizing Content

Edit `config.php` to customize:
- Site name and title
- Contact information
- Gallery images (replace Unsplash URLs with your own images)

### Adding Your Own Images

Replace the Unsplash URLs in `config.php` with your own image paths:

```php
$galleryImages = [
    [
        'id' => 1,
        'title' => 'Your Photo Title',
        'category' => 'portrait', // portrait, landscape, nature, or urban
        'image' => 'images/your-photo.jpg'
    ],
    // Add more images...
];
```

### Enabling Email Functionality

To enable the contact form to send emails, uncomment and configure the mail section in `contact.php`.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Technologies Used

- **PHP**: Server-side logic
- **HTML5**: Structure and semantics
- **CSS3**: Styling and animations
- **JavaScript**: Interactivity and dynamic features
- **Google Fonts**: Playfair Display & Poppins

## Credits

- Sample images from [Unsplash](https://unsplash.com)
- Fonts from [Google Fonts](https://fonts.google.com)

## License

Free to use for personal and commercial projects.

---

Created with ❤️ for photography enthusiasts