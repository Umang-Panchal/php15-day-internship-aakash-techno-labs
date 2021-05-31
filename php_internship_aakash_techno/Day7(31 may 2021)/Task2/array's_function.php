<?php
//array function
$array_f=array(0,10.20,10,5,20.500,0.5,'PHP','C++');
$array_count=array(0,12,20,'php','c','python','perl','java');
//counting array elements using count functions
echo "Total array elements are: ".count($array_f)."<br>";
//array_count_values()
echo "<br>Using Count_values:<br>";
foreach (array_count_values($array_count) as $key => $value) {
    echo "Key $key and value is $value <br>";
}
//sum of array elements using array_sum()
echo "<br>Sum of array elements is: ".array_sum($array_f)."<br>";
//array product using array_product()
echo "<br>Product of array is: ".array_product($array_f)."<br>";
//reversing array using array_reverse()
echo "<br> reversed array is: ";
print_r(array_reverse($array_f))."<br>";

//in_array() for element searching
echo "<br><br>in_array function for element searching in array: ";
$temp=in_array('PHP',$array_f);
if ($temp==1) {
    echo "element is in array";
    
}
else {
    echo "element is not in array";
}

//array_rand()
echo "<br><br>Array Random function index: ".array_rand($array_f);

//array_unique()
echo "<br><br>array_unique function: ";
print_r(array_unique($array_f));

//array_merge()
echo "<br><br>Two Merged array is: ";
print_r(array_merge($array_count,$array_f));

//array_search()
$c=array('c','c++','php');
$temp1=array_search('php',$c);
echo "<br><br>Array_search() function: ".$temp1;

//range()
echo "<br><br>Creating new array using range() function:  ";
print_r(range('a','f'));

//sort
$a=array(80,10,20,40,50);
echo "<br><br>Sorted array using sort() function:  ";
sort($a);
print_r($a);


//rssort()
echo "<br><br>Reverse Sorted array using rsort() function:  ";
rsort($a);
print_r($a);

//asort()
echo "<br><br>Sorted array using asort() function:  ";
asort($a);
print_r($a);

//shuffle()
echo "<br><br>shuffle array using shuffle() function:  ";
shuffle($array_f);
foreach ($array_f as $key => $value) {
    echo " ".$value;
}

//array_key_exists()

$arr=array('PHP'=>'web Development','C'=>'Programming','C++'=>'CPP');
echo "<br><br>Key searching using array_key_exists: ".array_key_exists('PHP',$arr);

//array_change_key_case()
echo "<br><br>changing case of keys using array_change_key_case(): ";
print_r(array_change_key_case($arr,CASE_UPPER));

//array_combine()
echo "<br><br>combining array using array_combine function: ";
print_r(array_combine($array_f,$array_count));


//end()
echo "<br><br>Element At end of Array is: ".end($array_f);

//compact()
echo "<br><br>creating array using variable and values: ";
$name="Umang";
$sub="PHP";
print_r(compact("name","sub"));

//array_flip()
echo "<br><br>Flipping all key-values using array_flip() function: ";
print_r(array_flip($arr));

//array_diff()
$arr1=array('PHP'=>'web Development','C++'=>'CPP');
echo "<br><br>Difference Between Two Associative Array is: ";
print_r(array_diff($arr,$arr1));

//array_intersect
echo "<br><br>Common elements Between Two Associative Array is: ";
print_r(array_intersect($arr,$arr1));

//array_push()
echo "<br><br>Pushing New Element at end of numerical array using array_push(): ";
array_push($array_count,"GO","Android");
print_r($array_count);

//array_pop()
echo "<br><br>Poping Element from end of numerical array using array_push(): ";
array_pop($array_f);
print_r($array_f);

//explode()
echo "<br><br>String to array using explode()";
$s="Umang Maheshbhai panchal";
print_r(explode(" ",$s));

//implode
echo "<br><br>Array to String using implode(): ";
$imp=array("Umang ","Maheshbhai","Panchal");
$mys=implode(" ",$imp);
echo "Using Implode(): $mys";
?>