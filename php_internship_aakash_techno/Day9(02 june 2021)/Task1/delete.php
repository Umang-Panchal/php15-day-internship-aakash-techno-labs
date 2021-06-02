<?php
if (isset($_GET['deleteid'])) {
$deleteid=$_GET['deleteid'];
$conn=mysqli_connect('localhost','root','','php_internship_demo') or die("Connection error".mysqli_connect_error());

$query=mysqli_query($conn,"delete from demo where u_id='{$deleteid}'") or die("Error:".mysqli_error($conn));
if ($query) {
    echo "<script>window.location='select.php';</script>";
}
else {
    echo "Error";
}
}