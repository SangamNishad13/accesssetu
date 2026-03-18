<?php
session_start();
require_once 'config.php';

// Blog posts content database - can be moved to database later
$blog_content = [
    'wcag-compliance-guide' => [
        'title' => 'Complete Guide to WCAG 2.1 Compliance',
        'author' => 'Access Setu Team',
        'date' => 'March 18, 2026',
        'category' => 'WCAG',
        'featured_image' => 'https://images.unsplash.com/photo-1516321318423-f06f70a504f9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
        'read_time' => '8 min read',
        'content' => '
            <p>Web Content Accessibility Guidelines (WCAG) 2.1 is the international standard for web accessibility. In this comprehensive guide, we\'ll walk you through the four principles of WCAG and how to implement them in your projects.</p>
            
            <h3>The Four Pillars of WCAG</h3>
            
            <h4>1. Perceivable</h4>
            <p>Information and user interface components must be presentable to users in ways they can perceive. This means providing text alternatives for images, ensuring sufficient color contrast, and making content adaptable to different sizes and formats.</p>
            
            <h4>2. Operable</h4>
            <p>Users must be able to operate the interface using a keyboard, mouse, or assistive technologies. All functionality must be accessible from the keyboard, and users should have enough time to read and use content.</p>
            
            <h4>3. Understandable</h4>
            <p>Text and other information must be written clearly and simply. Users should be able to understand how to use the interface, and the website should operate in predictable ways.</p>
            
            <h4>4. Robust</h4>
            <p>Content must be compatible with current and future assistive technologies and browsers. This is achieved through proper HTML markup and coding standards.</p>
            
            <h3>WCAG Levels</h3>
            <p>WCAG defines three levels of conformance:</p>
            <ul>
                <li><strong>Level A:</strong> The minimum level of accessibility</li>
                <li><strong>Level AA:</strong> The recommended level for most websites</li>
                <li><strong>Level AAA:</strong> The highest level of accessibility</li>
            </ul>
            
            <h3>Key Takeaways</h3>
            <p>Implementing WCAG 2.1 is not just about compliance—it\'s about creating better experiences for all users. By following these guidelines, you\'re making your content accessible to everyone, including people with disabilities.</p>
            
            <p>If you need help implementing WCAG compliance on your website, our team at Access Setu Technologies is here to help. Contact us today for a free accessibility audit!</p>
        '
    ],
    'accessible-forms' => [
        'title' => 'Creating Accessible Web Forms',
        'author' => 'Access Setu Team',
        'date' => 'March 15, 2026',
        'category' => 'Web Development',
        'featured_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
        'read_time' => '6 min read',
        'content' => '
            <p>Web forms are a critical part of user interaction, but they\'re often inaccessible. In this guide, we\'ll show you how to create forms that work for everyone.</p>
            
            <h3>Label Everything</h3>
            <p>Every form input must have a clear, descriptive label associated with it. Use the <code>&lt;label&gt;</code> tag and the <code>for</code> attribute to connect labels to inputs.</p>
            
            <h3>Provide Clear Instructions</h3>
            <p>Include clear instructions for each form field. If a field is required, indicate that clearly. Use error messages that are specific and helpful.</p>
            
            <h3>Use Proper HTML Markup</h3>
            <p>Use semantic HTML elements like <code>&lt;fieldset&gt;</code>, <code>&lt;legend&gt;</code>, and <code>&lt;input&gt;</code> with proper types. This helps screen readers understand the form structure.</p>
            
            <h3>Keyboard Navigation</h3>
            <p>All form elements must be accessible via keyboard. Ensure proper tab order and that users can see focus indicators at all times.</p>
            
            <h3>Color and Contrast</h3>
            <p>Don\'t rely on color alone to convey information. Ensure sufficient contrast between text and background (minimum 4.5:1 ratio for normal text).</p>
        '
    ],
    'alt-text-best-practices' => [
        'title' => 'Alt Text Best Practices for Images',
        'author' => 'Access Setu Team',
        'date' => 'March 12, 2026',
        'category' => 'Web Development',
        'featured_image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1200',
        'read_time' => '5 min read',
        'content' => '
            <p>Alt text (alternative text) is critical for web accessibility. It describes images for users who cannot see them and helps search engines understand your content.</p>
            
            <h3>Why Alt Text Matters</h3>
            <p>Alt text serves multiple purposes: it\'s read by screen readers for visually impaired users, displayed when images fail to load, and used by search engines to understand image content.</p>
            
            <h3>Writing Effective Alt Text</h3>
            <ul>
                <li>Be descriptive and concise (usually under 125 characters)</li>
                <li>Describe the content and function of the image, not "image of" or "picture of"</li>
                <li>For decorative images, use empty alt text (alt="")</li>
                <li>Don\'t include redundant information already in the text</li>
                <li>Include relevant keywords naturally</li>
            </ul>
            
            <h3>Examples</h3>
            <p><strong>Bad:</strong> "Picture of a woman working on a laptop"</p>
            <p><strong>Good:</strong> "Woman using accessibility testing tools on a laptop to audit website compliance"</p>
            
            <h3>Decorative Images</h3>
            <p>For purely decorative images, use empty alt text: <code>alt=""</code>. This tells screen readers to skip the image.</p>
        '
    ]
];

// Get the blog post slug from URL
$post_slug = $_GET['slug'] ?? (isset($_SERVER['PATH_INFO']) ? trim($_SERVER['PATH_INFO'], '/') : null);

if (!$post_slug || !isset($blog_content[$post_slug])) {
    header("Location: " . SITE_URL . "/blog");
    exit;
}

$post = $blog_content[$post_slug];
$page_title = $post['title'] . " - Access Setu Blog";
$page_description = "Read: " . $post['title'] . " on the Access Setu blog. Learn about accessibility best practices.";
?>

<?php include 'includes/header.php'; ?>

        <!-- Blog Post Hero -->
        <section class="blog-post-hero">
            <div class="container">
                <div class="blog-post-header">
                    <div class="blog-meta">
                        <span class="category"><?php echo $post['category']; ?></span>
                        <span class="read-time"><?php echo $post['read_time']; ?></span>
                    </div>
                    <h1><?php echo $post['title']; ?></h1>
                    <div class="blog-post-info">
                        <span class="author"><?php echo $post['author']; ?></span>
                        <span class="separator">•</span>
                        <span class="date"><?php echo $post['date']; ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Featured Image -->
        <section class="blog-featured-image">
            <div class="container">
                <img src="<?php echo $post['featured_image']; ?>" 
                     alt="<?php echo $post['title']; ?>" 
                     loading="lazy">
            </div>
        </section>

        <!-- Blog Post Content -->
        <section class="blog-post-content">
            <div class="container">
                <article class="post-body">
                    <?php echo $post['content']; ?>
                </article>

                <!-- Related Resources -->
                <aside class="related-resources">
                    <h3>Need Help with Accessibility?</h3>
                    <p>Our team of WCAG certified experts can help you make your website accessible to everyone.</p>
                    <a href="<?php echo SITE_URL; ?>/contact" class="btn btn-primary">Get Free Consultation</a>
                </aside>

                <!-- Back to Blog -->
                <div class="blog-navigation">
                    <a href="<?php echo SITE_URL; ?>/blog" class="btn btn-outline">← Back to Blog</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
