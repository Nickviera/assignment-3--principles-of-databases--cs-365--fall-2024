<?php
require 'php/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Password Manager</h1>

    <!-- Insert Form -->
    <form action="php/insert.php" method="post">
        <h2>Add New Entry</h2>
        <label>Site Name: <input type="text" name="site_name" required></label>
        <label>URL: <input type="url" name="url" required></label>
        <label>Email: <input type="email" name="email" required></label>
        <label>Username: <input type="text" name="username" required></label>
        <label>Password: <input type="password" name="password" required></label>
        <label>Comment: <textarea name="comment"></textarea></label>
        <button type="submit">Add Entry</button>
    </form>

    <!-- Search Form -->
    <form action="php/search.php" method="post">
        <h2>Search Entries</h2>
        <label>Column: <input type="text" name="search_column" required></label>
        <label>Value: <input type="text" name="search_value" required></label>
        <button type="submit">Search</button>
    </form>

    <!-- Refresh Button -->
    <form action="index.php" method="get">
        <button type="submit">Clear Results</button>
    </form>
</body>
</html>
