-- Create the database
CREATE DATABASE student_passwords;

-- Use the database
USE student_passwords;

-- Create the user without a password
CREATE USER 'passwords_user'@'localhost';

-- Grant privileges to the user
GRANT ALL PRIVILEGES ON student_passwords.* TO 'passwords_user'@'localhost';

-- Create the tables
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    username VARCHAR(100) NOT NULL
);

CREATE TABLE websites (
    site_id INT AUTO_INCREMENT PRIMARY KEY,
    site_name VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    comment TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);
