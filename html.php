<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TryHard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include_once "includes/navbar.inc.php"; ?>
<header class="yellow-font" style="background-color: #555;
">
    <h1 class="yellow-font">HTML Tutorial</h1>
    <section class="html-nav">
        <ul>
            <li><a href="#introduction">Introduction</a></li>
            <li><a href="#basics">HTML Basics</a></li>
            <li><a href="#elements">HTML Elements</a></li>
            <li><a href="#attributes">HTML Attributes</a></li>
            <!-- Add more navigation links for other sections -->
        </ul>
    </section>
</header>
<main class="lightgreen-background">
    <section id="introduction">
        <div class="html-intro">
            <h2>Introduction to HTML</h2>
            <p>HTML stands for HyperText Markup Language. It is the standard markup language for creating web pages.</p>
            <p>HTML is the standard markup language for Web pages.</p>
            <p>With HTML you can create your own Website.</p>
            <p>HTML is easy to learn - You will enjoy it!</p>
            <img src="img/img_chrome.png" alt="image of a website demonstrating h1 and p tags">
            <a class="btn margin-bottom" href="#"
               style="font-size: 18px;padding-left:25px;padding-right:25px;font-family: 'Source Sans Pro', sans-serif;margin-top:6px;">Study
                our free HTML Tutorial &#187;</a><br>
        </div>

        <!-- more content for introduction -->
    </section>

    <section id="basics" class="html-intro">
        <h2>HTML Basics</h2>
        <p>HTML consists of a series of elements that define the structure of a webpage.</p>
        <!-- more content for HTML basics -->
    </section>

    <section id="elements" class="html-intro">
        <h2>HTML Elements</h2>
        <p>HTML elements are the building blocks of HTML pages.</p>
        <!-- more content for HTML elements -->
    </section>

    <section id="attributes" class="html-intro">
        <h2>HTML Attributes</h2>
        <p>HTML attributes provide additional information about HTML elements.</p>
        <!-- more content for HTML attributes -->
    </section>

    <!-- more sections for other topics -->
    <div>
        <a class="left btn" href="index.php">&#10094;&#10094; Home</a>
        <br>
        <a class="left btn" href="html.php">&#10094; Previous</a>
        <a class="right btn" href="css.php">Next &#10095;</a>
    </div>
</main>
<?php include_once "includes/footer.inc.php"; ?>
</body>
</html>
