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

</table>
</body>
</html>