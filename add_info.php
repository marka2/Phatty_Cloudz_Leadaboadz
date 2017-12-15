<?php include('connect.php'); ?>


<script>
$(document).ready(function(){
    $('#create').on('submit', function(){
       calculateRating();
    });
});

function calculateRating() {
    var rating = 0;
    var distance = document.getElementById('distance').value;
    var voltage = document.getElementById('voltage').value;
    var amps = document.getElementById('amps').value;
    var dragtime = document.getElementById('dragtime').value;
    var temperature = document.getElementById('temperature').value;
    var weather = document.getElementById('weather').value;
    var pressure = document.getElementById('pressure').value;
    var altitude = document.getElementById('altitude').value;


    if (amps< 2 && voltage < 1.0 && dragtime < 5 && temperature < 100 && pressure < 30 && altitude < 300) {
        rating = 0;
    }
                       $.ajax({
                    type: "POST",
                    url: 'add_info2.php',
                    data: { "rating" : rating },
                    success: function(data)
                    {

                    }
                    });

}

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
