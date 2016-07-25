<?php
include("dbconnect.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Circuit</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"
    />


        <script>
        function myFunction() {
            document.getElementById('img1').src = 'http://www.xul.fr/images/collar.jpg'
            alert("Hello World")
        }
        </script>

   <!-- <script type="text/javascript" src="http://davidlynch.org/projects/maphilight/jquery.maphilight.js">
    jQuery(function()
    {
        jQuery('#circuit').maphilight();
    });
    </script>-->
</head>

<body>

<h2>Click on the corresponding block to enter the data</h2>
<h3><a href="Help.php">Help</a></h3>
<br>


<main>
<img id='img1' src="Screen 1.png" width="839" height="531" alt="" usemap="#circuitmap" class="map">

<map id='img' name="circuitmap">
    <area shape="poly" coords="271,177,267,185,282,191,284,184" alt="" href="DataInput.php"/>
<!--          style="outline:none;" target="_self" data-maphilight='{"stroke":false,"fillColor":"cbf68c","fillOpacity":0.6}'-->
<!--          data-maphilight="{'strokeColor':'0000ff','strokeWidth':5,'fillColor':'00ff00','fillOpacity':0.6}" -->
<!--    style="filter:alpha(opacity=20);-moz-opacity:0.2" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" -->

    <area id="area1" shape="poly" coords="286,183,282,191,295,196,298,190" alt="Block2" href="DataInput.php" />
    <area shape="poly"  coords="291,206,287,215,300,221,305,213" alt="" href="DataInput.php"/>
    <area shape="poly"  coords="327,202,322,210,339,209,337,216" alt="" href="DataInput.php"/>

    <!--          onmouseover="myFunction()"-->

</map>

</main>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>