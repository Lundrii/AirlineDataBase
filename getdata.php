
<?php
   $query = "SELECT * FROM flight";
   $result = $connection->query($query);
   while ($row = $result->fetch()) {
        echo $row["OALCode"] . "-" . $row["FNum"] . " " . $row["FDepActTime"] . "<br>";
   }
?>