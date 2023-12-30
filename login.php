<?php
	//include('connection.php');
	
	$connection=mysqli_connect("localhost","root","","Marriage");
	session_start();

	$emailid = $_REQUEST['loginemailid'];
	$password = $_REQUEST['loginpassword'];
	echo "$emailid"."<br>";
	echo "$password"."<br>";
	$query="SELECT * FROM admin;";
	$login=mysqli_query($connection,$query);
	
	
	$fetch =mysqli_fetch_array($login);
	if(mysqli_num_rows($login)==1){
	 {
			$_SESSION['user'] = $fetch['username'];
			$_SESSION['password'] = $fetch['password'];
			header('location:login_data.php');
		}
	}else {
		echo "error occured please enter valid details";
		}
		
?>
