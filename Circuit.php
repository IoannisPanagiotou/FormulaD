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

        // stores the device context of the canvas we use to draw the outlines
        // initialized in myInit, used in myHover and myLeave
        var hdc;

        // shorthand func
        function byId(e){return document.getElementById(e);}

        // takes a string that contains coords eg - "227,307,261,309, 339,354, 328,371, 240,331"
        // draws a line from each co-ord pair to the next - assumes starting point needs to be repeated as ending point.
        function drawPoly(coOrdStr)
        {
            var mCoords = coOrdStr.split(',');
            var i, n;
            n = mCoords.length;

            hdc.beginPath();
            hdc.moveTo(mCoords[0], mCoords[1]);
            for (i=2; i<n; i+=2)
            {
                hdc.lineTo(mCoords[i], mCoords[i+1]);
            }
            hdc.lineTo(mCoords[0], mCoords[1]);
            hdc.stroke();
        }


        function myHover(element)
        {
            var hoveredElement = element;
            var coordStr = element.getAttribute('coords');
            var areaType = element.getAttribute('shape');

            switch (areaType)
            {
                case 'polygon':
                case 'poly':
                    drawPoly(coordStr);
                    break;
            }
        }

        function myLeave()
        {
            var canvas = byId('myCanvas');
            hdc.clearRect(0, 0, canvas.width, canvas.height);
        }

        function myInit()
        {
            // get the target image
            var img = byId('img-imgmap201293016112');

            var x,y, w,h;

            // get it's position and width+height
            x = img.offsetLeft;
            y = img.offsetTop;
            w = img.clientWidth;
            h = img.clientHeight;

            // move the canvas, so it's contained by the same parent as the image
            var imgParent = img.parentNode;
            var can = byId('myCanvas');
            imgParent.appendChild(can);

            // place the canvas in front of the image
            can.style.zIndex = 1;

            // position it over the image
            can.style.left = x+'px';
            can.style.top = y+'px';

            // make same size as the image
            can.setAttribute('width', w+'px');
            can.setAttribute('height', h+'px');

            // get it's context
            hdc = can.getContext('2d');

            // set the 'default' values for the colour/width of fill/stroke operations
            hdc.fillStyle = 'red';
            hdc.strokeStyle = 'red';
            hdc.lineWidth = 2;
        }
    </script>
    <!--<script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.maphilight.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.map').maphilight();
        });
    </script>-->
        <!--/*$(function() {
            $('#circuit').maphilight();
        });*/
        /*function makevisible(cur,which){
            strength=(which==0)? 1 : 0.2
            if (cur.style.MozOpacity)
                cur.style.MozOpacity=strength
            else if (cur.filters)
                cur.filters.alpha.opacity=strength*100
        }*/
        /*function myFunction() {
            //.parent().effect('highlight', {color: '#C7F464'}, 2000);
            alert("Hello World")
        }*/-->

    <!--<script type="text/javascript" src="http://davidlynch.org/projects/maphilight/jquery.maphilight.js">
    jQuery(function()
    {
        jQuery('#circuit').maphilight();
    });
    </script>-->
</head>

<body onload='myInit()'>
<canvas id='myCanvas'></canvas>
<h2>Click on the corresponding block to enter the data</h2>
<h3><a href="Help.php">Help</a></h3>
<br>


<main>
<img id='img-imgmap201293016112' src="Screen 1.png" width="839" height="531" alt="" usemap="#circuitmap" class="map">

<map id='img-imgmap201293016112' name="circuitmap">
    <area shape="poly" onmouseover='myHover(this);' onmouseout='myLeave();' coords="271,177,267,185,282,191,284,184" alt="" href="DataInput.php"/>
<!--          style="outline:none;" target="_self" data-maphilight='{"stroke":false,"fillColor":"cbf68c","fillOpacity":0.6}'-->
<!--          data-maphilight="{'strokeColor':'0000ff','strokeWidth':5,'fillColor':'00ff00','fillOpacity':0.6}" -->
<!--    style="filter:alpha(opacity=20);-moz-opacity:0.2" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" -->

    <area shape="poly" coords="286,183,282,191,295,196,298,190" alt="Block2" href="DataInput.php" />
    <area shape="poly" onmouseover='myHover(this);' onmouseout='myLeave();' coords="291,206,287,215,300,221,305,213" alt="" href="DataInput.php"/>
    <area shape="poly" onmouseover='myHover(this);' onmouseout='myLeave();' coords="327,202,322,210,339,209,337,216" alt="" href="DataInput.php"/>

    <!--          onmouseover="myFunction()"-->

</map>

</main>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>