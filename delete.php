<?php include('connect.php'); ?>

<?php

$sql = "DELETE FROM `FattyCloudLeaderboard` WHERE DISTANCE=0";
$result = mysql_query($sql, $conn);

header("Location: http://jleong8.ics415.com/phatty/delete.php");

?>