<?php
//include "connection.php";
$connection=mysqli_connect("localhost","root","","Marriage");
if($connection)
{
	echo "connection established";
}
else
{
	echo "error".mysqli_error($connection);
}
$query="SELECT DISTINCT * FROM event;";
$result=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Data</title>
</head>
<body>
<?php
if (mysqli_num_rows($result)>0)
{
?>
<center>
<table border="2">
<caption> <b>Information Details</b></caption>
	<tr bgcolor="blue">
	
	<td>Name</td>
	<td>Email</td>
	<td>Phone_Number</td>
	<td>Type_of_Wedding</td>
	<td>Address</td>
	
	</tr>
	<?php
	$i=0;
	while($row=mysqli_fetch_array($result))
	{
	?>
	<tr bgcolor="pink">
	
	<td><?php echo $row["Name"];?></td>
	<td><?php echo $row["email"];?></td>
	<td><?php echo $row["phone_no"];?></td>
	<td><?php echo $row["type"];?></td>
	<td><?php echo $row["Address"];?></td>
	<!--<td><?php echo $row["donor_number"];?></td>
	<td><?php echo $row["donar_address"];?></td>-->
	</tr>
	<?php
	$i++;
	}
	?>
</table>
<br>
<br>

</center>
<?php
$query="SELECT COUNT( DISTINCT Name) FROM event;";
$count=mysqli_query($connection,$query);
	if(mysqli_num_rows($count)>0)
	{
		while($row=mysqli_fetch_array($count))	
		{
		echo "Number of registers:".$row['COUNT( DISTINCT Name)'];
		}
	}
}
else
{
echo "NO result found";
?>
<br>
<br>

<?php

}
?>
</body>
</html>

