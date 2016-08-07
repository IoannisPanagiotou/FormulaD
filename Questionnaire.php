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
</head>
<body>



<h2>Please answer the following questions:</h2>
<h3><a href="Help.php">Help</a></h3>
<br>
<?php /*if ($_SERVER['REQUEST_METHOD'] === 'GET') {
*/?>
<form method="post" action="ShowResults.php">
    <label>I think that I would like to use this system frequently:</label>
    <input type="radio" name="gender" value="male" >
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other
    <input type="submit" name="submit" value="Proceed" />
</form>

<?

/*}
elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
    $gear = $_POST["gear"];
    $corner;
    $WP = $_POST["WP"];
    $prob;
    $max;
    $min;

    $sql = "INSERT INTO Results (Gear, Corner, WearPoints, Probability, maximum, minimum) VALUES ('$gear','$corner','$WP','$prob','$max','$min')";
    if (mysqli_query($db, $sql)) {
    } else {
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($db);
    }
    header("location: ShowResults.php");
}
*/?>

<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>

</html>