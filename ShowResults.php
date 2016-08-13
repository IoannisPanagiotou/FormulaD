<?php
include("dbconnect.php");
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
<h3><a href="Help.php">Help</a></h3>
    <br>

<content id="con">
    <ul>
        <?
        /*$sql_query = "select * from Results";
        $result = $db->query($sql_query);
        while ($row = $result->fetch_array())*/
        {
            $gear = $_POST["gear"];
            $availWP = $_POST["WP"];
            $corner=0;
            $count1=0;
            $count2=0;
            $count3=0;
            $count4=0;
            $count5=0;
            $count6=0;
           //$prob=$row["Probability"];
           // $max=$row["maximum"];
           // $min=$row["minimum"];
            $min=$_POST["min"];
            $max=$_POST["max"];
            /*echo $min;
            echo "<br>";
            echo $max;*/
            echo "<pre>Gear  Number  CornerHit  WPcorner  WPshortshift  TotalWearPoints  ProbabilityForEachDie</pre>";

            for ($i=1;$i<=($gear+1);$i++) {
                if ($i == 1) {
                    if ($gear<>6) {
                        for ($j = 1; $j <= 2; $j++) {
                            $prob[1]=0.5;
                            $prob[2]=0.5;
                            if ($min<=$j&&$j<=$max){
                                $corner=1;
                            }
                            $WPA = $gear - $i - 1; //added for short shift
                            $WPO = $j - $max; //not hitting the corner
                            if ($WPA < 0) {
                                $WPA = 0;
                            }
                            if ($WPO < 0) {
                                $WPO = 0;
                            }
                            $WP = $WPA + $WPO;
                            if ($availWP>$WP) {
                                if ($WP==0){
                                    echo "<li><pre><strong>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</pre></li>";
                                }
                                $count1++;
                            }
                            $corner = 0;
                        }
                        if ($count1<2){
                            echo "Warning: There are numbers on this die that coud lead to car elimination and player removal from the game!";
                        }
                        echo "<br>";
                        echo $count1;
                    }
                }
                if ($i == 2) {
                    for ($j = 2; $j <= 4; $j++) {
                        $prob[2]=0.167;
                        $prob[3]=0.333;
                        $prob[4]=0.5;
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
                        if ($availWP>$WP) {
                            if ($WP==0){
                                echo "<li><pre><strong>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</strong></pre></li>";
                            }
                            else {
                                echo "<li><pre>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</pre></li>";
                            }
                            $count2++;
                        }
                        $corner = 0;
                    }
                    if ($count2<3){
                        echo "Warning: There are numbers on this die that coud lead to car elimination and player removal from the game!";
                    }
                    echo "<br>";
                }
                if ($i == 3) {
                    for ($j = 4; $j <= 8; $j++) {
                        $prob[4]=0.125;
                        $prob[5]=0.125;
                        $prob[6]=0.25;
                        $prob[7]=0.25;
                        $prob[8]=0.25;
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
                        if ($availWP>$WP) {
                            if ($WP==0){
                                echo "<li><pre><strong>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</strong></pre></li>";
                            }
                            else {
                                echo "<li><pre>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</pre></li>";
                            }
                            $count3++;
                        }
                        $corner = 0;
                    }
                    if ($count3<5){
                        echo "Warning: There are numbers on this die that coud lead to car elimination and player removal from the game!";
                    }
                    echo "<br>";
                }
                if ($i == 4) {
                    for ($j = 7; $j <= 12; $j++) {
                        $prob[7]=0.167;
                        $prob[8]=0.167;
                        $prob[9]=0.167;
                        $prob[10]=0.167;
                        $prob[11]=0.167;
                        $prob[12]=0.167;
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
                        if ($availWP>$WP) {
                            if ($WP==0){
                                echo "<li><pre><strong>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</strong></pre></li>";
                            }
                            else {
                                echo "<li><pre>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</pre></li>";
                            }
                            $count4++;
                        }
                        $corner = 0;
                    }
                    if ($count4<6){
                        echo "Warning: There are numbers on this die that coud lead to car elimination and player removal from the game!";
                    }
                    echo "<br>";
                }
                if ($i == 5) {
                    for ($j = 11; $j <= 20; $j++) {
                        $prob[11]=0.1;
                        $prob[12]=0.1;
                        $prob[13]=0.1;
                        $prob[14]=0.1;
                        $prob[15]=0.1;
                        $prob[16]=0.1;
                        $prob[17]=0.1;
                        $prob[18]=0.1;
                        $prob[19]=0.1;
                        $prob[20]=0.1;
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
                        if ($availWP>$WP) {
                            if ($WP==0){
                                echo "<li><pre><strong>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</strong></pre></li>";
                            }
                            else {
                                echo "<li><pre>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</pre></li>";
                            }
                            $count5++;
                        }
                        $corner = 0;
                    }
                    if ($count5<10){
                        echo "Warning: There are numbers on this die that coud lead to car elimination and player removal from the game!";
                    }
                    echo "<br>";
                }
                if ($i == 6) {
                    for ($j = 21; $j <= 30; $j++) {
                        $prob[21]=0.33;
                        $prob[22]=0.33;
                        $prob[23]=0.33;
                        $prob[24]=0.33;
                        $prob[25]=0.33;
                        $prob[26]=0.33;
                        $prob[27]=0.33;
                        $prob[28]=0.33;
                        $prob[29]=0.33;
                        $prob[30]=0.33;
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
                        if ($availWP>$WP) {
                            if ($WP==0){
                                echo "<li><pre><strong>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</strong></pre></li>";
                            }
                            else {
                                echo "<li><pre>  {$i}    {$j}    {$corner}    {$WPO}    {$WPA}    {$WP}    {$prob[$j]}</pre></li>";
                            }
                            $count6++;
                        }
                        $corner = 0;
                    }
                    if ($count6<10){
                        echo "Warning: There are numbers on this die that coud lead to car elimination and player removal from the game!";
                    }
                    echo "<br>";
                }
            }
            echo "<br>";
            //echo "<li>{$gear} {$corner} {$WP} {$prob} {$max} {$min}</li>";
        }
        ?>
    </ul>
</content>

<br><br>
<a href="Circuit.php" title="New Entry"><b>Add a new entry</b></a>

<br><br><br>
<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>