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
        <h2 id="signup">Registration</h2>
        <label for="username">Username:
            <input type="text" name="username" id="username" placeholder="Username" required>
        </label>
        <br>
        <label for="email">Email address:
            <input type="email" name="email" id="email" placeholder="Email address" required>
        </label>
        <br>

        <label for="firstname">First name:
            <input type="text" name="firstname" id="firstname" placeholder="First name" required>
        </label>
        <br>
        <label for="lastname">Last name:
            <input type="text" name="lastname" id="lastname" placeholder="Last name" required>
        </label>
        <br>
        <label for="birthdate">Birth date:
            <input type="date" name="birthdate" id="birthdate" placeholder="birthdate" required>
        </label>
        <br>
        <label for="password">Password:
            <input type="password" name="password" id="password" placeholder="Password" required>
        </label>
        <br>
        <label for="confirm_password">Confirm Password:
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"
                   required>
        </label>
        <br>
        <!-- Submit button for registration -->
        <button type="submit">Register</button>
    </form>
</div>
<?php include "includes/footer.inc.php";?>
</body>