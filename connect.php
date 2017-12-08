
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<?php

    $servername = "localhost";
    $username = "marka2_Phatty";
    $password = "PhattyCloud";
    $dbname = "marka2_FattyCloudLeaderboard";
    
     $conn = mysql_connect($servername, $username, $password) or die("Couldn't connect to MySQL server on : " . mysql_error() . '.');

    $db = mysql_select_db($dbname, $conn) or die("Couldn't select database $dbname: " . mysql_error() . '.');
?>