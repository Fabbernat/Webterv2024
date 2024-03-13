
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include_once "includes/navbar.inc.php";
?>
<header>
    <h1>Feedback</h1>
</header>

<section>
    <!-- Your feedback form goes here -->
    <form action="includes/submit_feedback.inc.php" method="POST" class="green-background-form">
        <label for="rating">Rate Us (1-5):</label>
        <div class="star-rating">
            <input type="radio" id="rating1" name="rating" value="1" required>
            <label for="rating1">&#9733;</label>
            <input type="radio" id="rating2" name="rating" value="2">
            <label for="rating2">&#9733;</label>
            <input type="radio" id="rating3" name="rating" value="3">
            <label for="rating3">&#9733;</label>
            <input type="radio" id="rating4" name="rating" value="4">
            <label for="rating4">&#9733;</label>
            <input type="radio" id="rating5" name="rating" value="5">
            <label for="rating5">&#9733;</label>
        </div>
        <br>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" rows="4" cols="50" placeholder="Write your feedback here..." required></textarea>
        <br>
        <button type="submit" class="button">Submit Feedback</button>
    </form>
</section>

<?php include_once "includes/footer.inc.php";?>
</body>
</html>
