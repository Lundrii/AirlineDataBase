
<?php
   $query = 'SELECT * FROM flight';
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo "<tr><td>".$row["OALCode"]. "-" . $row["FNum"]."</td><td>".$row["FDepActTime"]."</td><td>".$row["FArrSchedTime"]."</td></tr>";
   }
?>