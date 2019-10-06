<?php
   include("config.php");
   //session_start();
if (isset($_POST['submit'])) 
{
if(isset($_POST['radio']))
{
echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
}
else{ echo "<span>Please choose any radio button.</span>";}
}
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $ty = mysqli_real_escape_string($db,$_POST['ty']);
     
      $sql = "SELECT * FROM data3 WHERE email = '$myusername' and password = '$mypassword' and ty = '$ty'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
      	 $logged_mail = $myusername;
    	 $lagged_pass = $mypassword;
         if($ty == 'User')
         header("location: user.html");
     	 else
     	 	header("location: event.html");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>