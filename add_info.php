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

  $sql = "INSERT INTO FattyCloudLeaderBoard (rating, userName, distance, voltage, amps, dragTime, temperature, weather, pressure, altitude) VALUES ($rating, $username, $distance, $voltage, $amps, $temp, $weather, $pressure, $altitude)"
  $result = mysql_query($sql);
  if(!$result) {
    die('Data not entered:' . mysql_error());
  }
  echo "Data entered\n";

?>

<html>
<form id="create" action="add_info.php" method="POST">
  rating: <input type="text" name="rating"><br>
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