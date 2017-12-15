<?php include('connect.php'); ?>

<?php

$username = $_POST['username'];
$distance = $_POST['distance'];
$voltage = $_POST['voltage'];
$amps = $_POST['amps'];
$temperature = $_POST['temperature'];
$weather = $_POST['weather'];
$pressure = $_POST['pressure'];
$altitude = $_POST['altitude'];
$dragtime = $_POST['dragtime'];


function calculateRating($amps, $voltage, $dragtime, $temperature, $pressure, $altitude) {
    if ($amps >= 15 && $amps <= 20 && $voltage >= 5.3 && $voltage <= 6.0 && $dragtime >= 5 && $dragtime <= 7 && $temperature >= 365 && $temperature <= 375 && $pressure >= 50 && $pressure <= 100 && $altitude >= 1000 && $altitude <= 2000) {
        $rating = 10;
    }

    if ($amps >= 20 && $amps <= 40 && $voltage >= 6.0 && $voltage <= 9.0 && $dragtime >= 3 && $dragtime <= 6 && $temperature >= 375 && $temperature <= 400 && $pressure >= 100 && $pressure <= 150 && $altitude >= 1000 && $altitude <= 2000) {
        $rating = 9;
    }

    if ($amps >= 40 && $amps <= 60 && $voltage >= 9.0 && $voltage <= 12.0 && $dragtime >= 6 && $dragtime <= 10 && $temperature >= 350 && $temperature <= 375 && $pressure >= 150 && $pressure <= 200 && $altitude >= 1000 && $altitude <= 2000) {
        $rating = 8;
    }

    if ($amps >= 60 && $amps <= 90 && $voltage >= 12.0 && $voltage <= 15.0 && $dragtime >= 10 && $dragtime <= 12 && $temperature >= 350 && $temperature <= 375 && $pressure >= 150 $pressure <= 300 && $altitude >= 1000 && $altitude <= 2000) {
        $rating = 7;
    }

    if ($amps >= 60 && $amps <= 90 && $voltage >= 15.0 && $voltage <= 17.0 && $dragtime >= 10 && $dragtime <= 12 && $temperature >= 350 && $temperature <= 375 && $pressure >= 300 && $pressure <= 400 && $altitude >= 1000 && $altitude <= 2000) {
        $rating = 6;
    }

    if ($amps >= 10 && $amps <= 15 && $voltage >= 5.0 && $voltage <= 5.3 && $dragtime >= 3 && $dragtime <= 5 && $temperature >= 350 && $temperature <= 365 && $pressure >= 75 && $pressure <= 100 && $altitude >= 1000 && $altitude <= 2000) {
        $rating = 5;
    }
    if ($amps >= 7 && $amps <= 10 && $voltage >= 4.5 && $voltage <= 5.0 && $dragtime >= 10 && $dragtime <= 12 && $temperature >= 250 && $temperature <= 350 && $pressure >= 50 && $pressure <= 75 && $altitude >= 500 && $altitude <= 1000) {
        $rating = 4;
    }

    if ($amps >= 5 && $amps <= 7 && $voltage >= 3.5 && $voltage <= 4.5 && $dragtime >= 10 && $dragtime <= 12 && $temperature >= 200 && $temperature <= 250 && $pressure >= 40 && $pressure <= 50 && $altitude >= 450 && $altitude <= 500) {
        $rating = 3;
    }

    if ($amps >= 3 && $amps <= 5 && $voltage >= 2.0 && $voltage <= 3.5 && $dragtime >= 10 && $dragtime <= 12 && $temperature >= 150 && $temperature <= 200 && $pressure >= 30 && $pressure <= 40 && $altitude >= 400 && $altitude <= 450) {
        $rating = 2;
    }

    if ($amps >= 2 && $amps <= 3 && $voltage >= 1.0 && $voltage <= 2.0 && $dragtime >= 5 && $dragtime <= 10 && $temperature >= 100 && $temperature <= 150 && $pressure >= 20 && $pressure <= 30 && $altitude >= 300 && $altitude <= 400) {
        $rating = 1;
    }

    if ($amps< 2 && $voltage < 1.0 && $dragtime < 5 && $temperature < 100 && $pressure < 30 && $altitude < 300){
        $rating = 0;
    }

    return $rating;
}


if(isset($_POST['username'])) {
    $rating = calculateRating($amps, $voltage, $dragtime, $temperature, $pressure, $altitude);
$sql = "INSERT INTO FattyCloudLeaderboard (rating, userName, distance, voltage, amps, dragTime, temperature, weather, pressure, altitude) VALUES ('".$rating."', '".$username."', '".$distance."', '".$voltage."', '".$amps."', '".$dragtime."', '".$temperature."', '".$weather."', '".$pressure."', '".$altitude."')";
$result = mysql_query($sql, $conn);
echo $sql;
//echo $result;
}

?>

</script>

<html>
<link rel="stylesheet" href="cloudStyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>

<style type="text/css">

.sign-grad-background {
  background: url('https://images.unsplash.com/photo-1507965613665-5fbb4cbb8399?auto=format&fit=crop&w=800&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D') no-repeat center center fixed;
  background-size: cover;
  height: 900px;
}

</style>
<body>
  <div class="ui borderless inverted top fixed menu">
    <div class="ui container">
      <a href="index.html" class="item">
        Home
      </a>
    </div>
  </div>

<div class="sign-grad-background" style="padding-top: 56px;">
  <div class="ui container" style="padding-top: 100px; padding-bottom: 100px;">
    <form class="ui large form" id="create" action="add_info.php" method="POST">
      <input type="hidden" name="rating">
      <div class="ui stacked segment" style="opacity: 0.95">
        <h4 class="ui dividing header" style="font-size: 20px">Put your phat ratingz</h4>

        <div class="field">
          <div class="two fields">
            <div class="field">
              <label>Username</label>
              <input type="text" id="username" name="username" placeholder="username">
            </div>
            <div class="field">
              <label>Distance</label>
              <input type="text" id="distance" name="distance" placeholder="distance">
            </div>
          </div>
        </div>

        <div class="field">
          <div class="two fields">
            <div class="field">
              <label>Voltage</label>
              <input type="text" id="voltage" name="voltage" placeholder="voltage">
            </div>
            <div class="field">
              <label>Amps</label>
              <input type="text" id="amps" name="amps" placeholder="amps">
            </div>
          </div>
        </div>

        <div class="field">
          <label>Dragtime</label>
          <input type="text" id="dragtime" name="dragtime" placeholder="dragtime">
        </div>

        <div class="two fields">
          <div class="field">
            <label>Temperature</label>
            <input type="text" id="temperature" name="temperature" placeholder="temperature">
          </div>

          <div class="field">
            <label>Weather</label>
            <input type="text" id="weather" name="weather" placeholder="weather">
          </div>
        </div>

        <div class="two fields">
          <div class="field">
            <label>Pressure</label>
            <input type="text" id="altitude" name="pressure" placeholder="pressure">
          </div>

          <div class="field">
            <label>Altitude</label>
            <input type="text" id="altitude" name="altitude" placeholder="altitude">
          </div>
        </div>

        <input type="submit" name="submit" style="background-color: #2f3946;">
      </div>
    </form>

  </div>
</div>

<div class="ui inverted vertical footer segment">
  <div class="ui container">
    <div class="ui stackable inverted divided equal height stackable grid">
      <div class="three wide column">
        <h4 class="ui inverted header">About</h4>
        <div class="ui inverted link list">
          <a href="developers.html" class="item">Developers</a>
        </div>
      </div>
      <div class="three wide column">
        <h4 class="ui inverted header">Services</h4>
        <div class="ui inverted link list">
          <a href="#" class="item">Phattys Ratingz</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-->
<form id="create" action="add_info.php" method="POST">
  <input type="hidden" name="rating"><br>
  <!--Username input field is temporary this field should be populated based off user login info
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
</form>-->
</body>
</html>
