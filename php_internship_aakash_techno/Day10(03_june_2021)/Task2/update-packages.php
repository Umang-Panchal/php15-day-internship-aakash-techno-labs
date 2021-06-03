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
            echo "<script>alert('Record Updated Successfully');window.location='manage-packages.php'</script>";
        }
    } 
    }
    else {
        header('Location:dashboard.php');
    }
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    
    <style>
        *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
    </style>
</head>
<body>

  <form  method="post">
  
    <h1>Sign Up</h1>
    
    <fieldset>
      <label for="name">Name:</label>
      <input type="text" placeholder="Enter Your Name" value="<?php echo $result['st_name'] ?>" required name="name">

      <label>Gender:</label>
      <input type="radio" name="gender1" value="male" <?php if($result['st_gender']=='male'){echo "checked";}?> required> Male
      <input type="radio" name="gender1" value="female" <?php if($result['st_gender']=='female'){echo "checked";}?> required> Female <br> <br>
      
      <label>Date:</label>
      <input type="date"  name="dob" value="<?php echo $result['st_dob'] ?>" required>

      <label>Email:</label>
      <input type="email" placeholder="Enter Your Email ID" value="<?php echo $result['st_email'] ?>" required name="email">

      <label>Phone:</label>
      <input type="number" placeholder="Enter Your Phone Number" value="<?php echo $result['st_mobile'] ?>" required name="phone">

      <label>Address:</label>
      <textarea name="address" cols="30" rows="5" placeholder="Enter Your Address"  required><?php echo $result['st_address'] ?></textarea>

        <label>Area:</label>
        <select name="state" required>
            <option value="" >select</option>
            <option value="Gujarat" <?php if($result['st_area']=='Gujarat'){echo "selected";}?>>Gujarat</option>
            <option value="Maharastra" <?php if($result['st_area']=='Maharastra'){echo "selected";}?>>Maharastra</option>
            <option value="Goa" <?php if($result['st_area']=='Goa'){echo "selected";}?>>Goa</option>
            <option value="Rajsthan" <?php if($result['st_area']=='Rajsthan'){echo "selected";}?>>Rajsthan</option>
        </select>

        <label>Pincode:</label>
      <input type="number" placeholder="Enter Your Pin code" value="<?php echo $result['st_pincode'] ?>" required name="pincode">

      <label>Bloodgroup:</label>
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
      
     
    </fieldset>
    
    
    <button type="submit" name="submit">Sign Up</button>
  </form>
  
</body>
</html>