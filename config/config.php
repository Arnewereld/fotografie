<?php
// Configuration settings
define('SITE_TITLE', 'Fotografie Portfolio');
define('SITE_SUBTITLE', 'Vang het Moment');
define('PHOTOGRAPHER_NAME', 'Ivan Rheenen');
define('PHOTOGRAPHER_INITIALS', 'IVR');

// Base URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$script = dirname($_SERVER['SCRIPT_NAME']);
define('BASE_URL', $protocol . '://' . $host . $script);
?>
