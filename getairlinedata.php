<?php
   $query = "SELECT * FROM airline";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
		echo "<option value='".$row["ALCode"]. "'>".$row["ALName"]. " ".$row["ALCode"]."</option>";
   }
?>