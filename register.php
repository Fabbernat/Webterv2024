<?php
// File: register.php
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
<div class="register">
    <form action="includes/register.inc.php" method="POST">
        <h2 id="signup">Regisztráció</h2>
        <label for="felhasznalonev">Felhasználónév:
            <input type="text" name="felhasznalonev" id="felhasznalonev" placeholder="Felhasználónév" required>
        </label>
        <br>
        <label for="email">E-mail cím:
            <input type="email" name="email" id="email" placeholder="E-mail cím" required>
        </label>
        <br>

        <label for="vezeteknev">Keresztnév:
            <input type="text" name="vezeteknev" id="vezeteknev" placeholder="Keresztnév" required>
        </label>
        <br>
        <label for="keresztnev">Felhasználónév:
            <input type="text" name="keresztnev" id="keresztnev" placeholder="Felhasználónév" required>
        </label>
        <br>
        <label for="jelszo">Jelszó:
            <input type="password" name="jelszo" id="jelszo" placeholder="Jelszó" required>
        </label>
        <br>
        <label for="confirm_password">Jelszó megerősítése:
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Jelszó megerősítése"
                   required>
        </label>
        <br>
        <label for="radio">Admin vagyok
            <input type="checkbox" name="radio" id="radio">
        </label>
        <br>
        <!-- Submit button for registration -->
        <button type="submit">Regisztráció</button>
    </form>
</div>