<?php
  $weekdays =$_POST["weekdays"];
  $query = "SELECT AVG(maxSeats) as 'average' FROM ((flight INNER JOIN flightday ON flight.OALCode = flightday.FALCode AND flight.FNum = flightday.FNum) INNER JOIN airplane ON airplane.AID = flight.AssAID) INNER JOIN airplanetype ON airplane.AType = airplanetype.AType WHERE flightday.FDay = '".$weekdays."'";

  $result=$connection->query($query);
  $row = $result->fetch();
  echo $row["average"]." Average Seats";
?>
