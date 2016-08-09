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

<form method="post" action="ThankYou.php">
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
            <td id="q">1. I think that I would like to use this system frequently</td>
            <td><input type="radio" name="q1" value="1" required></td>
            <td><input type="radio" name="q1" value="2"></td>
            <td><input type="radio" name="q1" value="3"></td>
            <td><input type="radio" name="q1" value="4"></td>
            <td><input type="radio" name="q1" value="5"></td>
        </tr>
        <tr>
            <td id="q">2. I found the system unnecessarily complex</td>
            <td><input type="radio" name="q2" value="1" required></td>
            <td><input type="radio" name="q2" value="2"></td>
            <td><input type="radio" name="q2" value="3"></td>
            <td><input type="radio" name="q2" value="4"></td>
            <td><input type="radio" name="q2" value="5"></td>
        </tr>
        <tr>
            <td id="q">3. I thought the system was easy to use</td>
            <td><input type="radio" name="q3" value="1" required></td>
            <td><input type="radio" name="q3" value="2"></td>
            <td><input type="radio" name="q3" value="3"></td>
            <td><input type="radio" name="q3" value="4"></td>
            <td><input type="radio" name="q3" value="5"></td>
        </tr>
        <tr>
            <td id="q">4. I think that I would need the support of a technical person to be able to use this system</td>
            <td><input type="radio" name="q4" value="1" required></td>
            <td><input type="radio" name="q4" value="2"></td>
            <td><input type="radio" name="q4" value="3"></td>
            <td><input type="radio" name="q4" value="4"></td>
            <td><input type="radio" name="q4" value="5"></td>
        </tr>
        <tr>
            <td id="q">5. I found the various functions in this system were well integrated</td>
            <td><input type="radio" name="q5" value="1" required></td>
            <td><input type="radio" name="q5" value="2"></td>
            <td><input type="radio" name="q5" value="3"></td>
            <td><input type="radio" name="q5" value="4"></td>
            <td><input type="radio" name="q5" value="5"></td>
        </tr>
        <tr>
            <td id="q">6. I thought there was too much inconsistensy in this system</td>
            <td><input type="radio" name="q6" value="1" required></td>
            <td><input type="radio" name="q6" value="2"></td>
            <td><input type="radio" name="q6" value="3"></td>
            <td><input type="radio" name="q6" value="4"></td>
            <td><input type="radio" name="q6" value="5"></td>
        </tr>
        <tr>
            <td id="q">7. I woul imagine that most people would learn to use this system very quickly</td>
            <td><input type="radio" name="q7" value="1" required></td>
            <td><input type="radio" name="q7" value="2"></td>
            <td><input type="radio" name="q7" value="3"></td>
            <td><input type="radio" name="q7" value="4"></td>
            <td><input type="radio" name="q7" value="5"></td>
        </tr>
        <tr>
            <td id="q">8. I found the system very cumbersome to use</td>
            <td><input type="radio" name="q8" value="1" required></td>
            <td><input type="radio" name="q8" value="2"></td>
            <td><input type="radio" name="q8" value="3"></td>
            <td><input type="radio" name="q8" value="4"></td>
            <td><input type="radio" name="q8" value="5"></td>
        </tr>
        <tr>
            <td id="q">9. I felt very confident using the system</td>
            <td><input type="radio" name="q9" value="1" required></td>
            <td><input type="radio" name="q9" value="2"></td>
            <td><input type="radio" name="q9" value="3"></td>
            <td><input type="radio" name="q9" value="4"></td>
            <td><input type="radio" name="q9" value="5"></td>
        </tr>
        <tr>
            <td id="q">10. I needed to learn a lot of things before I could get going with this system</td>
            <td><input type="radio" name="q10" value="1" required></td>
            <td><input type="radio" name="q10" value="2"></td>
            <td><input type="radio" name="q10" value="3"></td>
            <td><input type="radio" name="q10" value="4"></td>
            <td><input type="radio" name="q10" value="5"></td>
        </tr>
    </table>
    <br>
    <input type="submit" name="submit" value="Submit" />
</form>

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

echo $q1;

$sql = "INSERT INTO userevaluation (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";
    if (mysqli_query($db, $sql)) {
    } else {
        echo "<br>Error: " . $sql . "<br>" . mysqli_error($db);
    }
    //header("location: ShowResults.php");
?>

<a href="Circuit.php" title="Back to the Home page"><b>HOME</b></a> | <a href="#" title="To the top of this page"><b>BACK TO TOP</b></a>

<footer>
    <p>(c) 2016 Yannis Panagiotou</p>
</footer>

</body>

</html>