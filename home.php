<?php
$ty=filter_input(INPUT_POST, 'ty');
$name=filter_input(INPUT_POST, 'name');
$email=filter_input(INPUT_POST, 'email');
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');

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
						$sql="INSERT INTO data3(ty,name,email,username,password) 
						values ('$ty','$name','$email','$username','$password')";
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