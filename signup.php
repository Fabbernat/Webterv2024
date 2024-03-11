<?php
// File: signup.php
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
<main class="signup">
        <h1 class="signup-and-login-caption">Sign up</h1>
    <form action="includes/signup.inc.php" method="POST" id="reg">
        <fieldset>
        <legend> Registration form </legend>
        <label for="username">Username
            <input type="text" name="username" id="username" placeholder="Username" required>
        </label>
        <br>
        <label for="email">Email address
            <input type="email" name="email" id="email" placeholder="Email address" required>
        </label>
        <br>

        <label for="firstname">First name
            <input type="text" name="firstname" id="firstname" placeholder="First name" required>
        </label>
        <br>
        <label for="lastname">Last name
            <input type="text" name="lastname" id="lastname" placeholder="Last name" required>
        </label>
        <br>
        <label for="birthdate">Birth date
            <input type="date" name="birthdate" id="birthdate" placeholder="birthdate" required>
        </label>
        <br>
        <label for="password">Password
            <input type="password" name="password" id="password" placeholder="Password" required>
        </label>
        <br>
        <label for="confirm_password">Confirm Password
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"
                   required>
        </label>
        </fieldset>
        <br>
        <!-- Submit button for registration -->
        <button type="submit" class="button">Sign up</button>
    </form>
</main>
<?php include "includes/footer.inc.php";?>
</body>