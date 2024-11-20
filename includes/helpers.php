<?php

// Function to search database entries
function searchEntries($column, $value) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM websites WHERE $column LIKE ?");
    $stmt->execute(["%$value%"]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to insert a new entry
function insertEntry($site_name, $url, $email, $username, $password, $comment) {
    global $pdo;
    $stmt = $pdo->prepare(
        "INSERT INTO websites (site_name, url, password, comment, user_id)
        VALUES (?, ?, ?, ?, (SELECT user_id FROM users WHERE email = ? AND username = ?))"
    );
    $stmt->execute([$site_name, $url, $password, $comment, $email, $username]);
}

// Function to update an entry
function updateEntry($column_to_update, $new_value, $pattern_column, $pattern_value) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE websites SET $column_to_update = ? WHERE $pattern_column LIKE ?");
    $stmt->execute([$new_value, "%$pattern_value%"]);
}

// Function to delete an entry
function deleteEntry($column, $value) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM websites WHERE $column LIKE ?");
    $stmt->execute(["%$value%"]);
}
?>
