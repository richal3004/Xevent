<?php
$fname=filter_input(INPUT_POST, 'fname');
$lname=filter_input(INPUT_POST, 'lname');
$email=filter_input(INPUT_POST, 'email');
$message=filter_input(INPUT_POST, 'message');
//$password=filter_input(INPUT_POST, 'password');

if(!empty($fname))
{
	if(!empty($lname))
	{
		if(!empty($email))
		{
			if(!empty($message))
			{
					//$host="locolhost";
					//$dbusername="root";
					//$dbpassword="";
					//$dbname="data_set";
					//$conn = new mysqli($servername, $username, $password);
					$conn = mysqli_connect('localhost', 'root', '', 'data_set');
					if(mysqli_connect_error())
					{
						die("Connection error: " . mysqli_connect_error());
					}
					else
					{
						$sql="INSERT INTO feedback(fname,lname,email,message) 
						values ('$fname','$lname','$email','$message')";
						$sql2 = mysqli_query($conn, $sql);
						
						header( 'Location: http://localhost:8080/X_event/index.html' );
					}
			}
		}
	}
}
?>