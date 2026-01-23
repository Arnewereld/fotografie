<?php
// Simple PHP router
// Get the request URI and clean it
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$requestUri = parse_url($requestUri, PHP_URL_PATH);
$requestUri = trim($requestUri, '/');
// Sanitize to prevent path traversal
$requestUri = preg_replace('/[^a-zA-Z0-9_\-]/', '', $requestUri);

// Define routes
$routes = [
    '' => 'pages/home.php',
    'gallery' => 'pages/gallery.php',
    'info' => 'pages/info.php',
    'lighting' => 'pages/lighting.php',
    'toc' => 'pages/toc.php',
];

// Get the page to include
$page = $routes[$requestUri] ?? 'pages/404.php';

// Include layout
include 'includes/layout.php';
