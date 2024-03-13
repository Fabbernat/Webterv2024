<?php
// File: includes/navbar.inc.php
/**
 * The echo href paths below intentionally don't have ../, because the only place this include file should be used is in the root. Otherwise, the paths won't work.
 */
$current_file = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <a class="nav <?php echo ($current_file == 'index.php') ? 'active' : ''; ?>"
       href="index.php">Home<i class="fa-star"></i></a> |
    <a class="nav <?php echo ($current_file == 'signup.php') ? 'active' : ''; ?>"
       href="signup.php">Sign up<i class="fa-star"></i></a> |
    <a class="nav <?php echo ($current_file == 'login.php') ? 'active' : ''; ?>"
       href="login.php">Log in<i class="fa-star"></i></a> |
    <a class="nav <?php echo ($current_file == 'feedback.php') ? 'active' : ''; ?>"
       href="feedback.php">Rate Us <i class="fa-star"></i></a>
</nav>
<br>
<nav>
    <a class="nav <?php echo ($current_file == 'html.php') ? 'active' : ''; ?>" href="html.php">HTML</a>
    <a class="nav <?php echo ($current_file == 'css.php') ? 'active' : ''; ?>" href="css.php">CSS</a>
    <a class="nav <?php echo ($current_file == 'javascript.php') ? 'active' : ''; ?>" href="javascript.php">JAVASCRIPT</a>
    <a class="nav <?php echo ($current_file == 'php.php') ? 'active' : ''; ?>" href="php.php">PHP</a>
    <a class="nav <?php echo ($current_file == 'python.php') ? 'active' : ''; ?>" href="python.php">PYTHON</a>
</nav>
