<?php
if (isset($_GET['uid'])) {
$st_id=$_GET['uid'];
$conn=mysqli_connect('localhost','root','','php_internship_demo') or die("Connection error".mysqli_connect_error());
$query=mysqli_query($conn,"select * from st_registration where st_id='{$st_id}'") or die("Error:".mysqli_error($conn));
$result=mysqli_fetch_array($query);
extract($_POST);
if (isset($submit)) {
    $query1=mysqli_query($conn,"update st_registration set st_name='{$name}',st_gender='{$gender1}',st_dob='{$dob}',st_email='{$email}',st_mobile='{$phone}',st_address='{$address}',st_area='{$state}',st_pincode='{$pincode}',st_bloodgroup='{$blood}' where st_id='{$st_id}'") or die("Error:".mysqli_error($conn));
    if ($query1) {
        echo "<script>alert('Record Updated Successfully');window.location='admin_without_theme.php'</script>";
    }
} 
}
else {
    header('Location:admin_without_theme.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
</head>

<body>

    <table border="2">
        <form  method="post">
        <tr>
            <td colspan="2">
                <h2 align="center">Update Details</h2>
            </td>
        </tr>
        <tr>
            <td>
                Name:
            </td>
            <td>
                <input type="text" name="name" value="<?php echo $result['st_name'] ?>" placeholder="Enter Your Name" required>
            </td>
        </tr>
        <tr>
            <td>
                Gender:
            </td>
            <td>
                <input type="radio" name="gender1"  value="male" <?php if($result['st_gender']=='male'){echo "checked";}?>  required> Male
                <input type="radio" name="gender1" value="female" <?php if($result['st_gender']=='female'){echo "checked";}?> required> Female
            </td>
        </tr>
        <tr>
            <td>
                Date Of Birth:
            </td>
            <td>
                <input type="date" name="dob" value="<?php echo $result['st_dob'] ?>"  required>
            </td>
        </tr>
        <tr>
            <td>
                Email:
            </td>
            <td>
                <input type="email" name="email" placeholder="Enter Your Email ID" value="<?php echo $result['st_email'] ?>"  required>
            </td>
        </tr>
        <tr>
            <td>
                Phone Number:
            </td>
            <td>
                <input type="number" name="phone" maxlength="10" value="<?php echo $result['st_mobile'] ?>"  placeholder="Enter Your Phone Number" required>
            </td>
        </tr>
        <tr>
            <td>
                Address:
            </td>
            <td>
                <textarea name="address" cols="30" rows="5" placeholder="Enter Your Address"   required><?php echo $result['st_address'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                Area:
            </td>
            <td>
                <select name="state" required>
                    <option value="">select</option>
                    <option value="Gujarat" <?php if($result['st_area']=='Gujarat'){echo "selected";}?>>Gujarat</option>
                    <option value="Maharastra" <?php if($result['st_area']=='Maharastra'){echo "selected";}?>>Maharastra</option>
                    <option value="Goa" <?php if($result['st_area']=='Goa'){echo "selected";}?>>Goa</option>
                    <option value="Rajsthan" <?php if($result['st_area']=='Rajsthan'){echo "selected";}?>>Rajsthan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                Pincode:
            </td>
            <td>
                <input type="number" name="pincode" maxlength="6" value="<?php echo $result['st_pincode'] ?>"  placeholder="Enter Your Pincode" required>
            </td>
        </tr>
        <tr>
            <td>
                Bloodgroup:
            </td>
            <td>
                <select name="blood" required>
                    <option value="">select</option>
                    <option value="a_positive" <?php if($result['st_bloodgroup']=='a_positive'){echo "selected";}?>>A+</option>
                    <option value="a_negative" <?php if($result['st_bloodgroup']=='a_negative'){echo "selected";}?>>A-</option>
                    <option value="b_positive" <?php if($result['st_bloodgroup']=='b_positive'){echo "selected";}?>>B+</option>
                    <option value="b_negative" <?php if($result['st_bloodgroup']=='b_negative'){echo "selected";}?>>B-</option>
                    <option value="ab_positive" <?php if($result['st_bloodgroup']=='ab_positive'){echo "selected";}?>>AB+</option>
                    <option value="ab_negative" <?php if($result['st_bloodgroup']=='ab_negative'){echo "selected";}?>>AB-</option>
                    <option value="o_positive" <?php if($result['st_bloodgroup']=='o_positive'){echo "selected";}?>>O+</option>
                    <option value="o_negative" <?php if($result['st_bloodgroup']=='o_negative'){echo "selected";}?>>O-</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <input type="submit" name="submit" value="Submit">
                
            </td>
        </tr>
    </form>
    </table>
</body>

</html>