<?PHP
$con=mysqli_connect("localhost","root","","hackathon5")
or die("could not connect to database");
$sql="select * from pending_requests";
$result=mysqli_query($con,$sql)
or die("cant execute2".mysqli_error());?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="/Users/rajkiran/Downloads/bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<table class="table table-hover table-responsive table-bordered table-condensed table-striped">
<tr>
  <th>Institute name</th>
  <th>temp</th>
  <th>pH</th>
  <th>Conductivity</th>
  <th>Salinity</th>
  <th>Tss</th>
  <th>DO</th>
  <th>BOD</th>
  <th>Ammonical</th>
  <th>Nitrate</th>
  <th>Nitrate</th>
  <th>Nitrite</th>
  <th>Phosphate</th>
  <th>Silicate</th>
  <th>Iron</th>
  <th>Copper</th>
  <th>Zinc</th>
  <th>Lead</th>
</tr>
<tr>

<?php
while($row=mysqli_fetch_array($result)){
$_SESSION['iname']=$row['iname'];
$_SESSION['temp']=$row['temp'];
	$_SESSION['ph']=$row['ph'];
$_SESSION['conductivity']=$row['conductivity'];
$_SESSION['turbidity']=$row['turbidity'];
$_SESSION['salinity']=$row['salinity'];
$_SESSION['tss']=$row['tss'];
$_SESSION['do']=$row['do'];
$_SESSION['bod']=$row['bod'];
$_SESSION['ammonical']=$row['ammonical'];
$_SESSION['nitrate']=$row['nitrate'];
$_SESSION['nitrite']=$row['nitrite'];
$_SESSION['phosphate']=$row['phosphate'];
$_SESSION['silicate']=$row['silicate'];
$_SESSION['iron']=$row['iron'];
$_SESSION['copper']=$row['copper'];
$_SESSION['zinc']=$row['zinc'];
$_SESSION['lead']=$row['lead'];
echo "<td> ";
echo $_SESSION['iname'];
echo "</td>";
echo "<td> ";

echo "<td> ";
echo $_SESSION['temp'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['ph'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['conductivity'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['turbidity'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['salinity'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['tss'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['do'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['bod'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['ammonical'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['nitrate'];
echo "</td>";
echo "<td> ";
echo "<td> ";
echo $_SESSION['nitrite'];
echo "</td>";
echo "<td> ";
	echo "<td> ";
echo $_SESSION['phosphate'];
echo "</td>";
echo "<td> ";echo "<td> ";
echo $_SESSION['silicate'];
echo "</td>";
echo "<td> ";echo "<td> ";
echo $_SESSION['iron'];
echo "</td>";
echo "<td> ";echo "<td> ";
echo $_SESSION['copper'];
echo "</td>";
echo "<td> ";echo "<td> ";
echo $_SESSION['zinc'];
echo "</td>";
echo "<td> ";echo "<td> ";
echo $_SESSION['lead'];
echo "</td>";
echo "<td></tr> ";
}?>