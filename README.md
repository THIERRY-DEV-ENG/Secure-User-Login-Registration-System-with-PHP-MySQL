# PHP Login & Registration System 

![PHP](https://img.shields.io/badge/PHP-8.0%2B-blue)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange)
![XAMPP](https://img.shields.io/badge/XAMPP-3.3.0%2B-brightgreen)

A complete and secure authentication system built with PHP and MySQL, featuring user registration, login, session management, and a protected dashboard.

## ✨ Features

- ✅ User registration with form validation
- 🔐 Secure password hashing using `password_hash()`
- 🔑 Session-based authentication
- 🚦 Protected dashboard page
- 🛑 Secure logout functionality
- 🛡️ SQL injection prevention (PDO prepared statements)
- ✉️ Basic email uniqueness validation

## Requirements

- XAMPP (or similar local server stack)
- PHP 8.0+
- MySQL 5.7+
- Web browser

##  Quick Start

1. **Setup Database**:
   - Import `database.sql` into phpMyAdmin
   - Or run:
     ```sql
     CREATE DATABASE user_auth;
     USE user_auth;
     CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       firstname VARCHAR(50) NOT NULL,
       email VARCHAR(100) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

2. **Configure Connection**:
   - Edit `config.php` with your database credentials

3. **Run the Application**:
   - Place files in `htdocs/login_system/`
   - Access via `http://localhost/login_system`

## 🛠 File Structure

##  Security Features

- All passwords stored using `password_hash()`
- Prepared statements for all SQL queries
- Session-based authentication
- Input sanitization
- Protected routes

##  Learning Resources

- [PHP Manual - Password Hashing](https://www.php.net/manual/en/book.password.php)
- [PDO Tutorial](https://phpdelusions.net/pdo)
- [PHP Sessions](https://www.php.net/manual/en/book.session.php)

## 🤝 Contributing

Pull requests welcome! For major changes, please open an issue first.

## 📄 License

NISHIMWE THIERRY
