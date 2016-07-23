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

            $prob=$row["Probability"];
            $max=$row["maximum"];
            $min=$row["minimum"];

            $WP=$dice-$max;
            if ($WP<0){
                $WP=0;
            }

            for ($i=$gear;$i<=6;$i++) {
                if ($gear == 2) {
                    for ($j = 2; $j <= 4; $j++) {
                        echo "<li>{$i} {$j} {$dice} {$corner} {$WP} {$prob}</li>";
                    }
                }
                if ($gear == 3) {
                    for ($j = 4; $j <= 8; $j++) {
                        echo "<li>{$i} {$j} {$dice} {$corner} {$WP} {$prob}</li>";
                    }
                }
                if ($gear == 4) {
                    for ($j = 7; $j <= 12; $j++) {
                        echo "<li>{$i} {$j} {$dice} {$corner} {$WP} {$prob}</li>";
                    }
                }
                if ($gear == 5) {
                    for ($j = 11; $j <= 20; $j++) {
                        echo "<li>{$i} {$j} {$dice} {$corner} {$WP} {$prob}</li>";
                    }
                }
                /*if ($gear == 6) {
                    for ($j = 4; $j <= 8; $j++) {
                        echo "<li>{$i} {$j} {$dice} {$corner} {$WP} {$prob}</li>";
                    }
                }*/
            }

            echo "<br>";
            echo "<li>{$gear} {$dice} {$corner} {$WP} {$prob} {$max} {$min}</li>";
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