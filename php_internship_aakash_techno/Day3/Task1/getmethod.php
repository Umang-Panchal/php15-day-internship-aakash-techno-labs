<?php
extract($_GET);
if (isset($submit)) {
    echo "Your Name Is $name<br>";
    echo "Your Age Is $age<br>";

}
?>