<!doctype html>
<html>
<head>
<title>Bharath Hospitals</title>
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
<div class="aboutus">
<img src="appointment.png" width="350" height="250">
</div>
<div class="appointment">
<center><table border="1">


<br>
<h1>Welcome Dr.Malathi!!</h1>
</form><p>Here are your Surgery Date,time and details.Please Confirm with the Management in prior.Thankyou!</div>
</br>
<p1>
<br>
<center><a href="Login_doctor.html">Back</a>
<br>
<p1>
<br>


<?PHP

mysql_connect('localhost','root','');

mysql_select_db('MyDB');


$sql="SELECT * FROM MyDB WHERE doctor = 'DR.Malathi'";


$records=mysql_query($sql);

?>

<html>

<head>
<title>Employee Data</title>
</head>

<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Id</th>
<th>Patient_name</th>
<th>Age</th>
<th>Date</th>
<th>Time</th>
<th>Reason</th>
<th>Doctor</th>
<tr>

<?php

while($MyDB=mysql_fetch_assoc($records)){

echo "<tr>";

echo "<td>".$MyDB['id']."</td>";

echo "<td>".$MyDB['patient_name']."</td>";

echo "<td>".$MyDB['age']."</td>";

echo "<td>".$MyDB['date']."</td>";

echo "<td>".$MyDB['time']."</td>";

echo "<td>".$MyDB['reason']."</td>";

echo "<td>".$MyDB['doctor']."</td>";

echo "<tr>";

}//end while

?>

</table>
</body>
</html>










<br>


</div>

<br>
<br>
<br>
</body>
</html>