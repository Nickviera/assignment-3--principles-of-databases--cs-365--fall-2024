<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'student_passwords');
define('DB_USER', 'passwords_user');
define('DB_PASS', ''); // No password as per the assignment instructions

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
