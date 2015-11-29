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
<img src="room.jpg" width="200" height="200">
</div>
<div class="appointment">
<center><table border ="1">


<center><a href="Login_emp.html">Back</a>
<?PHP

mysql_connect('localhost','root','');

mysql_select_db('employee');


$sql="SELECT * FROM room";


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
<th>Nurse Name</th>
<th>Patient Id</th>
<th>Patient Name</th>
<th>Room</th>
<th>Type</th>

<tr>

<?php

while($room=mysql_fetch_assoc($records)){

echo "<tr>";

echo "<td>".$room['nurse_id']."</td>";

echo "<td>".$room['nurse_name']."</td>";

echo "<td>".$room['patient_id']."</td>";

echo "<td>".$room['patient_name']."</td>";

echo "<td>".$room['patient_room']."</td>";

echo "<td>".$room['room_type']."</td>";


echo "<tr>";

}//end while

?>

</form></p></div>
</div>

</body>
</html>