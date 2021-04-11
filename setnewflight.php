<?php

$airportDep = $_POST['airportDep'];
$airportArr = $_POST['airportArr'];
$airline = $_POST['airline'];
$timeDep = $_POST['timeDep'];
$timeArr = $_POST['timeArr'];
$FlightNum = $_POST['flightnum'];
$airplaneid = $_POST['airplaneid'];

$query = "INSERT INTO flight VALUES ('" .$FlightNum. "', '" .$airline. "', '" .$airplaneid. "', '" .$timeDep. "', '" .$timeDep. "', '" .$timeArr. "', '" .$timeArr. "', '" .$airportDep. "', '". $airportArr. "');";
$result = $connection->query($query);
foreach($_POST['daysoffered'] as $daysoffered){
	$query2 = "INSERT INTO flightday VALUES ('".$airline."','".$FlightNum."','".$daysoffered."');"; 
$result = $connection->query($query2);
}

?>