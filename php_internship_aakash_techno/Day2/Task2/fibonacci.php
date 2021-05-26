<?php
//fibonacci series of first 15 numbers
$a=0;$b=1;$c;$i;$number=15;
echo "<h3>Fibonacci Series of First 15 Numbers </h3>";
echo "Number of Element is: $number<br><br>";
echo $a." ".$b." ";
for ($i=2; $i<$number ; $i++) { 
   $c=$a+$b;
   echo $c." ";
   $a=$b;
   $b=$c;
}