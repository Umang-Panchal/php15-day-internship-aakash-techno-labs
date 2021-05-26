<?php
//switch case demonstrations
$a=10;
$b=15;
switch ($a+$b) {
    case '30':
        echo "Sum is 30";//if sum is 30 this will be printed
        break;
    case '20':
        echo "Sum is 20";//if sum is 20 this will be printed
        break;
    default:
        echo "Sum is neither 20 nor 30!!!";//if sum is not 20 and 30 this will be printed
        break;
}
?>