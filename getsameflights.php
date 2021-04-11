<!DOCTYPE html>
<html>

<head>
<link rel = "stylesheet" type = "text/css" href = "css/airline1.css"> 
<meta charset="utf-8">
<title>On-Time Flights</title>
</head>

<video autoplay muted loop background id="myVideo">
  <source src="videos/departureBoard.mp4" type="video/mp4">
</video>  

<body>
<?php
include 'connectdb.php';
?>
<h1>Edhlund Airlines Consultant</h1>
<a href = "Airline.php"><button class="btn"><i class="fa-home"></i> Home</button></a>
<a href = "Flights.php"><button class="btn"><i class="fa-allflights"></i> Flights</button></a>
<a href = "UpdateFlight.php"><button class="btn"><i class="fa-updateflight"></i> Modify</button></a>
<a href = "About.html"><button class="btn"><i class="fa-about"></i> About</button></a>

<p>
<hr>
</p>

<h2>Flights Arriving On Schedule:</h2>
<table>
<?php
   $query = 'SELECT * FROM flight WHERE flight.FArrSchedTime = flight.FArrActTime';
   $result=$connection->query($query);
    echo "<tr> <th>Flight Code</th><th>Departure Time</th><th>Arrival Time</th></tr>";
    while ($row=$result->fetch()) {
	   echo "<tr><td>".$row["OALCode"]. "-" . $row["FNum"]."</td><td>".$row["FDepActTime"]."</td><td>".$row["FArrActTime"]."</td></tr>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>