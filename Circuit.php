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

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script>
        function myFunction() {
//            document.getElementById('img1').src = 'http://www.xul.fr/images/collar.jpg'
//            alert("Hello World")
            $("#area1").css("background", "#FFFFFF");
 //           document.getElementById("area1").style.backgroundColor ='yellow';
            return confirm('Are you sure you want to choose this block?')
        }
        </script>

    <script type="text/javascript">
        $( document ).ready(function() {
            // let's Hide Items
            $( ".cc-contactpop form").hide();
            $( ".cc-contactpop i").hide();
            $( ".cc-contactpop p").hide();
            // Show on elements ".slideDown"
            $( ".cc-contactpop" ).click(function() {
                $( ".cc-contactpop form").slideDown(500)
                $( ".cc-contactpop p").slideDown(500)
                $( ".cc-contactpop i").slideDown(500)
            });
            // Close Hidden Part
            $( ".cc-contactpop i" ).click(function() {
                $(this).slideUp(500)
                $( ".cc-contactpop p").slideUp(500)
                $( ".cc-contactpop form").slideUp(500)
                return false
            });
        });
    </script>




</head>

<body>




<div class="cc-contactpop fixed">
    <h1>Do you like this app? <span>Rate us!</span> [X]</h1>
    <div class="renseignement">
        <i class="fa fa-times"></i>
        <p>If you’d like to send us feedback or have any question, please let us know how well we did! </p>
    </div>
    <form method="post">
        <div class="form-group">
            <input type="text" name="name" placeholder="Your name"/>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="E-mail"/>
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Phone number"/>
        </div>
        <div class="form-group">
            <textarea id="message" type="text" placeholder="Message"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>

<h2>Click on the corresponding block to enter the data</h2>
<h3><a href="Help.php">Help</a></h3>
<br>


<main>

<img id='img1' src="Screen 1.png" width="839" height="531" alt="" usemap="#circuitmap" class="map">

<map id='map1' name="circuitmap">
    <area id="area1" shape="poly" onclick="myFunction()" coords="271,177,267,185,282,191,284,184" alt="" href="DataInput.php?min=2&max=8"/>
<!--          style="outline:none;" target="_self" data-maphilight='{"stroke":false,"fillColor":"cbf68c","fillOpacity":0.6}'-->
<!--          data-maphilight="{'strokeColor':'0000ff','strokeWidth':5,'fillColor':'00ff00','fillOpacity':0.6}" -->
<!--    style="filter:alpha(opacity=20);-moz-opacity:0.2" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" -->

    <area class="area" shape="poly" coords="286,183,282,191,295,196,298,190" alt="Block2" href="DataInput.php?min=3&max=9" />
    <area shape="poly"  coords="291,206,287,215,300,221,305,213" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="327,202,322,210,339,209,337,216" alt="" href="DataInput.php?min=6&max=12"/>

    <!--          onmouseover="myFunction()"-->

</map>

</main>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>