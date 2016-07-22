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
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"
    />
</head>
<body>
<h2>Please see the following results:</h2>
    <br>

<content id="con">
    <ul>
        <?
        $sql_query = "select * from Results";
        $result = $db->query($sql_query);
        while ($row = $result->fetch_array())
        {
            $gear=$row["Gear"];
            $dice=$row["Dice"];
            $corner=$row["Corner"];
            $WP=$row["WearPoints"];

            echo "<li>{$gear} {$dice} {$corner} {$WP} </li>";
        }
        ?>
    </ul>
    <br>
</content>

<br><br><br>
<a href="Circuit.php" title="New Entry"><b>Add a new entry</b></a>

<br><br><br>
<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>