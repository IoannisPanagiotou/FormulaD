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

<?
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];
$q9 = $_POST["q9"];
$q10 = $_POST["q10"];

if ($_POST['q1']){
    $sql = "INSERT INTO userevaluation (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";
    if (mysqli_query($db, $sql)) {
    } else {
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
?>

<?
$comment = $_POST["comment"];
$stars = $_POST["rating-input-1"];

$sql2 = "INSERT INTO rating (Comments, Stars) VALUES ('$comment','$stars')";
if (mysqli_query($db, $sql2)) {
} else {
    echo "<br>Error: " . $sql2 . "<br>" . mysqli_error($db);
}

?>

<h2 id="thanks">Your feedback has been sent successfully!</h2>

<p id="thankyou"></p>

<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>

</html>