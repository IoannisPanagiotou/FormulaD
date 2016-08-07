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
    <table id="t01">
        <tr>
            <th>Question</th>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        <tr>
            <td>1. I think that I would like to use this system frequently</td>
            <td><input type="radio" name="q1" value="1" ></td>
            <td><input type="radio" name="q1" value="2"></td>
            <td><input type="radio" name="q1" value="3"></td>
            <td><input type="radio" name="q1" value="4"></td>
            <td><input type="radio" name="q1" value="5"></td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>80</td>
        </tr>
    </table>
    <label>I think that I would like to use this system frequently:</label>
    <input type="radio" name="q1" value="1" >
    <input type="radio" name="q1" value="2">
    <input type="radio" name="q1" value="3">
    <input type="radio" name="q1" value="4">
    <input type="radio" name="q1" value="5"> <br>
    <label>I found the system unnecessarily complex:</label>
    <input type="radio" name="gender" value="male" >
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other <br>
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