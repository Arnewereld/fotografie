<?php
session_start();

// Simple routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Include configuration
require_once 'config/config.php';
require_once 'includes/functions.php';
require_once 'data/portfolio_data.php';

// Include header
include 'includes/header.php';

// Route to appropriate page
switch($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'gallery':
        include 'pages/gallery.php';
        break;
    case 'photo':
        include 'pages/photo.php';
        break;
    case 'lighting':
        include 'pages/lighting.php';
        break;
    case 'info':
        include 'pages/info.php';
        break;
    case 'toc':
        include 'pages/toc.php';
        break;
    default:
        include 'pages/404.php';
}

// Include footer
include 'includes/footer.php';
?>
