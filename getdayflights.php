<!DOCTYPE html>
<html>

<head>
<link rel = "stylesheet" type = "text/css" href = "css/airline1.css"> 
<meta charset="utf-8">
<title>Flights Available</title>
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

<h2>Flights Available on Requested Day</h2>
<?php
   include 'connectdb.php';
?>
<table>
<?php
   $ALCode = $_POST["ALCode"];
   $weekday =$_POST["weekday"];
   $query= "SELECT flight.FNum, flight.OALCode, a1.city as DepCity, a2.city as ArrCity FROM ((flight INNER JOIN flightday ON flight.OALCode = flightday.FALCode AND flight.FNum = flightday.FNum) INNER JOIN airport a1 ON a1.APCode = flight.DepAPCode) INNER JOIN airport a2 ON a2.APCode = ArrAPCode WHERE OALCode = '". $ALCode ."' AND FDay = '". $weekday ."'" ;
   $result= $connection->query($query);
   echo "<tr> <th>Flight Code</th><th>Departure City</th><th>Arrival City</th></tr>";
   while ($row=$result->fetch()) {
      echo "<tr><td>".$row["OALCode"]. "-" . $row["FNum"]."</td><td>".$row["DepCity"]."</td><td>".$row["ArrCity"]."</td></tr>";
    }
   $connection = NULL;
?>
</table>
</ol>
</body>
</html>