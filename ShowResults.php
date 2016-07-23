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
            $gear = $_POST["gear"];
            $corner=0;
            $prob=$row["Probability"];
            $max=$row["maximum"];
            $min=$row["minimum"];

            echo "<li>Gear Number CornerHit WearPoints Probability</li>";

            for ($i=1;$i<=($gear+1);$i++) {
                if ($i == 1) {
                    if ($gear<>6) {
                        for ($j = 1; $j <= 2; $j++) {
                            if ($min<=$j&&$j<=$max){
                                $corner=1;
                            }
                            $WPA = $gear - $i - 1;
                            $WPO = $j - $max;
                            if ($WPA < 0) {
                                $WPA = 0;
                            }
                            if ($WPO < 0) {
                                $WPO = 0;
                            }
                            $WP = $WPA + $WPO;
                            echo "<li><pre>{$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob}</pre></li>";
                        }
                    }
                }
                if ($i == 2) {
                    for ($j = 2; $j <= 4; $j++) {
                        if ($min<=$j&&$j<=$max){
                            $corner=1;
                        }
                        $WPA=$gear-$i-1;
                        $WPO=$j-$max;
                        if ($WPA<0){
                            $WPA=0;
                        }
                        if ($WPO<0){
                            $WPO=0;
                        }
                        $WP=$WPA+$WPO;
                        echo "<li><pre>{$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob}</pre></li>";
                    }
                }
                if ($i == 3) {
                    for ($j = 4; $j <= 8; $j++) {
                        if ($min<=$j&&$j<=$max){
                            $corner=1;
                        }
                        $WPA=$gear-$i-1;
                        $WPO=$j-$max;
                        if ($WPA<0){
                            $WPA=0;
                        }
                        if ($WPO<0){
                            $WPO=0;
                        }
                        $WP=$WPA+$WPO;
                        echo "<li><pre>{$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob}</pre></li>";
                    }
                }
                if ($i == 4) {
                    for ($j = 7; $j <= 12; $j++) {
                        if ($min<=$j&&$j<=$max){
                            $corner=1;
                        }
                        $WPA=$gear-$i-1;
                        $WPO=$j-$max;
                        if ($WPA<0){
                            $WPA=0;
                        }
                        if ($WPO<0){
                            $WPO=0;
                        }
                        $WP=$WPA+$WPO;
                        echo "<li><pre>{$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob}</pre></li>";
                    }
                }
                if ($i == 5) {
                    for ($j = 11; $j <= 20; $j++) {
                        if ($min<=$j&&$j<=$max){
                            $corner=1;
                        }
                        $WPA=$gear-$i-1;
                        $WPO=$j-$max;
                        if ($WPA<0){
                            $WPA=0;
                        }
                        if ($WPO<0){
                            $WPO=0;
                        }
                        $WP=$WPA+$WPO;
                        echo "<li><pre>{$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob}</pre></li>";
                    }
                }
                if ($i == 6) {
                    for ($j = 21; $j <= 30; $j++) {
                        if ($min<=$j&&$j<=$max){
                            $corner=1;
                        }
                        $WPA=$gear-$i-1;
                        $WPO=$j-$max;
                        if ($WPA<0){
                            $WPA=0;
                        }
                        if ($WPO<0){
                            $WPO=0;
                        }
                        $WP=$WPA+$WPO;
                        echo "<li><pre>{$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob}</pre></li>";
                    }
                }
            }

            echo "<br>";
            echo "<li>{$gear} {$corner} {$WP} {$prob} {$max} {$min}</li>";
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