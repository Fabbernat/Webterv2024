<?php
// File: includes/navbar.inc.php

error_reporting(E_ALL);
ini_set('display_errors', '1');
/**
 * The echo href paths below intentionally don't have ../, because the only place this include file should be used is in the root. Otherwise, the paths won't work.
 */
?>
<nav>
    <a class=
       <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo '"active"'; else echo '"rate-us"'; ?>
       href="index.php">Home<i class="fa-star"></i></a> |
    <a class=
        <?php if (basename($_SERVER['PHP_SELF']) == 'signup.php') echo '"active"'; else echo '"rate-us"'; ?>
       href="signup.php">Sign up<i
                class="fa-star"></i></a> |
    <a class=
        <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') echo '"active"'; else echo '"rate-us"'; ?>
       href="login.php">Log in<i
                class="fa-star"></i></a>
    <a class=
        <?php if (basename($_SERVER['PHP_SELF']) == 'feedback.php') echo '"active"'; else echo '"rate-us"'; ?>
       href="feedback.php">Rate Us <i
                class="fa-star"></i></a> <!-- New link for rating with star icon -->
</nav>
