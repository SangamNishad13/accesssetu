<?php
session_start();
require_once 'config.php';

$page_title = "Contact Us - Access Setu Technologies";

// Handle form submission
$form_message = '';
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate form data
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $company = htmlspecialchars(trim($_POST['company'] ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    // Validation
    if (empty($name)) {
        $form_error = 'Name is required.';
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Valid email is required.';
    } elseif (empty($message)) {
        $form_error = 'Message is required.';
    } else {
        // If database connection exists, save to database
        if ($conn) {
            // Create table if it doesn't exist
            $create_table = "CREATE TABLE IF NOT EXISTS contact_submissions (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                company VARCHAR(255),
                service VARCHAR(100),
                message LONGTEXT NOT NULL,
                submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            
            $conn->query($create_table);
            
            // Insert contact form data
            $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, company, service, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $email, $company, $service, $message);
            
            if ($stmt->execute()) {
                // Send email notification
                $to = "hello@accesssetu.com";
                $subject = "New Contact Form Submission: " . $name;
                $body = "New contact form submission:\n\n";
                $body .= "Name: " . $name . "\n";
                $body .= "Email: " . $email . "\n";
                $body .= "Company: " . $company . "\n";
                $body .= "Service: " . $service . "\n";
                $body .= "Message: " . $message . "\n";
                $body .= "Submitted at: " . date('Y-m-d H:i:s') . "\n";
                
                $headers = "From: " . $email . "\r\n";
                $headers .= "Reply-To: " . $email . "\r\n";
                
                // Note: This will only work if PHP mail() is configured
                // mail($to, $subject, $body, $headers);
                
                $form_message = 'Thank you for your message! We\'ll get back to you within 24 hours.';
                $_POST = array(); // Clear form
            } else {
                $form_error = 'Error saving your message. Please try again.';
            }
            $stmt->close();
        } else {
            $form_error = 'Database connection error. Please try again later.';
        }
    }
}
?>

<?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content-center">
                    <h1>Get in Touch</h1>
                    <p>Have questions about our services? We're here to help you create accessible digital experiences.</p>
                </div>
            </div>
        </section>

        <!-- Contact Form & Info -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-grid">
                    <!-- Contact Form Card -->
                    <div class="contact-form-card">
                        <div class="card-header">
                            <h2>Send Us a Message</h2>
                            <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                        </div>
                        <div class="card-content">
                            <?php if ($form_error): ?>
                                <div class="alert alert-error"><?php echo $form_error; ?></div>
                            <?php endif; ?>
                            <?php if ($form_message): ?>
                                <div class="alert alert-success"><?php echo $form_message; ?></div>
                            <?php endif; ?>
                            
                            <form method="POST" class="contact-form">
                                <p class="form-note">* Required fields</p>
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" id="name" name="name" required placeholder="Your full name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" id="email" name="email" required placeholder="your.email@company.com" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" id="company" name="company" placeholder="Your company name" value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="service">Service of Interest</label>
                                    <select id="service" name="service">
                                        <option value="">Select a service</option>
                                        <option value="testing" <?php echo ($_POST['service'] ?? '') === 'testing' ? 'selected' : ''; ?>>Accessibility Testing</option>
                                        <option value="remediation" <?php echo ($_POST['service'] ?? '') === 'remediation' ? 'selected' : ''; ?>>Remediation Services</option>
                                        <option value="consultation" <?php echo ($_POST['service'] ?? '') === 'consultation' ? 'selected' : ''; ?>>Consultation</option>
                                        <option value="training" <?php echo ($_POST['service'] ?? '') === 'training' ? 'selected' : ''; ?>>Training & Workshops</option>
                                        <option value="other" <?php echo ($_POST['service'] ?? '') === 'other' ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" name="message" rows="6" required placeholder="Tell us about your accessibility needs..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg full-width">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="contact-info-section">
                        <div class="contact-info-content">
                            <h2>Contact Information</h2>
                            <p>We'd love to hear from you. Reach out through any of these channels.</p>
                            
                            <div class="contact-items">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                            <polyline points="22,6 12,13 2,6"/>
                                        </svg>
                                    </div>
                                    <div class="contact-details">
                                        <h3>Email</h3>
                                        <a href="mailto:hello@accesssetu.com">hello@accesssetu.com</a>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <polyline points="12,6 12,12 16,14"/>
                                        </svg>
                                    </div>
                                    <div class="contact-details">
                                        <h3>Business Hours</h3>
                                        <span>Monday - Friday, 9:00 AM - 6:00 PM IST</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="contact-image">
                            <img src="https://images.unsplash.com/photo-1564931768730-7e4d8e240044?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHN3ZWIlMjBkZXZlbG9wbWVudCUyMGNvZGUlMjBhY2Nlc3NpYmlsaXR5fGVufDF8fHx8MTc3MzY1OTQyMnww&ixlib=rb-4.1.0&q=80&w=1080" alt="Web development and accessibility" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="faq-section-container">
                <div class="section-header">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="faq-container">
                    <div class="faq-card">
                        <div class="card-header">
                            <h3>How long does an accessibility audit take?</h3>
                        </div>
                        <div class="card-content">
                            <p>The timeline depends on the size and complexity of your digital product. A typical website audit takes 2-4 weeks, while larger applications may require 6-8 weeks. We'll provide a detailed timeline after our initial assessment.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="card-header">
                            <h3>Do you work with remote clients?</h3>
                        </div>
                        <div class="card-content">
                            <p>Yes! We work with clients worldwide. All our services can be delivered remotely, and we're experienced in collaborating with distributed teams.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="card-header">
                            <h3>What standards do you test against?</h3>
                        </div>
                        <div class="card-content">
                            <p>We primarily test against WCAG 2.1 and 2.2 standards at levels A, AA, and AAA. We also consider Section 508, ADA, and other region-specific requirements based on your needs.</p>
                        </div>
                    </div>

                    <div class="faq-card">
                        <div class="card-header">
                            <h3>Can you train our team?</h3>
                        </div>
                        <div class="card-content">
                            <p>Absolutely! We offer customized training programs for developers, designers, content creators, and stakeholders. Training can be conducted on-site or remotely.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
