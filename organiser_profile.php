<?php
include("login.php");
$event_name=filter_input(INPUT_POST, 'event_name');
$event_city=filter_input(INPUT_POST, 'event_city');
$event_date=filter_input(INPUT_POST, 'event_date');
$ticket_price=filter_input(INPUT_POST, 'ticket_price');
$discri=filter_input(INPUT_POST, 'discri');

if(mysqli_connect_error())
					{
						die("Connection error: " . mysqli_connect_error());
					}
					else
					{
						$sql1="SELECT name from data3 WHERE email = $logged_mail";
						$result = mysqli_query($conn1, $sql1); 
						$ans=mysql_num_rows($sql21);
						if (mysql_num_rows($result)==1){
    						$row = mysql_fetch_array($result);
    						echo "name: " . $row['name'];
							}
							else{
							    echo "not found!";
					}

if(!empty($event_name))
{
	if(!empty($event_city))
	{
		if(!empty($event_date))
		{
			if(!empty($ticket_price))
			{
				if(!empty($discri))
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
						$sql="INSERT INTO events(event_name,event_city,event_date,ticket_price,discri) 
						values ('$event_name','$event_city','$event_date','$ticket_price','$discri')";
						$sql2 = mysqli_query($conn, $sql);
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