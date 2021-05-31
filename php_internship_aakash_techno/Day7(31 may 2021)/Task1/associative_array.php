<?php
echo "<h2>Demonstrating Associative Array<br/></h2>";
//associative array 
$ab=array(
    "php"=> "Web Development",
    "c"=> "Programming",
    "java"=>"Oracle",
    0=>10,
    "Covid-19"=>"vaccine"

);
//printing array
echo "Printing specific value using echo:-<br/>";
echo "php is used in ".$ab["php"];
echo "<br/><b>".$ab["Covid-19"]."</b> is must to protect against <b>covid-19</b> virus";
echo "<br/>";

//printing whole array using for each loop
echo "<br/>printing whole array using for each loop:-<br/>";
echo "<table border='1'>";
foreach ($ab as $key=>$value) {
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br/>";
echo "Using Print_r:-";
echo "<pre>";
print_r($ab);
echo"</pre>";

?>
