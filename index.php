<?php
// Simple PHP router
$route = $_GET['route'] ?? '';
$route = trim($route, '/');

// Define routes
$routes = [
    '' => 'pages/home.php',
    'gallery' => 'pages/gallery.php',
    'info' => 'pages/info.php',
    'lighting' => 'pages/lighting.php',
    'toc' => 'pages/toc.php',
];

// Get the page to include
$page = $routes[$route] ?? 'pages/404.php';

// Include layout
include 'includes/layout.php';
