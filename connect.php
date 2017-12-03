<?php

    $servername = "localhost";
    $username = "marka2_Phatty";
    $password = "PhattyCloud";
    $dbname = "marka2_FattyCloudLeaderboard";

     $conn = mysql_connect($servername, $username, $password) or die("Couldn't connect to MySQL server on : " . mysql_error() . '.');

    $db = mysql_select_db($dbname, $conn) or die("Couldn't select database $dbname: " . mysql_error() . '.');
?>