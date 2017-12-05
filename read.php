<?php include('connect.php'); ?>

<table class="phatty">
  <thead>
  <tr>
    <th class="text-left">Rating</th>
    <th class="text-left">Username</th>
    <th class="text-left">Distance</th>
    <th class="text-left">Voltage</th>
    <th class="text-left">Amps</th>
    <th class="text-left">Dragtime</th>
    <th class="text-left">Temperature</th>
    <th class="text-left">Weather</th>
    <th class="text-left">Pressure</th>
    <th class="text-left">Altitude</th>
  </tr>
  </thead>
    <?php

    $sql = "SELECT * FROM `FattyCloudLeaderboard`";
    $result = mysql_query($sql, $conn);

    if(mysql_num_rows($result)) {
        while($row = mysql_fetch_assoc($result)) {
            ?>
          <tr>
            <td>
                <?php echo $row['rating']; ?>
            </td>
            <td>
                <?php echo $row['userName']; ?>
            </td>
            <td>
                <?php echo $row['distance']; ?>
            </td>
            <td>
                <?php echo $row['voltage']; ?>
            </td>
            <td>
                <?php echo $row['amps']; ?>
            </td>
            <td>
                <?php echo $row['dragTime']; ?>
            </td>
            <td>
                <?php echo $row['temperature']; ?>
            </td>
            <td>
                <?php echo $row['weather']; ?>
            </td>
            <td>
                <?php echo $row['pressure']; ?>
            </td>
            <td>
                <?php echo $row['altitude']; ?>
            </td>

          </tr>
            <?php
        }
    }
    mysql_close($conn);
    ?>

</table>