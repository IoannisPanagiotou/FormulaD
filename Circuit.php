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
<h2>Click on the corresponding block to enter the data</h2>
<br>

<img id="circuit" src="Screen 1.png" width="839" height="531" alt="Circuit" usemap="#planetmap">

<map name="planetmap">
    <area shape="rect" coords="0,0,82,126" alt="Sun" href="DataInput.php">
    <area shape="circle" coords="90,58,3" alt="Mercury" href="DataInput.php">
    <area shape="circle" coords="124,58,8" alt="Venus" href="DataInput.php">
    <area onmouseover="bigImg(this)" onmouseout="normalImg(this)" shape="poly" coords="271,177,267,185,282,191,284,184" alt="Block" href="DataInput.php">
</map>

<script>
    function bigImg(x) {
        x.style.height = "64px";
        x.style.width = "64px";
    }

    function normalImg(x) {
        x.style.height = "32px";
        x.style.width = "32px";
    }
</script>


<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>
</body>
</html>