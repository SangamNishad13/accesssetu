<?php
require 'vendor/autoload.php';
// Database Configuration
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->loadEnv(__DIR__ . '/.env');

$conn = new mysqli(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME']
);

// Site Configuration
define('SITE_NAME', 'Access Setu Technologies');

// Dynamically set SITE_URL based on current domain
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$scriptPath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
define('SITE_URL', $protocol . '://' . $host . $scriptPath);

define('SITE_DESC', 'Making Digital Experiences Accessible to Everyone');

// Create database connection
try {
    if (!$conn || $conn->connect_error) {
        // If database doesn't exist, continue anyway (it can be created later)
        $conn = null;
    }
} catch (Exception $e) {
    $conn = null;
}

// Get current page
$current_page = basename($_SERVER['PHP_SELF']);
?>
