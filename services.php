<?php
session_start();
require_once 'config.php';

$page_title = "Our Services - Access Setu Technologies";
?>

<?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content-center">
                    <h1>Our Services</h1>
                    <p>Comprehensive accessibility solutions to ensure your digital products are inclusive, compliant, and user-friendly for everyone.</p>
                </div>
            </div>
        </section>

        <!-- Main Services Tabs -->
        <section class="services-tabs">
            <div class="container">
                <div class="tabs-container">
                    <div class="tabs-nav">
                        <button class="tab-btn active" data-tab="testing" role="tab" aria-selected="true" id="testingTab" aria-controls="testing">Testing</button>
                        <button class="tab-btn" data-tab="remediation" role="tab" aria-selected="false" id="remediationTab" aria-controls="remediation" tabindex="-1">Remediation</button>
                        <button class="tab-btn" data-tab="consultation" role="tab" aria-selected="false" id="consultationTab" aria-controls="consultation" tabindex="-1">Consultation</button>
                        <button class="tab-btn" data-tab="training" role="tab" aria-selected="false" id="trainingTab" aria-controls="training" tabindex="-1">Training</button>
                    </div>

                    <!-- Testing Tab -->
                    <div class="tab-content active" id="testing" role="tabpanel" aria-labelledby="testingTab">
                        <div class="service-detail">
                            <div class="service-detail-content">
                                <div class="service-detail-text">
                                    <div class="service-icon-large">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                            <polyline points="14,2 14,8 20,8"/>
                                            <line x1="16" y1="13" x2="8" y2="13"/>
                                            <line x1="16" y1="17" x2="8" y2="17"/>
                                            <polyline points="10,9 9,9 8,9"/>
                                        </svg>
                                    </div>
                                    <h2>Accessibility Testing</h2>
                                    <p>Our expert team conducts thorough accessibility audits using both automated tools and manual testing to ensure WCAG compliance.</p>
                                    <a href="contact.php" class="btn btn-primary btn-lg">Request a Quote</a>
                                </div>
                                <div class="service-features-card">
                                    <h3>What's Included</h3>
                                    <ul class="features-list">
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>WCAG 2.1 & 2.2 Compliance Testing</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Automated and Manual Testing</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Screen Reader Compatibility</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Keyboard Navigation Testing</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Color Contrast Analysis</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Detailed Reporting with Recommendations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Remediation Tab -->
                    <div class="tab-content" id="remediation" role="tabpanel" aria-labelledby="remediationTab">
                        <div class="service-detail">
                            <div class="service-detail-content">
                                <div class="service-detail-text">
                                    <div class="service-icon-large">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                                    </div>
                                    <h2>Remediation Services</h2>
                                    <p>We don't just identify issues—we fix them. Our remediation services ensure your digital products meet accessibility standards.</p>
                                    <a href="contact.php" class="btn btn-primary btn-lg">Request a Quote</a>
                                </div>
                                <div class="service-features-card">
                                    <h3>What's Included</h3>
                                    <ul class="features-list">
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Code-Level Fixes</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Content Remediation</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Document Accessibility (PDFs, etc.)</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Alternative Text Creation</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>ARIA Implementation</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Ongoing Support & Maintenance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Consultation Tab -->
                    <div class="tab-content" id="consultation" role="tabpanel" aria-labelledby="consultationTab">
                        <div class="service-detail">
                            <div class="service-detail-content">
                                <div class="service-detail-text">
                                    <div class="service-icon-large">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                    </div>
                                    <h2>Accessibility Consultation</h2>
                                    <p>Get expert advice on implementing accessibility best practices throughout your organization and development lifecycle.</p>
                                    <a href="contact.php" class="btn btn-primary btn-lg">Request a Quote</a>
                                </div>
                                <div class="service-features-card">
                                    <h3>What's Included</h3>
                                    <ul class="features-list">
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Accessibility Strategy Development</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Design System Accessibility Review</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Procurement Guidance</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Policy Development</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Workflow Integration</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Vendor Management Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Training Tab -->
                    <div class="tab-content" id="training" role="tabpanel" aria-labelledby="trainingTab">
                        <div class="service-detail">
                            <div class="service-detail-content">
                                <div class="service-detail-text">
                                    <div class="service-icon-large">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                                    </div>
                                    <h2>Training & Workshops</h2>
                                    <p>Comprehensive training programs designed for developers, designers, content creators, and stakeholders.</p>
                                    <a href="contact.php" class="btn btn-primary btn-lg">Request a Quote</a>
                                </div>
                                <div class="service-features-card">
                                    <h3>What's Included</h3>
                                    <ul class="features-list">
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Developer Training</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Designer Workshops</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Content Creator Seminars</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Executive Awareness Sessions</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Custom Curriculum Development</li>
                                        <li><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Certification Programs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Services -->
        <section class="additional-services">
            <div class="container">
                <div class="section-header">
                    <h2>Additional Services</h2>
                    <p>Specialized offerings to support your accessibility initiatives</p>
                </div>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div>
                        <h3>Accessibility Audits</h3>
                        <p>Comprehensive evaluation of your entire digital ecosystem</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><polyline points="16,18 22,12 16,6"/><polyline points="8,6 2,12 8,18"/></svg></div>
                        <h3>Development Support</h3>
                        <p>Embedded accessibility expertise for your development team</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14,2 14,8 20,8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10,9 9,9 8,9"/></svg></div>
                        <h3>Documentation Review</h3>
                        <p>Ensure all your documents meet accessibility standards</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                        <h3>Compliance Monitoring</h3>
                        <p>Ongoing monitoring to maintain accessibility compliance</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg></div>
                        <h3>Quality Assurance</h3>
                        <p>Accessibility QA integrated into your testing process</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg></div>
                        <h3>Accessibility Roadmap</h3>
                        <p>Strategic planning for long-term accessibility success</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="process-section">
            <div class="container">
                <div class="section-header">
                    <h2>Our Process</h2>
                    <p>A streamlined approach to accessibility excellence</p>
                </div>
                <div class="process-grid">
                    <div class="process-step">
                        <div class="step-number">01</div>
                        <h3>Discovery</h3>
                        <p>We learn about your needs, goals, and current accessibility status</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <h3>Assessment</h3>
                        <p>Comprehensive evaluation using automated tools and manual testing</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <h3>Implementation</h3>
                        <p>We fix issues or guide your team through remediation</p>
                    </div>
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <h3>Verification</h3>
                        <p>Final testing and validation to ensure compliance</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Let's Discuss Your Accessibility Needs</h2>
                    <p>Every project is unique. Contact us for a customized solution.</p>
                    <a href="contact.php" class="btn btn-secondary btn-lg">Get in Touch</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
