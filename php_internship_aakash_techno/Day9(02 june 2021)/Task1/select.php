<?php
$conn=mysqli_connect('localhost','root','','php_internship_demo') or die("Connection error".mysqli_connect_error());
$query=mysqli_query($conn,"select * from demo") or die("Error:".mysqli_error($conn));
if(mysqli_num_rows($query)>0){
echo "<h2>Displaying data using Select Query</h2>";
echo "<table border='2' align='centers' width='50%'>";
echo "<tr><th>Sr. no</th><th>Name</th><th>Phone Number</th><th>Department</th><th>Action</th></tr>";
$i=0;
while ($row=mysqli_fetch_array($query)) {
    $i++;
    echo '<tr>
    <td>'.$i.'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["phone"].'</td>
    <td>'.$row["dept"].'</td>
    <td><a  href="delete.php?deleteid='.$row["u_id"].'"> Delete </a></td>
    </tr>
    ';    
}
echo "</table>";
}?>
