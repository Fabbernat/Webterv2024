<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TryHard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/progress.css">
</head>
<body>
<?php
// profile.php össze lett olvasztva a progress.php-val - felesleges külön oldal a 2-nek
include_once "includes/navbar.inc.php";?>
<main>
    <div class="progress-tracker">
        <div class="progress-item">
            <div class="progress-label">HTML</div>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 80%;"></div>
            </div>
        </div>
        <div class="progress-item">
            <div class="progress-label">CSS</div>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 60%;"></div>
            </div>
        </div>
        <div class="progress-item">
            <div class="progress-label">JavaScript</div>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 40%;"></div>
            </div>
        </div>
        <div class="progress-item">
            <div class="progress-label">PHP</div>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 20%;"></div>
            </div>
        </div>
        <div class="progress-item">
            <div class="progress-label">Python</div>
            <div class="progress-bar">
                <div class="progress-bar-inner" style="width: 10%;"></div>
            </div>
        </div>
    </div>
</main>
<?php include_once "includes/footer.inc.php"; ?>
</body>
</html>
