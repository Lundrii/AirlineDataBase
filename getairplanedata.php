<?php
   $query = 'SELECT * FROM airplane';
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo "<option value='".$row["AID"]. "'>".$row["AID"]. " ".$row["AType"]."</option>";
   }
?>
