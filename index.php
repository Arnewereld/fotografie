<?php
/**
 * Main Entry Point
 * Handles all requests and routes them to the appropriate page
 */

// Start session if needed
session_start();

// Load configuration and routing
require_once __DIR__ . '/config-new.php';

// Get the current URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Get the page file to include
$pageFile = route($uri);

// Check if page file exists
if (!file_exists(__DIR__ . '/' . $pageFile)) {
    $pageFile = 'pages/404.php';
    http_response_code(404);
}

// Start output buffering
ob_start();

// Include the page content
include __DIR__ . '/' . $pageFile;

// Get the buffered content
$content = ob_get_clean();

// Include the layout wrapper
include __DIR__ . '/includes/layout.php';
?>
