# PHP Conversion Guide - Access Setu Technologies

## Overview
This project has been successfully converted from static HTML to PHP with a template-based architecture and database integration support.

## Project Structure

```
project-root/
├── config.php              # Database and site configuration
├── index.php               # Home page
├── services.php            # Services page
├── about.php              # About page
├── contact.php            # Contact page (with form handling)
├── includes/
│   ├── header.php         # Reusable header template
│   └── footer.php         # Reusable footer template
├── styles/
│   └── main.css          # Main CSS (includes alert styles)
├── scripts/
│   └── main.js           # JavaScript functionality
```

## Key Features

### 1. **Template-Based Architecture**
- All pages use `includes/header.php` and `includes/footer.php` for consistent structure
- Reduces code duplication
- Easy to maintain and update branding

### 2. **Dynamic Page Titles**
Each page sets its own `$page_title` variable which is used in the header template

### 3. **Contact Form with Database Integration**
- **File**: `contact.php`
- **Features**:
  - Server-side form validation
  - Automatic database table creation
  - Form data sanitization using `htmlspecialchars()`
  - Success/error message display
  - Form persistence on validation errors
  - Email notification support (requires mail() configuration)

### 4. **Configuration**
Edit [config.php](config.php) to customize:
```php
define('DB_HOST', 'localhost');      // MySQL host
define('DB_USER', 'root');           // MySQL user
define('DB_PASS', '');               // MySQL password
define('DB_NAME', 'accesssetu');     // Database name
```

## Database Setup

### 1. Create MySQL Database
```sql
CREATE DATABASE accesssetu CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 2. The Database Table
The `contact_submissions` table is automatically created on first form submission with the following structure:
```sql
CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    company VARCHAR(255),
    service VARCHAR(100),
    message LONGTEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Setup Instructions

### Requirements
- PHP 7.4 or higher
- MySQL or MariaDB
- Apache with mod_rewrite enabled (recommended)

### Installation Steps

1. **Place files in web root** (typically `htdocs` or `www`)

2. **Create database**:
   ```bash
   mysql -u root -p < setup.sql
   ```

3. **Update config.php** with your database credentials

4. **Access the site**:
   - Homepage: `http://localhost/Accesssetu/index.php`
   - Services: `http://localhost/Accesssetu/services.php`
   - About: `http://localhost/Accesssetu/about.php`
   - Contact: `http://localhost/Accesssetu/contact.php`

### Optional: Remove .php extension

Add this to `.htaccess` in the project root:
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^([^/]+)/?$ $1.php [L]
</IfModule>
```

Then access pages as: `http://localhost/Accesssetu/index` instead of `http://localhost/Accesssetu/index.php`

## Features Added

### Forms & Validation
- [x] Server-side validation
- [x] Client-side validation via JavaScript
- [x] Error messages
- [x] Success notifications
- [x] Form persistence

### Accessibility
- [x] Skip-to-main-content link (fully functional)
- [x] Focus management
- [x] ARIA labels
- [x] Keyboard navigation

### Styling
- [x] Alert message styles (success & error)
- [x] Form styling
- [x] Responsive design maintained

## API Endpoints

### Contact Form Submission
- **Endpoint**: `POST /contact.php`
- **Content-Type**: `application/x-www-form-urlencoded`
- **Fields**:
  - `name` (required)
  - `email` (required, must be valid email)
  - `company` (optional)
  - `service` (optional)
  - `message` (required)

**Response**: Page reload with success/error message displayed

## Security Best Practices Implemented

1. **Input Sanitization**: `htmlspecialchars()` used on all form inputs
2. **SQL Injection Prevention**: Prepared statements with `bind_param()`
3. **Session Management**: `session_start()` on all pages
4. **Email Validation**: `filter_var($email, FILTER_VALIDATE_EMAIL)`
5. **XSS Prevention**: Output escaping in PHP

## Maintenance & Updates

### Adding a New Page
1. Create `newpage.php` in project root
2. Start with:
```php
<?php
session_start();
require_once 'config.php';

$page_title = "Page Title - Access Setu Technologies";
?>

<?php include 'includes/header.php'; ?>

<!-- Your content here -->

<?php include 'includes/footer.php'; ?>
```

### Updating Navigation
Edit [includes/header.php](includes/header.php) navigation menu (lines ~20-30)

### Updating Footer
Edit [includes/footer.php](includes/footer.php)

## Troubleshooting

### Database Connection Error
- Check `config.php` credentials
- Ensure MySQL is running
- Verify database exists

### Form Not Submitting
- Enable `mail()` function in `php.ini` (if using email notifications)
- Check form validation in browser console
- Verify database table was created

### Pages Not Loading
- Ensure `.php` files are in correct location
- Check PHP configuration (`php.ini`)
- Verify web server document root

## Next Steps

1. **Production Deployment**:
   - Update `config.php` with production database credentials
   - Enable HTTPS
   - Set proper file permissions
   - Configure error logging

2. **Email Notifications**:
   - Configure SMTP settings for email sending
   - Update email address in `config.php`

3. **Admin Panel**:
   - Create admin interface to view contact submissions
   - Add authentication

4. **CMS Integration**:
   - Consider integrating WordPress or other CMS for content management

## File Changes Summary

### New Files Created
- `config.php` - Configuration file
- `includes/header.php` - Header template
- `includes/footer.php` - Footer template
- `index.php` - Home page (PHP version)
- `services.php` - Services page (PHP version)
- `about.php` - About page (PHP version)
- `contact.php` - Contact page with form handling

### Files Modified
- `styles/main.css` - Added alert and form styling

### Original Files (Kept for Reference)
- `*.html` - Original HTML files (can be deleted)

## Support

For accessibility issues or technical questions, contact:
- Email: hello@accesssetu.com
- Hours: Monday - Friday, 9:00 AM - 6:00 PM IST

---

**Conversion Date**: March 17, 2026  
**PHP Version**: 7.4+  
**Database**: MySQL 5.7+
