<?php
session_start();
require_once 'config.php';

$page_title = "About Us - Access Setu Technologies";
?>

<?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>About Access Setu Technologies</h1>
                        <p>We're on a mission to make the digital world accessible to everyone, regardless of their abilities.</p>
                        <p>Access Setu Technologies helps organizations worldwide create inclusive digital experiences. "Setu" means bridge in Sanskrit—we bridge the gap between technology and accessibility.</p>
                        <a href="contact.php" class="btn btn-primary btn-lg">Work With Us</a>
                    </div>
                    <div class="hero-image">
                        <img src="https://images.unsplash.com/photo-1763739527737-e3626d731072?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBjb25zdWx0aW5nJTIwbWVldGluZ3xlbnwxfHx8fDE3NzM1NTg4NTh8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Professional consultation meeting" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="mission-vision">
            <div class="container">
                <div class="mission-vision-grid">
                    <div class="mission-card">
                        <div class="card-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="6"/>
                                <circle cx="12" cy="12" r="2"/>
                            </svg>
                        </div>
                        <h2>Our Mission</h2>
                        <p>To empower organizations to create digital products that are accessible to all users, ensuring compliance with international standards while delivering exceptional user experiences.</p>
                    </div>
                    <div class="vision-card">
                        <div class="card-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <h2>Our Vision</h2>
                        <p>A world where digital accessibility is the standard, not the exception—where every person can access and interact with digital content without barriers.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="values-section">
            <div class="container">
                <div class="section-header">
                    <h2>Our Values</h2>
                    <p>The principles that guide our work and relationships</p>
                </div>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <h3>Inclusion First</h3>
                        <p>We believe everyone deserves equal access to digital content and services.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                            </svg>
                        </div>
                        <h3>Empathy</h3>
                        <p>We approach every project with empathy for users of all abilities.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                <circle cx="12" cy="8" r="7"/>
                                <polyline points="8.21,13.89 7,23 12,20 17,23 15.79,13.88"/>
                            </svg>
                        </div>
                        <h3>Excellence</h3>
                        <p>We maintain the highest standards in accessibility testing and remediation.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <h3>Collaboration</h3>
                        <p>We work closely with clients to build sustainable accessibility practices.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                <polygon points="13,2 3,14 12,14 11,22 21,10 12,10 13,2"/>
                            </svg>
                        </div>
                        <h3>Innovation</h3>
                        <p>We stay ahead of emerging standards and technologies in accessibility.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="6"/>
                                <circle cx="12" cy="12" r="2"/>
                            </svg>
                        </div>
                        <h3>Results-Driven</h3>
                        <p>We focus on measurable outcomes and lasting accessibility improvements.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section-white">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Start Your Accessibility Journey?</h2>
                    <p>Let's work together to make your digital products accessible to everyone.</p>
                    <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
