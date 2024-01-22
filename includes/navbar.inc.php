<?php
// File: includes/navbar.inc.php

error_reporting(E_ALL);
ini_set('display_errors', '1');

/**
    The echo href paths below intentionally don't have ../, because the only place this include file should be used is in the root. Otherwise, the paths won't work.
 */
echo '<nav>
    <a href="index.php">Home</a> |
    <a href="register.php">Register</a> |
    <a href="login.php">Login</a>
</nav>';
