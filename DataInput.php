<?php
include("dbconnect.php");
/**
 * Created by PhpStorm.
 * User: dell user
 * Date: 24/6/2016
 * Time: 11:06
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Input</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"
    />
</head>
<body>
<h2>Please enter the following details:</h2>
    <br>
<?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {
?>
    <form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
        <label>Current Gear:</label><br>
        <input type="number" name="gear" min="1" max="6" step="1" placeholder="Current Gear" required/><br><br>
        <label>Wear Points:</label><br>
        <input type="number" name="WP" min="1" max="18" step="1" placeholder="Wear Points" required/><br><br>
        <input type="submit" name="submit" value="Proceed" />
    </form>

<?}
elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
    $gear = $_POST["gear"];
    $dice = $_POST["gear"];
    $corner = $_POST["gear"];
    $WP = $_POST["WP"];

    $sql = "INSERT INTO Results (Gear, Dice, Corner, WearPoints) VALUES ('$gear','$dice','$corner','$WP')";
    if (mysqli_query($db, $sql)) {
    } else {
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($db);
    }
    header("location: ShowResults.php");
}
?>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>

</html>