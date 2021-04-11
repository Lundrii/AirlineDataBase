<!DOCTYPE html>
<html>

<head>
<link rel = "stylesheet" type = "text/css" href = "css/airline1.css">	
<meta charset="utf-8">
<title>Flights</title>
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

<h2>All Flights</h2>
<form action="getsameflights.php" method="post">
<table>
<tr><th>Flight Code</th><th>Departure Time</th><th>Estimated Arrival Time</th></tr>
<?php
include 'getflights.php';
?>
</table>
<input type="submit" value="Get On-Time Flights">
</form>
</body>
</html>