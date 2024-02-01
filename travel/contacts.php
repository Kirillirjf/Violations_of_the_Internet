<?php
include("dbconnect.php");
$result = $mysqli->query("SELECT * FROM remarks");
$table = "<table>";
$k = 1;
while ($row = $result->fetch_assoc()) {
$table = "<tr>";
$$table .= "<td>" .$myrow['tema']."</td>";
$table .= "<td>" .$myrow['text']."</td>";
$table .= "</tr>";
$k++;
}
$table .= "</table>";
echo $table;
?>