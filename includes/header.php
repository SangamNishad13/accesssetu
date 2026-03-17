<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? SITE_NAME; ?></title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/styles/main.css">
    <link rel="icon" href="<?php echo SITE_URL; ?>/favicon.ico">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href="#mainContent" class="skip-link">Skip to main content</a>
        <nav class="nav">
            <div class="nav-container">
                <a href="index.php" class="logo">
                    <svg aria-hidden="true" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#2563EB" />
                        <path d="M8 24C8 24 12 14 20 14C28 14 32 24 32 24" stroke="white" stroke-width="2.5"
                            stroke-linecap="round" fill="none" />
                        <line x1="12" y1="24" x2="12" y2="28" stroke="white" stroke-width="2.5"
                            stroke-linecap="round" />
                        <line x1="20" y1="14" x2="20" y2="28" stroke="white" stroke-width="2.5"
                            stroke-linecap="round" />
                        <line x1="28" y1="24" x2="28" y2="28" stroke="white" stroke-width="2.5"
                            stroke-linecap="round" />
                        <line x1="6" y1="28" x2="34" y2="28" stroke="white" stroke-width="2.5" stroke-linecap="round" />
                        <circle cx="20" cy="10" r="2" fill="white" />
                        <path d="M20 12C20 12 18 13 18 15M20 12C20 12 22 13 22 15" stroke="white" stroke-width="1.5"
                            stroke-linecap="round" />
                    </svg>
                    <div class="logo-icon">
                        <div class="logo-text">
                            <span class="logo-main">Access Setu</span>
                            <span class="logo-sub">Technologies</span>
                            <span class="visually-hidden">Homepage</span>
                        </div>
                    </div>
                </a>

                <div class="nav-menu" id="navMenu">
                    <a href="index.php" class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" <?php echo $current_page == 'index.php' ? 'aria-current="page"' : ''; ?>>Home</a>
                    <a href="services.php" class="nav-link <?php echo $current_page == 'services.php' ? 'active' : ''; ?>" <?php echo $current_page == 'services.php' ? 'aria-current="page"' : ''; ?>>Services</a>
                    <a href="about.php" class="nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>" <?php echo $current_page == 'about.php' ? 'aria-current="page"' : ''; ?>>About</a>
                    <a href="contact.php" class="nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>" <?php echo $current_page == 'contact.php' ? 'aria-current="page"' : ''; ?>>Contact</a>
                    <a href="contact.php" class="btn btn-primary">Get Started</a>
                </div>

                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main id="mainContent" tabindex="-1">
