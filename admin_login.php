<?php
include_once "includes/navbar.inc.php";
?>
<form action="admin_login.php">
    <label>
        <input type="text" name="username" placeholder="Username">
    </label>
<br>
        <label for="admin_password">Admin password (optional):
            <input type="password" name="admin_password" id="admin_password">
        </label>
    <?php include "includes/footer.inc.php";?>

</form>
