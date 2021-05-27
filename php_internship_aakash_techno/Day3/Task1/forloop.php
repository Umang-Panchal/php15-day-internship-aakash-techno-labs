<?php
$a=10;
echo "<h2>For Loop Demo</h2>";
echo "<table border='1'>";
for ($i=1; $i<=20 ; $i++) { 
    if ($i%2==0) {
        echo "<tr bgcolor='yellow'><td>$i</td></tr>";
    }
    else {
        echo "<tr bgcolor='green'><td>$i</td></tr>";
    }

}