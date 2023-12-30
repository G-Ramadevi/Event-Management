
<?php
echo "hi";
$connection=mysqli_connect("localhost","root","","Marriage");
if($connection)
{
	echo "connection established";
}
else
{
	echo "error".mysqli_error($connection);
}
$name=mysqli_real_escape_string($connection,$_POST['name']);
$email=mysqli_real_escape_string($connection,$_POST['mail']);
$num=mysqli_real_escape_string($connection,$_POST['number']);
$type=mysqli_real_escape_string($connection,$_POST['type']);
$address=mysqli_real_escape_string($connection,$_POST['address']);
/*$query="CREATE TABLE marriage(NAME VARCHAR(20),EMAIL VARCHAR(35),NUMBER VARCHAR(15),ADDRESS VARCHAR(40));";
if(mysqli_query($connection,$query))
{
	echo "table created";
}
else
{
	echo "error:".mysqli_error($connection);
}*/
echo $email;
$query="INSERT INTO event VALUES('$name','$email','$num','$type','$address');";
if(mysqli_query($connection,$query))
{
	echo "record inserted";
}
else
{
	echo "error:".mysqli_error($connection);
}
/*	
$query="select * from marriage;";
$check=mysqli_query($connection,$query);
if(mysqli_num_rows($check))
{	    	
    while($row=mysqli_fetch_assoc($check))
    {
    	echo "";
    }
}
else{
	echo "table is empty";
}*/
?>   	
