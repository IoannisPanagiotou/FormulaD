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
            <td>2. I found the system unnecessarily complex</td>
            <td><input type="radio" name="q2" value="1" ></td>
            <td><input type="radio" name="q2" value="2"></td>
            <td><input type="radio" name="q2" value="3"></td>
            <td><input type="radio" name="q2" value="4"></td>
            <td><input type="radio" name="q2" value="5"></td>
        </tr>
        <tr>
            <td>3. I thought the system was easy to use</td>
            <td><input type="radio" name="q3" value="1" ></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
        <tr>
            <td>4. I think that I would need the support of a technical person to be able to use this system</td>
            <td><input type="radio" name="q3" value="1" ></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
        <tr>
            <td>5. I found the various functions in this system were well integrated</td>
            <td><input type="radio" name="q3" value="1" ></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
        <tr>
            <td>6. I thought there was too much inconsistensy in this system</td>
            <td><input type="radio" name="q3" value="1" ></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
        <tr>
            <td>7. I woul imagine that most people would learn to use this system very quickly</td>
            <td><input type="radio" name="q3" value="1" ></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
        <tr>
            <td>8. I found the system very cumbersome to use</td>
            <td><input type="radio" name="q3" value="1" ></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
        <tr>
            <td>9. I felt very confident using the system</td>
            <td><input type="radio" name="q3" value="1" ></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
        <tr>
            <td>10. I needed to learn a lot of things before I could get going with this system</td>
            <td><input type="radio" name="q3" value="1" ></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
    </table>

    <br>
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