<?php
include("dbconnect.php");
/**
 * Created by PhpStorm.
 * User: dell user
 * Date: 21/7/2016
 * Time: 15:14
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Results</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
</head>
<body>
<h2>Please see the following results:</h2>
    <br>
    <form method="post" action="input.php">
        <label>Current Gear:</label><br>
        <input type="text" name="gear" placeholder="Current Gear" /><br><br>
        <label>Wear Points:</label><br>
        <input type="text" name="WP" placeholder="Wear Points" /><br><br>
        <input type="submit" name="submit" value="Proceed" />
    </form>
</body>
</html>