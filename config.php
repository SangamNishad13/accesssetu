<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'accesssetu');

// Site Configuration
define('SITE_NAME', 'Access Setu Technologies');
define('SITE_URL', 'http://localhost/Accesssetu');
define('SITE_DESC', 'Making Digital Experiences Accessible to Everyone');

// Create database connection
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        // If database doesn't exist, continue anyway (it can be created later)
        $conn = null;
    }
} catch (Exception $e) {
    $conn = null;
}

// Get current page
$current_page = basename($_SERVER['PHP_SELF']);
?>
