<?php
include("dbconnect.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Rate Us!</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"
    />
</head>

<body>

<h2>What is your overall opinion about our web app?</h2>

<form method="post" action="ThankYou.php">
    <textarea rows="4" cols="50" name="comment" placeholder="Enter your comments here..."></textarea> <br>
    <span class="rating">
        <input type="radio" class="rating-input"
               id="rating-input-1-5" name="rating-input-1"/>
        <label for="rating-input-1-5" class="rating-star"></label>
        <input type="radio" class="rating-input"
               id="rating-input-1-4" name="rating-input-1"/>
        <label for="rating-input-1-4" class="rating-star"></label>
        <input type="radio" class="rating-input"
               id="rating-input-1-3" name="rating-input-1"/>
        <label for="rating-input-1-3" class="rating-star"></label>
        <input type="radio" class="rating-input"
               id="rating-input-1-2" name="rating-input-1"/>
        <label for="rating-input-1-2" class="rating-star"></label>
        <input type="radio" class="rating-input"
               id="rating-input-1-1" name="rating-input-1"/>
        <label for="rating-input-1-1" class="rating-star"></label>
        <input type="submit" name="submit" value="Submit"/>
    </span>
</form>

<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK
        TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>