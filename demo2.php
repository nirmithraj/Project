<?PHP

mysql_connect('localhost','root','');

mysql_select_db('MyDB');


$sql="SELECT * FROM MyDB WHERE doctor = 'DR.Albert'";


$records=mysql_query($sql);

?>

<html>

<head>
<title>Employee Data</title>
</head>

<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>id</th>
<th>patient_name</th>
<th>age</th>
<th>date</th>
<th>time</th>
<th>reason</th>
<th>doctor</th>
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


