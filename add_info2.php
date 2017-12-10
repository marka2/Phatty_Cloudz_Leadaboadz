<?php include('connect.php'); ?>
<?php

$rating = $_POST['rating'];
echo $rating;
$username = $_POST['username'];
$distance = $_POST['distance'];
$voltage = $_POST['voltage'];
$amps = $_POST['dragtime'];
$temp = $_POST['temperature'];
$weather = $_POST['weather'];
$pressure = $_POST['pressure'];
$altitude = $_POST['altitude'];
$dragtime = $_POST['dragtime'];

if(isset($_POST['rating'])) {
$sql = "INSERT INTO FattyCloudLeaderboard (rating, userName, distance, voltage, amps, dragTime, temperature, weather, pressure, altitude) VALUES ('".$rating."', '".$username."', '".$distance."', '".$voltage."', '".$amps."', '".$dragtime."', '".$temp."', '".$weather."', '".$pressure."', '".$altitude."')";
$result = mysql_query($sql, $conn);
echo $sql;
//echo $result;
}

?>