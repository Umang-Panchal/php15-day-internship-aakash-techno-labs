<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="container">
    

<?php 
extract($_POST);
if(isset($submit))
{
 echo '<center>';
 echo '<h2 align="center"><u>Student Details</u></h2><br>';
 echo '<table class="table table-bordered" align="center">
 <tr>
     <th>
         First Name
     </th>
     <th>
         last Name
     </th>
     <th>
         Phone Number
     </th>
     <th>
         Email
     </th>
     <th>
         Department
     </th>
 </tr>';
 echo "<tr>";
 echo "<td>".$fname;"</td>";
 echo "<td>".$lname;"</td>";
 echo "<td>".$phone;"</td>";
 echo "<td>".$email;"</td>";
 echo "<td>".$choice;"</td>";
 echo "</table>";
 echo '</center>';
}

?>
</body>
</html>
