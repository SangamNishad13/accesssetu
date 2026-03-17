-- Access Setu Technologies Database Setup
-- Run this SQL file to create the database and tables

CREATE DATABASE IF NOT EXISTS accesssetu CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE accesssetu;

-- Contact Submissions Table
CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    company VARCHAR(255),
    service VARCHAR(100),
    message LONGTEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_submitted_at (submitted_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- You can add more tables as needed for future features
-- Example: Services table, Team members table, etc.

GRANT ALL PRIVILEGES ON accesssetu.* TO 'root'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
