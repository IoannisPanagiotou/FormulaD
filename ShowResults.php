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
            $WP=$row["Wear points to be lost"];

            echo "<li>{$gear} {$WP} </li>";
        }
        ?>
    </ul>
    <br>
</content>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>