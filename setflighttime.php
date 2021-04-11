<?php

$flightCode = $_POST['flightCode'];
$timeNewDep = $_POST['timeNewDep'];
$OALCode = substr($flightCode, 0, -4);
$FNum = substr($flightCode,-3);


$query = 'UPDATE  flight SET fDepActTime = "'.$timeNewDep.'" WHERE flight.OALCode = "'.$OALCode.'" AND flight.FNum = "'.$FNum.'"';
$result = $connection->query($query);
?>