<?php
/**
 * Created by PhpStorm.
 * User: dell user
 * Date: 17/7/2016
 * Time: 13:48
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Circuit</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h2>Please enter the following details:</h2>
<br>
<form method="post" action="DataInput.php">
    <label>Current Gear:</label><br>
    <input type="text" name="gear" placeholder="Current Gear" /><br><br>
    <label>Wear Points:</label><br>
    <input type="text" name="WP" placeholder="Wear Points" /><br><br>
    <input type="submit" name="submit" value="Proceed" />
</form>
</body>
</html>