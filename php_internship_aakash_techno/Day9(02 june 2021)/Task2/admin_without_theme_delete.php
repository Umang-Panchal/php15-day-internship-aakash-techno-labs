<?php
if (isset($_GET['delete_id'])) {
$deleteid=$_GET['delete_id'];
$conn=mysqli_connect('localhost','root','','php_internship_demo') or die("Connection error".mysqli_connect_error());

$query=mysqli_query($conn,"delete from st_registration where st_id='{$deleteid}'") or die("Error:".mysqli_error($conn));
if ($query) {
    echo "<script>alert('Record Deleted Successfully!!')</script>";
    echo "<script>window.location='admin_without_theme.php';</script>";
    
}
else {
    echo "Error";
}
}