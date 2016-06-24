<?php
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
</head>
<body>
<h2>Please enter the following details:</h2>
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