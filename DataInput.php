<?php
include("dbconnect.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Input</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"
    />
</head>
<body>
<h2>Please enter the following details:</h2>
<h3><a href="Help.php">Help</a></h3>
    <br>

    <form method="post" action="ShowResults.php">
        <label>Current Gear:</label><br>
        <input type="number" name="gear" min="1" max="6" step="1" placeholder="Current Gear" required/><br><br>
        <label>Wear Points:</label><br>
        <input type="number" name="WP" min="1" max="18" step="1" placeholder="Available Wear Points" required/><br><br>
        <input type="hidden" name="min" value="<?php echo $_GET["min"]; ?>">
        <input type="hidden" name="max" value="<?php echo $_GET["max"]; ?>">
        <input type="hidden" name="cor" value="<?php echo $_GET["cor"]; ?>">
        <input type="submit" name="submit" value="Proceed" />
    </form>

<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>

</html>