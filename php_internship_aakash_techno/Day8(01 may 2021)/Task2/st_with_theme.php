<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<?php
extract($_POST);
if (isset($submit)) {
    $conn=mysqli_connect('localhost','root','','php_internship_demo') or die("connection error".mysqli_connect_error());
    $query=mysqli_query($conn,"insert into st_registration(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_area,st_pincode,st_bloodgroup,st_psw) values('{$name}','{$gender1}','{$dob}','{$email}','{$phone}','{$address}','{$state}','{$pincode}','{$blood}','{$password}')");
    if ($query) {
        echo "Registered Successfully!!!";
        echo "<div class='container'>";
        echo "<h2 align='center'>Your registration Details</h2><br>";
        $lastinsertedid=mysqli_insert_id($conn);
        $query1=mysqli_query($conn,"Select * from st_registration where st_id='{$lastinsertedid}'");
        if (mysqli_num_rows($query1)>0) {
            echo "<table align='center' width='80%' height='80%' class='table-bordered'>";
            while ($row=mysqli_fetch_array($query1)) {
                
                echo "<tr><td>Name:</td><td> $row[st_name]</td></tr>
                <tr><td>Gender:</td><td> $row[st_gender]</td></tr>
                <tr><td>Date Of Birth: </td><td>$row[st_dob]</td></tr>
                <tr><td>Email:</td><td> $row[st_email]</td></tr>
                <tr><td>Phone Number:</td><td> $row[st_mobile]</td></tr>
                <tr><td>Address:</td><td> $row[st_address]</td></tr>
                <tr><td>Area:</td><td> $row[st_area]</td></tr>
                <tr><td>Pincode:</td><td>  $row[st_pincode]</td></tr>
                <tr><td>Bloodgroup:</td><td>$row[st_bloodgroup]</td></tr>";
                
            }
            echo "</table>";
        }
    }
    else {
        echo "Nothing Inserted!!";
    }
}
else {
    header('Location:st_with_theme.html');
}
?>
</div>