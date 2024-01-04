<?php
// File: login.php
include 'includes/navbar.inc.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Fabian Transport</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="includes/login.inc.php" method="post">
    <label>
        <input type="text" name="username" placeholder="Username">
    </label>
    <label for="password">
        <input type="password" name="password" placeholder="Password">
    </label for="submit">
    <button type="submit" name="submit">Login</button>
</form>