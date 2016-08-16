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
<h2>Please see the available options</h2>
<h3><a href="Help.php">Help</a></h3><br>

<content id="con">
    <ul>
        <?
        {
            $gear = $_POST["gear"];
            $availWP = $_POST["WP"];
            $corner=0;
            $min=$_POST["min"];
            $max=$_POST["max"];
            $cor=$_POST["cor"];
            //message for making necessary stops (5th, 8th, 9th corners>1 stops)
            if ($cor==1){
                echo "Please be aware that your car is inside a corner which demands more than one stop! Make sure that you make all the necessary stops, otherwise your car could be eliminated!";
            }

            echo "<pre><strong>Gear  Number  Corner  WPcor  WPsh  WearPoints  Probability</strong></pre>";

            for ($i=1;$i<=($gear+1);$i++) {
                if ($i == 1) {
                    $count1=0;
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
                                if ($WP==0&&$corner==1){
                                    echo "<li><pre><strong>  {$i}     {$j}       {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}     {$j}       {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</pre></li>";
                                }
                                $count1++;
                            }
                            $corner = 0;
                        }
                        if ($count1<2){
                            echo "Warning: There are numbers on this die that could lead to car elimination and player removal from the game!";
                        }
                        echo "<br>";
                    }
                }
                if ($i == 2) {
                    $count2=0;
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
                            if ($WP==0&&$corner==1){
                                echo "<li><pre><strong>  {$i}     {$j}       {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</strong></pre></li>";
                            }
                            else {
                                echo "<li><pre>  {$i}     {$j}       {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</pre></li>";
                            }
                            $count2++;
                        }
                        $corner = 0;
                    }
                    if ($count2<3&&$count1==2){
                        echo "Warning: There are numbers on this die that could lead to car elimination and player removal from the game!";
                    }
                    echo "<br>";
                }
                if ($i == 3) {
                    $count3=0;
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
                            if ($WP==0&&$corner==1){
                                echo "<li><pre><strong>  {$i}     {$j}       {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</strong></pre></li>";
                            }
                            else {
                                echo "<li><pre>  {$i}     {$j}       {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</pre></li>";
                            }
                            $count3++;
                        }
                        $corner = 0;
                    }
                    if ($count3<5&&$count2==3){
                        echo "Warning: There are numbers on this die that could lead to car elimination and player removal from the game!";
                    }
                    echo "<br>";
                }
                if ($i == 4) {
                    $count4=0;
                    for ($j = 7; $j <= 12; $j++) {
                        $prob[$j]=0.167;
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
                            if ($j>9&&$WP>9){
                                if ($WP==0&&$corner==1){
                                    echo "<li><pre><strong>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}      {$WP}         {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}       {$WP}         {$prob[$j]}</pre></li>";
                                }
                            }
                            elseif ($j>9&&$WP<=9){
                                if ($WP==0&&$corner==1){
                                    echo "<li><pre><strong>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</pre></li>";
                                }
                            }
                            else{
                                if ($WP==0&&$corner==1){
                                    echo "<li><pre><strong>  {$i}     {$j}       {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}     {$j}       {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</pre></li>";
                                }
                            }
                            $count4++;
                        }
                        $corner = 0;
                    }
                    if ($count4<6&&$count3==5){
                        echo "Warning: There are numbers on this die that could lead to car elimination and player removal from the game!";
                    }
                    echo "<br>";
                }
                if ($i == 5) {
                    $count5=0;
                    for ($j = 11; $j <= 20; $j++) {
                        $prob[$j]=0.1;
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
                            if ($WP>9){
                                if ($WP==0&&$corner==1){
                                    echo "<li><pre><strong>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}      {$WP}         {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}      {$WP}         {$prob[$j]}</pre></li>";
                                }
                            }
                            else{
                                if ($WP==0&&$corner==1){
                                    echo "<li><pre><strong>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</pre></li>";
                                }
                            }
                            $count5++;
                        }
                        $corner = 0;
                    }
                    if ($count5<10&&$count4==6){
                        echo "Warning: There are numbers on this die that could lead to car elimination and player removal from the game!";
                    }
                    if ($count5==10){
                        echo "Motor Damage Warning: If you get a 20, you must roll the black die to find out if you lose one Wear Point or not!";
                    }
                    echo "<br>";
                }
                if ($i == 6) {
                    $count6=0;
                    for ($j = 21; $j <= 30; $j++) {
                        $prob[$j]=0.1;
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
                            if ($WP>9){
                                if ($WP==0&&$corner==1){
                                    echo "<li><pre><strong>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}      {$WP}         {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}      {$WP}         {$prob[$j]}</pre></li>";
                                }
                            }
                            else{
                                if ($WP==0&&$corner==1){
                                    echo "<li><pre><strong>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</strong></pre></li>";
                                }
                                else {
                                    echo "<li><pre>  {$i}     {$j}      {$corner}       {$WPO}     {$WPA}       {$WP}          {$prob[$j]}</pre></li>";
                                }
                            }
                            $count6++;
                        }
                        $corner = 0;
                    }
                    if ($count6<10&&$count5==10){
                        echo "Warning: There are numbers on this die that could lead to car elimination and player removal from the game!";
                    }
                    if ($count6==10){
                        echo "Motor Damage Warning: If you get a 30, you must roll the black die to find out if you lose one Wear Point or not!";
                    }
                    echo "<br>";
                }
            }
            echo "<pre>***Notice***
Gear: Gear to be used - corresponding die
Number: Number on die
Corner: Corner to be hit (1) or not (0)
WPcor: Wear Points to be lost for overshooting the corner
WPsh: Wear points to be lost for shorter shift
WearPoints: Total Wear Points to be lost (WPcor+Wpsh)
Probability: Probability of getting the corresponding number when rolling the die</pre>";
        }
        ?>
    </ul>
</content>

<br>
<a href="Circuit.php" title="New Entry"><b>Add a new entry</b></a>

<br><br><br>
<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>