<?php
/**
 * Configuration & Routing
 * Main configuration file for the photography portfolio
 */

// Site Configuration
define('SITE_NAME', 'Arne Meevis');
define('SITE_TITLE', 'Arne Meevis - Fotografie Portfolio');

// Load data
require_once __DIR__ . '/data/portfolioData.php';

/**
 * Simple routing function
 * Maps URLs to page files
 */
function route($uri) {
    // Remove query string
    $uri = strtok($uri, '?');
    
    // Clean up the URI
    $uri = trim($uri, '/');
    
    // Define routes
    $routes = [
        '' => 'pages/home.php',
        'over' => 'pages/over.php',
        'portfolio' => 'pages/portfolio.php',
        'contact' => 'pages/contact.php',
    ];
    
    // Return the page or 404
    return isset($routes[$uri]) ? $routes[$uri] : 'pages/404.php';
}

/**
 * Get current page name from URI
 */
function getCurrentPage() {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = trim($uri, '/');
    
    if (empty($uri)) {
        return 'home';
    }
    
    return $uri;
}
?>
