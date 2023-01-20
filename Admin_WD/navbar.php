<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	  <link rel="stylesheet" type="text/css" href="style.css">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   
</head>
<body style="width:1280px">

	    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active" style="font-family:Cursive">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php" style="font-family:Cursive">HOME</a></li>
            <li><a href="books.php" style="font-family:Cursive">BOOKS</a></li>
            <li><a href="feedback.php" style="font-family:Cursive">FEEDBACK</a></li>
          </ul>
          <?php
            if(isset($_SESSION['login_user']))
            {?>
                <ul class="nav navbar-nav">
                  
                  <li><a href="profile.php" style="font-family:Cursive">PROFILE</a></li>
                
                  <li><a href="student.php" style="font-family:Cursive">
                    STUDENT-INFORMATION
                  </a></li>
                  <li><a href="fine.php" style="font-family:Cursive">FINES</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="profile.php">
                    <div style="color: white">

                      <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/p.jpg'>";

                        echo " ".$_SESSION['login_user']; 
                      ?>
                    </div>
                  </a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" style="font-family:Cursive"> LOGOUT</span></a></li>
                  
                </ul>
              <?php
            }
            else
            {   ?>
              <ul class="nav navbar-nav navbar-right">

                <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in" style="font-family:Cursive"> LOGIN</span></a></li>
                
                <li><a href="registration.php"><span class="glyphicon glyphicon-user" style="font-family:Cursive"> SIGN-UP</span></a></li>
              </ul>
                <?php
            }

          ?>

      </div>
    </nav>



</body>
</html>