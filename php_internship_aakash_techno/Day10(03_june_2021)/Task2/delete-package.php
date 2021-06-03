<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else
{


$did=intval($_GET['did']);
             
$sql= "Delete from st_registration where st_id= '$did' ";
              
$query=mysqli_query($dbh,$sql);


if($query)
             
{
              
    echo "<script>alert('Student Data Deleted Successfully!!');</script>";
             
}
   

}   
echo "<script>window.location.href='manage-packages.php'</script>";


?>