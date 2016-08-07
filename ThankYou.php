<?php
include("dbconnect.php");
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Questionnaire</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"
    />
    <script type="text/javascript">
        var timer = 4; //seconds
        website = "http://formulad.azurewebsites.net/Circuit.php"
        function delayer() {
            window.location = website;
        }
        setTimeout('delayer()', 1000 * timer);
    </script>
</head>
<body>


<h2 id="thanks">Your feedback has been sent successfully!</h2>

<id="thankyou">

<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>

</html>