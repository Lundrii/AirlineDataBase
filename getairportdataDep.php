<?php
   $query = "SELECT * FROM airport";
   $result = $connection->query($query);
   	while ($row = $result->fetch()) {
       	echo "<option value='".$row["APCode"]. "'>".$row["APName"]. " ".$row["APCode"]."</option>";
   }
?>