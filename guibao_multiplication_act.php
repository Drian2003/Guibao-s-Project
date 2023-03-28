<?php
$number = 7;

echo "<h2>Multiplication Table of $number</h2>";
echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++) {
  echo "<tr>";
  echo "<td>$number x $i = </td>";
  echo "<td>" . ($number * $i) . "</td>";
  echo "</tr>";
}


?>