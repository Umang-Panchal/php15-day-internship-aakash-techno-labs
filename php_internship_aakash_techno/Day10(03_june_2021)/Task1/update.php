<?php
if (isset($_GET['uid'])) {
$uid=$_GET['uid'];
$conn=mysqli_connect('localhost','root','','php_internship_demo') or die("Connection error".mysqli_connect_error());
$query=mysqli_query($conn,"select * from demo where u_id='{$uid}'") or die("Error:".mysqli_error($conn));
$result=mysqli_fetch_array($query);
if ($_POST) {
   $name=$_POST['fname'];
   $phone=$_POST['phone'];
   $dept=$_POST['dept'];
   $query1=mysqli_query($conn,"update demo set name='{$name}',phone='{$phone}',dept='{$dept}' where u_id='{$uid}'") or die("Error:".mysqli_error($conn));
   if ($query1) {
       echo "<script>alert('Record Updated Successfully');window.location='select.php'</script>";
   }
}
}
else {
    header('Location:select.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="post">
        <h2>Update Details</h2>
        <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="fname" value="<?php  echo $result['name'] ?>"></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="number" name="phone" value="<?php  echo $result['phone'] ?>"></td>
        </tr>
        <tr>
            <td>Department:</td>
            <td><select name="dept">
                <option value="IT" <?php if($result['dept']=='IT'){echo 'selected="selected"';} ?> >IT</option>
                <option value="Civil" <?php if($result['dept']=='Civil'){echo 'selected="selected"';} ?> >Civil</option>
            </select></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
        </table>
    </form>
</body>
</html>