<?php
if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) 
	{
		if(empty($_POST[$key])) 
		{
			$message = ucwords($key) . " field is required";
			break;
		}
	}
	// /* Password Matching Validation */
	// if($_POST['password'] != $_POST['confirm_password']){ 
	// $message = 'Passwords should be same<br>'; 
	// }

	/* Email Validation */
	if(!isset($message)) {
	if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
	$message = "Invalid UserEmail";
	}
	}

	/* Validation to check if gender is selected */
	if(!isset($message)) {
	if(!isset($_POST["gender"])) {
	$message = " Gender field is required";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($message)) {
	if(!isset($_POST["terms"])) {
	$message = "Accept Terms and conditions before submit";
	}
	}

	if(!isset($message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO reg(first_name, last_name, DOB, contact, email, gender, nationality, occupation, home_addr) VALUES
		( '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . $_POST["dob"] . "', '" . $_POST["cnumber"] . "',  '" . $_POST["userEmail"] . "' ,  '" . $_POST["gender"] . "',  '" . $_POST["nationality"] . "', '" . $_POST["occ"] . "', '" . $_POST["home_add"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$message = "Problem in registration. Try Again!";	
		}
	}
}
?>
<html>
<head>
<title>PHP User Registration Form</title>
<style>
.message {color: #FF0000;font-weight: bold;text-align: center;width: 100%;padding: 10;}
body{width:610px;}
.demo-table {background:#FFDFDF;width: 100%;border-spacing: initial;margin: 20px 0px;word-break: break-word;table-layout: auto;line-height:1.8em;color:#333;}
.demo-table td {padding: 20px 15px 10px 15px;}
.demoInputBox {padding: 7px;border: #F0F0F0 1px solid;border-radius: 4px;}
.btnRegister {padding: 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer;}
</style>
</head>
<body>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<div class="message"><?php if(isset($message)) echo $message; ?></div>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td>DOB</td>
<td><input type="text" class="demoInputBox" name="dob" value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>"></td>
</tr>
<tr>
<td>Contact Number</td>
<td><input type="text" class="demoInputBox" name="cnumber" value="<?php if(isset($_POST['cnumber'])) echo $_POST['cnumber']; ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td>Gender</td>
<td>
	<input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
	<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
<tr>
<td>Nationality</td>
<td><input type="text" class="demoInputBox" name="nationality" value="<?php if(isset($_POST['nationality'])) echo $_POST['nationality']; ?>"></td>
</tr>
<tr>
<td>Occupation</td>
<td><input type="text" class="demoInputBox" name="occ" value="<?php if(isset($_POST['occ'])) echo $_POST['occ']; ?>"></td>
</tr>
<!-- copy start here -->
<tr>
<td>Home address</td>
<td><input type="text" class="demoInputBox" name="home_add" value="<?php if(isset($_POST['home_add'])) echo $_POST['home_add']; ?>"></td>
</tr>
<!-- to b changed.... name... $_POST[xxxxxxxxxx] -->
<!-- copy ends here -->
<tr>
<td></td>
<td><input type="checkbox" name="terms"> I accept Terms and Conditions</td>
</tr>
</table>
<div>
<input type="submit" name="submit" value="Register" class="btnRegister">
</div>
</form>
</body></html>