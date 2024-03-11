<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Fabian Transport</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
// File: login.php
include 'includes/navbar.inc.php';
?>
<main>
    <h1 class="signup-and-login-caption">Log in</h1>
    <form action="includes/login.inc.php" method="post" id="login">
        <fieldset>
            <legend> Log in credentials</legend>
            <label for="username"> Username
                <input type="text" name="username" placeholder="Username" required>
            </label>
            <br>
            <label for="password"> Password
                <input type="password" name="password" placeholder="Password" required>
            </label for="submit">
        </fieldset>
        <br>
        <button type="submit" class="button">Log in</button>
    </form>
</main>
<?php include "includes/footer.inc.php"; ?>
</body>