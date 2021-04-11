
<?php
   $query = 'SELECT * FROM flight';
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo "<option value='".$row["OALCode"]."-".$row["FNum"]."'>".$row["OALCode"]. "-" .$row["FNum"]."</option>";

   }
?>
