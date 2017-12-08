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
//echo $result;
header("location: read.php");
?>

<script>
$(document).ready(function(){
    $('#create').on('submit', function(){
       calculateRating();
    });
});

function calculateRating() {
    var distance = document.getElementById('distance').value;
    var voltage = document.getElementById('voltage').value;
    var amps = document.getElementById('amps').value;
    var dragtime = document.getElementById('dragtime').value;
    var temperature = document.getElementById('temperature').value;
    var weather = document.getElementById('weather').value;
    var pressure = document.getElementById('pressure').value;
    var altitude = document.getElementById('altitude').value;
    alert(altitude);
}

</script>

<html>
<form id="create" action="add_info.php" method="POST">
  rating: <input type="text" name="rating"><br>
  <!--Username input field is temporary this field should be populated based off user login info--->
  Username: <input type="text" id="username" name="username"><br>
  Distance: <input type="text" id="distance" name="distance"><br>
  Voltage: <input type="text" id="voltage" name="voltage"><br>
  Amps: <input type="text" id="amps" name="amps"><br>
  Dragtime: <input type="text" id="dragtime" name="dragtime"><br>
  Temperature: <input type="text" id="temperature" name="temperature"><br>
  Weather: <input type="text" id="weather" name="weather"><br>
  Pressure: <input type="text" id="pressure" name="pressure"><br>
  Altitude: <input type="text" id="altitude" name="altitude"><br>
  <input type="submit" name="submit">
</form>
</html>