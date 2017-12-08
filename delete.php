<?php include('connect.php'); ?>

<?php

$sql = "DELETE FROM `FattyCloudLeaderboard` WHERE DISTANCE=0";
$result = mysql_query($sql, $conn);

header("location: read.php");

?>