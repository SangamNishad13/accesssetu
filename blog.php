<?php
session_start();
require_once 'config.php';

$page_title = "Blog - Accessibility Tips & Insights - Access Setu Technologies";
$page_description = "Read our latest blog posts about web accessibility, WCAG compliance, inclusive design, and digital accessibility best practices.";

// Blog posts data - can be moved to database later
$blog_posts = [
    [
        'id' => 'wcag-compliance-guide',
        'title' => 'Complete Guide to WCAG 2.1 Compliance',
        'excerpt' => 'Learn the essentials of WCAG 2.1 guidelines and how to implement them in your digital products.',
        'author' => 'Access Setu Team',
        'date' => 'March 18, 2026',
        'category' => 'WCAG',
        'featured_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
        'read_time' => '8 min read'
    ],
    [
        'id' => 'accessible-forms',
        'title' => 'Creating Accessible Web Forms',
        'excerpt' => 'A comprehensive guide on designing web forms that are accessible to all users, including those with disabilities.',
        'author' => 'Access Setu Team',
        'date' => 'March 15, 2026',
        'category' => 'Web Development',
        'featured_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
        'read_time' => '6 min read'
    ],
    [
        'id' => 'alt-text-best-practices',
        'title' => 'Alt Text Best Practices for Images',
        'excerpt' => 'Understanding the importance of alt text and how to write effective alt text for images on your website.',
        'author' => 'Access Setu Team',
        'date' => 'March 12, 2026',
        'category' => 'Web Development',
        'featured_image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
        'read_time' => '5 min read'
    ]
];

?>

<?php include 'includes/header.php'; ?>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content-center">
                    <h1>Accessibility Blog</h1>
                    <p>Tips, insights, and best practices for creating inclusive digital experiences.</p>
                </div>
            </div>
        </section>

        <!-- Blog Posts Section -->
        <section class="blog-section">
            <div class="container">
                <div class="blog-grid">
                    <?php foreach ($blog_posts as $post): ?>
                        <article class="blog-card">
                            <div class="blog-image">
                                <img src="<?php echo $post['featured_image']; ?>" 
                                     alt="<?php echo $post['title']; ?>" 
                                     loading="lazy">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="category"><?php echo $post['category']; ?></span>
                                    <span class="read-time"><?php echo $post['read_time']; ?></span>
                                </div>
                                <h2><a href="<?php echo SITE_URL; ?>/blog-post/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                                <p><?php echo $post['excerpt']; ?></p>
                                <div class="blog-footer">
                                    <div class="author-info">
                                        <span class="author"><?php echo $post['author']; ?></span>
                                        <span class="date"><?php echo $post['date']; ?></span>
                                    </div>
                                    <a href="<?php echo SITE_URL; ?>/blog-post/<?php echo $post['id']; ?>" class="read-more">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Subscribe to Our Newsletter</h2>
                    <p>Get the latest accessibility tips and best practices delivered to your inbox.</p>
                    <a href="contact.php" class="btn btn-secondary btn-lg">Subscribe Now</a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>
