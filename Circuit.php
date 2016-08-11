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
            alert("Choice made!")
            $("#area1").css("background", "#FFFFFF");
 //           document.getElementById("area1").style.backgroundColor ='yellow';
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

<h2>Click on the corresponding block to enter the data</h2>


<main>

    <div class="cc-contactpop fixed">
        <h1>Do you like this app? <span>Rate us!</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[X]</h1>
        <div class="renseignement">
            <i class="fa fa-times"></i>
            <p>Whether you like our app or not, please let us know how well we did! <br> <a href="RateUs.php">Rate Us!</a> </p>
        </div>

    </div>

    
    <h3><a href="Help.php">Help</a></h3>

<img id='img1' src="Screen 1.png" width="839" height="531" alt="" usemap="#circuitmap" class="map">

<map id='map1' name="circuitmap">
    <area id="area1" shape="poly" onclick="myFunction()" coords="271,177,267,185,282,191,284,184" alt="" href="DataInput.php?min=2&max=8"/>
<!--          style="outline:none;" target="_self" data-maphilight='{"stroke":false,"fillColor":"cbf68c","fillOpacity":0.6}'-->
<!--          data-maphilight="{'strokeColor':'0000ff','strokeWidth':5,'fillColor':'00ff00','fillOpacity':0.6}" -->
<!--    style="filter:alpha(opacity=20);-moz-opacity:0.2" onMouseover="makevisible(this,0)" onMouseout="makevisible(this,1)" -->

    <area class="area" shape="poly" coords="286,183,282,191,295,196,298,190" alt="Block2" href="DataInput.php?min=3&max=9" />

    <area shape="poly"  coords="327,202,322,210,339,209,337,216" alt="" href="DataInput.php?min=6&max=12"/>

<!--    6th corner-->
    <!--in-left-->
    <area shape="poly"  coords="804,158,811,146,819,150,812,162" alt="" href="DataInput.php?min=28&max=32"/>
    <area shape="poly"  coords="797,172,803,158,811,163,803,176" alt="" href="DataInput.php?min=27&max=31"/>
    <area shape="poly"  coords="789,185,796,173,803,176,797,191" alt="" href="DataInput.php?min=26&max=30"/>
    <area shape="poly"  coords="780,197,789,185,796,190,787,203" alt="" href="DataInput.php?min=25&max=29"/>
    <area shape="poly"  coords="770,210,780,196,787,202,777,216" alt="" href="DataInput.php?min=24&max=28"/>
    <area shape="poly"  coords="760,220,769,210,776,216,767,227" alt="" href="DataInput.php?min=23&max=27"/>
    <area shape="poly"  coords="746,231,759,220,766,227,754,237" alt="" href="DataInput.php?min=22&max=26"/>
    <area shape="poly"  coords="735,240,746,232,753,237,742,248" alt="" href="DataInput.php?min=21&max=25"/>
    <area shape="poly"  coords="723,249,735,242,741,248,728,257" alt="" href="DataInput.php?min=20&max=24"/>
    <area shape="poly"  coords="710,258,722,251,727,258,714,267" alt="" href="DataInput.php?min=19&max=23"/>
    <area shape="poly"  coords="696,266,709,259,713,266,700,273" alt="" href="DataInput.php?min=18&max=22"/>
    <area shape="poly"  coords="681,273,694,267,698,274,683,281" alt="" href="DataInput.php?min=17&max=21"/>
    <area shape="poly"  coords="664,278,680,273,683,281,666,286" alt="" href="DataInput.php?min=16&max=20"/>
    <area shape="poly"  coords="648,281,663,277,665,286,649,290" alt="" href="DataInput.php?min=15&max=19"/>
    <area shape="poly"  coords="631,284,647,282,648,290,631,293" alt="" href="DataInput.php?min=14&max=18"/>
    <area shape="poly"  coords="614,286,631,285,632,292,616,294" alt="" href="DataInput.php?min=13&max=17"/>
    <area shape="poly"  coords="599,286,615,286,616,294,598,294" alt="" href="DataInput.php?min=12&max=16"/>
    <area shape="poly"  coords="582,285,598,286,599,295,581,294" alt="" href="DataInput.php?min=11&max=15"/>
    <area shape="poly"  coords="565,283,581,285,581,294,563,291" alt="" href="DataInput.php?min=10&max=14"/>
    <area shape="poly"  coords="548,281,564,284,563,292,547,288" alt="" href="DataInput.php?min=9&max=13"/>
    <area shape="poly"  coords="533,277,548,280,547,289,531,284" alt="" href="DataInput.php?min=8&max=12"/>
    <area shape="poly"  coords="518,271,533,276,531,285,514,279" alt="" href="DataInput.php?min=7&max=11"/>
    <area shape="poly"  coords="504,265,517,270,515,278,501,273" alt="" href="DataInput.php?min=6&max=10"/>
    <area shape="poly"  coords="490,259,504,266,501,273,487,267" alt="" href="DataInput.php?min=5&max=9"/>
    <area shape="poly"  coords="476,254,489,260,486,267,473,261" alt="" href="DataInput.php?min=4&max=8"/>
    <area shape="poly"  coords="462,248,475,254,473,261,458,256" alt="" href="DataInput.php?min=3&max=7"/>
    <area shape="poly"  coords="448,241,462,248,459,255,445,250" alt="" href="DataInput.php?min=2&max=6"/>
    <area shape="poly"  coords="434,237,447,241,445,250,431,244" alt="" href="DataInput.php?min=1&max=5"/>
<!--    middle-->
    <area shape="poly"  coords="800,148,806,136,814,140,805,152" alt="" href="DataInput.php?min=28&max=34"/>
    <area shape="poly"  coords="793,160,800,148,807,152,800,165" alt="" href="DataInput.php?min=27&max=33"/>
    <area shape="poly"  coords="786,173,793,160,800,164,792,177" alt="" href="DataInput.php?min=26&max=32"/>
    <area shape="poly"  coords="778,185,785,173,793,178,784,190" alt="" href="DataInput.php?min=25&max=31"/>
    <area shape="poly"  coords="769,197,777,185,783,190,775,203" alt="" href="DataInput.php?min=24&max=30"/>
    <area shape="poly"  coords="759,208,768,197,775,203,765,213" alt="" href="DataInput.php?min=23&max=29"/>
    <area shape="poly"  coords="748,218,758,208,765,213,752,224" alt="" href="DataInput.php?min=22&max=28"/>
    <area shape="poly"  coords="736,228,747,219,753,226,740,235" alt="" href="DataInput.php?min=21&max=27"/>
    <area shape="poly"  coords="723,237,736,228,741,235,728,244" alt="" href="DataInput.php?min=20&max=26"/>
    <area shape="poly"  coords="710,246,723,238,728,244,715,253" alt="" href="DataInput.php?min=19&max=25"/>
    <area shape="poly"  coords="696,255,710,246,715,254,702,261" alt="" href="DataInput.php?min=18&max=24"/>
    <area shape="poly"  coords="683,261,697,254,701,259,687,268" alt="" href="DataInput.php?min=17&max=23"/>
    <area shape="poly"  coords="669,265,683,259,687,267,672,274" alt="" href="DataInput.php?min=16&max=22"/>
    <area shape="poly"  coords="653,270,667,265,672,273,655,278" alt="" href="DataInput.php?min=15&max=21"/>
    <area shape="poly"  coords="638,273,652,270,655,278,638,281" alt="" href="DataInput.php?min=14&max=20"/>
    <area shape="poly"  coords="622,275,637,273,639,281,623,284" alt="" href="DataInput.php?min=13&max=19"/>
    <area shape="poly"  coords="606,275,622,275,623,283,606,285" alt="" href="DataInput.php?min=12&max=18"/>
    <area shape="poly"  coords="590,276,606,276,606,284,590,284" alt="" href="DataInput.php?min=11&max=17"/>
    <area shape="poly"  coords="573,275,589,275,590,285,573,283" alt="" href="DataInput.php?min=10&max=16"/>
    <area shape="poly"  coords="557,272,574,274,573,284,557,281" alt="" href="DataInput.php?min=9&max=15"/>
    <area shape="poly"  coords="544,269,558,272,556,280,541,277" alt="" href="DataInput.php?min=8&max=14"/>
    <area shape="poly"  coords="528,264,543,268,541,277,526,272" alt="" href="DataInput.php?min=7&max=13"/>
    <area shape="poly"  coords="514,258,528,264,526,272,511,266" alt="" href="DataInput.php?min=6&max=12"/>
    <area shape="poly"  coords="500,253,513,259,510,266,497,261" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="486,248,499,253,497,260,482,256" alt="" href="DataInput.php?min=4&max=10"/>
    <area shape="poly"  coords="472,241,485,247,482,255,468,250" alt="" href="DataInput.php?min=3&max=9"/>
    <area shape="poly"  coords="457,236,472,241,469,249,455,244" alt="" href="DataInput.php?min=2&max=8"/>
    <area shape="poly"  coords="445,230,458,235,455,244,442,238" alt="" href="DataInput.php?min=1&max=6"/>
<!--    out-right-->

    
<!--    7th corner-->
<!--in-left-->
    <area shape="poly"  coords="358,238,355,247,342,240,345,232" alt="" href="DataInput.php?min=9&max=15"/>
    <area shape="poly"  coords="332,226,345,232,342,240,328,233" alt="" href="DataInput.php?min=8&max=14"/>
    <area shape="poly"  coords="318,219,332,225,326,234,314,227" alt="" href="DataInput.php?min=7&max=13"/>
    <area shape="poly"  coords="303,213,317,219,314,227,299,220" alt="" href="DataInput.php?min=6&max=12"/>
    <area shape="poly"  coords="291,206,287,215,300,221,305,213" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="277,201,290,207,287,214,274,208" alt="" href="DataInput.php?min=4&max=10"/>
    <area shape="poly"  coords="263,195,277,200,273,209,259,202" alt="" href="DataInput.php?min=3&max=9"/>
    <area shape="poly"  coords="249,188,263,194,259,201,245,195" alt="" href="DataInput.php?min=2&max=6"/>
    <area shape="poly"  coords="235,183,248,188,246,195,232,190" alt="" href="DataInput.php?min=1&max=3"/>
    <!--middle-->
    <area shape="poly"  coords="356,227,369,233,366,241,352,234" alt="" href="DataInput.php?min=9&max=15"/>
    <area shape="poly"  coords="342,221,356,227,352,235,339,228" alt="" href="DataInput.php?min=8&max=14"/>
    <area shape="poly"  coords="329,214,342,220,339,228,326,221" alt="" href="DataInput.php?min=7&max=13"/>
    <area shape="poly"  coords="315,208,328,214,325,222,311,216" alt="" href="DataInput.php?min=6&max=12"/>
    <area shape="poly"  coords="302,202,315,208,311,216,297,210" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="288,195,301,201,297,209,284,202" alt="" href="DataInput.php?min=4&max=10"/>
    <area shape="poly"  coords="274,189,287,195,284,203,270,197" alt="" href="DataInput.php?min=3&max=9"/>
    <area shape="poly"  coords="261,182,274,189,270,196,258,190" alt="" href="DataInput.php?min=2&max=8"/>
    <area shape="poly"  coords="245,177,260,183,257,190,242,185" alt="" href="DataInput.php?min=1&max=5"/>
<!--    out-right-->


    <!--          onmouseover="myFunction()"-->

</map>

    <a href="#openModal">Please participate in our survey after finishing the play!</a>

    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>Take part in our survey!</h2>
            <p>It won't take long!<br>Please fill the questionnaire by clicking below...</p>
            <h4><a href="Questionnaire.php">Questionnaire</a></h4>
        </div>
    </div>

</main>
<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>
<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>
</html>