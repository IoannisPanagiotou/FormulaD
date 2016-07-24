<?php
include("dbconnect.php");
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
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"
    />
    <script>
        function myFunction() {
            .parent().effect('highlight', {color: '#C7F464'}, 2000);
            alert("Hello World")
        }
    </script>
</head>

<body>

<h2>Click on the corresponding block to enter the data</h2>
<br>

<main class="grid-container">

<img id="circuit" src="Screen 1.png" width="839" height="531" alt="Circuit" usemap="#circuitmap">

<map name="circuitmap">
    <area shape="rect" coords="0,0,82,126" alt="Sun" href="DataInput.php">
    <area shape="circle" coords="90,58,3" alt="Mercury" href="DataInput.php">
    <area shape="circle" coords="124,58,8" alt="Venus" href="DataInput.php">
    <area shape="poly" coords="271,177,267,185,282,191,284,184" alt="Block1" id="area1"
           onmouseover="myFunction()"
          href="DataInput.php" />
    <area shape="poly" coords="286,183,282,191,295,196,298,190" alt="Block2"
          onclick="myFunction()"
          href="DataInput.php" />
</map>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>