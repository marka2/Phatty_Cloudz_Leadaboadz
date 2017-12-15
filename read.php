<?php include('connect.php');

session_start();

if ($_SESSION['loginok'] == 0) {
      header("Location: http://www.jleong8.ics415/phatty/login.php");
}

?>

<style>
    	table {
		border-collapse: collapse;
		border-style: solid;
		border-top-color: black;
		border-top-width: 3px;
		width: 75%;
		font-family: "Franklin ITC", sans-serif;
		font-weight: Bold;
		font-size: 14px;
		line-height: 22px;
		padding: 40px;
	}
</style>
<?php

$sql = "SELECT * FROM `FattyCloudLeaderboard`";
$result = mysql_query($sql, $conn);

?>

<div class="container-fluid">
    <div id="live_data"></div>
    <?
    echo
    "<table border='0' cellpadding='0' cellspacing='0' line-height='22 px' align='center'>
    <tr>
    <th class='rating'>Rating</th>
    <th class='userName'>Username</th>
    <th class='distance'>Distance</th>
    <th class='voltage'>Voltage</th>
    <th class='amps'>Amps</th>
    <th class='dragTime'>Dragtime</th>
    <th class='temperature'>Temperature</th>
    <th class='weather'>Weather</th>
    <th class='pressure'>Pressure</th>
    <th class='altitude'>Altitude</th>
    </tr>"
    ;
    if(mysql_num_rows($result)) {
        while($row = mysql_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='rating'>" .$row['rating']. "</td>";
            echo "<td class='userName'>" .$row['userName']. "</td>";
             echo "<td class='distance'>" .$row['distance']. "</td>";
              echo "<td class='voltage'>" .$row['voltage']. "</td>";
               echo "<td class='amps'>" .$row['amps']. "</td>";
                echo "<td class='dragTime'>" .$row['dragTime']. "</td>";
                 echo "<td class='temperature'>" .$row['temperature']. "</td>";
                  echo "<td class='weather'>" .$row['weather']. "</td>";
                   echo "<td class='pressure'>" .$row['pressure']. "</td>";
                    echo "<td class='altitude'>" .$row['altitude']. "</td>";
                     echo "<td><a href='delete.php'>" ."X". "</a></td>";
            echo "</tr>";
        }
    }
    ?>

</div>


<?  mysql_close($conn); ?>
