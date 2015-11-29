
<html>
<head>
<title>BHARATH HOSPITALS</title>
<link href="main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
<nav>

  <div id="wrapper">

   <span style="padding-left:50px"><img src="bh.png" width="50" height="25">  <h1 style="color:blue">BHARATH HOSPITALS</h1></span>
<ul>
         <li><a href="index.html">Home</a></li>
	<li><a href="about.html">About</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="Facilities.html">Facilities</a></li>
        <li><a href="login editing.html">Login</a></li>
        <li><a href="register1.php">Register</a></li>
        <li><a href="contact.html">Contact Us</a></li>
<li><a href="kannada.html">Kannada</a></li>
</ul>
</nav>
</header>


<center><h2>BHARATH HOSPITAL WELCOMES YOU</h2>
<center><img src="bh.png" width="300" height="200">
<ul>

    <center><h1>EMPLOYEE LOGIN</h1>

<?php
session_start();
if(isset($_POST['submit']))
{
		$username = $_POST['username'];
		$password = $_POST['password'];	
	    $con=mysqli_connect("localhost","root","","login");
		$result = mysqli_query($con,"SELECT * FROM employee WHERE username='$username' AND password='$password'");
		if(mysqli_num_rows($result))
		{
			$res = mysqli_fetch_array($result);
			$_SESSION['username'] = $res['username'];
			header('Location: Login_emp.html');
		}
		else
		{
			echo "<center>";
			echo "Please enter the correct details.<br>";
			echo "</center>";
		}
}
?>
<html>
<body>
	<form name="form2" action="#" method="post">
	<table border='1'>
	<tr>
	<td>Username: </td>
	<td><input type="text" name="username"></td>
	</tr>
	<tr>
	<td>Password: </td>
	<td><input type="password" name="password"></td>
	</tr>
	<tr>
	<td colspan="2"><input type="submit" name="submit" value="login"></td>
	</tr>
	
	</table>
</body>
</html>
</ul>
</div>
</body>
</html>