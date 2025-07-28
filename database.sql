CREATE DATABASE smart_education;
USE smart_education;

-- Admin Table
CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Insert default admin (password: admin123)
INSERT INTO admin (username, password)
VALUES ('admin', '$2y$10$BjfB82CezwuZ2aVroZHRcO5C9lJ0xFJQRGF7bS.1Vg3X6gz1kRHea'); 
-- (Hashed password for admin123)

-- Students Table
CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  course VARCHAR(100),
  location VARCHAR(100),
  budget INT,
  status ENUM('pending','approved','rejected') DEFAULT 'pending',
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Queries Table
CREATE TABLE queries (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  message TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);





























CREATE DATABASE IF NOT EXISTS smart_education_hub;
USE smart_education_hub;

-- Admin Table
CREATE TABLE IF NOT EXISTS admin (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

-- Insert default admin (username: admin, password: admin123)
INSERT INTO admin (username, password) VALUES (
  'admin',
  '$2y$10$BjfB82CezwuZ2aVroZHRcO5C9lJ0xFJQRGF7bS.1Vg3X6gz1kRHea'
);

-- Students Table
CREATE TABLE IF NOT EXISTS students (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(15) NOT NULL,
  qualification VARCHAR(50) NOT NULL,
  year VARCHAR(10) NOT NULL,
  marks VARCHAR(20) NOT NULL,
  college VARCHAR(100) NOT NULL,
  course VARCHAR(100) NOT NULL,
  notes TEXT,
  status ENUM('pending','approved','rejected') DEFAULT 'pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Queries Table
CREATE TABLE IF NOT EXISTS queries (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
