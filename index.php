<?php
session_start();
require_once 'config.php';

$page_title = "Making Digital Experiences Accessible - Access Setu Technologies";
?>

<?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Making Digital Experiences Accessible to Everyone</h1>
                        <p>Expert accessibility testing, remediation, and consultation services to ensure your digital
                            products are inclusive and compliant with WCAG standards.</p>
                        <div class="hero-buttons">
                            <a href="contact.php" class="btn btn-primary btn-lg">Get Started</a>
                            <a href="services.php" class="btn btn-outline btn-lg">Our Services</a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="<?php echo SITE_URL; ?>/images/team-collaboration.jpg"
                            alt="Diverse team collaborating" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Comprehensive accessibility solutions tailored to your needs</p>
                </div>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB"
                                stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14,2 14,8 20,8" />
                                <line x1="16" y1="13" x2="8" y2="13" />
                                <line x1="16" y1="17" x2="8" y2="17" />
                                <polyline points="10,9 9,9 8,9" />
                            </svg>
                        </div>
                        <h3>Accessibility Testing</h3>
                        <p>Comprehensive WCAG compliance testing for websites and applications.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="3" />
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                            </svg>
                        </div>
                        <h3>Remediation Services</h3>
                        <p>Expert fixes to make your digital content accessible to all users.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB"
                                stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h3>Consultation</h3>
                        <p>Strategic guidance on accessibility best practices and implementation.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB"
                                stroke-width="2">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                                <path d="M6 12v5c3 3 9 3 12 0v-5" />
                            </svg>
                        </div>
                        <h3>Training Programs</h3>
                        <p>Empower your team with accessibility knowledge and skills.</p>
                    </div>
                </div>
                <div class="text-center" style="margin-top: 48px;">
                    <a href="services.php" class="btn btn-outline btn-lg">
                        View All Services
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" style="margin-left: 8px; display: inline;">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12,5 19,12 12,19" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-choose-us">
            <div class="container">
                <div class="why-choose-content">
                    <div class="why-choose-image">
                        <img src="https://images.unsplash.com/photo-1489925461942-d8f490a04588?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhY2Nlc3NpYmlsaXR5JTIwdGVjaG5vbG9neSUyMHNjcmVlbiUyMHJlYWRlcnxlbnwxfHx8fDE3NzM2NTk0MjF8MA&ixlib=rb-4.1.0&q=80&w=1080"
                            alt="Accessibility technology" />
                    </div>
                    <div class="why-choose-text">
                        <h2>Why Choose Access Setu Technologies?</h2>
                        <div class="features-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563EB"
                                        stroke-width="2">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h3>WCAG Certified Experts</h3>
                                    <p>Our team includes certified accessibility specialists with deep knowledge of WCAG 2.1
                                        and 2.2 standards.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563EB"
                                        stroke-width="2">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <polyline points="22,4 12,14.01 9,11.01" />
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h3>Proven Track Record</h3>
                                    <p>Over 500 successful projects across various industries, from e-commerce to government
                                        agencies.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563EB"
                                        stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h3>Collaborative Approach</h3>
                                    <p>We work closely with your team to ensure sustainable accessibility practices and
                                        knowledge transfer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Make Your Digital Products Accessible?</h2>
                    <p>Let's discuss how we can help you create inclusive digital experiences that bridge the gap for all
                        users.</p>
                    <a href="contact.php" class="btn btn-secondary btn-lg">Contact Us Today</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
