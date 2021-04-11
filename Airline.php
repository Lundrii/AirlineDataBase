<!DOCTYPE html>
<html>

<head>
<link rel = "stylesheet" type = "text/css" href = "css/airline1.css">	
<meta charset="utf-8">
<title>Airline</title>
</head>

<video autoplay muted loop background id="myVideo">
  <source src="videos/eveningFlight.mp4" type="video/mp4">
</video>	

<body>
<?php
include 'connectdb.php';
?>

<h1 class>Edhlund Airlines Consultant</h1>
<a href = "Airline.php"><button class="btn"><i class="fa-home"></i> Home</button></a>
<a href = "Flights.php"><button class="btn"><i class="fa-allflights"></i> Flights</button></a>
<a href = "UpdateFlight.php"><button class="btn"><i class="fa-updateflight"></i> Modify</button></a>
<a href = "About.html"><button class="btn"><i class="fa-about"></i> About</button></a>
<p>
<hr>
</p>

<div class = "home1">
<h2> Find Airline Flight:</h2>
<form action="getdayflights.php" method="post">
Airline Code: <input type="text" name="ALCode"><br>
Day of the Week: <br>
<input type="radio" name="weekday" value="Monday">Monday<br>
<input type="radio" name="weekday" value="Tuesday">Tuesday<br>
<input type="radio" name="weekday" value="Wednesday">Wednesday<br>
<input type="radio" name="weekday" value="Thursday">Thursday<br>
<input type="radio" name="weekday" value="Friday">Friday<br>
<input type="radio" name="weekday" value="Saturday">Saturday<br>
<input type="radio" name="weekday" value="Sunday">Sunday<br>

<input type="submit" value="Search">
</form>
</div>
<div class = "home2">

<h2> Find Average Seats On A Given Day:</h2>
<form action="?" method="post">
Day of the Week: <br>
<input type="radio" name="weekdays" value="Monday">Monday<br>
<input type="radio" name="weekdays" value="Tuesday">Tuesday<br>
<input type="radio" name="weekdays" value="Wednesday">Wednesday<br>
<input type="radio" name="weekdays" value="Thursday">Thursday<br>
<input type="radio" name="weekdays" value="Friday">Friday<br>
<input type="radio" name="weekdays" value="Saturday">Saturday<br>
<input type="radio" name="weekdays" value="Sunday">Sunday<br>
<input type="submit" name = "avgSubmit" value="Calculate"><br>
<?php
if(isset($_POST['avgSubmit']))include "getavgseats.php";
?>
</form>
</div>
<?php
$connection =- NULL;
?>
</body>
</html>