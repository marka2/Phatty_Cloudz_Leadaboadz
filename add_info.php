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
<form id="create" action="add_info.php" method="POST">
  <input type="hidden" name="rating"><br>
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