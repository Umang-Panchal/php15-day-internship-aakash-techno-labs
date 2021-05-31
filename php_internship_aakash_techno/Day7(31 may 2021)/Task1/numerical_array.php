<?php
echo "<h2>Demonstrating Numerical Array<br/></h2>";
//numerical array 
$ab=array("PHP","C","C++",1,10,10.50,521.54);
//printing array
echo "Printing specific value using echo:-<br/>";
echo $ab[5];
echo "<br/>";
//printing whole array using for loop
echo "<br/>Printing Whole Array using for loop:-";
echo "<ul>";
for ($i=0; $i <count($ab) ; $i++) { 
    echo "<li>";
    echo $ab[$i];
    echo "</li>";
}
echo "</ul>";
echo "<br/>";
//printing whole array using for each loop
echo "<br/>printing whole array using for each loop:-<br/>";
echo "<ol>";
foreach ($ab as $val) {
    echo "<li>";
    echo $val;
    echo "</li>";
}
echo "</ol>";

echo"<br/><br/>";
echo "Using Print_r:-";
echo "<pre>";
print_r($ab);
echo"</pre>";

?>
