<!DOCTYPE html>
<html>

<head>
<link rel = "stylesheet" type = "text/css" href = "css/airline1.css">	
<meta charset="utf-8">
<title>Modify Flights</title>
</head>

<video autoplay muted loop background id="myVideo">
  <source src="videos/eveningFlight.mp4" type="video/mp4">
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

<h2> Add New Flight </h2>
<form action="?" method="post">
<div class = "home1">

<label for = "airportDep">Choose A Departure Airport: </label>
<select name="airportDep" id="airportDep" required>
	<option selected disabled>--- Select Airport ---</option>
  	<?php
  	include "getairportdataDep.php";
  	?>
</select><br>

<label for = "airportArr">Choose An Arrival Airport: </label>
<select name="airportArr" id="airportArr" required>
	<option selected disabled>--- Select Airport ---</option>
  	<?php
  	include "getairportdataArr.php";
  	?>
</select><br>

<label for = "airline">Choose A Flight Airline: </label>
<select name="airline" id="airline" required>
	<option selected disabled>--- Select Airline ---</option>
  	<?php
	include "getairlinedata.php";
	?>
</select><br>

</div>

<div class = "home2">

<label for= "timeDep">Departure Time: </label>
<input type ="time" id = "timeDep" name = "timeDep" step = "1" required><br>

<label for= "timeArr">Arrival Time: </label>
<input type ="time" id = "timeArr" name = "timeArr" step = "1" required><br>

<label for="daysoffered">Select Offered Days: </label>
<select name="daysoffered[]" id="daysoffered" multiple>
	<option selected disabled>--- Select Days ---</option>
  	<option value="Monday">Monday</option>
  	<option value="Tuesday">Tuesday</option>
  	<option value="Wednesday">Wednesday</option>
  	<option value="Thursday">Thursday</option>
  	<option value="Friday">Friday</option>
  	<option value="Saturday">Saturday</option>
  	<option value="Sunday">Sunday</option>
</select><br>
<label for= "flightnum">Enter A Flight Number (xxx): </label>
<input type ="text" id = "flightnum" name = "flightnum" required><br>

<label for="airplaneid">Select Flight Airplane: </label>
<select name="airplaneid" id="airplaneid" required>
	<option selected disabled>--- Select Airplane ---</option>
  	<?php
  	include "getairplanedata.php";
  	?>
</select><br>
<input type="submit" name= "newSubmit" value="Add Flight"><br>
</div>
<?php
if(isset($_POST['newSubmit'])){
	include "setnewflight.php";
	echo "<h3>Flight Added!</h3>";
}
?>
</form>

<h2> Update Flight Time</h2>

<form action="?" method="post">
<label for="flightCode">Select Flight Code: </label>
<select name="flightCode" id="flightCode" required>
	<option selected disabled>--- Select Flight Code ---</option>
<?php
include "getflightcode.php";
?>	
</select>

<label for= "timeNewDep">New Departure Time: </label>
<input type ="time" id = "timeNewDep" name = "timeNewDep" step = "1" required><br>

<input type="submit" name= "updateSubmit" value="Update Flight"><br>
<?php
if(isset($_POST['updateSubmit'])){
	include "setflighttime.php";
	echo "<h3>Flight Updated!</h3>";
}
?>

</form>
<?php
$connection =- NULL;
?>
</body>
</html>