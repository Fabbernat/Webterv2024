<?php
// File: includes/navbar.inc.php

error_reporting(E_ALL);
ini_set('display_errors', '1');

/**
    The echo href paths below intentionally don't have ../, because the only place this include file should be used is in the root. Otherwise, the paths won't work.
 */
echo '<nav>
    <a class="rate-us" href="index.php">Home<i class="fa-star"></i></a> |
    <a class="rate-us" href="register.php">Register<i class="fa-star"></i></a> |
    <a class="rate-us" href="login.php">Login<i class="fa-star"></i></a>
    <a class="rate-us" href="feedback.php">Rate Us <i class="fa-star"></i></a> <!-- New link for rating with star icon -->

</nav>';
?>
<link rel="stylesheet" href="../css/style.css">

