

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
                  
       <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
       <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
       <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <style type="text/css">
        .events{
            text-align: center;
        }

.login{

    align-content: right;
    
}

a.btn.Signup{
    align-content: right;
    position: absolute;
    z-index: 10;
    margin-top: 0.5%;
    margin-left:90%;
}

a.btn.login{
    align-content: right;
    position: absolute;
    z-index: 10;
    margin-top: 0.5%;
    margin-left:82%;
}

.modal{
 max-height:100%;
 overflow:hidden;
}

input[type="submit"]{
  width: ;
  margin-top: ;
}
.modal-close{
  position: absolute;
  top:10px;
  right:10px;
  padding:0;
 
}


    </style>

    <body >

        <!--hearder start-->
        <div class="header">
            
        <a href="#login" class="btn btn-large teal modal-trigger login">Login</a>
        <a href="#Signup" class="btn btn-large teal modal-trigger Signup">Signup</a>


            <!--headertitle start-->
            <div>
                <div class="titlename ">
                X-EVENT
            </div>

                <div class="subtitle white-text">Event solution at your doorstep!</div>
                
                

            </div>
            <!--headertitle end-->

            
<!--login-->
        <div id="login" class="modal">
          <h5 class="modal-close">&#10005;</h5>
          <div class="modal-content center">
            <h4>Login Form</h4>
            <br>

            <form action="#">

              <div class="input-field">
                <i class="material-icons prefix">user</i>
                <input type="text" id="username">
                <label for="name">Username</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" id="pass">
                <label for="pass">Password</label>
              </div>
              <br>

              <div class="left" style="margin-left:20px;">
                <input type="checkbox" id="check">
                <label for="check">Remember Me</label>
              </div>
              <br>
              
              <input type="submit" value="Login" class="btn btn-large">
              <input type="button" value="Sign up" class="btn btn-large">
              
            </form>
          </div>
        </div>

       

<!--Sign up-->
        <div id="Signup" class="modal">
          <h5 class="modal-close">&#10005;</h5>
          <div class="modal-content center">
            <h4>Signup Form</h4>
            <br>

            <form action="index.php" method="POST">

              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" id="name" name="name">
                <label for="name">First Name  Last Name</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="text" id="email" name="email">
                <label for="pass">Email id</label>
              </div>
              <br>

              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="text" id="username" name="username">
                <label for="pass">Set username</label>
              </div>
             
              <br>

              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" id="password" name="password">
                <label for="pass">Set Password</label>
              </div>
             
              <br>
              
              <input type="submit" value="Submit" class="btn btn-large" href=""> 
            </form>
          </div>
        </div>
<!--Sign up completes-->

        

             <!--home-poster start--> 
            <div class="home_poster">
                <!--slider start-->
                <div class="slider">
                    <ul class="slides">
                      <li>
                        <img src="images/1.jpg"> <!-- random image -->
                        <div class="caption center-align">
                          <h3>This is our big Tagline!</h3>
                          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                      </li>
                      <li>
                        <img src="images/2.jpg"> <!-- random image -->
                        <div class="caption left-align">
                          <h3>Left Aligned Caption</h3>
                          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                      </li>
                      <li>
                        <img src="images/3.jpg"> <!-- random image -->
                        <div class="caption right-align">
                          <h3>Right Aligned Caption</h3>
                          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                      </li>
                      <li>
                        <img src="images/4.jpg"> <!-- random image -->
                        <div class="caption center-align">
                          <h3>This is our big Tagline!</h3>
                          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                      </li>
                    </ul>
                </div>
                <!--slider end-->
            </div>
             <!--home-poster end--> 

                <!--navigation start-->
                <div class="fixed_navbar" id="myfixed_navbar">
                <nav>
                    <div class="nav-wrapper">
                        <a href="#!" class="brand-logo red-text titlename">X-Event</a>
                        <ul class="right hide-on-med-and-down">
                            <li><a class="navtitle" href="#About_us">About Us</a></li>
        
                            <li><a class="navtitle" href="#event">Events</a></li>
                            <li><a class="navtitle" href="#update">Updates</a></li>
                            
                            <li><a class="navtitle" href="badges.html">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
                </div>
            
            <!--navigation end-->
        
        </div>
        <!--header end-->


    
      




      <div class="container">

        <!--aboutteam start-->
        <div class="about_team" id="About_us">
            <div class="title">About Us</div>
                <p class="flow-text center">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>


            <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="images/1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="images/2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Left Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="images/3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                      <h3>Right Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="images/4.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                </ul>
            </div>      
        </div>
        <!--aboutteam end-->
    </div>
    



        <div class="container">
        <!--events-activity start-->
        <div class="events_activity" id="event">
            <div class="title">Events & activities</div>
            <p class="flow-text center">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <!--event Tabs slider starts-->
            <ul id="tabs-swipe-demo" class="tabs events">
                <li class="tab col s4"><a href="#test-swipe-1">Completed Events</a></li>
                <li class="tab col s4"><a class="active" href="#test-swipe-2">Ongoing Events</a></li>
                <li class="tab col s4"><a href="#test-swipe-3">Upcoming Events</a></li>
            </ul>
            <div class="events">
            <div id="test-swipe-1"><img src="images/sub.jpg" class="image"></div>
            <div id="test-swipe-2"><img src="images/submarine.jpg" class="image"></div>
            <div id="test-swipe-3"><img src="images/sub1.jpg" class="image"></div>
            </div>
            <!--event Tabs slider starts-->                 
        </div>
        <!--events-activity end-->

        
      

        <!--updates start-->
        <div class="updates" id="update">
            <div class="title">Latest Updates</div>
            <p class="flow-text center">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <br>
            <!--update slider start-->
            <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="images/1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="images/2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Left Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="images/3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                      <h3>Right Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="images/4.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                </ul>
            </div>
            <!--update slider end-->
        </div>
        <!--updates end-->

        <!--sponsors start-->
        <div class="sponsors">
            <div class="sponsor_tag"><img src="logo/sponsor.png"></div>
            <!--sponsor cards start-->
            <div class="row">
                <!--sponsor-1 start-->
                <div class="col s6">
                    <!--card horizontal start-->
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="#">
                        </div>
                        <!--card stackes start-->
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                        <!--card stackes end-->
                    </div>
                    <!--card horizontal end-->
                </div>
                <!--sponsor-1 end-->
             
                <!--sponsor-2 start-->
                <div class="col s6">
                    <!--card horizontal start-->
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="#">
                        </div>
                        <!--card stacked start-->
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                        <!--card stacked end-->
                    </div>
                    <!--card horizontal end-->
                </div>
                <!--sponsor-2 end-->
                
                <!--sponsor-3 start-->
                <div class="col s6">
                    <!--card horizontal start-->
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="#">
                        </div>
                        <!--card stacked start-->
                          <div class="card-stacked">
                            <div class="card-content">
                              <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                              <a href="#">This is a link</a>
                            </div>
                          </div>
                          <!--card stacked end-->
                    </div>
                    <!--card horizontal end-->
                </div>
                <!--sponsor 3 ends-->

                <!--sponsor 4 start-->
                <div class="col s6">
                    <!--card horizontal start-->
                    <div class="card horizontal">
                        <div class="card-image">
                           <img src="#">
                        </div>
                        <!--card stacked start--> 
                        <div class="card-stacked">
                            <div class="card-content">
                              <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                              <a href="#">This is a link</a>
                            </div>
                        </div>
                        <!--card stacked end-->
                    </div>
                    <!--card horizontal ends-->
                </div>
                <!--sponsor 4 ends-->
            </div>
             <!--sponsor cards end-->
        </div>
        <!--sponsors end-->

        <!--details start-->
        <div class="details">
            
        </div>
        <!--details end-->

        <!--form start-->
        <div class="form">
            <div class="title">Contact Us/Give suggestions and review</div>
            <form class="col s12" bgcolor="black">
                <!--fname lname start-->
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="First Name" id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <!--fname lname ends-->
                     
                <!--email start-->    
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <!--email ends-->
                <!--textarea start-->
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Enetr Your message</label>
                    </div>
                </div>
                <!--textarea ends-->
                <!--form button start-->
                <div class="form_btn">
                    <div class="btn large">submit</div>
                    <div class="btn large">subscribe</div>
                    <div class="btn large">join us</div>
                </div>
                <!--form button ends-->
             </form>
            
        </div>
        <!--form end-->
      </div>

      <!--container ends-->

        <!--Floating button start-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">headset_mic</i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">help</i></a></li>
                
            </ul>
        </div>
        <!--Floating button ends-->
             
        <br>

        <!--footer start-->
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © Warriors Copyright
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        <!--footer end-->
    
      

         

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"> </script>
      <script type="text/javascript"> 

        //sign up
        $(document).ready(function(){
        $('#Signup').modal();
             });


        // login form
        $(document).ready(function(){
        $('#login').modal();
             });

        
        //slider start
        $(document).ready(function(){
          $('.slider').slider();}
          );

        //floating action button
         $(document).ready(function(){
         $('.fixed-action-btn').floatingActionButton();
         });
        
         //tabs slider
        $(document).ready(function(){
        $('.tabs').tabs();
        });
       
        </script>
        <script type="text/javascript">
            // When the user scrolls the page, execute myFunction 
            window.onscroll = function() {myFunction()};

            // Get the header
            var fixed_navbar = document.getElementById("myfixed_navbar");

            // Get the offset position of the navbar
            var sticky = fixed_navbar.offsetTop;

            // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() 
            {
                if (window.pageYOffset > sticky) 
                {
                    fixed_navbar.classList.add("sticky");
                }
                else 
                {
                    fixed_navbar.classList.remove("sticky");
                }
            }
        </script>
    </body>
  </html>

<?php
$name=$_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if (!empty($name) || !empty($username) || !empty($password) || !empty($email)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "data_set";
    mysql_connect($host, $dbUsername, $dbPassword);
    mysql_select_db($dbname);
    //create connection
//    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
   //  $SELECT = "SELECT email From data2 Where email = ? Limit 1";
     $INSERT = "INSERT INTO `data2`(`name`, `username`, `email`, `password`) VALUES($name,$username,$password,$email);
     $sql=mysql_query($select);
     //Prepare statement
     if($query)
        {
            echo "data insetred successfully";
        }
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss",$name, $username, $password, $gender, $email);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    } 
} else {
 echo "All field are required";
 die();
}?>
<script type="text/javascript">alert(<?php
echo $_POST['username'];
?>)</script>
