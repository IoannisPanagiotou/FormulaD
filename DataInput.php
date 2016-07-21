<?php
include("dbconnect.php");
/**
 * Created by PhpStorm.
 * User: dell user
 * Date: 24/6/2016
 * Time: 11:06
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Input</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
</head>
<body>
<h2>Please enter the following details:</h2>
    <br>
    <form method="post" action="ShowResults.php">
        <label>Current Gear:</label><br>
        <input type="number" name="gear" min="1" max="6" step="1" placeholder="Current Gear" required/><br><br>
        <label>Wear Points:</label><br>
        <input type="number" name="WP" min="1" max="18" step="1" placeholder="Wear Points" required/><br><br>
        <input type="submit" name="submit" value="Proceed" />
    </form>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>

</html>