<?php
$fname=filter_input(INPUT_POST, 'fname');
$lname=filter_input(INPUT_POST, 'lname');
$email=filter_input(INPUT_POST, 'email');
$message=filter_input(INPUT_POST, 'message');
//$password=filter_input(INPUT_POST, 'password');

if(!empty($ty))
{
	if(!empty($name))
	{
		if(!empty($email))
		{
			if(!empty($username))
			{
				if(!empty($password))
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
						if($ty=='Organizer')
						{
							$sql="INSERT INTO events(organizer) 
						values ('$name')";
						$sql2 = mysqli_query($conn, $sql);
						}
						if ($sql2) 
						{
	    				echo "<script>alert('Successfully Registered. You can login now');</script>";
						}
						header( 'Location: http://localhost:8080/X_event/index.html' );
					}
				}
			}
		}
	}
}
?>