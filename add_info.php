<?php include('connect.php'); ?>

<?php

$rating = $_POST['rating'];
$username = $_POST['username'];
$distance = $_POST['distance'];
$voltage = $_POST['voltage'];
$amps = $_POST['dragtime'];
$temp = $_POST['temperature'];
$weather = $_POST['weather'];
$pressure = $_POST['pressure'];
$altitude = $_POST['altitude'];
$dragtime = $_POST['dragtime'];

$sql = "INSERT INTO FattyCloudLeaderboard (rating, userName, distance, voltage, amps, dragTime, temperature, weather, pressure, altitude) VALUES ('".$rating."', '".$username."', '".$distance."', '".$voltage."', '".$amps."', '".$dragtime."', '".$temp."', '".$weather."', '".$pressure."', '".$altitude."')";
$result = mysql_query($sql, $conn);
echo $sql;
echo $result;

?>

<html>
<form id="create" action="add_info.php" method="POST">
  rating: <input type="text" name="rating"><br>
  <!--Username input field is temporary this field should be populated based off user login info--->
  Username: <input type="text" name="username"><br>
  Distance: <input type="text" name="distance"><br>
  Voltage: <input type="text" name="voltage"><br>
  Amps: <input type="text" name="amps"><br>
  Dragtime: <input type="text" name="dragtime"><br>
  Temperature: <input type="text" name="temperature"><br>
  Weather: <input type="text" name="weather"><br>
  Pressure: <input type="text" name="pressure"><br>
  Altitude: <input type="text" name="altitude"><br>
  <input type="submit" name="submit">
</form>
</html>