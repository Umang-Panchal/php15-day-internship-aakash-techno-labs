<?php
$conn=mysqli_connect('localhost','root','','php_internship_demo') or die("Connection error".mysqli_connect_error());
$query=mysqli_query($conn,"select * from st_registration") or die("Error:".mysqli_error($conn));
if ($query) {
    echo "<h2>Admin Panel For Student Details<h2>";
    if (mysqli_num_rows($query)>0) {
        echo "<table border='1' width='70%' height='30%'>";
        echo "<tr><th>Sr. No</th><th>Name</th><th>Gender</th><th>Date Of Birth</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Area</th><th>Pincode</th><th>Blood Group</th><th>Action</th></tr>";
        $i=0;
        while ($row=mysqli_fetch_array($query)) {
            $i++;
            echo "<tr>
            <td> $i</td>
            <td> $row[st_name]</td>
            <td> $row[st_gender]</td>
            <td> $row[st_dob]</td>
            <td> $row[st_email]</td>
            <td> $row[st_mobile]</td>
            <td> $row[st_address]</td>
            <td> $row[st_area]</td>
            <td> $row[st_pincode]</td>
            <td> $row[st_bloodgroup]</td>
            <td> <a onClick=\"javascript: return confirm('Are You Sure you want to delete??');\"  href='admin_without_theme_delete.php?delete_id=$row[st_id]'>Delete</a></td>
                 </tr>";      
        }
        echo "</table>";
       
    }
    
}
?>