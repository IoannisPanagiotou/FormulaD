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
<h3><a href="Help.php">Help</a></h3>

<main>

    <div class="cc-contactpop fixed">
        <h1>Do you like this app? <span>Rate us!</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
        <div class="renseignement">
            <i class="fa fa-times">[X]</i>
            <p>Whether you like our app or not, please let us know how well we did! <br> <a href="RateUs.php">Rate Us!</a> </p>
        </div>
    </div>



<img id='img1' src="Screen 1.png" width="839" height="531" alt="" usemap="#circuitmap" class="map">

<map id='map1' name="circuitmap">
    <area id="area1" shape="poly" onclick="myFunction()" coords="271,177,267,185,282,191,284,184" alt="" href="DataInput.php?min=2&max=8"/>

    <area class="area" shape="poly" coords="286,183,282,191,295,196,298,190" alt="Block2" href="DataInput.php?min=3&max=9" />

    <area shape="poly"  coords="327,202,322,210,339,209,337,216" alt="" href="DataInput.php?min=6&max=12"/>

<!--    before  1st corner-->
    <!--right-->
    <area shape="poly"  coords="99,176,110,163,116,167,105,181" alt="" href="DataInput.php?min=6&max=12"/>
    <area shape="poly"  coords="109,163,121,151,126,156,116,167" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="121,150,132,139,138,145,126,156" alt="" href="DataInput.php?min=4&max=10"/>
    <area shape="poly"  coords="131,137,143,127,149,133,139,144" alt="" href="DataInput.php?min=3&max=9"/>
    <area shape="poly"  coords="143,127,154,115,161,121,149,133" alt="" href="DataInput.php?min=2&max=6"/>
    <area shape="poly"  coords="155,116,166,105,172,110,161,121" alt="" href="DataInput.php?min=1&max=3"/>
    <!--middle-->
    <area shape="poly"  coords="98,165,107,152,114,157,104,169" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="109,151,119,139,125,145,113,157" alt="" href="DataInput.php?min=4&max=10"/>
    <area shape="poly"  coords="119,138,131,127,137,133,125,144" alt="" href="DataInput.php?min=3&max=9"/>
    <area shape="poly"  coords="131,126,142,115,148,121,137,133" alt="" href="DataInput.php?min=2&max=8"/>
    <area shape="poly"  coords="142,115,154,104,159,110,147,121" alt="" href="DataInput.php?min=1&max=5"/>
    <!--left-->
    <area shape="poly"  coords="85,167,95,153,101,158,91,172" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="97,153,107,140,113,145,103,157" alt="" href="DataInput.php?min=4&max=10"/>
    <area shape="poly"  coords="107,139,119,126,124,133,113,144" alt="" href="DataInput.php?min=3&max=9"/>
    <area shape="poly"  coords="119,127,130,115,136,121,125,133" alt="" href="DataInput.php?min=2&max=8"/>
    <area shape="poly"  coords="131,115,141,105,148,110,137,121" alt="" href="DataInput.php?min=1&max=7"/>
<!--    1st corner-->
    <!--right-->
    <area shape="poly"  coords="166,105,178,93,183,100,173,110" alt="" href="DataInput.php?min=21&max=30&cor=1"/>
    <area shape="poly"  coords="179,93,199,87,199,96,183,100" alt="" href="DataInput.php?min=20&max=29&cor=1"/>
    <area shape="poly"  coords="199,87,217,93,214,99,199,95" alt="" href="DataInput.php?min=19&max=28&cor=1"/>
    <!--middle-->
    <area shape="poly"  coords="155,103,165,93,171,99,160,109" alt="" href="DataInput.php?min=22&max=32&cor=1"/>
    <area shape="poly"  coords="166,93,177,83,182,90,171,100" alt="" href="DataInput.php?min=21max=30&cor=1"/>
    <area shape="poly"  coords="179,83,197,79,197,87,182,90" alt="" href="DataInput.php?min=21&max=30&cor=1"/>
    <area shape="poly"  coords="198,78,213,82,211,91,197,87" alt="" href="DataInput.php?min=20&max=29&cor=1"/>
    <area shape="poly"  coords="214,82,227,89,225,95,211,90" alt="" href="DataInput.php?min=19&max=28&cor=1"/>
    <!--left-->
    <area shape="poly"  coords="143,103,153,93,160,99,148,109" alt="" href="DataInput.php?min=23&max=32&cor=1"/>
    <area shape="poly"  coords="155,91,165,81,171,87,159,98" alt="" href="DataInput.php?min=22&max=31&cor=1"/>
    <area shape="poly"  coords="165,81,178,73,182,81,169,87" alt="" href="DataInput.php?min=22&max=31&cor=1"/>
    <area shape="poly"  coords="179,74,195,70,196,77,181,81" alt="" href="DataInput.php?min=22&max=31&cor=1"/>
    <area shape="poly"  coords="195,69,211,70,209,79,195,79" alt="" href="DataInput.php?min=21&max=30&cor=1"/>
    <area shape="poly"  coords="211,71,225,76,223,85,208,79" alt="" href="DataInput.php?min=20&max=29&cor=1"/>
    <area shape="poly"  coords="227,77,238,85,236,91,222,84" alt="" href="DataInput.php?min=19&max=28&cor=1"/>
<!--    before  2nd corner-->
    <!--right-->
    <area shape="poly"  coords="217,94,229,100,226,108,213,102" alt="" href="DataInput.php?min=18&max=27"/>
    <area shape="poly"  coords="230,100,244,107,241,115,227,108" alt="" href="DataInput.php?min=17&max=26"/>
    <area shape="poly"  coords="243,107,257,114,254,122,240,116" alt="" href="DataInput.php?min=16&max=25"/>
    <area shape="poly"  coords="257,114,270,122,267,128,253,122" alt="" href="DataInput.php?min=15&max=24"/>
    <area shape="poly"  coords="271,121,284,128,281,136,267,129" alt="" href="DataInput.php?min=14&max=23"/>
    <area shape="poly"  coords="284,128,298,133,296,142,281,136" alt="" href="DataInput.php?min=13&max=22"/>
    <area shape="poly"  coords="298,134,313,137,311,146,296,143" alt="" href="DataInput.php?min=12&max=21"/>
    <area shape="poly"  coords="313,137,328,139,328,148,312,146" alt="" href="DataInput.php?min=11&max=20"/>
    <area shape="poly"  coords="328,139,343,140,343,148,327,147" alt="" href="DataInput.php?min=10&max=19"/>
    <area shape="poly"  coords="344,140,360,140,359,149,342,150" alt="" href="DataInput.php?min=9&max=18"/>
    <area shape="poly"  coords="360,141,374,142,373,150,358,150" alt="" href="DataInput.php?min=8&max=17"/>
    <area shape="poly"  coords="374,142,389,145,389,153,373,151" alt="" href="DataInput.php?min=7&max=16"/>
    <area shape="poly"  coords="391,146,404,150,402,158,388,154" alt="" href="DataInput.php?min=6&max=15"/>
    <area shape="poly"  coords="405,149,419,155,415,163,402,157" alt="" href="DataInput.php?min=5&max=14"/>
    <area shape="poly"  coords="419,155,433,162,431,169,415,163" alt="" href="DataInput.php?min=4&max=13"/>
    <area shape="poly"  coords="434,162,449,169,445,177,431,170" alt="" href="DataInput.php?min=3&max=12"/>
    <area shape="poly"  coords="449,169,463,176,459,184,445,177" alt="" href="DataInput.php?min=2&max=11"/>
    <area shape="poly"  coords="464,177,477,183,475,191,461,185" alt="" href="DataInput.php?min=1&max=10"/>
    <!--middle-->
    <area shape="poly"  coords="245,176,259,181,256,189,241,183" alt="" href="DataInput.php?min=18&max=25"/>
    <area shape="poly"  coords="242,95,255,102,251,110,238,103" alt="" href="DataInput.php?min=17&max=24"/>
    <area shape="poly"  coords="255,103,268,109,264,117,251,111" alt="" href="DataInput.php?min=16&max=23"/>
    <area shape="poly"  coords="269,110,282,116,278,124,264,117" alt="" href="DataInput.php?min=15&max=22"/>
    <area shape="poly"  coords="282,117,295,122,291,130,277,124" alt="" href="DataInput.php?min=14&max=21"/>
    <area shape="poly"  coords="295,122,308,126,307,135,291,130" alt="" href="DataInput.php?min=13&max=20"/>
    <area shape="poly"  coords="308,126,323,129,321,138,306,135" alt="" href="DataInput.php?min=12&max=19"/>
    <area shape="poly"  coords="322,129,337,131,337,139,321,138" alt="" href="DataInput.php?min=11&max=18"/>
    <area shape="poly"  coords="337,130,352,131,352,139,336,139" alt="" href="DataInput.php?min=10&max=17"/>
    <area shape="poly"  coords="352,132,367,132,368,141,351,139" alt="" href="DataInput.php?min=9&max=16"/>
    <area shape="poly"  coords="368,132,384,135,384,143,368,141" alt="" href="DataInput.php?min=8&max=15"/>
    <area shape="poly"  coords="385,134,400,138,397,146,383,143" alt="" href="DataInput.php?min=7&max=14"/>
    <area shape="poly"  coords="400,139,415,143,412,151,397,145" alt="" href="DataInput.php?min=6&max=13"/>
    <area shape="poly"  coords="415,144,431,150,427,159,412,153" alt="" href="DataInput.php?min=5&max=12"/>
    <area shape="poly"  coords="431,150,445,158,441,166,428,159" alt="" href="DataInput.php?min=4&max=11"/>
    <area shape="poly"  coords="446,158,460,164,457,172,443,166" alt="" href="DataInput.php?min=3&max=10"/>
    <area shape="poly"  coords="460,165,474,172,471,180,457,173" alt="" href="DataInput.php?min=2&max=9"/>
    <area shape="poly"  coords="475,172,489,178,486,186,471,180" alt="" href="DataInput.php?min=1&max=8"/>
    <!--left-->
    <area shape="poly"  coords="240,85,253,91,249,99,236,91" alt="" href="DataInput.php?min=18&max=27"/>
    <area shape="poly"  coords="253,91,267,98,263,106,249,99" alt="" href="DataInput.php?min=17&max=26"/>
    <area shape="poly"  coords="267,99,279,104,275,113,262,106" alt="" href="DataInput.php?min=16&max=25"/>
    <area shape="poly"  coords="280,105,291,111,289,119,276,113" alt="" href="DataInput.php?min=15&max=24"/>
    <area shape="poly"  coords="292,112,304,115,301,124,289,119" alt="" href="DataInput.php?min=14&max=23"/>
    <area shape="poly"  coords="304,117,317,120,315,128,302,125" alt="" href="DataInput.php?min=13&max=22"/>
    <area shape="poly"  coords="317,119,330,121,331,129,316,127" alt="" href="DataInput.php?min=12&max=21"/>
    <area shape="poly"  coords="331,121,345,121,345,131,331,129" alt="" href="DataInput.php?min=11&max=20"/>
    <area shape="poly"  coords="345,123,360,122,361,132,345,131" alt="" href="DataInput.php?min=10&max=19"/>
    <area shape="poly"  coords="360,123,376,124,377,133,361,131" alt="" href="DataInput.php?min=9&max=18"/>
    <area shape="poly"  coords="377,123,393,126,392,136,376,133" alt="" href="DataInput.php?min=8&max=17"/>
    <area shape="poly"  coords="394,128,410,132,409,140,392,136" alt="" href="DataInput.php?min=7&max=16"/>
    <area shape="poly"  coords="411,132,427,138,424,147,409,140" alt="" href="DataInput.php?min=6&max=15"/>
    <area shape="poly"  coords="427,139,443,145,439,153,424,146" alt="" href="DataInput.php?min=5&max=14"/>
    <area shape="poly"  coords="441,146,457,153,453,161,439,154" alt="" href="DataInput.php?min=4&max=13"/>
    <area shape="poly"  coords="456,153,471,159,468,168,453,161" alt="" href="DataInput.php?min=3&max=12"/>
    <area shape="poly"  coords="471,160,485,166,483,175,468,168" alt="" href="DataInput.php?min=2&max=8"/>
    <area shape="poly"  coords="485,167,501,173,499,181,481,175" alt="" href="DataInput.php?min=1&max=5"/>
<!--    2nd corner-->
    <!--right-->
    <area shape="poly"  coords="479,183,492,189,490,199,475,192" alt="" href="DataInput.php?min=12&max=17"/>
    <area shape="poly"  coords="493,190,507,194,507,202,491,197" alt="" href="DataInput.php?min=11&max=16"/>
    <area shape="poly"  coords="507,194,521,193,523,202,507,201" alt="" href="DataInput.php?min=10&max=15"/>
    <area shape="poly"  coords="523,193,535,190,538,199,523,201" alt="" href="DataInput.php?min=9&max=14"/>
    <area shape="poly"  coords="534,190,547,185,552,191,537,197" alt="" href="DataInput.php?min=8&max=13"/>
    <area shape="poly"  coords="548,184,557,175,564,181,551,191" alt="" href="DataInput.php?min=7&max=12"/>
    <area shape="poly"  coords="565,164,573,167,565,180,558,175" alt="" href="DataInput.php?min=6&max=11"/>
    <area shape="poly"  coords="569,149,577,152,573,166,565,163" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="569,135,577,135,579,151,569,149" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="569,120,577,119,578,135,569,136" alt="" href="DataInput.php?min=3&max=8"/>
    <!--middle-->
    <area shape="poly"  coords="490,179,502,183,500,193,487,187" alt="" href="DataInput.php?min=9&max=15"/>
    <area shape="poly"  coords="503,183,515,185,518,193,501,191" alt="" href="DataInput.php?min=8&max=14"/>
    <area shape="poly"  coords="517,185,531,182,533,190,518,193" alt="" href="DataInput.php?min=7&max=13"/>
    <area shape="poly"  coords="530,181,543,175,548,183,534,189" alt="" href="DataInput.php?min=6&max=12"/>
    <area shape="poly"  coords="543,176,553,167,560,172,548,183" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="558,155,565,158,560,171,553,166" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="560,143,569,143,567,157,559,154" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="560,129,567,128,570,143,561,144" alt="" href="DataInput.php?min=3&max=8"/>
    <!--left-->
    <area shape="poly"  coords="502,173,517,175,518,184,500,181" alt="" href="DataInput.php?min=7&max=12"/>
    <area shape="poly"  coords="517,175,531,171,536,179,518,183" alt="" href="DataInput.php?min=6&max=11"/>
    <area shape="poly"  coords="532,171,544,163,551,167,535,179" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="544,162,549,149,559,152,551,167" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="551,136,560,136,559,151,551,149" alt="" href="DataInput.php?min=3&max=8"/>
<!--    before  3rd corner-->
    <!--left-->
    <area shape="poly"  coords="550,121,559,121,559,135,551,135" alt="" href="DataInput.php?min=2&max=7"/>
    <area shape="poly"  coords="549,107,557,106,559,121,550,121" alt="" href="DataInput.php?min=1&max=6"/>
    <!--    middle-->
    <area shape="poly"  coords="558,112,567,112,568,127,560,127" alt="" href="DataInput.php?min=2&max=7"/>
    <area shape="poly"  coords="557,99,566,98,567,112,559,112" alt="" href="DataInput.php?min=1&max=4"/>
    <!--    right-->
    <area shape="poly"  coords="567,105,575,105,576,119,569,120" alt="" href="DataInput.php?min=2&max=5"/>
    <area shape="poly"  coords="566,105,566,89,573,89,575,104" alt="" href="DataInput.php?min=1&max=2"/>
<!--    3rd corner-->
    <!--left-->
    <area shape="poly"  coords="547,90,555,90,557,105,550,105" alt="" href="DataInput.php?min=13&max=18"/>
    <area shape="poly"  coords="547,73,554,75,555,90,547,91" alt="" href="DataInput.php?min=12&max=17"/>
    <area shape="poly"  coords="552,59,558,63,556,75,547,73" alt="" href="DataInput.php?min=11&max=16"/>
    <area shape="poly"  coords="551,59,561,47,567,54,559,63" alt="" href="DataInput.php?min=10&max=15"/>
    <area shape="poly"  coords="563,47,578,41,581,49,568,54" alt="" href="DataInput.php?min=9&max=14"/>
    <area shape="poly"  coords="580,41,592,38,595,47,581,48" alt="" href="DataInput.php?min=8&max=13"/>
    <!--    middle-->
    <area shape="poly"  coords="556,82,565,82,565,97,557,97" alt="" href="DataInput.php?min=12&max=17"/>
    <area shape="poly"  coords="557,65,566,69,565,82,556,82" alt="" href="DataInput.php?min=11&max=16"/>
    <area shape="poly"  coords="574,51,576,59,567,68,557,65" alt="" href="DataInput.php?min=10&max=15"/>
    <area shape="poly"  coords="589,48,591,56,577,59,574,51" alt="" href="DataInput.php?min=9&max=14"/>
    <!--    right-->
    <area shape="poly"  coords="567,70,573,74,575,87,566,87" alt="" href="DataInput.php?min=11&max=16"/>
    <area shape="poly"  coords="584,57,586,67,575,73,565,69" alt="" href="DataInput.php?min=10&max=15"/>
<!--    before 4th corner-->
    <!--left-->
    <area shape="poly"  coords="593,38,607,36,609,44,595,45" alt="" href="DataInput.php?min=7&max=12"/>
    <area shape="poly"  coords="607,35,622,33,623,42,609,44" alt="" href="DataInput.php?min=6&max=11"/>
    <area shape="poly"  coords="623,34,637,33,637,41,623,43" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="637,32,652,30,653,38,638,40" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="652,30,667,28,667,36,653,38" alt="" href="DataInput.php?min=3&max=8"/>
    <area shape="poly"  coords="667,27,680,25,683,34,667,35" alt="" href="DataInput.php?min=2&max=7"/>
    <area shape="poly"  coords="681,27,695,24,696,33,682,35" alt="" href="DataInput.php?min=1&max=6"/>
    <!--middle-->
    <area shape="poly"  coords="589,48,602,45,604,55,590,55" alt="" href="DataInput.php?min=8&max=13"/>
    <area shape="poly"  coords="603,45,617,43,619,51,603,53" alt="" href="DataInput.php?min=7&max=12"/>
    <area shape="poly"  coords="617,43,632,42,633,49,619,51" alt="" href="DataInput.php?min=6&max=11"/>
    <area shape="poly"  coords="631,41,646,39,647,47,633,49" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="647,39,661,37,663,46,649,47" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="661,37,675,35,677,43,662,45" alt="" href="DataInput.php?min=3&max=8"/>
    <area shape="poly"  coords="675,35,691,33,692,41,676,43" alt="" href="DataInput.php?min=2&max=7"/>
    <area shape="poly"  coords="690,33,705,32,705,39,691,41" alt="" href="DataInput.php?min=1&max=4"/>
    <!--    right-->
    <area shape="poly"  coords="584,57,597,55,599,63,586,66" alt="" href="DataInput.php?min=9&max=14"/>
    <area shape="poly"  coords="597,55,612,53,615,61,599,64" alt="" href="DataInput.php?min=8&max=13"/>
    <area shape="poly"  coords="612,53,625,51,628,59,614,61" alt="" href="DataInput.php?min=7&max=12"/>
    <area shape="poly"  coords="626,51,641,49,643,58,628,60" alt="" href="DataInput.php?min=6&max=11"/>
    <area shape="poly"  coords="641,49,656,47,657,55,643,58" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="656,46,669,45,671,53,657,55" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="669,45,683,43,686,51,671,53" alt="" href="DataInput.php?min=3&max=8"/>
    <area shape="poly"  coords="685,43,699,42,701,49,685,51" alt="" href="DataInput.php?min=2&max=5"/>
    <area shape="poly"  coords="700,41,713,40,714,47,700,49" alt="" href="DataInput.php?min=1&max=2"/>
<!--    4th corner-->
    <!--left-->
    <area shape="poly"  coords="696,24,709,23,711,30,697,31" alt="" href="DataInput.php?min=7&max=26"/>
    <area shape="poly"  coords="710,22,726,23,727,31,711,31" alt="" href="DataInput.php?min=7&max=25"/>
    <area shape="poly"  coords="729,23,725,30,738,39,745,35" alt="" href="DataInput.php?min=6&max=24"/>
    <area shape="poly"  coords="739,39,745,35,753,51,743,51" alt="" href="DataInput.php?min=6&max=23"/>
    <area shape="poly"  coords="744,51,752,51,750,67,742,64" alt="" href="DataInput.php?min=5&max=22"/>
    <area shape="poly"  coords="742,63,749,68,745,81,735,77" alt="" href="DataInput.php?min=4&max=21"/>
    <!--    middle-->
    <area shape="poly"  coords="705,32,720,31,719,39,705,39" alt="" href="DataInput.php?min=6&max=24"/>
    <area shape="poly"  coords="720,29,720,37,732,43,738,37" alt="" href="DataInput.php?min=6&max=23"/>
    <area shape="poly"  coords="731,44,737,40,744,54,735,54" alt="" href="DataInput.php?min=5&max=22"/>
    <area shape="poly"  coords="734,53,742,55,739,71,731,67" alt="" href="DataInput.php?min=4&max=21"/>
    <!--    right-->
    <area shape="poly"  coords="713,39,715,48,725,49,731,43" alt="" href="DataInput.php?min=5&max=22"/>
    <area shape="poly"  coords="733,63,725,59,725,49,731,45" alt="" href="DataInput.php?min=4&max=21"/>
<!--    before  5th corner-->
    <!--left-->
    <area shape="poly"  coords="735,78,743,81,741,93,732,92" alt="" href="DataInput.php?min=3&max=20"/>
    <area shape="poly"  coords="732,93,741,93,739,108,730,108" alt="" href="DataInput.php?min=2&max=16"/>
    <area shape="poly"  coords="731,107,739,109,738,122,729,122" alt="" href="DataInput.php?min=1&max=12"/>
    <!--    middle-->
    <area shape="poly"  coords="730,68,737,70,733,85,725,85" alt="" href="DataInput.php?min=3&max=20"/>
    <area shape="poly"  coords="725,85,733,87,732,101,723,101" alt="" href="DataInput.php?min=2&max=19"/>
    <area shape="poly"  coords="723,100,731,102,730,115,721,114" alt="" href="DataInput.php?min=1&max=15"/>
    <!--    right-->
    <area shape="poly"  coords="723,61,731,63,726,76,717,74" alt="" href="DataInput.php?min=3&max=20"/>
    <area shape="poly"  coords="718,74,726,76,724,91,715,89" alt="" href="DataInput.php?min=2&max=19"/>
    <area shape="poly"  coords="715,89,723,90,721,105,713,104" alt="" href="DataInput.php?min=1&max=18"/>
<!--    before  6th corner-->
    <!--left-->
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
    <!--    right-->
    <area shape="poly"  coords="797,135,803,124,810,127,804,140" alt="" href="DataInput.php?min=28&max=34"/>
    <area shape="poly"  coords="789,149,796,136,803,139,797,152" alt="" href="DataInput.php?min=27&max=33"/>
    <area shape="poly"  coords="783,161,789,149,795,153,789,165" alt="" href="DataInput.php?min=26&max=32"/>
    <area shape="poly"  coords="775,173,783,161,789,166,781,177" alt="" href="DataInput.php?min=25&max=31"/>
    <area shape="poly"  coords="767,185,775,173,781,177,773,189" alt="" href="DataInput.php?min=24&max=30"/>
    <area shape="poly"  coords="758,197,766,185,773,191,763,201" alt="" href="DataInput.php?min=23&max=29"/>
    <area shape="poly"  coords="747,207,757,197,763,203,753,213" alt="" href="DataInput.php?min=22&max=28"/>
    <area shape="poly"  coords="736,218,747,208,753,213,741,224" alt="" href="DataInput.php?min=21&max=27"/>
    <area shape="poly"  coords="725,226,735,218,741,224,729,232" alt="" href="DataInput.php?min=20&max=26"/>
    <area shape="poly"  coords="712,234,723,226,729,232,717,242" alt="" href="DataInput.php?min=19&max=25"/>
    <area shape="poly"  coords="699,242,711,235,717,241,703,249" alt="" href="DataInput.php?min=18&max=24"/>
    <area shape="poly"  coords="686,249,698,243,703,249,689,255" alt="" href="DataInput.php?min=17&max=23"/>
    <area shape="poly"  coords="672,254,686,249,690,255,675,261" alt="" href="DataInput.php?min=16&max=22"/>
    <area shape="poly"  coords="658,259,671,255,676,262,661,267" alt="" href="DataInput.php?min=15&max=21"/>
    <area shape="poly"  coords="643,263,658,259,661,267,644,271" alt="" href="DataInput.php?min=14&max=20"/>
    <area shape="poly"  coords="628,264,643,262,645,271,629,273" alt="" href="DataInput.php?min=13&max=19"/>
    <area shape="poly"  coords="613,265,628,264,630,273,613,274" alt="" href="DataInput.php?min=12&max=18"/>
    <area shape="poly"  coords="597,267,613,265,615,274,599,275" alt="" href="DataInput.php?min=11&max=17"/>
    <area shape="poly"  coords="583,265,598,265,597,275,582,275" alt="" href="DataInput.php?min=10&max=16"/>
    <area shape="poly"  coords="565,263,583,266,582,273,566,272" alt="" href="DataInput.php?min=9&max=15"/>
    <area shape="poly"  coords="552,261,566,264,566,273,550,269" alt="" href="DataInput.php?min=8&max=14"/>
    <area shape="poly"  coords="538,257,552,261,551,269,536,265" alt="" href="DataInput.php?min=7&max=13"/>
    <area shape="poly"  coords="523,253,537,257,537,265,521,261" alt="" href="DataInput.php?min=6&max=12"/>
    <area shape="poly"  coords="509,247,523,252,521,260,507,255" alt="" href="DataInput.php?min=5&max=11"/>
    <area shape="poly"  coords="497,241,510,247,507,255,493,250" alt="" href="DataInput.php?min=4&max=10"/>
    <area shape="poly"  coords="483,235,496,241,493,248,479,243" alt="" href="DataInput.php?min=3&max=9"/>
    <area shape="poly"  coords="468,230,482,235,479,243,465,238" alt="" href="DataInput.php?min=2&max=8"/>
    <area shape="poly"  coords="454,224,468,229,466,237,453,231" alt="" href="DataInput.php?min=1&max=7"/>
<!--    6th corner-->
    <!--left-->
    <area shape="poly"  coords="415,240,422,246,429,244,432,235" alt="" href="DataInput.php?min=14&max=20"/>
    <area shape="poly"  coords="404,250,415,240,422,247,407,258" alt="" href="DataInput.php?min=13&max=19"/>
    <area shape="poly"  coords="390,251,403,249,407,257,389,259" alt="" href="DataInput.php?min=12&max=18"/>
    <area shape="poly"  coords="373,244,371,252,389,259,389,251" alt="" href="DataInput.php?min=11&max=17"/>
    <area shape="poly"  coords="359,238,374,244,369,253,355,247" alt="" href="DataInput.php?min=10&max=16"/>
    <!--    middle-->
    <area shape="poly"  coords="427,225,443,229,440,237,427,234" alt="" href="DataInput.php?min=13&max=21"/>
    <area shape="poly"  coords="427,224,428,233,416,237,411,230" alt="" href="DataInput.php?min=12&max=19"/>
    <area shape="poly"  coords="399,242,403,249,417,238,411,230" alt="" href="DataInput.php?min=11&max=18"/>
    <area shape="poly"  coords="385,239,399,242,403,250,382,247" alt="" href="DataInput.php?min=11&max=17"/>
    <area shape="poly"  coords="370,233,385,239,382,247,367,240" alt="" href="DataInput.php?min=10&max=16"/>
    <!--    right-->
    <area shape="poly"  coords="440,217,454,222,452,231,437,226" alt="" href="DataInput.php?min=14&max=22"/>
    <area shape="poly"  coords="423,215,438,217,437,225,423,225" alt="" href="DataInput.php?min=13&max=20"/>
    <area shape="poly"  coords="406,222,423,215,423,225,411,230" alt="" href="DataInput.php?min=12&max=18"/>
    <area shape="poly"  coords="405,223,411,229,401,240,397,231" alt="" href="DataInput.php?min=11&max=17"/>
    <area shape="poly"  coords="379,235,401,241,396,231,382,227" alt="" href="DataInput.php?min=10&max=16"/>
<!--   before 7th corner-->
    <!--left-->
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
    <!--    right-->

<!--    7th corner-->
    <!--left-->
    <area shape="poly"  coords="217,181,233,181,233,189,219,189" alt="" href="DataInput.php?min=6&max=18"/>
    <area shape="poly"  coords="201,191,217,182,219,191,206,198" alt="" href="DataInput.php?min=5&max=17"/>
    <area shape="poly"  coords="189,202,203,191,207,199,195,209" alt="" href="DataInput.php?min=4&max=14"/>
    <!--    middle-->
    <area shape="poly"  coords="229,171,245,175,242,183,229,181" alt="" href="DataInput.php?min=7&max=19"/>
    <area shape="poly"  coords="213,173,229,172,229,180,216,182" alt="" href="DataInput.php?min=6&max=18"/>
    <area shape="poly"  coords="199,181,203,188,217,181,213,173" alt="" href="DataInput.php?min=5&max=17"/>
    <area shape="poly"  coords="186,192,197,181,203,189,193,197" alt="" href="DataInput.php?min=4&max=16"/>
    <area shape="poly"  coords="176,203,186,193,192,199,183,208" alt="" href="DataInput.php?min=3&max=15"/>
    <!--    right-->
    <area shape="poly"  coords="240,163,257,169,253,177,238,172" alt="" href="DataInput.php?min=8&max=21"/>
    <area shape="poly"  coords="225,162,240,163,239,172,225,171" alt="" href="DataInput.php?min=7&max=20"/>
    <area shape="poly"  coords="208,165,224,161,225,170,211,173" alt="" href="DataInput.php?min=6&max=19"/>
    <area shape="poly"  coords="196,172,208,167,212,174,201,179" alt="" href="DataInput.php?min=5&max=18"/>
    <area shape="poly"  coords="185,180,191,188,201,181,194,171" alt="" href="DataInput.php?min=4&max=17"/>
    <area shape="poly"  coords="185,180,191,187,182,196,177,189" alt="" href="DataInput.php?min=3&max=16"/>
    <area shape="poly"  coords="164,202,175,190,181,197,171,207" alt="" href="DataInput.php?min=2&max=14"/>
<!--    before  8th corner-->
    <!--left-->
    <area shape="poly"  coords="179,213,189,203,195,209,187,219" alt="" href="DataInput.php?min=3&max=15"/>
    <area shape="poly"  coords="171,225,178,214,187,219,179,229" alt="" href="DataInput.php?min=2&max=13"/>
    <area shape="poly"  coords="165,237,170,225,178,229,173,240" alt="" href="DataInput.php?min=1&max=11"/>
    <!--    middle-->
    <area shape="poly"  coords="167,214,176,205,182,209,175,219" alt="" href="DataInput.php?min=2&max=14"/>
    <area shape="poly"  coords="159,227,167,214,175,219,167,229" alt="" href="DataInput.php?min=1&max=12"/>
    <!--    right-->
    <area shape="poly"  coords="156,215,163,203,171,209,163,219" alt="" href="DataInput.php?min=1&max=13"/>
<!--    8th corner-->
    <!--left-->
    <area shape="poly"  coords="164,238,169,254,177,249,172,240" alt="" href="DataInput.php?min=13&max=23"/>
    <area shape="poly"  coords="169,255,178,250,185,265,175,265" alt="" href="DataInput.php?min=12&max=22"/>
    <area shape="poly"  coords="176,267,185,265,183,283,174,281" alt="" href="DataInput.php?min=11&max=21"/>
    <area shape="poly"  coords="174,281,183,284,178,299,169,297" alt="" href="DataInput.php?min=10&max=20"/>
    <area shape="poly"  coords="169,297,177,299,174,315,165,312" alt="" href="DataInput.php?min=9&max=19"/>
    <area shape="poly"  coords="163,313,172,315,167,330,158,327" alt="" href="DataInput.php?min=8&max=18"/>
    <area shape="poly"  coords="151,335,154,343,167,331,158,327" alt="" href="DataInput.php?min=7&max=17"/>
    <area shape="poly"  coords="141,351,153,344,150,336,131,348" alt="" href="DataInput.php?min=6&max=16"/>
    <area shape="poly"  coords="131,349,139,350,138,366,129,365" alt="" href="DataInput.php?min=5&max=15"/>
    <!--    middle-->
    <area shape="poly"  coords="159,227,166,230,162,242,153,242" alt="" href="DataInput.php?min=12&max=24"/>
    <area shape="poly"  coords="153,243,163,243,169,254,161,259" alt="" href="DataInput.php?min=11&max=23"/>
    <area shape="poly"  coords="161,259,169,254,176,271,167,271" alt="" href="DataInput.php?min=11&max=22"/>
    <area shape="poly"  coords="166,272,175,272,171,289,162,288" alt="" href="DataInput.php?min=10&max=21"/>
    <area shape="poly"  coords="161,287,171,289,167,304,157,303" alt="" href="DataInput.php?min=9&max=20"/>
    <area shape="poly"  coords="157,302,165,304,161,319,153,318" alt="" href="DataInput.php?min=8&max=19"/>
    <area shape="poly"  coords="143,327,147,337,161,320,153,319" alt="" href="DataInput.php?min=7&max=18"/>
    <area shape="poly"  coords="128,338,134,344,147,337,143,329" alt="" href="DataInput.php?min=6&max=17"/>
    <area shape="poly"  coords="127,339,134,344,129,358,121,358" alt="" href="DataInput.php?min=5&max=16"/>
    <area shape="poly"  coords="120,359,129,358,128,373,119,373" alt="" href="DataInput.php?min=4&max=15"/>
    <!--    right-->
    <area shape="poly"  coords="155,215,162,219,157,233,147,229" alt="" href="DataInput.php?min=13&max=26"/>
    <area shape="poly"  coords="149,231,155,233,154,245,145,245" alt="" href="DataInput.php?min=12&max=24"/>
    <area shape="poly"  coords="145,247,154,245,160,258,151,261" alt="" href="DataInput.php?min=11&max=22"/>
    <area shape="poly"  coords="152,263,161,259,166,278,156,277" alt="" href="DataInput.php?min=10&max=21"/>
    <area shape="poly"  coords="156,276,165,279,161,293,151,292" alt="" href="DataInput.php?min=9&max=20"/>
    <area shape="poly"  coords="151,293,159,293,155,309,145,308" alt="" href="DataInput.php?min=8&max=19"/>
    <area shape="poly"  coords="155,310,142,329,137,321,146,308" alt="" href="DataInput.php?min=7&max=18"/>
    <area shape="poly"  coords="123,331,129,335,141,329,137,321" alt="" href="DataInput.php?min=6&max=17"/>
    <area shape="poly"  coords="122,331,127,335,122,348,113,347" alt="" href="DataInput.php?min=5&max=16"/>
    <area shape="poly"  coords="113,347,121,349,119,363,109,364" alt="" href="DataInput.php?min=4&max=15"/>
    <area shape="poly"  coords="110,364,119,364,118,381,108,380" alt="" href="DataInput.php?min=3&max=13"/>
<!--    before  9th corner-->
    <!--left-->
    <area shape="poly"  coords="128,367,136,367,136,381,127,381" alt="" href="DataInput.php?min=4&max=14"/>
    <area shape="poly"  coords="127,380,135,381,136,396,127,397" alt="" href="DataInput.php?min=3&max=13"/>
    <area shape="poly"  coords="128,397,137,397,138,411,129,412" alt="" href="DataInput.php?min=2&max=11"/>
    <area shape="poly"  coords="129,413,137,411,141,426,133,428" alt="" href="DataInput.php?min=1&max=9"/>
    <!--    middle-->
    <area shape="poly"  coords="118,372,127,373,127,389,117,389" alt="" href="DataInput.php?min=3&max=13"/>
    <area shape="poly"  coords="118,389,126,390,128,405,119,405" alt="" href="DataInput.php?min=2&max=12"/>
    <area shape="poly"  coords="119,407,128,406,130,421,121,423" alt="" href="DataInput.php?min=1&max=10"/>
    <!--    right-->
    <area shape="poly"  coords="108,381,117,382,118,398,109,398" alt="" href="DataInput.php?min=2&max=12"/>
    <area shape="poly"  coords="110,399,118,398,120,413,111,415" alt="" href="DataInput.php?min=1&max=11"/>
<!--    9th corner-->
    <!--left-->
    <area shape="poly"  coords="133,429,149,445,150,433,142,427" alt="" href="DataInput.php?min=14&max=20&cor=1"/>
    <area shape="poly"  coords="149,443,149,433,169,439,163,447" alt="" href="DataInput.php?min=13&max=19&cor=1"/>
    <area shape="poly"  coords="164,448,169,440,181,454,173,458" alt="" href="DataInput.php?min=12&max=19&cor=1"/>
    <area shape="poly"  coords="173,458,183,455,185,472,174,471" alt="" href="DataInput.php?min=11&max=18&cor=1"/>
    <area shape="poly"  coords="175,473,184,473,182,489,172,487" alt="" href="DataInput.php?min=10&max=17&cor=1"/>
    <area shape="poly"  coords="171,488,181,491,171,507,166,500" alt="" href="DataInput.php?min=9&max=16&cor=1"/>
    <area shape="poly"  coords="153,506,153,515,171,509,165,500" alt="" href="DataInput.php?min=8&max=15&cor=1"/>
    <area shape="poly"  coords="133,503,153,505,153,514,133,513" alt="" href="DataInput.php?min=7&max=14&cor=1"/>
    <area shape="poly"  coords="117,501,134,502,132,511,116,511" alt="" href="DataInput.php?min=6&max=12&cor=1"/>
    <!--    middle-->
    <area shape="poly"  coords="123,423,131,421,135,435,127,437" alt="" href="DataInput.php?min=13&max=21&cor=1"/>
    <area shape="poly"  coords="127,438,134,436,144,443,144,451" alt="" href="DataInput.php?min=12&max=19&cor=1"/>
    <area shape="poly"  coords="145,442,161,447,158,455,142,451" alt="" href="DataInput.php?min=12&max=18&cor=1"/>
    <area shape="poly"  coords="157,455,161,447,175,463,166,465" alt="" href="DataInput.php?min=11&max=17&cor=1"/>
    <area shape="poly"  coords="165,465,173,464,173,482,164,482" alt="" href="DataInput.php?min=10&max=16&cor=1"/>
    <area shape="poly"  coords="163,482,172,483,164,501,158,494" alt="" href="DataInput.php?min=9&max=15&cor=1"/>
    <area shape="poly"  coords="144,496,144,505,163,501,159,494" alt="" href="DataInput.php?min=8&max=14&cor=1"/>
    <area shape="poly"  coords="127,491,145,495,143,503,127,501" alt="" href="DataInput.php?min=7&max=12&cor=1"/>
    <!--    right-->
    <area shape="poly"  coords="111,416,120,415,125,431,114,434" alt="" href="DataInput.php?min=14&max=22&cor=1"/>
    <area shape="poly"  coords="115,433,124,432,129,445,122,449" alt="" href="DataInput.php?min=13&max=19&cor=1"/>
    <area shape="poly"  coords="122,449,128,445,139,450,139,459" alt="" href="DataInput.php?min=12&max=17&cor=1"/>
    <area shape="poly"  coords="140,451,157,455,155,463,137,460" alt="" href="DataInput.php?min=11&max=16&cor=1"/>
    <area shape="poly"  coords="157,455,165,475,156,475,154,463" alt="" href="DataInput.php?min=10&max=15&cor=1"/>
    <area shape="poly"  coords="155,477,165,475,157,495,152,487" alt="" href="DataInput.php?min=9&max=14&cor=1"/>
    <area shape="poly"  coords="137,485,151,487,155,495,136,493" alt="" href="DataInput.php?min=8&max=13&cor=1"/>
<!--    before  10th corner-->
    <!--left-->
    <area shape="poly"  coords="103,497,118,500,117,509,103,507" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="88,495,103,497,103,507,87,505" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="74,492,89,495,88,503,73,501" alt="" href="DataInput.php?min=3&max=8"/>
    <area shape="poly"  coords="59,489,74,491,73,501,58,498" alt="" href="DataInput.php?min=2&max=7"/>
    <area shape="poly"  coords="45,487,59,489,59,498,43,495" alt="" href="DataInput.php?min=1&max=6"/>
    <!--    middle-->
    <area shape="poly"  coords="113,490,127,492,127,501,111,499" alt="" href="DataInput.php?min=6&max=11"/>
    <area shape="poly"  coords="97,487,111,490,111,499,95,496" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="83,484,97,487,96,496,82,493" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="68,482,83,485,82,493,67,491" alt="" href="DataInput.php?min=3&max=8"/>
    <area shape="poly"  coords="53,479,68,481,67,490,52,487" alt="" href="DataInput.php?min=2&max=7"/>
    <area shape="poly"  coords="40,477,53,479,53,487,38,485" alt="" href="DataInput.php?min=1&max=4"/>
    <!--    right-->
    <area shape="poly"  coords="121,482,135,485,135,493,119,491" alt="" href="DataInput.php?min=7&max=12"/>
    <area shape="poly"  coords="107,479,121,482,120,491,105,488" alt="" href="DataInput.php?min=6&max=11"/>
    <area shape="poly"  coords="92,477,106,479,106,488,91,485" alt="" href="DataInput.php?min=5&max=10"/>
    <area shape="poly"  coords="77,473,92,476,91,486,75,483" alt="" href="DataInput.php?min=4&max=9"/>
    <area shape="poly"  coords="62,471,77,473,76,483,62,481" alt="" href="DataInput.php?min=3&max=8"/>
    <area shape="poly"  coords="48,469,62,471,63,480,46,477" alt="" href="DataInput.php?min=2&max=5"/>
    <area shape="poly"  coords="35,466,47,468,47,478,33,474" alt="" href="DataInput.php?min=1&max=2"/>
<!--    10th corner-->
    <!--left-->
    <area shape="poly"  coords="31,484,45,486,45,496,31,492" alt="" href="DataInput.php?min=27&max=33"/>
    <area shape="poly"  coords="19,477,13,483,31,492,31,484" alt="" href="DataInput.php?min=26&max=32"/>
    <area shape="poly"  coords="5,466,14,466,20,478,13,483" alt="" href="DataInput.php?min=25&max=31"/>
    <area shape="poly"  coords="9,448,16,450,14,466,5,466" alt="" href="DataInput.php?min=24&max=30"/>
    <area shape="poly"  coords="14,435,22,437,16,450,8,448" alt="" href="DataInput.php?min=23&max=29"/>
    <area shape="poly"  coords="17,421,25,422,23,436,15,434" alt="" href="DataInput.php?min=22&max=28"/>
    <!--    middle-->
    <area shape="poly"  coords="39,476,39,485,22,480,27,471" alt="" href="DataInput.php?min=26&max=32"/>
    <area shape="poly"  coords="22,461,27,472,22,480,13,460" alt="" href="DataInput.php?min=25&max=31"/>
    <area shape="poly"  coords="20,445,27,447,22,460,12,460" alt="" href="DataInput.php?min=24&max=30"/>
    <area shape="poly"  coords="24,430,33,432,29,447,19,444" alt="" href="DataInput.php?min=23&max=29"/>
    <!--    right-->
    <area shape="poly"  coords="32,457,35,465,34,474,23,467,24,454" alt="" href="DataInput.php?min=25&max=31"/>
    <area shape="poly"  coords="30,441,38,443,33,458,25,455" alt="" href="DataInput.php?min=24&max=30"/>
<!--    before  finish line-->
    <!--right-->
    <area shape="poly"  coords="34,425,43,427,39,442,31,440" alt="" href="DataInput.php?min=23&max=29"/>
    <area shape="poly"  coords="37,411,45,411,43,426,35,426" alt="" href="DataInput.php?min=22&max=28"/>
    <area shape="poly"  coords="37,395,46,395,47,411,37,411" alt="" href="DataInput.php?min=21&max=27"/>
    <area shape="poly"  coords="38,379,45,380,45,395,37,395" alt="" href="DataInput.php?min=20&max=26"/>
    <area shape="poly"  coords="37,363,45,363,46,378,38,379" alt="" href="DataInput.php?min=19&max=25"/>
    <area shape="poly"  coords="38,347,47,347,46,363,37,362" alt="" href="DataInput.php?min=18&max=24"/>
    <area shape="poly"  coords="39,330,49,331,47,346,37,346" alt="" href="DataInput.php?min=17&max=23"/>
    <area shape="poly"  coords="42,314,51,315,48,331,40,330" alt="" href="DataInput.php?min=16&max=22"/>
    <area shape="poly"  coords="46,297,55,298,51,314,43,313" alt="" href="DataInput.php?min=15&max=21"/>
    <area shape="poly"  coords="49,281,59,283,55,299,46,298" alt="" href="DataInput.php?min=14&max=20"/>
    <area shape="poly"  coords="55,265,63,267,59,283,50,281" alt="" href="DataInput.php?min=13&max=19"/>
    <area shape="poly"  coords="61,250,69,252,64,267,55,266" alt="" href="DataInput.php?min=12&max=18"/>
    <area shape="poly"  coords="61,250,67,235,76,237,70,253" alt="" href="DataInput.php?min=11&max=17"/>
    <area shape="poly"  coords="68,234,74,219,82,223,76,237" alt="" href="DataInput.php?min=10&max=16"/>
    <area shape="poly"  coords="75,219,82,204,89,208,83,223" alt="" href="DataInput.php?min=9&max=15"/>
    <area shape="poly"  coords="82,205,89,190,98,195,89,207" alt="" href="DataInput.php?min=8&max=14"/>
    <area shape="poly"  coords="99,177,106,181,97,194,89,190" alt="" href="DataInput.php?min=7&max=13"/>
    <!--middle-->
    <area shape="poly"  coords="28,417,35,417,33,431,25,430" alt="" href="DataInput.php?min=22&max=28"/>
    <area shape="poly"  coords="29,403,37,402,37,417,28,417" alt="" href="DataInput.php?min=21&max=27"/>
    <area shape="poly"  coords="28,387,36,387,36,402,29,402" alt="" href="DataInput.php?min=20&max=26"/>
    <area shape="poly"  coords="28,370,36,370,35,386,28,386" alt="" href="DataInput.php?min=19&max=25"/>
    <area shape="poly"  coords="29,355,37,355,37,370,29,370" alt="" href="DataInput.php?min=18&max=24"/>
    <area shape="poly"  coords="30,338,39,339,37,355,29,355" alt="" href="DataInput.php?min=17&max=23"/>
    <area shape="poly"  coords="32,321,41,322,39,339,30,338" alt="" href="DataInput.php?min=16&max=22"/>
    <area shape="poly"  coords="35,304,43,305,41,321,32,321" alt="" href="DataInput.php?min=15&max=21"/>
    <area shape="poly"  coords="39,287,47,289,45,305,35,304" alt="" href="DataInput.php?min=14&max=20"/>
    <area shape="poly"  coords="45,270,52,273,48,289,40,287" alt="" href="DataInput.php?min=13&max=19"/>
    <area shape="poly"  coords="49,255,58,257,53,272,44,271" alt="" href="DataInput.php?min=12&max=18"/>
    <area shape="poly"  coords="50,255,55,239,64,241,58,257" alt="" href="DataInput.php?min=11&max=17"/>
    <area shape="poly"  coords="56,239,63,224,71,226,63,241" alt="" href="DataInput.php?min=10&max=16"/>
    <area shape="poly"  coords="63,223,69,209,78,211,71,226" alt="" href="DataInput.php?min=9&max=15"/>
    <area shape="poly"  coords="71,208,78,193,85,196,78,211" alt="" href="DataInput.php?min=8&max=14"/>
    <area shape="poly"  coords="78,193,87,179,94,183,86,197" alt="" href="DataInput.php?min=7&max=13"/>
    <area shape="poly"  coords="87,179,96,165,103,169,95,183" alt="" href="DataInput.php?min=6&max=12"/>
    <!--left-->
    <area shape="poly"  coords="19,379,29,379,29,395,19,395" alt="" href="DataInput.php?min=21&max=27"/>
    <area shape="poly"  coords="19,363,29,363,28,378,19,378" alt="" href="DataInput.php?min=20&max=26"/>
    <area shape="poly"  coords="20,347,29,347,29,363,19,363" alt="" href="DataInput.php?min=19&max=25"/>
    <area shape="poly"  coords="23,329,31,329,30,346,21,345" alt="" href="DataInput.php?min=18&max=24"/>
    <area shape="poly"  coords="25,312,34,313,31,328,23,327" alt="" href="DataInput.php?min=17&max=23"/>
    <area shape="poly"  coords="29,294,37,295,35,313,25,311" alt="" href="DataInput.php?min=16&max=22"/>
    <area shape="poly"  coords="33,277,41,279,38,295,30,293" alt="" href="DataInput.php?min=15&max=21"/>
    <area shape="poly"  coords="39,261,47,263,41,279,33,276" alt="" href="DataInput.php?min=14&max=20"/>
    <area shape="poly"  coords="29,294,34,277,42,279,38,295" alt="" href="DataInput.php?min=13&max=19"/>
    <area shape="poly"  coords="34,277,38,261,47,263,42,279" alt="" href="DataInput.php?min=12&max=18"/>
    <area shape="poly"  coords="39,259,45,244,53,246,47,263" alt="" href="DataInput.php?min=11&max=17"/>
    <area shape="poly"  coords="45,243,52,228,59,231,52,246" alt="" href="DataInput.php?min=10&max=16"/>
    <area shape="poly"  coords="52,227,58,213,67,216,59,231" alt="" href="DataInput.php?min=9&max=15"/>
    <area shape="poly"  coords="60,211,67,197,75,200,67,215" alt="" href="DataInput.php?min=8&max=14"/>
    <area shape="poly"  coords="67,196,75,182,83,185,75,200" alt="" href="DataInput.php?min=7&max=13"/>
    <area shape="poly"  coords="76,182,85,167,92,173,82,185" alt="" href="DataInput.php?min=6&max=12"/>
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